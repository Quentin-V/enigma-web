<?php
// Check that the loading page is index.php
// If not redirect to denied
$file_name = basename($_SERVER['PHP_SELF']);
if($file_name != 'index.php') header('Location: denied.php');
?>
			<p class="info">You're not that bad aren't you, I'm gonna increase the level little by little</p>
			<p class="info">I love hashing algorithms, but what I love even more is space</p>
			<img width="" height="" src="/enigma/ressource/img/planet.jpg" alt="a big planet">

			<form class="questionForm" method="post">
				<input name="reponse" placeholder="Answer" autocomplete="off" pattern="[A-Za-z0-9 ]*" autofocus />
				<button type="submit">Send</button>
			</form>

			<?php echo $wrong; ?>
