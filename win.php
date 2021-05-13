		<?php
			$file_name = basename($_SERVER['PHP_SELF']);
			if($file_name != 'index.php') header('Location: denied.php');
		?>
			<p class="info">Good job, you've finihed Enigma</p>
