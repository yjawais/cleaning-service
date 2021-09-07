@extends('layouts.register')

@section('content')
<div class="page-header header-filter" filter-color="black">
    <div class="page-header-image" style="background-image:url({{asset('img/bg18.jpg')}})"></div>
    <div class="content">
      <div class="container">
        <div class="row">
          <div class="col-md-4 ml-auto mr-auto">
            <div class="info info-horizontal">
              <div class="icon icon-primary">
                <i class="now-ui-icons media-2_sound-wave"></i>
              </div>
              <div class="description">
                <h5 class="info-title">Marketing</h5>
                <p class="description">
                  We've created the marketing campaign of the website. It was a very interesting collaboration.
                </p>
              </div>
            </div>
            <div class="info info-horizontal">
              <div class="icon icon-primary">
                <i class="now-ui-icons media-1_button-pause"></i>
              </div>
              <div class="description">
                <h5 class="info-title">Fully Coded in HTML5</h5>
                <p class="description">
                  We've developed the website with HTML5 and CSS3. The client has access to the code using GitHub.
                </p>
              </div>
            </div>
            <div class="info info-horizontal">
              <div class="icon icon-info">
                <i class="now-ui-icons users_single-02"></i>
              </div>
              <div class="description">
                <h5 class="info-title">Built Audience</h5>
                <p class="description">
                  There is also a Fully Customizable CMS Admin Dashboard for this product.
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4 mr-auto">
            <div class="card card-signup">
              <div class="card-body">
                <h2 class="card-title text-center">{{ __('Register') }}</h2>
                <form method="POST" action="{{ route('register') }}">
                        @csrf
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="now-ui-icons users_circle-08"></i></span>
                    </div>
                    <input placeholder="Enter Name..." id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                  </div>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="now-ui-icons text_caps-small"></i></span>
                    </div>
                    <input placeholder="Enter Email Id..." id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                  </div>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="now-ui-icons ui-1_email-85"></i></span>
                    </div>
                    <input placeholder="Enter Password..." id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                  </div>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="now-ui-icons ui-1_email-85"></i></span>
                    </div>
                    <input placeholder="Enter Password..." id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">

                  </div>
                  <!-- If you want to add a checkbox to this form, uncomment this code -->
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="form-check-input" type="checkbox">
                      <span class="form-check-sign"></span>
                      I agree to the terms and 
                      <a href="#something">conditions</a>.
                    </label>
                  </div>
                  <div class="card-footer text-center">
                    <button type="submit" class="btn btn-primary btn-round btn-lg">
                                    {{ __('Register') }}
                                </button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
