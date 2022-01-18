<?php
// Check that the loading page is index.php
// If not redirect to denied
$file_name = basename($_SERVER['PHP_SELF']);
if($file_name != 'index.php') header('Location: denied.php');
?>
            <p class="info">Great, you found it!</p>

            <img width="300px" src="/enigma/ressource/img/pink.png">

            <form class="questionForm" method="post">
                <input name="reponse" placeholder="Answer" autocomplete="off" autofocus />
                <button type="submit">Send</button>
            </form>

            <?php echo $wrong; ?>