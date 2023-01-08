<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Styles -->
    <link href="{{ asset('css/login.css') }}" rel="stylesheet">


    <title>e-Primyir</title>
    <!-- add icon link -->
    <link rel = "icon" href = "/png/login/snhs.png" type = "image/x-icon">

    <!-- Scripts -->
    <script src="{{ asset('js/login/app.js') }}" defer></script>
    <script src="{{ asset('js/login/loader.js') }}" defer></script>


</head>
<body>
	<!-- =============== Loading ================ -->
	<div id="preloader"></div>

    <main>
		<div class="box">
			<div class="inner-box">
				<div class="forms-wrap">
                    <!-- =========== SIGN-IN FORM ============== -->
					<form method="POST" action="{{ route('login') }}" autocomplete="off" class="sign-in-form">
					    @csrf
					
					    <div class="logo">
						    <img src="/png/login/logo.png" alt="easyclass" />
					    </div>

					    <div class="heading">
						    <h2>Welcome </h2>
						    <h6>Not registred yet?</h6>
						    <a href="#" class="toggle">Sign up</a>
					    </div>

                        <!--<div class="error"-->
                            <!--?php if (isset($_GET['error'])) { ?-->
                            <!--p class="login-error"--><!--?php echo $_GET['error']; ?></p-->
                            <!--?php } ?-->
                        <!--/div-->

                        <div class="actual-form">
                            <div class="input-wrap">
                                <!--input
                                    type="text"
                                    name="username"
                                    minlength="1"
                                    class="input-field"
                                    autocomplete="off"
                                />
                                <label>Username</label-->
                                
                            
                                <input 
                                id="email" 
                                type="email" 
                                class="input-field form-control @error('email') is-invalid @enderror" 
                                name="email" value="{{ old('email') }}" 
                                required 
                                autocomplete="off">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <label for="email">Email</label>
                            </div>

                            <div class="input-wrap">
                                <!--input
                                    type="password"
                                    name="password"
                                    minlength="1"
                                    class="input-field"
                                    autocomplete="off"
                                />
                                <label>Password</label-->
                                
                                
                                <input 
                                id="password" 
                                type="password" 
                                class="input-field form-control @error('password') is-invalid @enderror" name="password" 
                                required 
                                autocomplete="off">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <label for="password">{{ __('Password') }}</label>
                            </div>

                            <input type="submit" name="submit" value="Login" class="sign-btn" />
                            
                            <!--button type="submit" name="submit" class="sign-btn">
                                {{ __('Login') }}
                            </button-->

                            <!--@if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif-->

                            <p class="text">
                                Forgotten your password or you login datails?
                                <a href="#">Get help</a> signing in
                            </p>
                        </div> <!--END OF ACTUAL FORM -->
				    </form>

                    <!-- =========== SIGN-UP FORM ============== -->
					<form action="" method="POST" autocomplete="off" class="sign-up-form">
						<div class="logo">
							<img src="/png/login/logo.png" alt="easyclass" />
						</div>

						<div class="heading">
							<h2>Get Started</h2>
							<h6>Already have an account?</h6>
							<a href="#" class="toggle">Sign in</a>
						</div>

						<div class="actual-form">
							<div class="input-wrap">
								<input
									type="text"
									name="username"
									minlength="1"
									class="input-field"
									autocomplete="off"
									required
								/>
								<label>Username</label>
							</div>

							<div class="input-wrap">
								<input
									type="email"
									class="input-field"
									autocomplete="off"
									required
								/>
								<label>Email</label>
							</div>

							<div class="input-wrap">
								<input
									type="password"
									name="password"
									minlength="1"
									class="input-field"
									autocomplete="off"
									required
								/>
								<label>Password</label>
							</div>

							<input type="submit" name="submit" value="Sign Up" class="sign-btn" />

							<p class="text">
								By signing up, I agree to the
								<a href="#">Terms of Services</a> and
								<a href="#">Privacy Policy</a>
							</p>
						</div> <!-- End of actual form -->
					</form>
                    
				</div> <!-- End of forms wrap div -->

				<div class="carousel">
					<div class="images-wrapper">
                        <img src="/png/login/image1.png" class="image img-1 show" alt="" />
                        <img src="/png/login/image2.png" class="image img-2" alt="" />
                        <img src="/png/login/image3.png" class="image img-3" alt="" />
					</div>

					<div class="text-slider">
						<div class="text-wrap">
							<div class="text-group">
								<h2>A place of merit</h2>
								<h2>A haven for greatness</h2>
								<h2>A Premier institution for education</h2>
							</div>
						</div>

						<div class="bullets">
							<span class="active" data-value="1"></span>
							<span data-value="2"></span>
							<span data-value="3"></span>
						</div>
					</div>
				</div> <!-- End of carousel -->
			</div> <!-- End of inner box -->
		</div> <!-- End of box -->
    </main>


    <!-- ================ LARAVEL DEFAULT ==================================
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
-->
</body>
</html>