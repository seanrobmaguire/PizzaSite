<?php //connect
//setting to access server databse
$server   = 'localhost';
$database = 'TestDataBase';
$username = 'Sean';
$password = 'Password1';

$connect = mysqli_connect($server, $username, $password, $database);
if (mysqli_connect_errno()) {
    die('Could not connect:' .mysqli_connect_error()); //error message if cannot connect
}

?>