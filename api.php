<?php
header('Content-Type: application/json');

$username = $_POST['username'];
$password = $_POST['password'];


// mysql 

$isAuth = false;

if($isAuth) {
  $response = [
  	'success' => true,
  	'data' => [
  		'name' => 'jagroop',
  		'email' => 'jagroop@gmail.com'
  	],
  	'message' => 'logged success'
  ];
} else {
	$response = [
  	'success' => false,
  	'data' => [],
  	'message' => 'logged failed'
  ];
}

echo json_encode($response);