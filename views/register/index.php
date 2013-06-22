

<h2>Register</h2>

<form action ="<?php echo BASE_URL;?>register/enter" method ="post">
    <label>Email Id :</label><input type ="text" name ="emailId"><br>
    <label class="control-label" for="password">Password</label>
    <input type="password" name="pass" id="pass"
    pattern="^(?=.*[0-9]+.*)(?=.*[a-zA-Z]+.*).{8,}$" class="password" required 
    data-validation-required-message=" You'll need a enter a password of at least 8 characters." 
    data-validation-pattern-message="Must be at least 8 characters, with both numbers & letters.">
<br>
   <label class="control-label" for="pass2">Confirm&nbsp;Password</label>                    
    <input type="password" name="pass2" id="pass2" required 
    class="password" 
    data-validation-required-message="Password confirmation is required." 
    data-validation-match-match="pass" 
    data-validation-match-message="Make sure this matches the password you entered above." >
                            <br>
    <label>First Name :</label><input type ="text" name ="firstName"><br>
    <label>Last Name :</label><input type ="text" name ="lastName"><br>
    <input type ="submit">
                                   
</form>

<a href ="<?php echo BASE_URL;?>register">Register Here</a>
