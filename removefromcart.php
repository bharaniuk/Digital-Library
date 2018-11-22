<?php
  session_start();
  if($_SESSION["book_id"] != 0){
    if(isset($_POST["RFCbutton"]))
    {
      $_SESSION["book_id"] = 0;
      //echo '<script>alert("book with book id' . $_POST["book_id_hidden"] . 'has been returned!")</script>';
      echo "<script> window.location.assign('myprofile.php');</script>";
    }
  }
?>
