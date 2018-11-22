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
//'%".$_GET['q']."%';";
	extract($_GET);
	$query = "Select * from proj_books_1 where b_Name like '%".$_GET['search']."%';";
	$res = mysqli_query($conn, $query);

	if(mysqli_num_rows(mysqli_query($conn, $query)) == 0)
	{
		echo "<div class='topPart'><p>No results found!</p></div></body>";
	}
	else
	{
		$rows = mysqli_fetch_assoc($res);
		while($rows)
		{
			echo '<div class = "topPart" style="height:280px;"><p>
				<ul>
	      				<li><h3>'. $rows['b_Name'].'</h3></li>
	        			<p><b><i>-'.$rows['b_Author']. '</i></b></p>
	        <img src="'. $rows['b_Img_src']. '" alt="'.$rows['b_Name'].'"  align="left" style="width:160px;height:170px;padding-right:20px"/>
	        <p><b> '.$rows['b_Describe'].'</b></p>
	    </ul></p>';
			echo '</div></div></body>';
			$rows = mysqli_fetch_assoc($res);
		}
	}
?>
