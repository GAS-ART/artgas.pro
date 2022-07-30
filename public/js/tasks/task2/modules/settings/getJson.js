export { getJson };

//get JSON url
function getJson() {
   return fetch("https://artgas.pro/json/sort_2.json").then(response => response.json());
}