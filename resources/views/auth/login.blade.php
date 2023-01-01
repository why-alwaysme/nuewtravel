@extends('layouts.log')
@section('title', 'Login')

@section('content')
    <main class="login-container">
      <div class="container">
        <div class="row page-login d-flex align-items-center">
          <div class="section-left col-12 col-md-6">
            <h1 class="mb-4">Website aing <br/> kumaha aing</h1>
            <img src="{{url('frontend/images/login-image.jpg')}}" alt="" class="w-75 d-none d-sm-flex">
          </div>
          <div class="section-right col-12 col-md-4">
            <div class="card">
              <div class="card-body">
                <div class="text-center">
                  <img src="{{url('frontend/images/logo.png')}}" alt="" class="w-50 mb-4">
                </div>
                <form method="POST" action="{{ route('login') }}">
                  @csrf
                  <div class="form-group">
                    <label for="email">E-Mail Address</label>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" aria-describedby="emailHelp" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                      @error('email')
                        <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                        </span>
                      @enderror
                    <small id="emailHelp" class="form-text text-muted">We will never share your email with anyone else. </small>
                  </div>
                  <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password" required autocomplete="current-password">
                      @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                      @enderror
                  </div>
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="remember" name="remember" {{ old('remember') ? 'checked' : '' }}>
                    <label class="form-check-label" for="remember">Remember me</label>
                  </div>
                  <button type="submit" class="btn btn-login btn-block">
                    {{ __('Login') }}
                  </button>
                  <a href="{{ Route('register')}}" class="btn btn-register btn-block">
                    {{ __('Register') }}
                  </a>
                    @if (Route::has('password.request'))
                    <p class="mt-4 text-center">
                      <a href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                      </a>
                    </p>
                    @endif
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
@endsection