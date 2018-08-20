<?php
include('db.php')

$idChange = $_["idChangeNew"];
$sql = "SELECT * FROM `brownies`";
	$result = $conn->query($sql);

	if($result ->num_rows>0){
		//output data of each row
		while($row=$result->fetch_assoc()){
			echo " Name: " . $row["Name"]. "<br>". " Price: " . $row["Price"]."<br>". " Detail: ". $row["Detail"]."<br><br>";
		}
	} else {
		echo "0 results";
	}

?>