<?php
    session_start();
    
    include '../vendor/autoload.php'; //'vendor/autoload.php';  //C:\xampp\htdocs\MyOauthapp\GoogleAPI\vendor\autoload.php
    
    
    $gclient = new Google_Client();
    $gclient->setClientId("954929052306-jvafvb0q51k5coq9e0dce5t0887agbei.apps.googleusercontent.com");
    $gclient->setClientSecret("qoRvFanoybEmg95SiPic7m_u");
    $gclient->setApplicationName("Sign in easily");
    $gclient->setRedirectUri("http://localhost:81/MyOauthapp/GoogleLogin/g-callback.php");
    $scope_or_scopes = "https://googleapis.com/auth/plus.login https://googleapis.com/auth/userinfo.email";
    $gclient->addScope($scope_or_scopes);
    $loginURL =$gclient->createAuthUrl();
?>

