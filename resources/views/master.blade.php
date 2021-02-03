<!DOCTYPE html>	
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>E-comm Project</title>

	<link rel="stylesheet" href="{{ asset('/css/style.css') }}"> 

<!-- Ubuntu font -->
<link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">

<!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">

<!-- Roboto font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700&display=swap">

<!-- Social media icons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">


	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Latest compiled and minified jQuery -->
<script
  src="https://code.jquery.com/jquery-3.5.1.min.js"
  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
  crossorigin="anonymous"></script>

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>

<body>
	{{View::make('header')}}
	@yield('content')
	{{View::make('footer')}}
	
</body>

<!--
<style>
	.custom-login {
		height: 500px;
		padding-top: 100px;
	}
	img.slider-img {
		height: 400px !important;
	}
	.custom-product {
		height: 600px;
	}
	.slider-text {
		background-color: #35443585 !important;
	}
	.trending-img {
		height: 100px;
	}
	.trending-item {
		float: left;
		width: 20%;
	}
	.trending-wrapper {
		margin: 30px;
	}
	.detail-img {
		height: 200px;
	}
	.search-box {
		width: 500px !important;
	}

	.cart-list-divider {
		border-bottom: 1px solid #ccc;
		margin-bottom: 20px;
		padding-bottom: 20px;
	}

</style>
-->

<!--
<script>
	$(document).ready(function(){
		$("button").click(function(){
			alert("all set")		
		})
	})
</script>
-->

</html>