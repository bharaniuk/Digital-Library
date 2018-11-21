<?php
  session_start();
  echo file_get_contents("header2.html");
  if($_SESSION["book_id"] == 0){
    if(isset($_POST["ATCbutton"]))
    {
      $_SESSION["book_id"] = $_POST["book_id_hidden"];
      //echo '<script>alert("book with book id' . $_POST["book_id_hidden"] . 'has been added!")</script>';
    }
  }
  else{
      echo '<script>alert("you have already borrowed book!")</script>';
  }
  echo "<script> window.location.assign('myprofile.php');</script>";
?>


<!--  if(isset($_GET['id']) & !empty($_GET['id'])){
    $_SESSION["book_id"] = $_GET['id'];
    echo '<script>alert("Do you want to add this book?")</script>';
  }
} -->
