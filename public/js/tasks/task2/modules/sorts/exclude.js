
export { makeHtml };

import { makeSort } from '../settings/html.js';

function makeHtml() {
   let key, value, btn;
   key = value = btn = true;
   return makeSort('exclude', key, value, btn);
}