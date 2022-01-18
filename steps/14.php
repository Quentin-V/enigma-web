<?php
// Check that the loading page is index.php
// If not redirect to denied
$file_name = basename($_SERVER['PHP_SELF']);
if($file_name != 'index.php') header('Location: denied.php');
?>

			<p class="info">Obviously you had to to the reverse processing with a hashing function</p>
			<p class="info">But don't worry the real challenge begins now.</p>

			<img height="500px" src="/enigma/ressource/img/FUUKK.jpg" alt="FUUKK" />

			<form class="questionForm" method="post">
				<input name="reponse" placeholder="Answer" autocomplete="off" pattern="[A-Za-z0-9 ]*" autofocus />
				<button type="submit">Send</button>
			</form>

			<?php echo $wrong; ?>
