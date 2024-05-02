<?php
	require_once("../controller/lib/_libs.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Registrazione</title>
	<!-- Font Icon -->
	<link rel="stylesheet" href="../../public/assets/fonts/material-icon/css/material-design-iconic-font.min.css?v=<?php echo $vers; ?>">
	<!-- Main css -->
	<link rel="stylesheet" href="../../public/assets/css/style.css?v=<?php echo $vers; ?>">
</head>

<body>
	<div class="main">
		<!-- Sign up form -->
		<section class="signup">
			<div class="container">
				<div class="signup-content">
					<div class="signup-form">
						<h2 class="form-title">Registrazione</h2>
						<form method="POST" class="register-form" id="register-form" action="../controller/registerController.php">
							<div class="form-group">
								<label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
								<input type="text" name="name" id="name" placeholder="Username" />
							</div>
							<div class="form-group">
								<label for="email"><i class="zmdi zmdi-email"></i></label>
								<input type="email" name="email" id="email" placeholder="Email" />
							</div>
							<div class="form-group">
								<label for="pass"><i class="zmdi zmdi-lock"></i></label>
								<input type="password" name="pass" id="pass" placeholder="Password" />
							</div>
							<div class="form-group">
								<label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
								<input type="password" name="re_pass" id="re_pass" placeholder="Ripeti la password" />
							</div>
							<div class="form-group">
								<input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
								<label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in <a href="#" class="term-service">Terms of service</a></label>
							</div>
							<div class="form-group form-button">
								<input type="submit" name="signup" id="signup" class="form-submit" value="Registrati" />
							</div>
						</form>
					</div>
					<div class="signup-image">
						<figure><img src="../../public/assets/img/draw2-2.png" alt="sing up image"></figure>
						<a href="login.php" class="signup-image-link">Ho già un profilo</a>

						<span class="">Versione: <?php echo $config['site']['version']; ?></span>
					</div>
				</div>
			</div>
		</section>
	</div>
	<!-- JS -->
	<script src="../../public/assets/js/script.js?v=<?php echo $vers; ?>"></script>
	<script src="../../public/assets/js/register.js?v=<?php echo $vers; ?>"></script>
	<script src="../../public/assets/js/jquery.min.js?v=<?php echo $vers; ?>"></script>
	<script src="../../public/assets/js/main.js?v=<?php echo $vers; ?>"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
