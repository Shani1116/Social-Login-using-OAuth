<?php
function goToAuthUrl(){
    
    $client_id = "4850d0b03503bd6498d7";
    $redirect_url="http://localhost:81/MyOauthapp/GithubLogin/git-callback.php";
    
    if($_SERVER['REQUEST_METHOD']=='GET'){
        $url = 'https://github.com/login/oauth/authorize?client_id='. $client_id. '&redirect_url='. $redirect_url.'&scope=user';
        header("location: $url");
    }
}

function fetchData(){
    
    $client_id = "4850d0b03503bd6498d7";
    $redirect_url="http://localhost:81/MyOauthapp/GithubLogin/git-callback.php";
    
    if($_SERVER['REQUEST_METHOD'] == 'GET'){
        
        if(isset($_GET['code'])){
            $code=$_GET['code'];
            $post= http_build_query(array(
                'client_id'=>$client_id,
                'redirect_url'=>$redirect_url,
                'client_secret'=>'10df51c4502ef51479545003d4a70ed3522c7d98',
                'code'=>$code,
            ));
            
        }
        $access_data= file_get_contents("https://github.com/login/oauth/access_token?".$post);
        $exploded1 = explode('access_token=',$access_data);
        $exploded2 = explode('&scope=user',$exploded1[1]);
        $access_token = $exploded2[0];
        
        $opts = ['http'=> [
                    'method'=>'GET',
                    'header'=>['User-Agent: PHP']
                ]
            ];
        //fetching user data
        $url= "https://api.github.com/user?access_token=$access_token";
        $context = stream_context_create($opts);
        $data = file_get_contents($url, false, $context);
        $user_data =json_decode($data,true);
        $username = $user_data['login'];
        
        //fetching email data
        $url1= "https://api.github.com/user/emails?access_token=$access_token";
        $emails = file_get_contents($url1, false, $context);
        $emails = json_decode($emails,true);
        $email = $emails[0];
        
        $userPayload = [
            'username'=>$username,
            'email'=>$email,
            'fetched from' => "github", 
        ];
        
        $_SESSION['payload'] = $userPayload;
        $_SESSION['user'] = $username; 
        
        return $userPayload;
    }
    else{
        die('error');
    }
}
?>

