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
					document.getElementById('registration_error').innerHTML = 'Passwords must match.'
				}
			}
		</script>
		<h3>Register</h3>
		<form action="index.php" method="post" onsubmit="return RegistrationPasswordsMatch()">
			<div id="registration_error" class="error"></div>
			<p>Username: <input name="new_user" type="text"></p>
			<p>Password: <input id="register_password" name="new_password" type="password"></p>
			<p>Password Confirm: <input id="register_password_confirm" type="password"></p>
			<input type="submit" value="Submit">
		</form>
	</div>
</body>
<footer>
	<?php
		include('connection.php');

		// Register New User
		if ($_POST['new_user'] && $_POST['new_password']) {
			CreateNewUser($_POST['new_user'], $_POST['new_password']);
		}

		function CreateNewUser($username, $password){
			$connection = mysql_connect($dbhost, $dbuser, $dbpass);
			mysql_select_db('Mosquito');
			$sql = 'INSERT INTO user (username, password) VALUES($username, $password);'
			$returned = mysql_query($sql, $connection);

			// Check for failure
			if (! $returned )
			{
				die('Could not get data: ' . mysql_error());
			}
		}
	?>
</footer>
