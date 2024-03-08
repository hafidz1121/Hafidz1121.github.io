<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Login</title>
		<meta charset="utf-8" />
		<meta name="description" content="Saul HTML Free - Bootstrap 5 HTML Multipurpose Admin Dashboard Theme" />
		<meta name="keywords" content="Saul, bootstrap, bootstrap 5, dmin themes, free admin themes, bootstrap admin, bootstrap dashboard" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta property="og:locale" content="en_US" />
		<meta property="og:type" content="article" />
		<meta property="og:title" content="Saul HTML Free - Bootstrap 5 HTML Multipurpose Admin Dashboard Theme" />
		<meta property="og:url" content="https://keenthemes.com/products/saul-html-pro" />
		<meta property="og:site_name" content="Keenthemes | Saul HTML Free" />
		<link rel="canonical" href="https://preview.keenthemes.com/saul-html-free" />
		<link rel="shortcut icon" href="{{asset('assets_admin')}}/media/logos/favicon.ico" />
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
		<link href="{{asset('assets_admin')}}/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
		<link href="{{asset('assets_admin')}}/css/style.bundle.css" rel="stylesheet" type="text/css" />
	</head>
	<body id="kt_body" class="app-blank">
		<script>var defaultThemeMode = "light"; var themeMode; if ( document.documentElement ) { if ( document.documentElement.hasAttribute("data-bs-theme-mode")) { themeMode = document.documentElement.getAttribute("data-bs-theme-mode"); } else { if ( localStorage.getItem("data-bs-theme") !== null ) { themeMode = localStorage.getItem("data-bs-theme"); } else { themeMode = defaultThemeMode; } } if (themeMode === "system") { themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light"; } document.documentElement.setAttribute("data-bs-theme", themeMode); }</script>
		<div class="d-flex flex-column flex-root" id="kt_app_root">
			<div class="d-flex flex-column flex-lg-row flex-column-fluid">
				<div class="d-flex flex-column flex-lg-row-auto bg-primary w-xl-600px positon-xl-relative">
					<div class="d-flex flex-column position-xl-fixed top-0 bottom-0 w-xl-600px scroll-y">
						<div class="d-flex flex-row-fluid flex-column text-center p-5 p-lg-10 pt-lg-20">
							<a href="#" class="py-2 py-lg-20">
								<img alt="Logo" src="{{asset('assets_admin')}}/media/logos/mail.svg" class="h-40px h-lg-50px" />
							</a>
							<h1 class="d-none d-lg-block fw-bold text-white fs-2qx pb-5 pb-md-10">Welcome to Saul</h1>
							<p class="d-none d-lg-block fw-semibold fs-2 text-white">Plan your blog post by choosing a topic creating
							<br />an outline and checking facts</p>
						</div>
					</div>
				</div>
				<div class="d-flex flex-column flex-lg-row-fluid py-10">
					<div class="d-flex flex-center flex-column flex-column-fluid">
						<div class="w-lg-500px p-10 p-lg-15 mx-auto">
							<form class="form w-100" novalidate="novalidate" id="kt_sign_in_form" data-kt-redirect-url="{{ route('home') }}" method="POST" action="{{ route('login.process') }}">
                                @csrf
								<div class="text-center mb-10">
									<h1 class="text-dark mb-3">Sign In to Saul</h1>
									<div class="text-gray-400 fw-semibold fs-4">New Here?
									<a href="register" class="link-primary fw-bold">Create an Account</a></div>
								</div>
								<div class="fv-row mb-10">
									<label class="form-label fs-6 fw-bold text-dark">Email</label>
									<input class="form-control form-control-lg form-control-solid" type="email" name="email" autocomplete="email" autofocus />
								</div>
								<div class="fv-row mb-10">
									<div class="d-flex flex-stack mb-2">
										<label class="form-label fw-bold text-dark fs-6 mb-0">Password</label>
										<a href="#" class="link-primary fs-6 fw-bold">Forgot Password ?</a>
									</div>
									<input class="form-control form-control-lg form-control-solid" type="password" name="password" autocomplete="off" />
								</div>
								<div class="text-center">
									<button type="submit" id="kt_sign_in_submit" class="btn btn-lg btn-primary w-100 mb-5">
										<span class="indicator-label">Continue</span>
										<span class="indicator-progress">Please wait...
										<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
									</button>
									<div class="text-center text-muted text-uppercase fw-bold mb-5">or</div>
									<a href="#" class="btn btn-flex flex-center btn-light btn-lg w-100 mb-5">
									<img alt="Logo" src="{{asset('assets_admin')}}/media/svg/brand-logos/google-icon.svg" class="h-20px me-3" />Continue with Google</a>
									<a href="#" class="btn btn-flex flex-center btn-light btn-lg w-100 mb-5">
									<img alt="Logo" src="{{asset('assets_admin')}}/media/svg/brand-logos/facebook-4.svg" class="h-20px me-3" />Continue with Facebook</a>
									<a href="#" class="btn btn-flex flex-center btn-light btn-lg w-100">
									<img alt="Logo" src="{{asset('assets_admin')}}/media/svg/brand-logos/apple-black.svg" class="theme-light-show h-20px me-3" />
									<img alt="Logo" src="{{asset('assets_admin')}}/media/svg/brand-logos/apple-black-dark.svg" class="theme-dark-show h-20px me-3" />Continue with Apple</a>
								</div>
							</form>
						</div>
					</div>
					<div class="d-flex flex-center flex-wrap fs-6 p-5 pb-0">
						<div class="d-flex flex-center fw-semibold fs-6">
							<a href="https://keenthemes.com" class="text-muted text-hover-primary px-2" target="_blank">About</a>
							<a href="https://devs.keenthemes.com" class="text-muted text-hover-primary px-2" target="_blank">Support</a>
							<a href="https://keenthemes.com/products/saul-html-pro" class="text-muted text-hover-primary px-2" target="_blank">Purchase</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<script src="{{asset('assets_admin')}}/plugins/global/plugins.bundle.js"></script>
		<script src="{{asset('assets_admin')}}/js/scripts.bundle.js"></script>
		<script src="{{asset('assets_admin')}}/js/custom/authentication/sign-in/general.js"></script>
	</body>
</html>