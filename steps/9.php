<?php
// Check that the loading page is index.php
// If not redirect to denied
$file_name = basename($_SERVER['PHP_SELF']);
if($file_name != 'index.php') header('Location: denied.php');
?>
			<p class="info">Wow you found my sign, good job :)</p>
			<p class="info">Omg I WANT to ride this ferris wheel it's so beautiful</p>
			<img width="" height="400px" src="/enigma/ressource/img/ferris_wheel_<?php echo (date("i") % 3) + 1?>.png" alt="a lovely ferris wheel">


			<form class="questionForm" method="post">
				<input name="reponse" placeholder="Answer" autocomplete="off" pattern="[A-Za-z0-9 :]*" autofocus />
				<button type="submit">Send</button>
			</form>

			<?php echo $wrong; ?>
