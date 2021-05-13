<?php
// Check that the loading page is index.php
// If not redirect to denied
$file_name = basename($_SERVER['PHP_SELF']);
if($file_name != 'index.php') header('Location: denied.php');
?>

			<p class="info">Nice, you found the button, we can start now.</p>
			<p class="info">Will you find what links these pictures together ?</p>

			<img height="500px" src="/enigma/ressource/img/what_links_them.png" alt="An apple, broken chains and some buildings" />

			<form class="questionForm" method="post">
				<input name="reponse" placeholder="Answer" autocomplete="off" pattern="[A-Za-z0-9 ]*" autofocus />
				<button type="submit">Send</button>
			</form>

			<?php echo $wrong; ?>
