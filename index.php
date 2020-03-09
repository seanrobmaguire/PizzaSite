<?php
session_start();
if (isset($_SESSION['userID']))
{
    $userID = $_SESSION['userID'];
    $fname    = $_SESSION['fname'];
}
?>
<?php
include 'process-login-form.php'; //takes info from login form and checks it against database
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <link href="style.css" rel="stylesheet" type="text/css"/>
    <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
    <title>Peet-Zah - Home Page</title>
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
            <li><a href="index.php" class="active">Home</a></li>
            <li><a href="menu.php">Menu</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="account.php">Account</a></li>
        </ul>
    </nav>
    </header>
    <div id="content">
        <img src="images/head.jpg" alt="Pizza" />
        <article>
            
            <div id="about">
            <h2>About</h2>
                <img src="images/couple.jpg" alt="couple"/>
            <p>Peet-Zah was opened in 2017 by pizza loving couple Peeter and Zahnthopy Jones. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras lobortis lorem quis aliquet finibus. Donec molestie vehicula risus, vestibulum pharetra augue condimentum ac. Curabitur ultricies erat eu velit fermentum, ac gravida nunc sollicitudin. Aenean at mollis enim. Fusce congue, quam et lobortis varius, urna ipsum blandit metus, in congue felis tellus quis mi. Nam maximus, libero vitae fringilla rutrum, libero nulla aliquet massa, et blandit enim diam ut ligula. Vestibulum imperdiet ligula orci, sed dictum ante sagittis ut. Mauris et tristique nisi. Aenean nisi mauris, dignissim vel commodo in, fermentum vitae mi</p></div>
          <div id="reviews">
              <h2>Reviews</h2>
              <p> This pizza was delicious, I can't wait to tell the girls about it! Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras lobortis lorem quis aliquet finibus. Donec molestie vehicula risus, vestibulum pharetra augue condimentum ac.</p><div class="reviewer"><b>Linda, Trinity</b></div><br/>
              <p> YUM, YUM! Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras lobortis lorem quis aliquet finibus.</p><div class="reviewer"><b>Phil, Leith</b></div><br/>
              <p>Mmmmmmmmmmmmmmmmmmmmmmmmm! Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras lobortis lorem quis aliquet finibus. Donec molestie vehicula risus, vestibulum pharetra augue condimentum ac.</p><div class="reviewer"><b>Geoff, Marchmont</b></div><br/>
            </div>
            
   
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