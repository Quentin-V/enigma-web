<?php
	if(isset($_POST['name'])) {
		setcookie('name', $_POST['name'], time() + (86400 * 30), '/');
		header('Location: /enigma/');
	}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title>Who are you ?</title>
		<link rel="stylesheet" href="css/master.css">
		<link rel="shortcut icon" href="ressource/favicon.ico">
	</head>
	<body>
		<p class="info" style="margin-top: 5vh;">Please tell us who you are (Nickname or Name)</p>
		<form class="questionForm" method="post">
			<input type="text" name="name"/>
			<br>
			<button type="submit">Let's go!</button>
		</form>
	</body>
</html>
