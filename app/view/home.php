<?php
require_once("../controller/lib/_libs.php");
?>
<!doctype html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Home</title>
	<!-- Font Icon -->
	<link rel="stylesheet" href="../../public/assets/fonts/material-icon/css/material-design-iconic-font.min.css?v=<?php echo $vers; ?>">
	<!-- Main css -->
	<link rel="stylesheet" href="../../public/assets/css/style.css?v=<?php echo $vers; ?>">
</head>

<body>
	<div class="wrapper d-flex align-items-stretch">
		<nav id="sidebar">
			<div class="custom-menu">
				<button type="button" id="sidebarCollapse" class="btn btn-primary">
				</button>
			</div>
			<div class="img bg-wrap text-center py-4" style="background-image: url(../../public/assets/img/bg_1.jpg);">
				<div class="user-logo">
					<div class="img" style="background-image: url(../../public/assets/img/logo.jpg);"></div>
					<h3>Utente da php</h3>
				</div>
			</div>
			<ul class="list-unstyled components mb-5">
				<li class="active">
					<a href="#"><span class="fa fa-home mr-3"></span> Home</a>
				</li>
				<li>
					<a href="#"><span class="fa fa-download mr-3 notif"><small class="d-flex align-items-center justify-content-center">5</small></span> Download</a>
				</li>
				<li>
					<a href="#"><span class="fa fa-gift mr-3"></span> Gift Code</a>
				</li>
				<li>
					<a href="#"><span class="fa fa-trophy mr-3"></span> Top Review</a>
				</li>
				<li>
					<a href="#"><span class="fa fa-cog mr-3"></span> Settings</a>
				</li>
				<li>
					<a href="#"><span class="fa fa-support mr-3"></span> Support</a>
				</li>
				<li>
					<a href="#"><span class="fa fa-sign-out mr-3"></span> Sign Out</a>
				</li>
			</ul>

		</nav>

		<!-- Page Content  -->
		<div id="content" class="p-4 p-md-5 pt-5">
			<h2 class="mb-4">Sidebar #09</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		</div>
		<?php require_once("footer.php"); ?>
	</div>
	<?php require_once("script.php"); ?>
	<!-- Libreria specifica per il file -->
	<script src="../../public/assets/js/myjs/home.js?v=<?php echo $vers; ?>"></script>
</body>

</html>
