<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Mosquito Chan</title>
</head>
<body>
	<div>
		<h1>Mosquito Chan</h1>
	</div>
	<div>
		<h3>Upload</h3>
		<form action="index.php" method="post"
		enctype="multipart/form-data">
			<label for="file">Filename:</label>
			<input type="file" name="file" id="file"><br>
			<input type="submit" name="submit" value="Submit">
		</form>
	</div>
</body>
</html>