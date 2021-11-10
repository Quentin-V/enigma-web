<?php
// Check that the loading page is index.php
// If not redirect to denied
$file_name = basename($_SERVER['PHP_SELF']);
if($file_name != 'index.php') header('Location: denied.php');
?>

			<p class="info">Wow you're really strong, this one was clearly one of the hardest !</p>
			<p class="info">This is the last one, you're so close from the goal now.</p>

			<img src="/enigma/ressource/img/Eugene_Roshal.jpeg" alt="Eugene_Roshal"/>

			<form class="questionForm" method="post">
				<input name="reponse" placeholder="Final Answer" autocomplete="off" pattern="[A-Za-z0-9 ]*" autofocus />
				<button type="submit">Send</button>
			</form>

			<?php echo $wrong; ?>
