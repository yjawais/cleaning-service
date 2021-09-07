<meta charset="utf-8">
    
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
<meta name="author" content="Kaliba Developers">

<title>{{ config('app.name', 'App Blade') }}</title>
<!-- Favicon -->
<link rel="icon" href="{{asset('adminPanel/img/brand/favicon.png')}}" type="image/png">
<!-- Fonts -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
<!-- Icons -->
<link rel="stylesheet" href="{{asset('adminPanel/vendor/nucleo/css/nucleo.css')}}" type="text/css">
<link rel="stylesheet" href="{{asset('adminPanel/vendor/@fortawesome/fontawesome-free/css/all.min.css')}}" type="text/css">
<!-- Page plugins -->
<link rel="stylesheet" href="{{asset('adminPanel/vendor/animate.css/animate.min.css')}}">
  <link rel="stylesheet" href="{{asset('adminPanel/vendor/sweetalert2/dist/sweetalert2.min.css')}}">
<link rel="stylesheet" href="{{asset('adminPanel/vendor/datatables.net-bs4/css/dataTables.bootstrap4.min.css')}}">
<link rel="stylesheet" href="{{asset('adminPanel/vendor/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css')}}">
<link rel="stylesheet" href="{{asset('adminPanel/vendor/datatables.net-select-bs4/css/select.bootstrap4.min.css')}}">
<!-- Argon CSS -->
<link rel="stylesheet" href="{{asset('adminPanel/css/argon.css?v=1.2.0')}}" type="text/css"> 
<style>
    /* Style the form */
#regForm {
  background-color: #ffffff;
  margin: 100px auto;
  padding: 40px;
  width: 70%;
  min-width: 300px;
}

/* Style the input fields */
input {
  padding: 10px;
  width: 100%;
  font-size: 17px;
  font-family: Raleway;
  border: 1px solid #aaaaaa;
}

/* Mark input boxes that gets an error on validation: */
input.invalid {
  background-color: #ffdddd;
}

/* Hide all steps by default: */
.tab {
  display: none;
}

/* Make circles that indicate the steps of the form: */
.step {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbbbbb;
  border: none;
  border-radius: 50%;
  display: inline-block;
  opacity: 0.5;
}

/* Mark the active step: */
.step.active {
  opacity: 1;
}

/* Mark the steps that are finished and valid: */
.step.finish {
  background-color: #4CAF50;
}
  </style>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'G-N1ER5X9CCG', 'auto');
  ga('send', 'pageview');

</script>