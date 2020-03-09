
<div class="form">
<form action = "<?php echo $_SERVER['PHP_SELF']; ?>" method="post" autocomplete="on" onsubmit="return myFunction()">

    
                <label for="fname">First Name</label><br/>
                <input type="text" name="fname" id="fname" maxlength=20 placeholder="First Name" required  /><br/>
                    
                <label for="lname">Last Name</label><br/>
                <input type="text" name="lname" id="lname" maxlength=20 placeholder="Last Name" required /><br/>
                        
                <label for="address">Address</label><br/>
                <input name="address" type="text" id="address" size=50  placeholder="Address" required /><br/>
  
                <label for="postcode">Post Code</label><br/>
                <input name="postcode" type="text" id="postcode" size=10  pattern="[A-Za-z]{1,2}[0-9Rr][0-9A-Za-z]? [0-9][ABD-HJLNP-UW-Zabd-hjlnp-uw-z]{2}" title="Please enter a valid UK postcode"
                placeholder="Post code" required /><br/>
                    
                <label for="phone">Phone Number</label><br/>
                <input type="tel" name="phone" id="phone" maxlength="11" placeholder="Phone Number" maxlength="11" pattern="^\s*\(?(020[7,8]{1}\)?[ ]?[1-9]{1}[0-9{2}[ ]?[0-9]{4})|(0[1-8]{1}[0-9]{3}\)?[ ]?[1-9]{1}[0-9]{2}[ ]?[0-9]{3})\s*$" title="Please enter a valid UK phone number"required/><br/>
                    
               <label for="email">Email</label><br/>   
                <input type="email" name="email" id="email" maxlength="60" placeholder="example@email.com" required/><br/>

                <label for="password1">Password</label><br/>
                <input type="password" name="password1" id="password1" maxlength="25" placeholder="At least 8 characters with 1 capital letter and 1 number" pattern="^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?!.*\s).*$" title="Password should have min 8 characters with 1 capital letter and 1 number" required/><br/>
                
                <label for="password2">Repeat Password</label><br/>
                <input type="password" name="password2" id="password2" maxlength="25" placeholder="At least 8 characters with 1 capital letter and 1 number" pattern="^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?!.*\s).*$" required   title="Password should have min 8 characters with 1 capital letter and 1 number" onkeyup="checkPasswordMatch();"/><br/>
    <div class="registrationFormAlert" id="divCheckPasswordMatch"></div>
    <br/><br/>
               <input type="submit" name="register" id="register" value="Register" />
    
    </form>
</div>