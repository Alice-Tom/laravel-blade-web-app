{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}

@extends('layouts.app')
@section('styles_login_register')
<link href="{{ asset('css/dashboard.css') }}" rel="stylesheet">
<link href="{{ asset('css/orange.css') }}" rel="stylesheet">
<link href="{{ asset('css/icons.css') }}" rel="stylesheet">
@stop

@section('content')


<section class="container-lg-stag loginregister">
	<div class="m200">
		<div class="login-register-page">
			<!-- Welcome Text -->
			<div class="welcome-text">
				<h3 style="font-size: 26px;">Let's create your account!</h3>
				<span>Already have an account? <a href="{{('login')}}">Log In!</a></span>
			</div>

				
			<!-- Form -->
			<form method="post" id="register-account-form"  action="{{ route('register') }}">
                @csrf

                <!-- Account Type -->
                <div class="account-type">
                    <div>
                        <input type="radio" name="account-type" id="freelancer-radio" class="account-type-radio" value="expert" checked/>
                        <label for="freelancer-radio" class="ripple-effect-dark"><i class="icon-material-outline-account-circle"></i> Expert </label>
                    </div>

                    <div>
                        <input type="radio" name="account-type" id="employer-radio" class="account-type-radio" value="recruiter"/>
                        <label for="employer-radio" class="ripple-effect-dark"><i class="icon-material-outline-business-center"></i> Recruiter </label>
                    </div>
                </div>

                <div class="input-with-icon-left">
					<i class="icon-line-awesome-user"></i>
					<input type="text" class="input-text with-border" name="name" id="emailaddress-register" placeholder="Name" required/>
                    @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
				</div>

				<div class="input-with-icon-left">
					<i class="icon-material-baseline-mail-outline"></i>
					<input type="text" class="input-text with-border" name="email" id="emailaddress-register" placeholder="Email Address" required/>
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
				</div>

				<div class="input-with-icon-left" title="Should be at least 8 characters long" data-tippy-placement="bottom">
					<i class="icon-material-outline-lock"></i>
					<input type="password" class="input-text with-border" name="password" id="password-register" placeholder="Password" required/>
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
				</div>

				<div class="input-with-icon-left">
					<i class="icon-material-outline-lock"></i>
					<input type="password" class="input-text with-border" name="password_confirmation" id="password-repeat-register" placeholder="Repeat Password" required/>
				</div>

                <!-- Button -->
			<button class="button full-width button-sliding-icon ripple-effect margin-top-10" type="submit" >Register<i class="icon-material-outline-arrow-right-alt"></i></button>
			</form>
			
			
			<!-- Social Login -->
			<div class="social-login-separator"><span>or</span></div>
			<div class="social-login-buttons">
				<button class="facebook-login ripple-effect"><i class="icon-brand-facebook-f"></i> Register via Facebook</button>
				<button class="google-login ripple-effect"><i class="icon-brand-google-plus-g"></i> Register via Google+</button>
			</div>
		</div>
	</div>
</section>

@endsection
