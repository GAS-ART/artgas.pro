window.onload = function () {

   const texetField = document.querySelector('.convert__from-input');
   const selects = document.querySelectorAll('select');
   const checkboxMetric = document.querySelectorAll('.convert__checkbox');


   let metrics = [{ "name": "meter", "baseMetric": "100", "unit": "m" }, { "name": "centimetre", "baseMetric": "1", "unit": "cm" }, { "name": "inch", "baseMetric": "2.54", "unit": "in" }, { "name": "foot", "baseMetric": "30.48", "unit": "ft" }];

   //Add the metrics to the dropdown menu
   function includeMetricsToSelect(metrics) {
      selects.forEach(function (select) {
         if (select.querySelectorAll('option').length == 0) {
            for (let i = 0; i < metrics.length; i++) {
               let option = document.createElement("option");
               option.value = metrics[i].unit;
               option.text = metrics[i].name;
               select.appendChild(option);
            }
         } else {
            //do not add those options that are already there
            let options = select.querySelectorAll('option');
            for (let i = 0; i < metrics.length; i++) {
               if (!Array.from(options).find(function (option) { return option.value === metrics[i].unit })) {
                  let option = document.createElement("option");
                  option.value = metrics[i].unit;
                  option.text = metrics[i].name;
                  select.appendChild(option);
               }
            }
         }
      });
   }
   includeMetricsToSelect(metrics);

   function createIncomingParameters() {
      let incomingParameters = {};
      incomingParameters.distance = {
         "unit": document.querySelector('.convert__from-select').value,
         "value": texetField.value
      };
      incomingParameters.convert_to = document.querySelector('.convert__to-select').value;
      return JSON.stringify(incomingParameters);
   }
   function pastIncomingParameters() {
      let incomingData = document.querySelector('.convert__data-incoming');
      incomingData.innerHTML = createIncomingParameters();
   }

   function convert() {
      let incomingParameters = JSON.parse(createIncomingParameters());
      let convertFrom = incomingParameters.distance.value * (metrics.find(function (metric) { return metric.unit === incomingParameters.distance.unit; }).baseMetric);
      let convertTo = (metrics.find(function (metric) { return metric.unit === incomingParameters.convert_to; }).baseMetric);
      let result = (convertFrom / convertTo).toFixed(2);
      writeOutputData(incomingParameters, result);
   }

   function writeOutputData(parameters, result) {
      const outputDataText = document.querySelector('.convert__data-output');
      let outputData = {};
      outputData.unit = (metrics.find(function (metric) { return metric.unit === parameters.convert_to; }).unit);
      outputData.value = result;
      outputDataText.innerHTML = JSON.stringify(outputData);
   }

   async function getMetric(unit) {
      let responce = await fetch("https://artgas.pro/json/metrics.json", {
         method: 'GET',
      });
      if (responce.ok) {
         let result = await responce.json();
         addMetric(result, unit);
      } else {
         alert('Error loading metric');
      }
   }

   function addMetric(data, unit) {
      let AllNewMetricUnits = Object.keys(data);
      let currentMetricUnit = AllNewMetricUnits.find(function (metric) { return metric === unit; });
      let newMetric = data[currentMetricUnit];
      newMetric.unit = currentMetricUnit;
      metrics.push(newMetric);
      includeMetricsToSelect(metrics);
   }

   function removeMetric(unit) {
      let metricToRemove = metrics.find(function (metric) { return metric.unit === unit; });
      metrics.splice(metrics.indexOf(metricToRemove), 1);
      const optionToRemove = document.querySelectorAll(`option[value="${unit}"]`);
      optionToRemove.forEach(function (option) {
         option.remove();
      });
      clearResult(unit);
   }

   function clearResult(unit) {
      const incomingResult = document.querySelector('.convert__data-incoming');
      if (incomingResult.innerHTML.includes(unit)) {
         texetField.value = '';
         pastIncomingParameters();
         convert();
      }
   }


   pastIncomingParameters();
   convert();


   texetField.oninput = function () {
      //Validates if entered "0" or "." in front of the numbers and generates the correct values in text field
      let newInputValue = [];
      if (texetField.value.length > 1 && texetField.value[0] == "0" && texetField.value[1] != ".") {
         for (let i = 0; i < texetField.value.length; i++) {
            if (texetField.value[i] != ".") {
               newInputValue.push(texetField.value[i]);
            }
         }
         newInputValue.splice(1, 0, ".");
         texetField.value = newInputValue.join('');
      } else if (texetField.value.length > 1 && texetField.value[0] == ".") {
         for (let i = 0; i < texetField.value.length; i++) {
            if (texetField.value[i] != ".") {
               newInputValue.push(texetField.value[i]);
            }
         }
         texetField.value = newInputValue.join('');
      }
      //Metric Calculation Functions
      pastIncomingParameters();
      convert();
   }

   //Enter only the numbers and the one dot to text field
   texetField.addEventListener('keypress', function (e) {
      if (e.key.match(/[^0-9.]/g) || e.key == '.' && texetField.value.includes('.')) {
         e.preventDefault();
      } else if ((e.key == '.' || e.key == '0') && texetField.value.length == 0) { //Write 0 before dot
         e.preventDefault();
         texetField.value = '0.';
      } else if (e.key && (texetField.value == '0' || texetField.value == '.')) { //Write "0." if delete  тumbers by hand
         e.preventDefault();
         if (e.key != '.') {
            texetField.value = '0.' + e.key;
         } else {
            texetField.value = '0.';
         }
      }
   });

   selects.forEach(function (select) {
      select.addEventListener('change', function () {
         //Metric Calculation Functions
         pastIncomingParameters();
         convert();
      });
   });

   checkboxMetric.forEach(function (checkbox) {
      checkbox.addEventListener('click', function (e) {
         if (e.target.checked) {
            let newMetricUnit = e.target.id;
            getMetric(newMetricUnit)
         } else {
            removeMetric(e.target.id)
         }
      });
   });

}