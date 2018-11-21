<?php
session_start();
echo file_get_contents("header.html");
echo file_get_contents("login_pre.php");

extract($_POST);
$email=$_POST['email'];
$psw=$_POST['psw'];

$conn=mysqli_connect("localhost","root","");
if(!$conn)
{
  die('connection failed!');
}
mysqli_select_db($conn,"mydb2");

$query="SELECT * FROM form WHERE email='$email';";
$res=mysqli_query($conn,$query);
$row=mysqli_fetch_assoc($res);
if($row["email"]==$email && $row["pwd"]==$psw)
{
  $_SESSION['email'] = $email;
  $_SESSION['pwd'] = $pwd;
  $_SESSION['book_id'] = $row["book_id"];
  echo "<script>alert('Welcome Back!');</script>";
  echo "<script> window.location.assign('homePg.php');</script>";
}
else{
  echo"<script>alert('Invalid login credentials! Please try again!')</script>";
}


?>
