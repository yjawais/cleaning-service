<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>{{ config('app.name', 'Laravel') }} - @yield('title')</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        var array= new Array();
    function getMethod() {

// $("#getButton").click(function(){

// });

var str = $("#name").val();
//       alert(str);
console.log(str);   
array.push(str);
console.log(array);
$("#all").val(array.toString());

}
    </script>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col">
          <form method="POST" action="">
             @csrf
            <div class="form-group">
              <label>Name</label>
              <input type="text" class="form-control" id="name" name="name">
            </div>
            <div class="form-group">
              <label>all</label>
              <input type="text" class="form-control" id="all" name="all" readonly>
            </div>
            <div class="form-group">
              <button type="button" onclick="getMethod()" name="submit">Submit</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </body> 
</html>