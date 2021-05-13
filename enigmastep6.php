<?php
// Check that the loading page is index.php
// If not redirect to denied
$file_name = basename($_SERVER['PHP_SELF']);
if($file_name != 'index.php') header('Location: denied.php');
?>


			<img height="500px" src="/enigma/ressource/img/fr.jpg" alt="Blue white and red flag (vertical stripes)" />
			<p class="info">'Hello' --> 2 * SHA256</p>

			<form class="questionForm" method="post">
				<input name="reponse" placeholder="Answer" autocomplete="off" pattern="[A-Za-z0-9 ]*" autofocus />
				<button type="submit">Send</button>
			</form>

			<?php echo $wrong; ?>
