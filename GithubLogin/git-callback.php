<?php

require 'config.php';

fetchData();

if(!isset($_SESSION['user'])){
    header("location: login.php");
}
?>

<html>
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    </head>
    <body>
        <?php var_dump($_SESSION['payload']) ?>
        <a href="logout.php">Logout</a>
    </body>
</html>
