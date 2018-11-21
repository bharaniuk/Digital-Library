
<?php
session_start();
if (isset($_SESSION['email'])){
    echo file_get_contents("header2.html");
}
else {
  echo file_get_contents("header.html");
}
?>
  <div class="center">
  <div class="books">
  <h2 align="center">BOOKS</h2>
<ul>
<li>  <a href="Fiction.php" >Fiction</a></li><br><br>
  <li><a href="Education.php" >Education</a></li><br><br>
  <li><a href="NonFiction.php" >Non-Fiction</a></li><br><br>
</div>
</div>
</body>
</html>
