<!DOCTYPE HTML>
<!--
	Industrious by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>Pathfinder</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link rel="stylesheet" href="assets/css/main.css" />

		<script>
	  $( function() {
	    $( "#speed" ).selectmenu();

	    $( "#files" ).selectmenu();

	    $( "#number" )
	      .selectmenu()
	      .selectmenu( "menuWidget" )
	        .addClass( "overflow" );

	    $( "#salutation" ).selectmenu();
	  } );
	  </script>
	</head>
	<body class="is-preload">

		<!-- Header -->
			<header id="header">
				<a class="logo" href="index.php">Pathfinder</a>
				<nav>
					<a href="#menu">Menu</a>
				</nav>
			</header>

		<!-- Nav -->
			<nav id="menu">
				<ul class="links">
					<li><a href="index.php">Home</a></liadmin>
					<li><a href="admin.php">Admin</a></li>
					<li><a href="results.php">Results</a></li>
					<li><a href="generic.php">Survey</a></li>
				</ul>
			</nav>

		<!-- Banner -->
			<section id="banner2">
				<div class="inner">
					<h1>Pathfinder Results</h1>
					<p>Review and view the results of an assessment.</div>
			</section>

		<!-- Highlights -->
			<section class="wrapper">
				<div class="inner">
					<div class="highlights">
						<form action="#">

  <fieldset>
    <label for="customer">Select a Customer</label>
    <select name="customer" id="customer">
			<?php
			## Get customer list as drop down
			$response = file_get_contents('http://pathfinderapp-pathfinder.6923.rh-us-east-1.openshiftapps.com/api/pathfinder/customers/');
			foreach (json_decode($response,true) as $customer) {
			print "<option>" . $customer['CustomerName'] . "</option>";
			}
			 ?>

    </select>
	</fieldset>
	</form>
					</div>
				</div>
			</section>



		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>
