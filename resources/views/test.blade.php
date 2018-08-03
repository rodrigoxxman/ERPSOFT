<html>
   <head>
      <title>The Materialize Selects Example</title>
      <meta name = "viewport" content = "width = device-width, initial-scale = 1">
      <link rel = "stylesheet" href = "{{ asset('css/materialize.min.css') }}">
      <script type = "text/javascript" src = "{{ asset('js/jquery.min.js') }}"></script>
      <script src = "{{ asset('js/materialize.min.js') }}"></script>


   </head>

   <body>
     <script>
        $(document).ready(function() {
           $('#select').material_select();
        });
     </script>
     
           <div class="container">
           <div class="row">
            <div col s12>
               <select id="select">
                  <option value = "" disabled selected>Select Fruit</option>
                  <option value = "1">Mango</option>
                  <option value = "2">Orange</option>
                  <option value = "3">Apple</option>
               </select>
             </div>
            </div>
            </div>
   </body>
</html>
