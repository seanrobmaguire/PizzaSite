
<div id="loginform">
  <form action = "<?php echo $_SERVER['PHP_SELF']; ?>" method="post" autocomplete="on">

<?php if(isset($_GET['message'])){
  $message = $_GET['message'];
}
?>
  <p>
    <label for="email">Email:</label><br/>
    <input type="email" name="email" id="email"  placeholder="example@email.com" maxlength="60" required/>
  </p>
  <p>

    <label for="password1">Password:</label><br/>
    <input type="password" name="password1" id="password1" maxlength="60" required/><br />
    <input type="submit" name="login" value="Login"/></p>
</form>
</div>
