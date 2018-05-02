<?php
    
session_start();

$client_id = "81z6hf3i7fbhko";
$client_secret = "Tzcj38sH9IM7JkdE";
$redirect_uri = "http://localhost:81/MyOauthapp/LinkedInLogin/l-callback.php";
$csrf_token = "1735";
$scopes = "r_basicprofile%20r_emailaddress"; 

function curl($url,$para)
{
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $para);
    curl_setopt($ch, CURLOPT_POST, 1);
    
    $headers = [];
    $headers[]= "Content-type: application/x-www-form-urlencoded";
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    
    $result = curl_exec($ch);
    return $result;
}

function getCallback()
{
    $client_id = "81z6hf3i7fbhko"; 
    $client_secret = "Tzcj38sH9IM7JkdE";
    $redirect_uri = "http://localhost:81/MyOauthapp/LinkedInLogin/l-callback.php";
    $csrf_token = "1735";
    $scopes = "r_basicprofile%20r_emailaddress";

    if(isset($_REQUEST['code'])){
        
        $code = $_REQUEST['code'];
        $url = "https://www.linkedin.com/oauth/v2/accessToken";
        $params = [
            'client_id' => $client_id,
            'client_secret' => $client_secret,
            'redirect_uri' => $redirect_uri,
            'code' => $code,
            'grant_type' => 'authorization_code'

        ];
        
        $accessToken = curl($url, http_build_query($params));
     //  var_dump($accessToken);
       
        $arr = json_decode($accessToken);
       $a = $arr->access_token;
       // var_dump($accessToken);
     //   var_dump($arr);
       //echo $a;
        
        $url = "https://api.linkedin.com/v1/people/~:(id,firstName,lastName,pictureUrls::(original),headline,publicProfileUrl,location,industry,positions,email-address)?format=json&oauth2_access_token=$a";//. echo $a;
        
        $user = file_get_contents($url, false);
        
        return (json_decode($user));
       
    }
}

