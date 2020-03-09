<?php
session_start();
if (isset($_SESSION['userID']))
{
    $userID = $_SESSION['userID'];
    $fname    = $_SESSION['fname'];

    
}
?>
<?php
//include 'process-login-form.php'; //takes info from login form and checks it against database

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet" type="text/css"/>
    <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
    <title>Peet-Zah - Menu</title>
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
            <li><a href="menu.php" class="active">Menu</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="account.php">Account</a></li>
        </ul>
    </nav>
    </header>
    <div id="content">
        
        <article> 
            
            <h2>Menu</h2>
                        
            <div class="piz">
            <div class="desc">
 
                
                <img src="images/pizzabk.jpg" alt="margherita" height=150>
                <div class="pizzawords">
                
                <p>Italian Tomato Passata, Fresh organic basil, Mozzarella</p>
                    <h4>Margherita</h4>
                </div>
                </div>
               <ul>
                    <li class="price"><a href="#popup1">15"<br/>&pound;10</a></li>
                       <li class="price"><a href="#popup2">17"<br/>&pound;15</a> 
                        </li>
                </ul>
            </div>
            
            <div class="piz">
            <div class="desc">
                <img src="images/pizzabk.jpg" alt="margherita" height=150>
                <h4>Quattro Formaggi</h4>
                <p>Italian Tomato Passata, Mozzarella, Gorgonzola, Taleggio, Grana Padano</p>
                </div>
                <ul>
                    <li class="price"><a href="#popup1">15"<br/>&pound;10</a></li>
                       <li class="price"><a href="#popup2">17"<br/>&pound;15</a> 
                        </li>
                </ul>
            </div>
            
            <div class="piz">
            <div class="desc">
                <img src="images/pizzabk.jpg" alt="margherita">
                <h4>Parmigiana</h4>
                <p>Italian Tomato Passata, Mozzarella, roasted Aubergine, Grana Padano, Garlic oil, Pine nuts<p>
                </div>
                <ul>
                    <li class="price"><a href="#popup1">15"<br/>&pound;10</a></li>
                       <li class="price"><a href="#popup2">17"<br/>&pound;15</a> 
                        </li>
                </ul>
            </div>
            
            <div class="piz">
            <div class="desc">
                <img src="images/pizzabk.jpg" alt="margherita" height=150>
                
                <h4>Goats Cheese Garden</h4>
                <p>Italian Tomato Passata, Mozzarella, Aubergine, Red onions, Roast Peppers, Goats cheese</p>
                </div>
                <ul>
                    <li class="price"><a href="#popup1">15"<br/>&pound;10</a></li>
                       <li class="price"><a href="#popup2">17"<br/>&pound;15</a> 
                        </li>
                </ul>
            </div>
            
            <div class="piz">
            <div class="desc">
                <img src="images/pizzabk.jpg" alt="margherita" height=150>
                
                <h4>Diavola</h4>
                <p>Italian Tomato Passata, Mozzarella, Salamino Piccante, Chicken Breast, Chilli flakes</p>
                </div>
                <ul>
                    <li class="price"><a href="#popup1">15"<br/>&pound;10</a></li>
                       <li class="price"><a href="#popup2">17"<br/>&pound;15</a> 
                        </li>
                </ul>
            </div>
             </article>
                <div id="popup1" class="overlay">
                    <div class="popup">
                        <h2>Got it.</h2>
                        <a class="close"  href="#">&times;</a>
                        <div class="content">
            <p>Delicious 15" pizza added to your basket.</p> 
                        </div>
                    </div>
                    </div>
                    
                    
                    <div id="popup2" class="overlay">
                    <div class="popup">
                        <h2>Got it.</h2>
                        <a class="close"  href="#">&times;</a>
                        <div class="content">
            <p>Delicious 17" pizza added to your basket.</p>
                        </div>
                        </div>
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
        <img src="images/twitter.png" alt="twitter" title="twitter"  /></a>
    <a href="http://instagram.com" target="_blank">
        <img src="images/insta.png" alt="instagram" title="instagram"  /></a>
    <a href="http://facebook.com" target="_blank">
        <img src="images/face.png" alt="facebook" title="facebook"  /></a>
         
</footer>

             
       
    </div>

</body>
</html>