import { removeSort, makeSelects, makeBtn } from "./html.js";
import { getJson } from './getJson.js';
import { include } from "../sorts/include.js";
import { exclude } from "../sorts/exclude.js";
import { sort } from "../sorts/sort.js";

export { initSort };

const sorts = {
   include,
   exclude,
   sort,
};
const excludeKey = {}; // This object need in order not to do O(n^2) cycle
const dataQueue = [];
const ownProperties = {};

function initSort(ownPropertiesValues) {
   const tepesSort = document.querySelectorAll('.type-sort__checkbox');
   tepesSort.forEach(item => {
      excludeKey[item.id] = {};
      excludeKey[item.id]['createExcludeKeys'] = true;
      item.addEventListener('change', function (e) {
         const sortType = e.target.id;
         if (item.checked) {
            makeSelects(e.target.dataset.key, e.target.dataset.value, sortType);
            addSelects(sortType, 0, ownPropertiesValues);
         } else {
            const sortItem = document.querySelector(`[data-sort-body="${sortType}"]`);
            removeSort(sortItem);
            excludeKey[item.id]['createExcludeKeys'] = true
         }
      });
   });
}

function addSelects(sortType, numberId, ownPropertiesValues) {
   const selects = document.querySelectorAll('[data-type="key"]');
   selects.forEach(select => {

      if (select.dataset.sort === sortType && select.dataset.id.split('-')[1] === `${sortType}_${numberId}`) {
         addKeyToSelect(select, ownPropertiesValues);
      }
   });
}

function addKeyToSelect(select, ownPropertiesValues) {
   getJson().then(data => {
      const keys = Object.keys(data.data[0]);
      keys.forEach((key) => {
         if (excludeKey[select.dataset.sort]['createExcludeKeys']) {
            excludeKey[select.dataset.sort][key] = true;
         }
         if (excludeKey[select.dataset.sort][key] == true) {
            let option = new Option;
            option.value = option.text = key;
            select.appendChild(option);
         }
      })
      excludeKey[select.dataset.sort]['createExcludeKeys'] = false;
      addValueToSelect(data.data, select, ownPropertiesValues);
      removeBtn(select.dataset.sort);
   })
}

function addValueToSelect(jsonData, selectKey, ownPropertiesValues) {
   const selectValue = document.querySelector(`[data-id="value-${selectKey.dataset.id.split('-')[1]}"]`);
   selectKey.addEventListener('change', function () {
      selectValue.querySelectorAll('option').forEach(option => option.remove()); //Cleaning the List
      const key = selectKey.value;
      let values;
      if (ownProperties?.[selectKey.dataset.sort] != undefined) {
         values = ownProperties[selectKey.dataset.sort];
      } else if (ownPropertiesValues?.[selectKey.dataset.sort] == undefined) {
         values = jsonData.map(item => item[key])
      }
      else {
         ownProperties[selectKey.dataset.sort] = ownPropertiesValues[selectKey.dataset.sort];
         values = ownPropertiesValues[selectKey.dataset.sort];
      }
      typeof values[0] == 'string' ? values.sort() : values.sort((a, b) => a - b);
      const unicValues = new Set(values);
      const option = new Option;
      option.value = "select-value";
      option.text = "Select value";
      selectValue.appendChild(option);
      unicValues.forEach((value) => {
         const option = new Option;
         option.value = option.text = value;
         selectValue.appendChild(option);
      })
      if (selectKey.querySelector('[value="select_key"]')) selectKey.querySelector('[value="select_key"]').remove();
   });
   if (selectValue) actionsSelectValue(selectValue, selectKey, jsonData); // Тут слушать изменения и передавать ключи в makeSortFromKey
}

function actionsSelectValue(selectValue, selectKey, data) {
   selectValue.addEventListener('change', function (e) {
      const selectsBody = document.querySelector(`[data-sort-body="${selectValue.dataset.sort}"]`)
      const isBtnEnabled = document.getElementById(selectsBody.dataset.sortBody).dataset.btn;
      const selectsKey = selectsBody.querySelectorAll(`[data-type="key"]`);
      const lastSelectKey = selectsKey[selectsKey.length - 1];
      const currentSelectKeyId = getClossestSelectId(e.target.dataset.id, 'key');
      const currentSelectKey = document.querySelector(`[data-id="${currentSelectKeyId}"]`);

      if (isBtnEnabled == 'true' && lastSelectKey.length > 1 && selectKey == lastSelectKey && lastSelectKey.value) {
         addMorebtn(selectsBody, lastSelectKey, true, selectsKey);
      } else if (selectKey == lastSelectKey) {
         addMorebtn(selectsBody, lastSelectKey, false, selectsKey);
      }
      if (selectsBody.querySelector('[value="select-value"]')) selectsBody.querySelector('[value="select-value"]').remove();
      makeSort(selectValue.dataset.id, selectValue.dataset.sort, currentSelectKey.value, selectValue.value, data);
   });
}

function getClossestSelectId(id, type) {
   let currentID = id.split('-');
   currentID[0] = type;
   return currentID.join('-');
}

function makeSort(id, sortType, key, value, data) {

   if (dataQueue.length == 0) { // No data in the queue
      const outputData = sorts[sortType](key, value, data);
      writeDataQueue(id, sortType, key, value, data, outputData);
   } else if (dataQueue.find(item => item.id == id) == undefined) { // dataQueue has some data but not this
      const outputData = sorts[sortType](key, value, dataQueue[dataQueue.length - 1].outputData);
      writeDataQueue(id, sortType, key, value, dataQueue[dataQueue.length - 1].outputData, outputData);
   } else { // Data is in dataQueue
      if (dataQueue[dataQueue.length - 1].id == id) { // change in last select in the queue
         const outputData = sorts[sortType](key, value, dataQueue[dataQueue.length - 1].incomingData);
         dataQueue[dataQueue.length - 1].key = key;
         dataQueue[dataQueue.length - 1].outputData = outputData;
         dataQueue[dataQueue.length - 1].value = value;
      } else {
         let i = dataQueue.findIndex(item => item.id == id);
         let firstI = i;
         for (i; i < dataQueue.length; i++) {
            if (firstI == i) dataQueue[i].value = value;
            const outputData = sorts[dataQueue[i].sort](dataQueue[i].key, dataQueue[i].value, dataQueue[i].incomingData);
            dataQueue[i].outputData = outputData;
            if (i != dataQueue.length - 1) dataQueue[i + 1].incomingData = outputData;
         }
      }
   }
   writeResult(dataQueue);
}

function writeResult(dataQueue) {
   dataQueue.length == 0 ? document.querySelector('.sort__output-data').innerHTML = '' : document.querySelector('.sort__output-data').innerHTML = JSON.stringify(dataQueue[dataQueue.length - 1].outputData);
}

function writeDataQueue(id, sort, key, value, incomingData, outputData) {
   dataQueue.push({
      id,
      sort,
      key,
      value,
      incomingData,
      outputData,
   }
   );
}

function addMorebtn(selectsBody, selectKey, addBtnActive = true, selectsKey) {
   const btn = selectsBody.querySelector('[data-type="btnBody"]');
   if (!btn && selectsKey[selectsKey.length - 1] == selectKey) {
      makeBtn(selectsBody, selectsBody.dataset.sortBody);
   } else if (btn && selectsKey[selectsKey.length - 1] == selectKey) {
      btn.remove();
      makeBtn(selectsBody, selectsBody.dataset.sortBody);
   }
   const addBtn = selectsBody.querySelector('[data-action="add"]');
   const removeBtn = selectsBody.querySelector('[data-action="remove"]');
   addBtnActive ? true : addBtn.remove();
   addBtn.addEventListener('click', btnAddAction);
   removeBtn.addEventListener('click', removeAddAction);
}

function btnAddAction(e) {
   const btnBody = e.target.closest('[data-type="btnBody"]');
   const sortType = e.target.dataset.sortType;
   const sortBody = document.querySelector(`[data-sort-body="${sortType}"]`);
   const allSelectsKey = sortBody.querySelectorAll('[data-type="key"]');
   const sortCheckbox = document.getElementById(sortType);
   const selectKey = allSelectsKey[allSelectsKey.length - 1];

   let idNumber = allSelectsKey[allSelectsKey.length - 1].dataset.id.split('_')[1];
   idNumber = +idNumber;
   idNumber++;


   excludeKey[selectKey.dataset.sort][selectKey.value] = false;
   makeSelects(sortCheckbox.dataset.key, sortCheckbox.dataset.value, sortCheckbox.id, idNumber);
   addSelects(sortCheckbox.id, idNumber);
   selectKey.disabled = true;
   btnBody.remove();
}

function makeSortAfterRemove(index, data) {
   if (dataQueue.length == 0) return writeResult(dataQueue);
   for (let i = index; i < dataQueue.length; i++) {
      i == index ? dataQueue[i].incomingData = data : dataQueue[i].incomingData = dataQueue[i - 1].outputData;
      dataQueue[i].outputData = sorts[dataQueue[i].sort](dataQueue[i].key, dataQueue[i].value, dataQueue[i].incomingData);
      if (i + 1 != dataQueue.length) dataQueue[i + 1].incomingData = dataQueue[i].outputData;
   }
   writeResult(dataQueue);
}

function removeAddAction(e) {
   const sortType = e.target.dataset.sortType;
   const sortBody = document.querySelector(`[data-sort-body="${sortType}"]`);
   const allSelectsKey = sortBody.querySelectorAll('[data-type="key"]');
   const prevSelectKey = allSelectsKey[allSelectsKey.length - 2];
   const currentSelectKey = allSelectsKey[allSelectsKey.length - 1];
   const sortCheckbox = document.getElementById(sortType);
   const valueID = getClossestSelectId(currentSelectKey.dataset.id, 'value');
   const dellIndex = dataQueue.findIndex(item => item.id == valueID);
   makeSortAfterRemove(dellIndex, dataQueue.splice(dellIndex, 1)[0].incomingData);

   if (allSelectsKey.length == 1) {
      sortCheckbox.checked = false;
      sortBody.remove();
   } else if (currentSelectKey.querySelectorAll('option').length == 1) {
      excludeKey[sortType][prevSelectKey.value] = true;
      document.querySelector(`[data-id="row-${sortType}_${allSelectsKey.length - 1}"]`).remove();
      prevSelectKey.disabled = false;
      makeBtn(sortBody, sortType);
      e.target.remove();

      const addBtn = sortBody.querySelector('[data-action="add"]');
      const removeBtn = sortBody.querySelector('[data-action="remove"]');
      addBtn.addEventListener('click', btnAddAction);
      removeBtn.addEventListener('click', removeAddAction);
   } else {
      excludeKey[sortType][prevSelectKey.value] = true;
      document.querySelector(`[data-id="row-${sortType}_${allSelectsKey.length - 1}"]`).remove();
      prevSelectKey.disabled = false;
   }
}

function removeBtn(sort) {
   const btnBody = document.querySelector(`[data-sort-body="${sort}"] [data-type="btnBody"]`);
   btnBody ? btnBody.remove() : false;
}