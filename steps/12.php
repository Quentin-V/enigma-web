<?php
// Check that the loading page is index.php
// If not redirect to denied
$file_name = basename($_SERVER['PHP_SELF']);
if($file_name != 'index.php') header('Location: denied.php');
?>

			<p class="info">Wow, you're good, this wasn't that simple.</p>
			<p class="info">Let's test you one more time before sending the real challenges.</p>

			<div style="margin-bottom: 2vh; text-align:center;">
				<a class="downloadable" href="/enigma/ressource/js" download>Click here to download the answer</a>
			</div>

			<form class="questionForm" method="post">
				<input name="reponse" placeholder="Answer" autocomplete="off" autofocus />
				<button type="submit">Send</button>
			</form>

			<?php echo $wrong; ?>
