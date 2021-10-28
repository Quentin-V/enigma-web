<?php
// Check that the loading page is index.php
// If not redirect to denied
$file_name = basename($_SERVER['PHP_SELF']);
if($file_name != 'index.php') header('Location: denied.php');
?>

			<p class="info">What the hell is that ?</p>

			<img src="/enigma/ressource/img/asl.png" alt="Some weird shapes with hands" />

			<form class="questionForm" method="post">
				<input name="reponse" placeholder="Answer" autocomplete="off" pattern="[A-Za-z0-9 ]*" autofocus />
				<button type="submit">Send</button>
			</form>

			<?php echo $wrong; ?>
