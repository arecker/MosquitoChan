<!DOCTYPE HTML>
<head>
	<title>Mosquito Chan</title>
	<style>
		.error { color: red;}
	</style>
</head>
<body>
	<div class="banner">
		<h1>Mosquito Chan</h1>
		<p><em>A Place for posting</em></p>
	</div>
	<div class="login">
		<h3>Register</h3>
		<form action="index.php" method="post" onsubmit="return RegisterationPasswordsMatch()">
			<div class="error" id="registration_error"></div>
			<p>Username: <input name="user" type="text"></p>
			<p>Password: <input id="register_password" name="password" type="password"></p>
			<p>Password Confirm: <input id="register_password_confirm" type="password"></p>
			<input type="button" onclick="submit" value="Submit">
		</form>
		<script type="text/JavaScript">
			// Validate New passwords match
			function RegistrationPasswordsMatch() {
				var pass1 = document.getElementById('register_password').value;
				var pass2 = document.getElementById('register_password_confirm').value;
				if (pass1 == pass2) {
					return true;
				} else {
					pass1 = '';
					pass2 = '';
					console.log('here');
					document.getElementById('registration_error').innerHTML = '<p>The Passwords do not match.</p>';
					return false;
				}
			}
		</script>
	</div>
</body>
