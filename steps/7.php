<?php
// Check that the loading page is index.php
// If not redirect to denied
$file_name = basename($_SERVER['PHP_SELF']);
if($file_name != 'index.php') header('Location: denied.php');
?>
			<img width="" height="" src="/enigma/ressource/img/step4.png" alt="some little dots then A 13 53 10">

			<form class="questionForm" method="post">
				<input name="reponse" placeholder="Answer" autocomplete="off" pattern="[A-Za-z0-9 ]*" autofocus />
				<button type="submit">Send</button>
			</form>

			<?php echo $wrong; ?>
