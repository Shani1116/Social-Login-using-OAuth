<!DOCTYPE html>

<?php
    require_once 'init.php';
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Sign in easily</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    </head>
    <body>
        
        <h1><a href="<?php echo "https://www.linkedin.com/oauth/v2/authorization?response_type=code&client_id={$client_id}&redirect_uri={$redirect_uri}&state={$csrf_token}&scope={$scopes}" ;?>">Sign in with LinkedIn</a></h1>
    </body>
</html>
