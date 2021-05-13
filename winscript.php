<?php
	if(isset($_POST['comment'])) {
		$myfile = fopen("./logs/winners.txt", "a") or die("Unable to open log file!");
		$txt = "Date : ". date('y-m-d H:i') ." | IP : ". $_SERVER['REMOTE_ADDR'] ." | ID : " . session_id() . " | Comment : ".$_POST['comment']."\n";
		fwrite($myfile, $txt);
		fclose($myfile);
	}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title>Good job</title>
		<link rel="stylesheet" href="css/master.css">
		<link rel="shortcut icon" href="ressource/favicon.ico">
	</head>
	<body>
		<p class="info">You won, good job! Hope you enjoyed Enigma</p>
	</body>
</html>
