<?php
echo file_get_contents("header.html");
?>
  <script>
  var check = function() {
  if (document.getElementById('password').value ==
    document.getElementById('confirmpassword').value) {
    document.getElementById('status').style.color = 'green';
    document.getElementById('status').innerHTML = 'matching';
  } else {
    document.getElementById('status').style.color = 'red';
    document.getElementById('status').innerHTML = 'not matching';
  }
}
</script>

  <form action="signup.php" class="center" style="border:1px solid black" method="POST">
    <div id="main">
    <h2>Sign Up!</h2>
    <p>Please fill this form to create an account</p>
    <hr>
    <label for="email"><b>Email</b></label>
    <br>
    <input type="email" placeholder="Enter Email" name="email" title="Please enter a valid email" required>
    <br>

    <label for="psw"><b>Password</b></label><br>

    <input type="password" id="password" placeholder="Enter Password" name="psw" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" onkeyup='check();' title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
    <br>
    <label for="cpwd"><b>Confirm Password</b></label><br>

    <input type="password" id="confirmpassword" placeholder="Confirm password" name="cpwd" title="Please reconfirm the password" onkeyup='check();' required>
    <span id="status"></span>
    <br>
    <label>
    <input type="checkbox" checked="checked" name="termsandconditions" style="margin-bottom:15px" required>
    By creating an account you agree to our <a href="termsandconditions.php" style="color:dodgerblue">Terms & Privacy</a>
  </label><br><br>
    Already a member?<a href="login_pre.php" style="color:dodgerblue">Login</a><br><br>
    <button type="reset" class="cancelbtn" >Cancel</button>
    <button type="submit" class="submitbtn">Sign Up</button>
    </div>

  </form>

</body>
</html>
