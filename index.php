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
		<script>
			// Validate New passwords match
			function RegistrationPasswordsMatch(){
				var pass1 = document.getElementById('register_password').value;
				var pass2 = document.getElementById('register_password_confirm').value;
				if (pass1 == pass2) {
					return true;
				} else {
					alert('Passwords must match.')
				}
			}
		</script>
		<h3>Register</h3>
		<form action="index.php" method="post" onsubmit="return RegistrationPasswordsMatch()">
			<p>Username: <input name="user" type="text"></p>
			<p>Password: <input id="register_password" name="password" type="password"></p>
			<p>Password Confirm: <input id="register_password_confirm" type="password"></p>
			<input type="submit" value="Submit">
		</form>
	</div>
</body>
