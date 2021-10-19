@extends('layouts.login')
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous" />

<!-- font awesome  -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous" />
@section('content')
<div class="page-header header-filter" filter-color="orange">
  <div class="page-header-image" style="background-image:url({{asset('img/login.jpg')}})"></div>
  <div class="content">
    <div class="container">
      <div class="col-md-5 ml-auto mr-auto">
        <div class="card card-login card-plain">
          <form method="POST" action="{{ route('login') }}" name="login">
            @csrf
            <div class="card-header text-center">
              <div class="logo-container">
                <img src="{{asset('img/now-logo.png')}}" alt="">
              </div>
            </div>
            <div class="card-body">
              <div class="input-group no-border input-lg">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="now-ui-icons users_circle-08"></i></span>
                </div>

                <input placeholder="Enter Email Id" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autofocus>

                @error('email')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <div class="input-group no-border input-lg">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="now-ui-icons text_caps-small"></i></span>
                </div>
                <input placeholder="Enter Password" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required>
                <div class="input-group-append">
                  <span class="input-group-text px-2" onclick="password_show_hide();">
                    <i class="fas fa-eye" id="show_eye"></i>
                    <i class="fas fa-eye-slash d-none" id="hide_eye"></i>
                  </span>
                </div>
                @error('password')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <div class="text-center">
                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                <label class="form-check-label" for="remember">
                  {{ __('Remember Me') }}
                </label>
              </div>

            </div>
            <div class="card-footer text-center">
              <button type="submit" class="btn btn-primary btn-round btn-md btn-block">
                {{ __('Login') }}
              </button>

              {{--<a href="#pablo" class="btn btn-primary btn-round btn-lg btn-block">  {{ __('Login') }}</a>--}}
            </div>
            <div class="pull-left">
              <h6>
                <a href="{{ route('register') }}" class="link footer-link">Create Account</a>
              </h6>
            </div>
            <div class="pull-right">
              <h6>
                @if (Route::has('password.request'))
                <a class="link footer-link" href="{{ route('password.request') }}">
                  {{ __('Forgot Your Password?') }}
                </a>
                @endif
              </h6>
            </div>
          </form>
          <div class="card-footer text-center">
            <button type="submit" class="btn btn-primary btn-round btn-md " onclick="filladmin()">
              {{ __('Admin') }}
            </button>
            <button type="submit" class="btn btn-primary btn-round btn-md " onclick="fillstaff()">
              {{ __('Staff') }}
            </button>
            <button type="submit" class="btn btn-primary btn-round btn-md " onclick="filluser()">
              {{ __('User') }}
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">
  function filladmin() {

    document.getElementById('email').value = "admin@kaliba.in"
    document.getElementById('password').value = "123456789"
  }

  function fillstaff() {

    document.getElementById('email').value = "staff@kaliba.in"
    document.getElementById('password').value = "123456789"
  }

  function filluser() {

    document.getElementById('email').value = "user@kaliba.in"
    document.getElementById('password').value = "123456789"
  }

  function password_show_hide() {
    var x = document.getElementById("password");
    var show_eye = document.getElementById("show_eye");
    var hide_eye = document.getElementById("hide_eye");
    hide_eye.classList.remove("d-none");
    if (x.type === "password") {
      x.type = "text";
      show_eye.style.display = "none";
      hide_eye.style.display = "block";
    } else {
      x.type = "password";
      show_eye.style.display = "block";
      hide_eye.style.display = "none";
    }
  }
</script>
@endsection