<?php
// Check that the loading page is index.php
// If not redirect to denied
$file_name = basename($_SERVER['PHP_SELF']);
if($file_name != 'index.php') header('Location: denied.php');
?>
			<p class="info">Sound required</p>
			<audio preload="auto" autoplay loop>
				<source src="/enigma/ressource/audio/step4.wav" type="audio/wav">
				Cette enigme ne fonctionne pas sous Internet Explorer ou Edge.
				This does not work with Explorer or Edge
			</audio>
			<form class="questionForm" method="post">
				<input name="reponse" placeholder="Answer" autocomplete="off" pattern="[A-Za-z]*" autofocus />
				<button type="submit">Send</button>
			</form>

			<?php echo $wrong; ?>
