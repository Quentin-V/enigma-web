<!DOCTYPE html>
<?php
include('./scripts.php');
?>
<html lang="en" dir="ltr">

	<head>
		<?php
		$_SESSION['css'] = isset($_SESSION['css']) ? $_SESSION['css'] : 'start';
		$_SESSION['page'] = isset($_SESSION['page']) ? $_SESSION['page'] : 'enigmastart';
		?>

		<meta charset="utf-8">
		<link rel="stylesheet" href="css/master.css">
		<link rel="stylesheet" href="css/<?php echo $_SESSION['css']; ?>.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<link rel="shortcut icon" href="ressource/favicon.ico">
		<title>Enigma - Step n°<?php echo $_SESSION['step']?></title>

	</head>

	<body topmargin="0" leftmargin="0" rightmargin="0" bottommargin="0">
		<div id="content">
			<?php include($_SESSION['page'] . '.php') ?>

		</div>

	<script>
		$( document ).ready(function() {
			setInterval(function() {
				$(".wrong").fadeOut('Slow');
			}, 3000)
		})
	</script>

	</body>



</html>
