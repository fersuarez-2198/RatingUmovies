<?php

//config.php

//Include Google Client Library for PHP autoload file
require_once 'vendor/autoload.php';

//Make object of Google API Client for call Google API
$google_client = new Google_Client();

//Set the OAuth 2.0 Client ID
$google_client->setClientId('700917657791-519m743hsrbkneh8ontn87mfviarnu4u.apps.googleusercontent.com');

//Set the OAuth 2.0 Client Secret key
$google_client->setClientSecret('1_xzHWMyoLRo0yJZfTTGCv_V');

//Set the OAuth 2.0 Redirect URI
$google_client->setRedirectUri('http://localhost/RatingUmovies/login-register.php');

//
$google_client->addScope('email');

$google_client->addScope('profile');

//start session on web page
session_start();

?>