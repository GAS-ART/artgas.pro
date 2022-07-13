export { makeSort, removeSort, makeSelects, makeBtn };

function makeSort(sortName, key = false, value = false, moreBtn = false) {
   const sortTypesBody = document.querySelector('.type-sort__items');
   const html = `<div class="type-sort__item"> <input class="type-sort__checkbox" type="checkbox" id="${sortName}" data-key="${key}" data-value="${value}" data-btn="${moreBtn}"> <label for="${sortName}">${sortName}</label> </div>`;
   sortTypesBody.insertAdjacentHTML('beforeend', html);
}

function removeSort(html) {
   html.remove();
}

function makeSelects(selectKey = false, selectValue = false, sort, id = 0) {
   const wrapper = document.querySelector('.sort__items');
   const selectBody = `<div class="item-sort__item" data-sort-body="${sort}"><h3 class="item-sort__title">${sort}:</h3><div class="item-sort__row"></div></div>`
   if (!document.querySelector(`[data-sort-body="${sort}"]`)) {
      wrapper.insertAdjacentHTML('beforeend', selectBody);
   } else {
      let row = `<div class="item-sort__row" data-id="row-${sort}_${id}"></div>`;
      document.querySelector(`[data-sort-body="${sort}"]`).insertAdjacentHTML('beforeend', row);
   }
   if (selectKey == 'true') {
      const selectKey = `<div class="item-sort__selects-body"><label for="Key">Key</label><select data-sort="${sort}" data-id="key-${sort}_${id}" data-type="key" class="item-sort__select select-key" name="key"><option value="select_key">Select key</option></select></div>`
      const selectBody = document.querySelector(`[data-sort-body="${sort}"] .item-sort__row:last-child`);
      selectBody.insertAdjacentHTML('beforeend', selectKey);
   }
   if (selectValue == 'true') {
      const selectValue = `<div class="item-sort__selects-body"><label for="Value">Value</label><select data-sort="${sort}" data-id="value-${sort}_${id}" data-type="value" class="item-sort__select select-value" name="value"><option value="select_value">Select value</option></select></div>`
      const selectBody = document.querySelector(`[data-sort-body="${sort}"] .item-sort__row:last-child`);
      selectBody.insertAdjacentHTML('beforeend', selectValue);
   }
}

function makeBtn(where, sortType) {
   const html = `<div class="item-sort__btn" data-type="btnBody"><button class="item-sort__btn-add" data-action="add" data-type="sortBtn" data-sort-type="${sortType}">Add</button><button class="item-sort__btn-remove" data-action="remove" data-type="sortBtn" data-sort-type="${sortType}">Remove</button></div>`;
   where.insertAdjacentHTML('beforeend', html);
}