<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>{{ config('app.name', 'Laravel') }} - @yield('title')</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col">
         
             @php 
              $images = json_decode($product->images);
              var_dump($images);
            
              @endphp
              <br/>
---------------------------------------------------------------------------------------------------------------------------
<br/>
      
            @foreach($images as $image)
                @php
                print_r(json_decode($image)->image);
                @endphp
                <br/>
               
                <br>
                {{-- {{$image->image}} --}}
             {{--   @foreach($image as $decodeImage)
                <br/>
                {{$decodeImage}}
                @endforeach--}}
            <br/>
            @endforeach
        </div>
      </div>
    </div>
  </body> 
</html>