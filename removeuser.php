<?php
include 'connect.php';

if (isset($_GET['removeID'])){ //if remove users button pressed
  $USERDELETE = $_GET['removeID']; //assigns user is to variable
  mysqli_query($connect, "DELETE FROM users WHERE userID=$USERDELETE"); //runs query to delete user
    header("Location: logged-out.php?deleted=Your account has been deleted"); // directs user to log out page with account deleted message

}
mysqli_close($connect); //closes connection
?>