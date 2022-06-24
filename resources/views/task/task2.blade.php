<!DOCTYPE html>
<html lang="ua">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Task 2</title>
   <link rel="stylesheet" href="{{asset('css/tasks/task2/null.css')}}">
   <link rel="stylesheet" href="{{asset('css/tasks/task2/style.css')}}">
   <script src="{{asset('js/tasks/task2/app.js')}}"></script>
</head>

<body>

   <div class="wrapper">
      <main class="page">
         <section class="sort">
            <div class="sort__container">
               <h1 class="sort__incoming-data-title">Incoming data:</h1>
               <div class="sort__incoming-data">

               </div>
               <div class="sort__type type-sort">
                  <h2 class="type-sort__title">Select the sort type:</h2>
                  <div class="type-sort__items">
                     <div class="type-sort__item">
                        <input class="type-sort__checkbox" type="checkbox" id="include">
                        <label for="include">Include</label>
                     </div>
                     <div class="type-sort__item">
                        <input class="type-sort__checkbox" type="checkbox" id="exclude">
                        <label for="exclude">Exclude</label>
                     </div>
                  </div>
               </div>
               <div class="sort__items item-sort">

               </div>
               <div class="sort__order order-sort">
                  <div class="order-sort__selects">
                     <label for="sortKey">Sort by:</label>
                     <select class="item-sort__select select-key" name="sort-key" id="sortKey">
                        <option value="select_key">Select type of sort</option>
                     </select>
                  </div>
               </div>
               <div class="sort__output-data">
                  <h2 class="sort__output-data-title"></h2>
               </div>
            </div>
         </section>
      </main>
   </div>

</body>

</html>