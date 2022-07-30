import * as exclude from './modules/sorts/exclude.js';
import * as include from './modules/sorts/include.js';
import * as sort from './modules/sorts/sort.js';
import { initSort } from './modules/settings/init.js'
import { getJson } from './modules/settings/getJson.js'



function writeIncomingData() {
   const incomingData = document.querySelector('.sort__incoming-data');
   const ownPropertiesValues = {};
   getJson().then(data => {
      incomingData.innerHTML = JSON.stringify(data);
      include.makeHtml();
      exclude.makeHtml();

      // Whith ownValueProperties
      let ownProperties = sort.makeHtml();
      ownPropertiesValues[ownProperties[0]] = ownProperties[1];
      initSort(ownPropertiesValues);
   });
}
writeIncomingData();


