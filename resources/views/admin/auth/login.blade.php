<!DOCTYPE html>
<html lang="en">

 <head>
    <meta charset="utf-8">
    <title>AdminLogin</title>

	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">

<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
<link href="{{ asset('css/bootstrap-responsive.min.css') }}" rel="stylesheet">

<link href="{{ asset('css/font-awesome.css') }}" rel="stylesheet">
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600" rel="stylesheet">

<link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('css/pages/signin.css') }}" rel="stylesheet" type="text/css">

</head>

<body>

	<div class="navbar navbar-fixed-top">

	<div class="navbar-inner">

		<div class="container">

			<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</a>

			<a class="brand" href="#">
				Admin Login
			</a>

		</div> <!-- /container -->

	</div> <!-- /navbar-inner -->

</div> <!-- /navbar -->



<div class="account-container register">

	<div class="content clearfix">

		<form class="form-horizontal" role="form" method="POST" action="{{ url('/admin/login') }}">
      {{ csrf_field() }}
			<h1>Admin Login</h1>

			<div class="login-fields">

				<p>Login with your username password:</p>
				<div class="field form-group{{ $errors->has('username') ? ' has-error' : '' }}">
					<label for="email">Username:</label>
					<input type="text" id="username" name="username" value="" placeholder="Username" class="login"/>
				</div> <!-- /field -->

				<div class="field form-group{{ $errors->has('password') ? ' has-error' : '' }}">
					<label for="password">Password:</label>
					<input type="password" id="password" name="password" value="" placeholder="Password" class="login"/>
				</div> <!-- /field -->

			</div> <!-- /login-fields -->

			<div class="login-actions">

				<button class="button btn btn-primary btn-large">Login  </button>

			</div> <!-- .actions -->

		</form>

	</div> <!-- /content -->

</div> <!-- /account-container -->


<script src="{{ asset('js/jquery-1.7.2.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.js') }}"></script>

<script src="{{ asset('js/signin.js') }}"></script>

</body>

 </html>
