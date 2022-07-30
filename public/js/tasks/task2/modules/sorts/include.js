export { makeHtml, include };

import { makeSort } from '../settings/html.js';

function makeHtml() {
   let key, value, btn;
   key = value = btn = true;
   return makeSort('include', key, value, btn);
}

function include(key, value, data) {
   let sortData = data.filter((item) => String(item[key]) == value);
   return sortData;
}
