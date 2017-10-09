<?php 
require('vendor/autoload.php');
session_start();

const CLIENT_ID     = '7hEapHFe7WlLhJcUzanBCaGBOMvGET';
const CLIENT_SECRET = 'KmUhu7ojA5YTt0zUlp6gOvKeljFUQo';

const REDIRECT_URI           = 'http://localhost/restapiPhp/oauthphp.php';
const AUTHORIZATION_ENDPOINT = 'http://localhost/wp_treehouse/oauth/authorize';
const TOKEN_ENDPOINT         = 'http://localhost/wp_treehouse/oauth/token';
$client = new OAuth2\Client(CLIENT_ID, CLIENT_SECRET);
$data = $client->fetch('http://localhost/wp_treehouse/wp-json/wp/v2/reviews');