<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

// modify these settings according to the account on your database server.
$host = "s465z7sj4pwhp7fn.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
$port = "3306";
$username = "vpyowenwxvd0rt1o";
$user_pass = "y666924ar7chdogc";
$database_in_use = "eqq3vu9i1kc3tbqw";


$mysqli = new mysqli($host, $username, $user_pass, $database_in_use);
if ($mysqli->connect_error) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
echo $mysqli->host_info . "<br>";

?>
