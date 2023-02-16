@extends('layouts.app')

@section('content')


    <!-- Start Main content -->
    <main class="bg-grey pt-80 pb-50">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-md-10">
                    <div class="login_wrap widget-taber-content p-30 bg-white border-radius-10">
                        <div class="padding_eight_all bg-white">
                            <div class="heading_s1 text-center">
                                <h3 class="mb-30 font-weight-900">Login</h3>
                            </div>
                            <form method="post" action="{{ route('login') }}">
                                @csrf
                                <div class="form-group">
                                    <input id="email" type="email" placeholder="Your Email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input id="password" type="password" placeholder="Password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="login_footer form-group">
                                    <div class="chek-form">
                                        <div class="custome-checkbox">
                                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                            <label class="form-check-label" for="exampleCheckbox1"><span>Remember me</span></label>
                                        </div>
                                    </div>
                                    @if (Route::has('password.request'))
                                        <a class="text-muted" href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="button button-contactForm btn-block">Log in</button>
                                </div>
                            </form>
                            <div class="text-muted text-center">Don't Have an Account? <a href="{{route('register')}}">Sign up now</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- End Main content -->
@endsection
