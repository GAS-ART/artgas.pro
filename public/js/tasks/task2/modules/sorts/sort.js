export { makeHtml };

import { makeSort } from '../settings/html.js';

function makeHtml() {
   let key, value, btn;
   key = true;
   value = btn = false;
   return makeSort('sort', key, value, btn);
}