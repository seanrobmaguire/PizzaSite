<?php
session_start();
session_unset(); //ends user session
session_destroy(); //ends session
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet" type="text/css"/>
    <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
    <title>Peet-Zah - Logged Out</title>
    </head>
<body>
    <header>
         <div class="banner">
            <img src="images/logo.png" alt="logo">
    <h1> Peet-Zah</h1>
        </div>
      <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="menu.php">Menu</a></li>
            <li><a href="contact.php" >Contact</a></li>
            <li><a href="account.php" class="active">Account</a></li>
        </ul>
    </nav>
    </header>
    <div id="content">
       <article>
 <br/>
 
            <?php if(isset($_GET['logout'])){
  $logout = $_GET['logout'];
  echo"<div class=\"warning\">$logout</div>";} //retrieves and displays logedout message
                ?>
            <?php if(isset($_GET['deleted'])){
  $deleted = $_GET['deleted'];
  echo"<div class=\"warning\">$deleted</div>";} //retrieves and displays accoutn deleted message
                ?>

            <h2><a id="logout" href="index.php">Return to Home Page</a></h2>
<br/><br/><br/>
            <footer>
    <p id="address">
    Peet-Zah<br />
    8 St Mary's Street<br />
    Edinburgh<br />
    EH1 1SU<br />
    0131 555 0001
    </p>
    <a href="http://twitter.com" target="_blank">
        <img src="images/twitter.png" alt="twitter" title="twitter" /></a>
    <a href="http://instagram.com" target="_blank">
        <img src="images/insta.png" alt="instagram" title="instagram"  /></a>
    <a href="http://facebook.com" target="_blank">
        <img src="images/face.png" alt="facebook" title="facebook"  /></a>
         
</footer>

        </article>
    </div>
    

    </body>
</html>
