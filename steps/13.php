<?php
// Check that the loading page is index.php
// If not redirect to denied
$file_name = basename($_SERVER['PHP_SELF']);
if($file_name != 'index.php') header('Location: denied.php');
?>

			<p class="info">Ok, good job I guess</p>
			<p class="info">But can you do this one ?</p>

			<img height="500px" src="/enigma/ressource/img/me.png" alt="me" />

			<form class="questionForm" method="post">
				<input name="reponse" placeholder="Answer" autocomplete="off" autofocus />
				<button type="submit">Send</button>
			</form>

			<?php echo $wrong; ?>
