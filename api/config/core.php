<?php
// show error reporting
error_reporting(E_ALL);
 
// set your default time-zone
date_default_timezone_set('Asia/Dhaka');
 
// variables used for jwt
$key = "example_key";
$issued_at = time();
$expiration_time = $issued_at + (60 * 60); // valid for 1 hour
$issuer = "http://127.0.0.1:8000/CodeOfaNinja/RestApiAuthLevel1/";
