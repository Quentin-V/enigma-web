<?php
session_start();
session_destroy();
unset($_COOKIE['enigmastep']);
setcookie('enigmastep', null, -1, '/');
header("Location:/enigma/");
?>
