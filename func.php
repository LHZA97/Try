<?php 
include ("../try/db.php");

	$result = mysql_query("SELECT Name, Image, Price, Detail FROM Brownies");
	if (!$result){
		echo 'Could not run query: '.mysql_error();
		exit;
	}

function MenuBtn();
{
	$name=$POST["Name"];
	$image=$POST["Image"];
	$price=$POST["Price"];
	$detail=$POST["Detail"];

	
}

	mysqli_query($conn, $result);
?>