<?php
// Check that the loading page is index.php
// If not redirect to denied
$file_name = basename($_SERVER['PHP_SELF']);
if($file_name != 'index.php') header('Location: denied.php');
?>

			<p class="info">Great! That guy has made really impressive things right ?</p>
			<p class="info">Sometimes that's the smallest details that are the most important</p>

			<img width="500px" src="/enigma/ressource/img/my_cat_lsb.png" alt="My Beautiful Cat"/>

			<form class="questionForm" method="post">
				<input name="reponse" placeholder="Answer" autocomplete="off"  autofocus />
				<button type="submit">Send</button>
			</form>

			<?php echo $wrong; ?>
