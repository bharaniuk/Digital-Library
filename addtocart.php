<?php
  session_start();
  echo file_get_contents("header2.html");
  $conn=mysqli_connect("localhost","root","");
  if(!$conn)
  {
    die('connection failed!');
  }
  mysqli_select_db($conn,"mydb2");
  if($_SESSION["book_id"] == 0){
    if(isset($_POST["ATCbutton"]))
    {
      $my_book_id = $_POST["book_id_hidden"];
      $my_email = $_SESSION["email"];
      $_SESSION["book_id"] = $_POST["book_id_hidden"];
      $query = "UPDATE form SET book_id='$my_book_id' WHERE (email='$my_email');";
      if(!mysqli_query($conn,$query))
      {
          die('Error: ' . mysqli_error($conn));
      }
      else
      {
          $my_book_id = $_POST["book_id_hidden"];
          $_SESSION["book_id"] = $_POST["book_id_hidden"];
      }
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
}


{
  if(!mysqli_query($conn,$query))
  {
    die('Error: ' . mysqli_error($conn));
  }
  else
  {
    $my_book_id = $_POST["book_id_hidden"];
    $_SESSION["book_id"] = $_POST["book_id_hidden"];
  }
}
-->
