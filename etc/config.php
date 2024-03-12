<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', 'localhost:3306');
define('DB_USERNAME', 'net24yscholten_yael ');
define('DB_PASSWORD', 'GN7T!H@B,qR,');
define('DB_NAME', 'net24yscholten_PHP_OOP_Example');
 
/* Attempt to connect to MySQL database */
$mysqli = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($mysqli === false){
    die("ERROR: Could not connect. " . $mysqli->connect_error);
}
?>
