<?php

require 'init.php';

if(!isset($_SESSION['$user'])){
    header("location: index.php");
}

$user=$_SESSION['$user'];

?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Sign in easily</title>
    </head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <body>
        <div class="container" style="margin-top: 100px">
            <div class="row">
                <div class="col-md-3">
                    <img style="width: 80%" src="<?php echo $_SESSION['picture'] ?>">
                </div> 
                <div class="col-md-9">
                    <table class="table table-hover table-bordered">
                        <tbody>
                            <tr>
                                <td>First Name</td>
                                <td><?php echo $user->firstName ?></td>
                            </tr>
                            <tr>
                                <td>Last Name</td>
                                <td><?php echo $user->lastName ?></td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td><?php echo $user->emailAddress ?></td>
                            </tr>
                            <tr>
                                <td>Headline</td>
                                <td><?php echo $user->headline ?></td>
                            </tr>
                            <tr>
                                <td>Industry</td>
                                <td><?php echo $user->industry ?></td>
                            </tr>
                            
                        </tbody>
                    </table>
                </div> 
                
                <button><a href="logout.php">Logout</a></button>
            </div>
        </div>
    </body>
</html>

