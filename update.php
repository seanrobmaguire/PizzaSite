<?php
session_start();
if (isset($_SESSION['userID']))
{
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
include 'process-update-form.php'
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet" type="text/css"/>
    <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
    <title>Peet-Zah - Update Details</title>
    </head>
<body>
    <header>
       
        <?php  // changes login in buttons to log out button
        
        if (isset($_SESSION['userID'])) {
            echo '<div class="dropdown">
            <a class="regbtn" href="logged-out.php">'. $fname .', Log out</a>
        </div>'; 
        }
        
  else { 
      echo  
    '<div class="topright">
 <div class="dropdown">
  <button class="dropbtn">Login</button>
  <div class="dropdown-content">';
    
    include 'login-form.php';
    
 echo '</div>
</div>
            
  </div>
  
  <div class="dropdown">
            <button class="regbtn"><a href="account.php">Register</a></button></div>';  
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
            <li><a href="contact.php" >Contact</a></li>
            <li><a href="account.php" class="active">Account</a></li>
        </ul>
    </nav>
    </header>
    <div id="content">
        
        <article>
            <br/>
            <?php
            echo "$fname $lname<br/>
                  $email<br/>";
            ?>
            <h2>Update Details</h2>
            <fieldset>


<div class="form">
<form action = "<?php echo $_SERVER['PHP_SELF']; ?>" method="post" autocomplete="on">
                            
                <label for="address">Address</label><br/>
                <input name="address" type="text" id="address" size=50  placeholder="Address"  /><br/>
  
                <label for="postcode">Post Code</label><br/>
                <input name="postcode" type="text" id="postcode" size=10  pattern="[A-Za-z]{1,2}[0-9Rr][0-9A-Za-z]? [0-9][ABD-HJLNP-UW-Zabd-hjlnp-uw-z]{2}" title="Please enter a valid UK postcode"
                placeholder="Post code"  /><br/>
                    
                <label for="phone">Phone Number</label><br/>
                <input type="tel" name="phone" id="phone" maxlength="11" placeholder="Phone Number" maxlength="11" pattern="^\s*\(?(020[7,8]{1}\)?[ ]?[1-9]{1}[0-9{2}[ ]?[0-9]{4})|(0[1-8]{1}[0-9]{3}\)?[ ]?[1-9]{1}[0-9]{2}[ ]?[0-9]{3})\s*$" title="Please enter a valid UK phone number"/><br/>
    
    <input type="submit" name="update" value="Update Details"/>
    
    </form>
                </div>
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