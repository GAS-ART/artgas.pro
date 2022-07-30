
export { makeHtml, exclude };

import { makeSort } from '../settings/html.js';

function makeHtml() {
   let key, value, btn;
   key = value = btn = true;
   return makeSort('exclude', key, value, btn);
}

function exclude(key, value, data) {
   let sortData = data.filter((item) => String(item[key]) != value);
   return sortData;
}