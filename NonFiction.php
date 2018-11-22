<?php
session_start();
if (isset($_SESSION['email'])){
    echo file_get_contents("header2.html");
}
else {
  echo file_get_contents("header.html");
}

	$conn = mysqli_connect("localhost", "root", "");
	mysqli_select_db($conn, "mydb2");
	if (!$conn)
	{
		die('connection failed');
	}

	extract($_GET);
	$query = "Select * from proj_books_1 where ((b_Id = 5) or (b_Id = 6))";

	$res = mysqli_query($conn, $query);

	echo '<div class = "topPart">';
	while($rows = mysqli_fetch_assoc($res))
	{
			echo'<p>
			<ul>
      				<li><h3>'. $rows['b_Name'].'</h3></li>
        			<b><i>-'.$rows['b_Author']. '</i></b>
        <img src="'. $rows['b_Img_src']. '" alt="'.$rows['b_Name'].'"  align="left" style="width:160px;height:170px; padding-right:20px;"/>
        <div id="desc"><p> '.$rows['b_Describe'].'</p></div>';
        //$_SESSION["book_id"] = 0;
        if (isset($_SESSION["book_id"])){
          if ($_SESSION["book_id"] == 0){

            echo '<form action = "addtocart.php" method = "POST">
              <input type = "submit" class="pbutton" value = "Add to my shelf" name = "ATCbutton">
              <input type = "hidden" name = "book_id_hidden" value = "'. $rows["b_Id"]. '">
            </form>';
          }
        }
        echo "</ul></p><br><br>";

	}
		echo '</div>';
?>
