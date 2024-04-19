<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Registrazione</title>
		<link rel="stylesheet" href="register.css">
	</head>
	<body>
		<div class="container">
			<h2>Registrazione</h2>
			<form id="registerForm" action="register.php" method="POST">
				<div class="form-group">
					<label for="username">Username</label>
					<input type="text" id="username" name="username" required>
				</div>
				<div class="form-group">
					<label for="password">Password</label>
					<input type="password" id="password" name="password" required>
				</div>
				<div class="form-group">
					<label for="confirmPassword">Conferma Password</label>
					<input type="password" id="confirmPassword" name="confirmPassword" required>
				</div>
				<button type="submit">Registrati</button>
			</form>
			<div id="message"></div>
		</div>

		<script src="script.js"></script>
	</body>
</html>
