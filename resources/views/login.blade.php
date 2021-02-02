@extends('master')
@section("content")
<!--
<h1>Login Page</h1>
<button class="btn btn-primary">Click on me</button>
-->


<div class="container custom-login">
	<div class="row">
		<div class="col-sm-4 col-sm-offset-4">
			<form action="login" method="POST">

				<p class="signin">Sign in</p>



			  <div class="form-group">
			  	@csrf
			   <!-- <label for="exampleInputEmail1">Email address</label> -->
			    <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
			  </div>
			  <div class="form-group">
			    <!-- <label for="exampleInputPassword1">Password</label> -->
			    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
			  </div>
			  <button type="submit" class="btn btn-default">Login</button>
			  <!-- <a class="submit" align="center">Log in</a> -->

			</form>
		</div>
	</div>


<div class="login-register">
	<p>Not a user? Register <a href="/register">here</a> </p>
</div>


</div>




<!--
  <div class="container custom-login">
    <p class="signin">Sign in</p>

    <form class="form-group">
      <input class="email " type="email" align="center" placeholder="Email">
      <input class="password" type="password" align="center" placeholder="Password">

      <a class="submit" align="center">Sign in</a>

      <p class="forgot" align="center"><a href="#">Forgot Password?</p>
                            
    </div>
-->


@endsection