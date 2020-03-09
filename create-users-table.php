<?php 
include 'connect.php'; //connects to the database


//creates member table if it doesnt exist
$query = "CREATE TABLE IF NOT EXISTS `users` (
`userID` int(10) unsigned NOT NULL AUTO_INCREMENT,
`fname`     char(20) NOT NULL,
`lname`     char(20) NOT NULL,
`address`   char(50) NOT NULL,
`postcode`  char(10) NOT NULL,
`phone`     char(13) NOT NULL,
`email`     char(60) NOT NULL,
`password1` char(100) NOT NULL,
 PRIMARY KEY (`userID`)
);";
  $result = mysqli_query($connect, $query);
if (!$result) die($connect->error);

mysqli_close($connect); //closes connection
?>