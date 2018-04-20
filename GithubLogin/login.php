<?php
require 'config.php';

goToAuthUrl();

if(isset($_SESSION['user'])){
    header("location: git-callback.php");
}

?>
<html>
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    </head>
    <body>
        <a href="login.php">Github</a>
    </body>
</html> 