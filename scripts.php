<?php
session_start();


// The 2 first are nada because we start steps at 1 and the first step is just a button so there is no answer
// reponses means answer
$reponses = array('nada',
                  'nada',
			   'newyorkcity',
			   'giveyourblood',
			   'dubnium',
			   'fag',
			   'chicoutimi',
			   '11e9a949ab811e7357ec1a75e50d88f4445af2de3d482490b7d8d4f309f4cb48',
			   'enigma',
			   '<3',
			   'dream',
			   'lunaire',
			   'discomfort',
			   '0192840721',
			   'cacahuette');
$wrong = ''; // Init wrong

// Script étape 1 (start)
if(isset($_POST['hiddenBtn'])) {
	$_SESSION['step'] = 2;
	$_SESSION['css'] = 'step2';
	$_SESSION['page'] = 'steps/2';
}


// Script global
if(isset($_POST['reponse'])) {
	$wrong = '';
	$repUser = $_POST['reponse'];
	$repUser = strtolower($repUser); // Correction case
	$repUser = str_replace(' ', '', $repUser); // Correction espaces

	if($repUser == $reponses[$_SESSION['step']]) {
		++$_SESSION['step'];
		setcookie('enigmastep', $_SESSION['step'], time() + (86400 * 30), '/');
		$strStep = strval($_SESSION['step']);
		$_SESSION['css'] = 'step' . $strStep; // For specific css
		$_SESSION['page'] = 'steps/' . $strStep;
	}else {
		$wrong = '<p class="wrong">Wrong answer</p>';
	}

	if($_SESSION['step'] == sizeof($reponses)) {
		$_SESSION['page'] = 'win'; // Can also create another step that is just the win page
	}
}else {
	if(isset($_COOKIE['enigmastep'])) {
		$_SESSION['step'] = $_COOKIE['enigmastep'];
		$_SESSION['page'] = 'steps/' . strval($_SESSION['step']);
		$_SESSION['css'] = 'step' . strval($_SESSION['step']);
	}
	if(!isset($_SESSION['step'])) {
		$_SESSION['step'] = 1;
	}
}

function addlog($action) {
	return; // Uncommment to enbale logs
	$date = date('y-m-d');
	$myfile = fopen('logs/'.$date.".txt", "a") or die("Unable to open log file!");
	$txt = "Heure : ". date('H:i') ." | IP : ". $_SERVER['REMOTE_ADDR'] ." | ID : " . session_id() . " | Action : ".$action."\n";
	fwrite($myfile, $txt);
	file_put_contents('./log_'.date("j.n.Y").'.log', $log, FILE_APPEND);
	fclose($myfile);
}
?>
