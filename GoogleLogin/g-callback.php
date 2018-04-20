<?php

    require_once 'config.php';

    if(isset($_GET['code'])){
    
        $token = $gclient->fetchAccessTokenWithAuthCode($_GET['code']);
        $_SESSION['access_token'] = $token;
    }

    $oauth = new Google_Service_Oauth2($gclient);
    $userData = $oauth->userinfo_v2_me->get();

    $_SESSION['id'] = $userData['id'];
    $_SESSION['email'] = $userData['email'];
    $_SESSION['gender'] = $userData['gender'];
    $_SESSION['picture'] = $userData['picture'];
    $_SESSION['familyName'] = $userData['familyName'];
    $_SESSION['givenName'] = $userData['givenName'];
    
    header('location: index.php');
    exit();
?>
<html>
    
    <head>
        <title>
            
        </title>
    </head>
    <body>
        
    </body>
</html>