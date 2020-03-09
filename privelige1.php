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
    <title>Peet-Zah - Members Area</title>
    </head>
<body>
    <header>
<div class="dropdown">
            <a class="regbtn" href="logged-out.php?logout=Your are now logged out"><?php echo $fname ?>, Log out</a>
        </div>
         
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
            <br>
<?php if(isset($_GET['updatemessage'])){
  $message = $_GET['updatemessage'];
  echo"<div class=\"warning\">$message</div>";}
                ?>
            <br/>
<?php
    echo
    "<div class=\"warning\">Welcome back</div><br/>
    $fname $lname <br/>
    $address<br/>
    $postcode<br/>
    $email<br/>
    $phone<br/>

            <br/><br/><br/><br/>

<a class=\"update\" href=\"update.php\">Update Details</a>

<a class=\"update\" href=\"removeuser.php?removeID=$userID\">Delete Account</a>";
?>         

<br/><br/><br/><br/>


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