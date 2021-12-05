
<?php
require "vendor/autoload.php";
//Got This file after installing COMPOSER
session_start();

$fb=new Facebook\Facebook([
    'app_id' => '679271073035054',
    'app_secret' => '521266c842b237ad2d0bd207df92f693',
    'default_graph_version' => 'v2.10',
    //Got this app id and secret key from facebook developers website after creating project there


]);

$helper=$fb->getRedirectLoginHelper();

$login_url = $helper-> getLoginUrl("http://localhost/");
//My URL

try{

    $access_token = $helper->getAccessToken();
    if(isset($access_token)){
        $_SESSION['access_token'] = (string)$accessToken;
        header("Location:facebook_button.php");


    }



} catch(Exception $e){
    echo $e->getTraceAsString();
    //getTraceAsString() this function will show if there is any exception
}


if(isset($_SESSION['access_token'])){
    try{

        $fb->setDefaultAccessToken($_SESSION['access_token']);
        $result = $fb->get('/me?locate=en_US$fields=name,email');
        $user = $res->getGraphUser();
    } catch(Exception $e){

        echo $e->getTraceAsString();

    }



}


?>