<?php

include 'connect.php'; //connects to the database

if (isset($_POST['login'])){  //Checks if login button is pressed
    
   $email     = '';  //reset variables
   $password1 = '';
   $token = '';
    
    $email  = $_POST['email']; 
    $email = stripslashes($_POST['email']);
    
    $password1  = $_POST['password1']; 
    
    
    $salt1 = "qmfkjfjkwej"; //disguise password for database
    $salt2 = "pgjshbfjhbfjb";
    $password1 = stripslashes($_POST['password1']); //removes slashes for security
    $password1 = htmlspecialchars($password1); //converts characters to html
    $token = sha1("$salt1$password1$salt2");
    
    //Check database for matches
    $query = "select * from users where email='$email' and password1='$token'";
    $result = mysqli_query($connect, $query); //runs query
    $row = $result->fetch_array(MYSQLI_NUM); //fetch results as a numeric array
    $num = mysqli_num_rows($result); // number of rows in match
    if (!$result) die($connect->error);

    
  if ($num > 0) {
     
        $_SESSION['userID'] = $row[0];
        $_SESSION['fname']    = $row[1];
        $_SESSION['lname']    = $row[2];
        $_SESSION['address']  = $row[3];
        $_SESSION['postcode'] = $row[4];
        $_SESSION['phone']    = $row[5];
        $_SESSION['email']    = $row[6];

    
      header("location: privelige1.php");	
	die();
  }
    else{
        header("Location: account.php?invalid=Invalid Email or Password");
        die();
    }
    mysqli_free_result($result); //free memory
}

  mysqli_close($connect); //closes connection
    
?>