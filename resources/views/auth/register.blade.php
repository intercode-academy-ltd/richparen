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
                                <h3 class="mb-30 font-weight-900">Create an account</h3>
                            </div>
                            <form method="POST" action="{{ route('register') }}">
                                @csrf
                                <div class="form-group">
                                    <input id="name" type="text" placeholder="Username" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input id="email" type="email" placeholder="Email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input id="password" type="password"  placeholder="New Password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input id="password-confirm" placeholder="Confirm password" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                </div>
                                <div class="login_footer form-group">
                                    <div class="chek-form">
                                        <div class="custome-checkbox">
                                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                        </div>
                                    </div>

{{--                                    <div class="chek-form">--}}
{{--                                        <div class="custome-checkbox">--}}
{{--                                            <input class="form-check-input" type="checkbox" name="checkbox" id="exampleCheckbox1" value="">--}}
{{--                                            <label class="form-check-label" for="exampleCheckbox1"><span>I agree to terms &amp; Policy.</span></label>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <a class="text-muted" href="#">Lean more</a>--}}
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="button button-contactForm btn-block">Submit &amp; Register</button>
                                </div>
                            </form>
                            <div class="text-muted text-center">Already have an account? <a href="{{route('login')}}">Sign up now</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- End Main content -->
@endsection
