<?php
session_start();
session_destroy();
unset($_COOKIE['enigmastep']);
unset($_COOKIE['name']);
setcookie('enigmastep', null, -1, '/');
setcookie('name', null, -1, '/');
header("Location:/enigma/");
?>
