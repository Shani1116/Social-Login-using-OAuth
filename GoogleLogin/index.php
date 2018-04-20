<?php
    session_start();
    
    if(!isset($_SESSION['access_token'])){
        
        header("location: login.php");
        exit();
    }
?>
<!doctype html>
<html lang="en">
    
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>
            Sign in easily
        </title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    </head>
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
                                <td>ID</td>
                                <td><?php echo $_SESSION['id'] ?></td>
                            </tr>
                            <tr>
                                <td>First Name</td>
                                <td><?php echo $_SESSION['givenName'] ?></td>
                            </tr>
                            <tr>
                                <td>Last Name</td>
                                <td><?php echo $_SESSION['familyName'] ?></td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td><?php echo $_SESSION['email'] ?></td>
                            </tr>
                            <tr>
                                <td>Gender</td>
                                <td><?php echo $_SESSION['gender'] ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div> 
            </div>
        </div> 
    </body>
</html>
