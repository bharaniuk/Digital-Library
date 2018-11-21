<?php
session_start();
$_SESSION = array();
session_destroy();
echo file_get_contents("header.html");
?>
  <div class="topPart">
    <h2>You have sucessfully logged out!</h2>
    <h2>Do visit again!</h2>
  </div>
</body>
</html>
