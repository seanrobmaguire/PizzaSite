<?php
session_start();  //start Session
if (isset($_SESSION['userID']))
{
    $userID = $_SESSION['userID']; //Session variables
    $fname    = $_SESSION['fname'];
    
}
?>

<?php
//include 'process-login-form.php'; //takes info from login form and //checks it against database

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet" type="text/css"/>
    <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
    <title>Peet-Zah - Contact</title>
    </head>
<body>
    <header>
       
        <?php  // changes login and registration buttons to log out button if logged in
        
          if (isset($_SESSION['userID'])) {
            echo '<div class="dropdown">
            <a class="regbtn" href="logged-out.php?logout=Your are now logged out"> '. $fname .', Log out</a>
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
            <li><a href="contact.php" class="active">Contact</a></li>
            <li><a href="account.php">Account</a></li>
        </ul>
    </nav>
    </header>
    <div id="content">
       
        <article>
            <h2>Contact</h2>
            <form action="#" autocomplete="on">
                <fieldset>
                <legend>Get in touch</legend>
                <input type="text" name="firstname" placeholder="First Name:" autofocus required>
                <input type="text" name="lastname" placeholder="Last Name:" required>
                <br>
                <input type="email" name="email" placeholder="example@email.com" required>
                <input type="tel" name="phone" placeholder="Phone Number" maxlength="11" required><br>
                    <textarea rows="15" cols="50" id="message" placeholder="Your message..." required></textarea>
                    <br>
                How did you hear about us?
                <select name="heard">
    <option value="advert">Please select</option>
    <option value="advert">Advert</option>
    <option value="passing">Passing</option>
    <option value="word">Word of mouth</option>
    <option value="online">Online</option>
  </select>
  <br><br>
<input type="submit" value="Send">
                </fieldset>
            </form>
 
            <footer>
    <p id="address">
    Peet-Zah<br />
    8 St Mary's Street<br />
    Edinburgh<br />
    EH1 1SU<br />
    0131 555 0001
    </p>
    <a href="http://twitter.com" target="_blank">
        <img src="images/twitter.png" alt="twitter" title="twitter"  /></a>
    <a href="http://instagram.com" target="_blank">
        <img src="images/insta.png" alt="instagram" title="instagram"  /></a>
    <a href="http://facebook.com" target="_blank">
        <img src="images/face.png" alt="facebook" title="facebook"  /></a>
         
</footer>
            
        </article>
    </div>

</body>
</html>