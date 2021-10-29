		<?php
			$file_name = basename($_SERVER['PHP_SELF']);
			if($file_name != 'index.php') header('Location: denied.php');
			$myfile = fopen("./logs/winners.txt", "a") or die("Unable to open log file!");
			$txt = "Date : ". date('y-m-d H:i') ." | Name : " . $_COOKIE['name'] . " | IP : ". $_SERVER['REMOTE_ADDR'];
			fwrite($myfile, $txt);
			fclose($myfile);
		?>
			<p class="info">Good job, you've finihed Enigma</p>
			<p class="info">Bravo t'as finis l'énigme!</p>
			<p class="info">To restart from the begining, press this button</p>
			<p class="info">Pour revenir au début, cliquez sur ce bouton</p>
			<form class="questionForm" method="get" action="kill.php">
				<button>Restart!</button>
			</form>
