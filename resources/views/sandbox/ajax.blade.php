<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>{{ config('app.name', 'Laravel') }} - @yield('title')</title>

    <!-- AJAX -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.js"></script>

    <script>
      // Wait for window load

      $(window).on('load', function(){
        // Animate loader off screen
        $(".se-pre-con").fadeOut("slow");;
      });

      function getMessage() {
        var str = $("#name").val();

         $.ajax({
            type:'POST',
            url:'/ajax/getPostDataFromServe',
            data: {
               'key':str,
              _token: "{{ csrf_token() }}",
            },
            success:function(data) {
              console.log(data);
               $("#msg").html(data);
            },
            error:function(data){
              console.log("Eror");
              console.log(data);
            },
            beforeSend: function(){
                     $(".se-pre-con").show()
                  },
            complete: function(){
                     $(".se-pre-con").fadeOut("slow");;;
            }
         });
      }

      function getMethod() {

          // $("#getButton").click(function(){
         
          // });
          var str = $("#name").val();
          //       alert(str);

          $.ajax({
            type:'GET',
            url:'/ajax/getRequest',
            success:function(data) {
              console.log(data);
               $("#msg").html(data);
            },
            error:function(data){
              console.log("Eror");
              console.log(data);
            },
            beforeSend: function(){
                     $('.loader').show()
                  },
            complete: function(){ 
                     $('.loader').hide();
            }
         });
      }
   </script>
   
{{-- 
        <script>
        $(document).ready(function(){
          $("button").click(function(){
            $.get("/ajax/getRequest", function(data, status){
              alert("Data: "  + "\nStatus: ");
            });
          });
        });
        </script> --}}
   
  </head>
<style>
/* Paste this css to your style sheet file or under head tag */
/* This only works with JavaScript, 
if it's not present, don't show loader */
.no-js #loader { display: none;  }
.js #loader { display: block; position: absolute; left: 100px; top: 0; }
.se-pre-con {
	position: fixed;
	left: 0px;
	top: 0px;
	width: 100%;
	height: 100%;
	z-index: 9999;
	background: url('https://smallenvelop.com/wp-content/uploads/2014/08/Preloader_11.gif') center no-repeat #fff;
}
</style>

<div class="se-pre-con"></div>

  <body>
    <div class="container">
      <div class="row">
        <div class="col">
            Test Ajax
        </div>
      </div>
    </div>

    <div class="container">
      <div class="row">
        <div class="col">
          <div id = 'msg'>This message will be replaced using Ajax. 
            Click the button to replace the message.</div>
        </div>
      </div>
    </div>
  
    <div class="container">
      Post Request
      <div class="row">
     
        <div class="col">
          <?php
            echo Form::button('Replace Message',['onClick'=>'getMessage()']);
          ?>
             <input type="text" name="_name" id="name">
             <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">

        </div>
      </div>
    </div>



    <div class="container">
      Get Request
      <div class="row">
     
        <div class="col">

              <button type="button" id="getButton" onclick="getMethod()">Show Value</button>

        </div>
      </div>
    </div>


 
  </body> 


</html>