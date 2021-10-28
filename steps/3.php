<?php
// Check that the loading page is index.php
// If not redirect to denied
$file_name = basename($_SERVER['PHP_SELF']);
if($file_name != 'index.php') header('Location: denied.php');
?>
			<p class="info">Good job, this wasn't very hard right ?</p><br/>
			<p class="info2">You will certainly find this one a bit harder.</p><br/>

			<p class="question">4-444-888-33 999-666-88-777 22-555-666-666-3</p><br/>

			<form method="post" class="questionForm">
				<input name="reponse" type="text" pattern="[A-Za-z0-9 ]*" required placeholder="Answer" autocomplete="off" autofocus />
				<button type="submit">Send</button>
			</form>

			<?php echo $wrong; ?>
