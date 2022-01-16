<?php
// Check that the loading page is index.php
// If not redirect to denied
$file_name = basename($_SERVER['PHP_SELF']);
if($file_name != 'index.php') header('Location: denied.php');
?>
            <p class="info">Great, you found it!</p>

            <p class="question">
                +7 <img width="50px" src="/enigma/ressource/img/pink.png"> 73
            </p>

            <form class="questionForm" method="post">
                <input name="reponse" placeholder="Answer" autocomplete="off" pattern="[A-Za-z]*" autofocus />
                <button type="submit">Send</button>
            </form>

            <?php echo $wrong; ?>