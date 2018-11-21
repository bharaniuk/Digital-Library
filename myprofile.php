<?php
session_start();
echo file_get_contents("header2.html");

if ($_SESSION["book_id"] == 0){
  echo "<div class = 'topPart'><h2> Seems a little bit lonely here </h2><h2>Looks like you haven't borrowed any books at the moment</h2>
  <h3>Go to the Books section to get your favourite book now!</h3></div>";
}

else {
  $conn = mysqli_connect("localhost", "root", "");
  mysqli_select_db($conn, "mydb2");
  if (!$conn)
  {
    die('connection failed');
  }

  extract($_GET);
  $my_book_id = $_SESSION["book_id"];

  $query = "Select * from proj_books_1 where (b_Id = $my_book_id)";
  $res = mysqli_query($conn, $query);
  $rows = mysqli_fetch_assoc($res);

  //display book
  echo '<div class = "topPart"><p>Currently you have borrowed - </p>';
  echo'<p>
  <ul>
          <li><h3>'. $rows['b_Name'].'</h3></li>
          <b><i>-'.$rows['b_Author']. '</i></b>
  <img src="'. $rows['b_Img_src']. '" alt="'.$rows['b_Name'].'"  align="left" style="width:160px;height:170px; padding-right:20px;"/>
  <div id="desc"><p> '.$rows['b_Describe'].'</p>';

  //return book
  echo'<form action = "removefromcart.php" method = "POST">
    <input type = "submit" class="pbutton" value = "Return book" name = "RFCbutton">
    <input type = "hidden" name = "book_id_hidden" value = "'. $rows["b_Id"]. '">
  </form>';

  echo'</div></ul></p><br><br><br><br><br></div></body></html>';
}
?>
