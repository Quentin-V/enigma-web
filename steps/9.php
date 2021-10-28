<?php
// Check that the loading page is index.php
// If not redirect to denied
$file_name = basename($_SERVER['PHP_SELF']);
if($file_name != 'index.php') header('Location: denied.php');
?>

			<p class="info">Great! That guy has made really impressive things right ?</p>
			<p class="info">Ewww this background color is not very beautiful</p>

			<img src="/enigma/ressource/img/awful_color.png" alt="awful_color"/>

			<form class="questionForm" method="post">
				<input name="reponse" placeholder="Answer" autocomplete="off"  autofocus />
				<button type="submit">Send</button>
			</form>

			<?php echo $wrong; ?>
