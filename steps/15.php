<?php
// Check that the loading page is index.php
// If not redirect to denied
$file_name = basename($_SERVER['PHP_SELF']);
if($file_name != 'index.php') header('Location: denied.php');
?>
			<img class="map" src="/enigma/ressource/img/ti_amo__meta.png" alt="Map">

			<form class="questionForm" method="post">
				<input name="reponse" placeholder="임 .... 대" autocomplete="off" pattern="[A-Za-z0-9 ]*" autofocus />
				<button type="submit">Send</button>
			</form>

			<?php echo $wrong; ?>
