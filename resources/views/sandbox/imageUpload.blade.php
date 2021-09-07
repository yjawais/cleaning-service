<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>{{ config('app.name', 'Laravel') }} - @yield('title')</title>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col">
          <form method="POST" action="/image/upload" enctype="multipart/form-data">
             @csrf
            <div class="form-group">
              <label>Upload image</label>
              <input type="file" class="form-control-file" name="image">
            </div>
            <div class="form-group">
              <button type="submit" name="submit">Upload</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </body> 
</html>