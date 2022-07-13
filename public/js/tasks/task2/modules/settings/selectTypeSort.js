import { makeSort, removeSort, makeSelects, makeBtn } from "./html.js";
import { getJson } from './getJson.js';

export { initSort };

const excludeKey = {};

function initSort() {
   const tepesSort = document.querySelectorAll('.type-sort__checkbox');
   tepesSort.forEach(item => {
      excludeKey[item.id] = {};
      excludeKey[item.id]['createExcludeKeys'] = true;
      item.addEventListener('change', function (e) {
         const sortType = e.target.id;
         if (item.checked) {
            makeSelects(e.target.dataset.key, e.target.dataset.value, sortType);
            addSelects(sortType, 0);
         } else {
            const sortItem = document.querySelector(`[data-sort-body="${sortType}"]`);
            removeSort(sortItem);
            excludeKey[item.id]['createExcludeKeys'] = true
         }
      });
   });
}

function addSelects(sortType, numberId) {
   const selects = document.querySelectorAll('[data-type="key"]');
   selects.forEach(select => {

      if (select.dataset.sort === sortType && select.dataset.id.split('-')[1] === `${sortType}_${numberId}`) {
         addKeyToSelect(select);
      }
   });
}

function addKeyToSelect(select) {
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
      addValueToSelect(data.data, select)
      removeBtn(select.dataset.sort);
   })
}

function addValueToSelect(jsonData, selectKey) {
   const selectValue = document.querySelector(`[data-id="value-${selectKey.dataset.id.split('-')[1]}"]`);

   selectKey.addEventListener('change', function () {
      if (selectValue) {
         selectValue.querySelectorAll('option').forEach(option => option.remove()); //Cleaning the List
         const key = selectKey.value;
         const values = jsonData.map(item => item[key]);
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
      }
      if (selectKey.querySelector('[value="select_key"]')) selectKey.querySelector('[value="select_key"]').remove();
   });
   if (selectValue) actionsSelectValue(selectValue, selectKey);
}

function actionsSelectValue(selectValue, selectKey) {
   selectValue.addEventListener('change', function () {
      const selectsBody = document.querySelector(`[data-sort-body="${selectValue.dataset.sort}"]`)
      const isBtnEnabled = document.getElementById(selectsBody.dataset.sortBody).dataset.btn;
      const selectsKey = selectsBody.querySelectorAll(`[data-type="key"]`);
      const lastSelectKey = selectsKey[selectsKey.length - 1];
      if (isBtnEnabled && lastSelectKey.length > 1 && selectKey == lastSelectKey && lastSelectKey.value) {
         addMorebtn(selectsBody, selectValue, lastSelectKey, true, selectsKey);
      } else if (selectKey == lastSelectKey) {
         addMorebtn(selectsBody, selectValue, lastSelectKey, false, selectsKey);
      }
      if (selectsBody.querySelector('[value="select-value"]')) selectsBody.querySelector('[value="select-value"]').remove();
   });
}

function addMorebtn(selectsBody, selectValue, selectKey, addBtnActive = true, selectsKey) {
   const btn = selectsBody.querySelector('[data-type="btnBody"]');
   if (!btn && selectsKey[selectsKey.length - 1] == selectKey) {
      makeBtn(selectsBody, selectsBody.dataset.sortBody);
   } else if (btn && selectsKey[selectsKey.length - 1] == selectKey) {
      btn.remove();
      makeBtn(selectsBody, selectsBody.dataset.sortBody);
   }
   const addBtn = selectsBody.querySelector('[data-action="add"]');
   addBtnActive ? true : addBtn.remove();
   btnActions();
}

function btnActions() {

   const buttons = document.querySelectorAll('[data-type="sortBtn"]');
   buttons.forEach((btn) => {

      btn.addEventListener('click', function (e) {

         const btnBody = e.target.closest('[data-type="btnBody"]');
         const sortType = e.target.dataset.sortType;
         const sortBody = document.querySelector(`[data-sort-body="${sortType}"]`);
         const allSelectsKey = sortBody.querySelectorAll('[data-type="key"]');
         const prevSelectKey = allSelectsKey[allSelectsKey.length - 2];
         const currentSelectKey = allSelectsKey[allSelectsKey.length - 1];
         const sortCheckbox = document.getElementById(sortType);
         const selectKey = allSelectsKey[allSelectsKey.length - 1];

         let idNumber = allSelectsKey[allSelectsKey.length - 1].dataset.id.split('_')[1];
         idNumber = +idNumber;
         idNumber++;

         if (btn.dataset.action == "add") {
            excludeKey[selectKey.dataset.sort][selectKey.value] = false;
            console.log('work 2 times');
            makeSelects(sortCheckbox.dataset.key, sortCheckbox.dataset.value, sortCheckbox.id, idNumber);
            addSelects(sortCheckbox.id, idNumber);
            selectKey.disabled = true;
            btnBody.remove();
         } else {
            if (allSelectsKey.length == 1) {
               sortCheckbox.checked = false;
               sortBody.remove();
            } else if (currentSelectKey.querySelectorAll('option').length == 1) {
               excludeKey[sortType][prevSelectKey.value] = true;
               document.querySelector(`[data-id="row-${sortType}_${allSelectsKey.length - 1}"]`).remove();
               prevSelectKey.disabled = false;
               makeBtn(sortBody, sortType);
               e.target.remove();
               btnActions();
            } else {
               excludeKey[sortType][prevSelectKey.value] = true;
               document.querySelector(`[data-id="row-${sortType}_${allSelectsKey.length - 1}"]`).remove();
               prevSelectKey.disabled = false;
            }
         }
      });
   });
}

function removeBtn(sort) {
   const btnBody = document.querySelector(`[data-sort-body="${sort}"] [data-type="btnBody"]`);
   btnBody ? btnBody.remove() : false;
}