<?php
session_start();
echo file_get_contents("header.html");
echo file_get_contents("signup_pre.php");

extract($_POST);
$email=$_POST['email'];
$psw=$_POST['psw'];
$cpwd=$_POST['cpwd'];
if(strcmp($psw,$cpwd)==0){
$check=0;

  $conn=mysqli_connect("localhost","root","");
  if(!$conn)
  {
    die('connection failed!');
  }
  mysqli_select_db($conn,"mydb2");
  $querycheck="SELECT * FROM form;";
  $rescheck=mysqli_query($conn,$querycheck);
  while($rowcheck=mysqli_fetch_assoc($rescheck)){
    if($rowcheck["email"]==$email && $check!=1){
      echo"<script>alert('You have already registered! Please login instead!')</script>";
      $check=1;
    }
  }
  if($check==0)
  {
    $query = "INSERT INTO form VALUES ('$email','$psw','0');";
    if(!mysqli_query($conn,$query))
    {
      die('Error: ' . mysqli_error($conn));
    }
    else
    {
      $_SESSION['email'] = $email;
      $_SESSION['psw'] = $psw;
      $_SESSION['book_id'] = 0;
      echo "<script>alert('Thank You for choosing BookHunters!');</script>";
      echo "<script> window.location.assign('homePg.php');</script>";
    }
  }
}
else{
  echo"<script>alert('Passwords don't match! Enter again.')</script>";
}
?>
