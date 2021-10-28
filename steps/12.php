<?php
// Check that the loading page is index.php
// If not redirect to denied
$file_name = basename($_SERVER['PHP_SELF']);
if($file_name != 'index.php') header('Location: denied.php');
?>

			<p class="info">Ahh, I love music !</p>
			<p class="info">An other picture with a weird background, I wonder what could that mean</p>

			<img src="/enigma/ressource/img/woman.png" alt="woman"/>

			<form class="questionForm" method="post">
				<input name="reponse" placeholder="Answer" autocomplete="off" autofocus />
				<button type="submit">Send</button>
			</form>

			<?php echo $wrong; ?>
