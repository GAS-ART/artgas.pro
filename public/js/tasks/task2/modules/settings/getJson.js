export { getJson };

//get JSON url
function getJson() {
   /* const partUrl = '/json/sort_2.json'
    const fullUrl = window.location.href;
    const url = fullUrl.split('/').slice(0, -1).join('/');
    const jsonFile = url + partUrl; // enter the path to the JSON file*/
   return fetch("https://artgas.pro/json/sort_2.json").then(response => response.json());
}