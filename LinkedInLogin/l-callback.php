<?php

require_once 'init.php';
$user = getCallback();
$_SESSION['user'] = $user;
header("loction: landing.php");

?>

 
