<!DOCTYPE html>
<html lang="ua">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Task 1</title>
   <link rel="stylesheet" href="{{asset('css/tasks/task1/null.css')}}">
   <link rel="stylesheet" href="{{asset('css/tasks/task1/style.css')}}">
   <script src="{{asset('js/tasks/task1/app.js')}}"></script>
</head>

<body>

   <div class="wrapper">
      <main class="page">
         <section class="convert">
            <div class="convert__container">
               <h1 class="convert__title">Enter a number and select a unit of measure</h1>
               <div class="convert__from">

                  <input class="convert__from-input" type="text">
                  <select class="convert__from-select">

                  </select>
               </div>
               <div class="convert__to">
                  <div class="convert__to-text">Convert to</div>
                  <select class="convert__to-select">
                  </select>
               </div>
               <h2 class="convert__result">Result:</h2>
               <div class="convert__data">
                  <div class="convert__data-incoming"></div>
                  <div class="convert__data-output"></div>
               </div>
               <div class="convert__add-title">Add more metrics:</div>
               <div class="convert__add-items">
                  <div class="convert__add-item">
                     <input class="convert__checkbox" type="checkbox" id="mm">
                     <label for="mm">Millimeters</label>
                  </div>
                  <div class="convert__add-item">
                     <input class="convert__checkbox" type="checkbox" id="yd">
                     <label for="yd">Yards</label>
                  </div>
                  <div class="convert__add-item">
                     <input class="convert__checkbox" type="checkbox" id="km">
                     <label for="km">Kilometers</label>
                  </div>
               </div>
            </div>
         </section>
      </main>
   </div>

</body>

</html>