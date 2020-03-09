<?php //takes info from registration form and adds to database


include 'connect.php'; //connects to the database


if (isset($_POST['register'])){
//Reset variables
    $fname     = ''; 
    $lname     = '';
    $address   = '';
    $postcode  = '';
    $phone     = '';
    $email     = '';
    $password1 = '';
    
    if (!empty($_POST['fname'])){  //if field not empty assign to variable
        $fname = stripslashes($_POST['fname']); // removes slashes
        $fname = htmlspecialchars($fname); //changes characters to html
    }
        if (!empty($_POST['lname'])){
        $lname = stripslashes($_POST['lname']);
        $lname = htmlspecialchars($lname);
    }
        if (!empty($_POST['address'])){
        $address = stripslashes($_POST['address']);
        $address = htmlspecialchars($address);
    }
        if (!empty($_POST['postcode'])){
        $postcode = stripslashes($_POST['postcode']);
        $postcode = htmlspecialchars($postcode);
    }
        if (!empty($_POST['phone'])){
        $phone = stripslashes($_POST['phone']);
        $phone = htmlspecialchars($phone);
    }
        if (!empty($_POST['email'])){
        $email = stripslashes($_POST['email']);
       // $email = htmlspecialchars($email);
    }
        if (!empty($_POST['password1'])){
        
    }
    $salt1 = "qmfkjfjkwej"; //disguise password for database
    $salt2 = "pgjshbfjhbfjb";
    $password1 = stripslashes($_POST['password1']);
    $password1 = htmlspecialchars($password1);
    $token = sha1("$salt1$password1$salt2"); //hashes pasword and and salt to disguise password

    $query = "SELECT * FROM users WHERE email='$email'"; //checks if email address already registered.
    $result = mysqli_query($connect, $query); //perform query on database
    $num = mysqli_num_rows($result); // number of matches
    if ($num != 0) //if match send back to registration page
  {
      header("Location: account.php?registered=Email already registered");
      die();
  }

  else{
    //Query to insert info into database
    $query = "insert into users (fname, lname, address, postcode, phone, email, password1) values('$fname', '$lname', '$address', '$postcode', '$phone', '$email', '$token')";
    
    $result = mysqli_query($connect, $query); //performs query against database    
    header("Location: account.php?registering=Thanks for registering");
      die();

}
    mysqli_free_result($result); //free memory
}

mysqli_close($connect); //closes connection
?>