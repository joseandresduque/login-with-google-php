<?php 
 if(!isset($_SESSION)) { 
     session_start(); 
 }else{
    session_destroy();
    session_start(); 
 }
 if(!session_id())session_start();
 if (session_status() != PHP_SESSION_DISABLED) {
    session_destroy();
    session_start();
} else {
    die("Sessions are disabled. Sorry");
 }
include_once("src/Google_Client.php");
include_once("src/contrib/Google_Oauth2Service.php");
######### edit details ##########
$clientId = 'Aquí cliente ID.apps.googleusercontent.com'; //Google CLIENT ID
$clientSecret = 'Aquí client secret'; //Google CLIENT SECRET
$redirectUrl = 'http://localhost:8084/login-with-google-using-php/';  //return url (url to script)
$homeUrl = 'http://localhost:8084/login-with-google-using-php/';  //return to home

##################################

$gClient = new Google_Client();
$gClient->setApplicationName('Login to codexworld.com');
$gClient->setClientId($clientId);
$gClient->setClientSecret($clientSecret);
$gClient->setRedirectUri($redirectUrl);

$google_oauthV2 = new Google_Oauth2Service($gClient);
?>