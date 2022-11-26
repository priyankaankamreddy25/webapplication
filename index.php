<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

?>

<!DOCTYPE html>
<html>
<head>
	<title>My website</title>
</head>
<body>

	<div id="box">
		
		<form method="post">
			location
			<input id="text" type="text" name="location"><br><br>

			image
			<input class="file-upload-input" type="file" onchange="readURL(this)" accept="Image/"><br><br>


			<input id="button" type="submit" value="submit"><br><br>

			<a href="logout.php">logout</a><br><br>
		</form>
	</div>

	Hello, <?php echo $user_data['user_name']; ?>
</body>
</html>