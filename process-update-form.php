<?php
include 'connect.php'; //connects to the database

if (isset($_POST['update'])){


      if (!empty($_POST['address'])){
        $address = $_POST['address'];
    }
        if (!empty($_POST['postcode'])){
        $postcode = $_POST['postcode'];
    }
        if (!empty($_POST['phone'])){
        $phone = $_POST['phone'];
    }

$query = "UPDATE `users` SET `address` = '$address', 
                                 `postcode` = '$postcode',
                                 `phone`     = '$phone'
                                  WHERE userID='$userID'";
                                  
 $result = mysqli_query($connect, $query); //performs query against database    
if ($result){ 
 header("Location: privelige1.php?updatemessage=Details updated");
     
        $_SESSION['address']  = $address;
        $_SESSION['postcode'] = $postcode;
        $_SESSION['phone']    = $phone;
}
    else {
     header("Location: privelige1.php?updatemessage=Error updating record: " . $connect->error);
   
}
        mysqli_free_result($result); //free memory
}



mysqli_close($connect); //closes connection
?>