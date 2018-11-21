<?php
echo file_get_contents("header.html");
?>
  <form action="login.php"  class="center" style="border:1px solid black" method="POST">
    <div id="main">
      <h2>Login!</h2>
      <label for="email"><b>Email</b></label>
      <br>
      <input type="email" placeholder="Enter Email" name="email" required>
      <br>
      <br>
      <label for="psw"><b>Password</b></label>
      <br>
      <input type="password" placeholder="Enter Password" name="psw" required>
      <br>
      <br>
      <p>Not a member?<a href="signup_pre.php" style="color:dodgerblue">Signup</a></p>
      <br>
      <button type="reset" class="cancelbtn">Cancel</button>
      <button type="submit" class="submitbtn">Login</button>

    </div>
  </form>
</body>
</html>
