<?php
    require_once 'config.php';
    
     if(isset($_SESSION['access_token'])){
        
        header("location: index.php");
        exit();
    }
    
    $loginURL = $gclient->createAuthUrl();
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
            <div class="row justify-content-center">
                <div class="col-md-6 col-offset-3" align="center">
                <img src="images/socialloginlogo.jpg" width="100" height="100"><br><br>
                
                <form>
                    <input placeholder="Email..." name="email" class="form-control"><br>
                    <input type="password" placeholder="Password..." name="password" class="form-control"><br>
                    <input type="submit" value="Log in" class="btn btn-primary">
                    <input type="submit" onclick="window.location='<?php echo $loginURL ?>';" value="Log in with Google" class="btn btn-danger">
                    <input type="submit" value="Log in with GitHub" class="btn btn-danger">
                        
                </form>
                </div>
            </div>
        </div> 
    </body>
</html>
