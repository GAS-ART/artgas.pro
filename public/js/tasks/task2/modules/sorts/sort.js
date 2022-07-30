export { makeHtml, sort };

import { makeSort } from '../settings/html.js';

function makeHtml() {
   let key, value, btn, ownPropertiesValues;
   key = true;
   value = true;
   btn = false;
   ownPropertiesValues = ['from start', 'from end'];
   return makeSort('sort', key, value, btn, ownPropertiesValues);
}

function sort(key, value, data) {
   if (value == 'from start') {
      return (data.sort(function (a, b) {
         if (a[key] > b[key]) return 1;
         if (a[key] == b[key]) return 0;
         if (a[key] < b[key]) return -1;
      }));
   } else if (value == 'from end') {
      return (data.sort(function (a, b) {
         if (a[key] < b[key]) return 1;
         if (a[key] == b[key]) return 0;
         if (a[key] > b[key]) return -1;
      }));
   }

}