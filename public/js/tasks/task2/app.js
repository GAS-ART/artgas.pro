window.onload = function () {

   const partUrlJsonSort_1 = '/json/sort_1.json'
   const partUrlJsonSort_2 = '/json/sort_2.json'
   let tipeOfSort = document.querySelectorAll('.type-sort__checkbox');

   let sorts = {
      "include": {
         "html": '<h3 class="item-sort__title">Include:</h3> <div data-sort="include" class="item-sort__selects"> <div class="item-sort__selects-body"> <label for="includeKey">Key</label> <select class="item-sort__select select-key" name="include-key" id="includeKey"> <option value="select_key">Select key</option> </select> </div> <div class="item-sort__selects-body"> <label for="includeValue">Value</label> <select class="item-sort__select select-value" name="include-value" id="includeValue"> </select> </div> </div>',
         "sort": function includeData(data, key = '', value = '', result = '') {
            key == '' ? key = document.querySelector('#excludeKey').value : key = key;
            value == '' ? value = document.querySelector('#excludeValue')?.value : value = value;
            for (let i = 0; i < data.length; i++) {
               if (String(data[i][key]) == value) {
                  result == '' ? result = JSON.stringify(data[i]) : result += ', ' + JSON.stringify(data[i]);
               }
            }
            writeResult(result);
         },
      },
      "exclude": {
         "html": '<h3 class="item-sort__title">Exclude:</h3> <div data-sort="exclude" class="item-sort__selects"> <div class="item-sort__selects-body"> <label for="excludeKey">Key</label> <select class="item-sort__select select-key" name="exclude-key" id="excludeKey"> <option value="select_key">Select key</option> </select> </div> <div class="item-sort__selects-body"> <label for="excludeValue">Value</label> <select class="item-sort__select select-value" name="exclude-value" id="excludeValue"> </select> </div> </div>',
         "sort": function excludeData(data, key = '', value = '', result = '') {
            key == '' ? key = document.querySelector('#excludeKey').value : key = key;
            value == '' ? value = document.querySelector('#excludeValue')?.value : value = value;
            for (let i = 0; i < data.length; i++) {
               if (String(data[i][key]) != value) {
                  result == '' ? result = JSON.stringify(data[i]) : result += ', ' + JSON.stringify(data[i]);
               }
            }
            writeResult(result);
         },
      }
   };

   //get JSON url
   function getJsonUrl() {
      const fullUrl = window.location.href;
      const url = fullUrl.split('/').slice(0, -1).join('/');
      const metricsJsonFile = url + partUrlJsonSort_2; // enter the path to the JSON file
      return metricsJsonFile;
   }

   function writeIncomingData() {
      const incomingData = document.querySelector('.sort__incoming-data');
      let jsonUrl = getJsonUrl();
      fetch("https://artgas.pro/json/sort_2.json")
         .then(response => response.json())
         .then(data => {
            incomingData.innerHTML = JSON.stringify(data);
            addKeytoSortSelect();
            // writeKeyDataToSelects(data.data);
         });
   }

   function addKeytoSortSelect() {
      let sortSelect = document.getElementById('sortKey');
      writeKeyDataToSelects(sortSelect);
   }


   tipeOfSort.forEach(function (item) {
      item.addEventListener('change', function (e) {
         let sortType = e.target.id;
         if (item.checked) {
            const sortBody = document.querySelector('.item-sort');
            const sortItem = document.createElement('div');
            let select;
            sortItem.classList.add('item-sort__item');
            sortItem.setAttribute('data-sort', sortType);
            sortItem.innerHTML = sorts[sortType].html;
            sortBody.insertAdjacentElement('beforeend', sortItem);
            select = sortItem.querySelector('.select-key');
            writeKeyDataToSelects(select);
            listeningSort();
         } else {
            const sortItem = document.querySelector(`.item-sort__item[data-sort="${sortType}"]`);
            sortItem.remove();
         }
      });
   })

   function writeKeyDataToSelects(select) {
      let data = document.querySelector('.sort__incoming-data').innerHTML;
      data = JSON.parse(data);
      data = data.data;
      for (let i = 0; i < data.length; i++) {
         for (let key in data[i]) {
            if (!select.querySelector(`option[value="${key}"]`)) {
               let option = document.createElement("option");
               option.value = key;
               option.text = key;
               select.appendChild(option);
            }
         }
      }
      let firstOptionValue = select.querySelector('option').value;
      writeValueDataToSelects(data, firstOptionValue, select);
   }

   function writeValueDataToSelects(data, selectedKey, select) {

      if (select.closest('.item-sort__selects')?.querySelector('.select-value')) {
         let curruntSelect = select.closest('.item-sort__selects').querySelector('.select-value');
         curruntSelect.length = 0;
         console.log(select);
         let option = document.createElement("option");
         option.value = 'select_value';
         option.text = 'Select value';
         curruntSelect.insertAdjacentElement('afterbegin', option);
         for (let i = 0; i < data.length; i++) {
            for (let key in data[i]) {
               if (key == selectedKey && !curruntSelect.querySelector(`option[value="${data[i][key]}"]`)) {
                  let option = document.createElement("option");
                  option.value = data[i][key];
                  option.text = data[i][key];
                  curruntSelect.appendChild(option);
               }
            }
         }
         let sortBody = select.closest('.item-sort__item')
         let isFirstSelect = document.querySelector('.item-sort').firstElementChild == sortBody;
         if (isFirstSelect) {
            let value = curruntSelect.querySelector('option')?.value;
            let sortType = curruntSelect.closest('.item-sort__item').dataset.sort;
            sorts[sortType].sort(data, selectedKey, value);
         }
      }
   }

   function writeResult(result) {
      result = '{"result": [' + `${result}` + ']}';
      const resultBlock = document.querySelector('.sort__output-data');
      resultBlock.innerHTML = result;
   }

   writeIncomingData();

   function listeningSort() {
      let selectsKey = document.querySelectorAll('.select-key');
      let selectsValue = document.querySelectorAll('.select-value');
      let sortSelect = document.getElementById('sortKey');

      selectsKey.forEach(function (select) {
         select.addEventListener('change', function (e) {
            let selectedKey = select.value;
            let jsonUrl = getJsonUrl();
            fetch(jsonUrl)
               .then(response => response.json())
               .then(data => {
                  writeValueDataToSelects(data.data, selectedKey, e.target);
               });
         });
      });

      selectsValue.forEach(function (select) {
         select.addEventListener('change', function (e) {
            let sortList = document.querySelectorAll('.item-sort__item');
            for (let i = 0; i < sortList.length; i++) {
               if (i == 0) {
                  let incomingData = document.querySelector('.sort__incoming-data').innerHTML;
                  incomingData = JSON.parse(incomingData);
                  let key = sortList[i].querySelector('.select-key').value;
                  let selectedValue = sortList[i].querySelector('.select-value').value;
                  let sortType = sortList[i].dataset.sort;
                  sorts[sortType].sort(incomingData.data, key, String(selectedValue));
               } else {
                  let key = sortList[i].querySelector('.select-key').value;
                  let selectedValue = sortList[i].querySelector('.select-value').value;
                  let sortType = sortList[i].dataset.sort;
                  let data = document.querySelector('.sort__output-data').innerHTML;
                  data = JSON.parse(data);
                  sorts[sortType].sort(data.result, key, String(selectedValue));
               }
            }
         });
      });

      sortSelect.addEventListener('change', function (e) {
         const outputData = document.querySelector('.sort__output-data');
         let sortValue = e.target.value;
         let textToSort = document.querySelector('.sort__output-data').innerHTML;
         textToSort = JSON.parse(textToSort);
         textToSort = textToSort.result;
         textToSort.sort(function (a, b) {
            if (a[sortValue] > b[sortValue]) return 1;
            if (a[sortValue] == b[sortValue]) return 0;
            if (a[sortValue] < b[sortValue]) return -1;
         });
         outputData.innerHTML = '{"result": ' + JSON.stringify(textToSort) + '}';
      });
   }

   listeningSort();
}