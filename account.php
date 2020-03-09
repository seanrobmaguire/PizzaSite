
<?php
//include 'connect.php'; //connects to the database
session_start();
if (isset($_SESSION['userID'])) {  //if logged in taked user to members account page
	header("location: privelige1.php");
    die();


    $userID = $_SESSION['userID'];
    $fname    = $_SESSION['fname'];
    $lname    = $_SESSION['lname'];
    $address  = $_SESSION['address'];
    $postcode = $_SESSION['postcode'];
    $phone    = $_SESSION['phone'];
    $email    = $_SESSION['email'];
    
}
?>
<?php
include 'create-users-table.php'; //creates registration table if doesnt already exist
?>

<?php
include 'process-registration-form.php'; //takes info from registration form and puts in database
?>

<?php
include 'process-login-form.php'; //takes info from login form and checks it against database
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link href="style.css" rel="stylesheet" type="text/css"/>
    <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
    <title>Peet-Zah - Account</title>
  
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script type="text/javascript"><!--
function checkPasswordMatch() {
    var password = $("#password1").val();
    var confirmPassword = $("#password2").val();

    if (password != confirmPassword)
        $("#divCheckPasswordMatch").html("Passwords do not match!");   
    else
        $("#divCheckPasswordMatch").html("Passwords match.");
        
}
</script>
    </head>
<body>
    <header>
       
        <?php  // changes login in buttons to log out button
        
       if (isset($_SESSION['userID'])) {
            echo '<div class="dropdown">
            <a class="regbtn" href="logged-out.php?logout=Your are now logged out">'. $fname .', Log out</a>
        </div>'; 
        }
        
  else { 
      echo  
    '<div class="topright">
 <div class="dropdown">
  <div class="dropbtn">Login</div>
  <div class="dropdown-content">';
    
    include 'login-form.php';
    
 echo '</div>
</div>
            
  </div>
  
  <div class="dropdown">
           <a class="regbtn" a href="account.php">Register</a></div>';  
   }
        ?>
            <div class="banner">
            <img src="images/logo.png" alt="logo">
    <h1> Peet-Zah</h1>
        </div>
      <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="menu.php">Menu</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="account.php" class="actived">Account</a></li>
        </ul>
    </nav>
    </header>
    <div id="content">
                

        <article>
            <h2>Account</h2>
                          
<?php if(isset($_GET['registering'])){
  $registering = $_GET['registering'];
  echo"<div class=\"warning\">$registering</div>";}
                ?>
            
            <?php if(isset($_GET['registered'])){
  $registered = $_GET['registered'];
  echo"<div class=\"warning\">$registered</div>";}
                ?>
            
            <fieldset>
    <legend>Login</legend>
                
<?php if(isset($_GET['invalid'])){
  $invalid = $_GET['invalid'];
  echo"<div class=\"warning\">$invalid</div>";}
                ?>
                
             
    <?php
      include 'login-form.php';
      ?>
                  
    </fieldset>
            
            <fieldset>
                    <legend>Register</legend>

                <br>    
                
                
                   <?php
                    include 'registration-form.php'; //shows registrations form
                    ?>
                </fieldset>
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
      