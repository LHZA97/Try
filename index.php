<?php 
include ('db.php');
?>

<!DOCTYPE html>
<html>
<head>

	<title>BrowniesBoobies</title>
		<link rel="shortcut icon" type="image/jpg" href="img/favicon.jpg">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="style.css">
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</head>
<body>
	<div class="container">
<!--Nav Menu -->
			<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
			  <li class="navItem">
			    <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Halaman Utama</a>
			  </li>
			  <li class="navItem">
			    <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-menu" role="tab" aria-controls="pills-menu" aria-selected="false">Menu</a>
			  </li>
			  <li class="navItem">
			    <a class="nav-link" id="pills-testimony-tab" data-toggle="pill" href="#pills-testimony" role="tab" aria-controls="pills-testimony" aria-selected="false">Testimoni</a>
			  </li>
			</ul>

<!--Nav Contents -->

		<hr>
			<div class="tab-content" id="pills-tabContent">
			  <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
			  	<br>

					<figure>
						<img src="img/HomePage.jpg" class="rounded mx-auto d-block" alt="Brownies Bakar Sedapnye Hmmmmm">
					</figure>

					<div class="box-1">
						<p>Brownies enak lagi lazat sehingga menjilat jilat jari-jari anda!</p>
						<br>
						<p>Di sini ada pelbagai hidangan brownies yang boleh dipilih:</p>
					</div>		
			  </div>

			  
<!-- Menu Button -->

        <div class="tab-pane fade" id="pills-menu" role="tabpanel" aria-labelledby="pills-menu-tab">
			  	<br>

	    <div class="box-2">

			<a id="btnBrownies1" class="btn btn-secondary" data-toggle="tooltip" data-placement="top" title="Brownies Chocolate Mousse"> Brownies Chocolate Mousse
			</a>

			<a id="btnBrownies2" class="btn btn-secondary" data-toggle="tooltip" data-placement="right" title="Brownies Cheese">
			Brownies Cheese 
			</a>
					
			<a id="btnBrownies3" class="btn btn-secondary" data-toggle="tooltip" data-placement="bottom" title="Brownies Marble">
			Brownies Marble
			</a>
						
			<a id="btnBrownies4" class="btn btn-secondary" data-toggle="tooltip" data-placement="left" title="Brownies Durian">
			Brownies Durian
			</a>
			<br>
			<br>

						
<!--Menu Button Contents -->	


		<div id="getBrownies1">
			<?php
				
				$sql = "SELECT * FROM `brownies` WHERE ID=1";
				$result = $conn->query($sql);

				if($result ->num_rows>0){
					//output data of each row
					while($row=$result->fetch_assoc()){
						echo "<img src=\"./img/menuBtn1.jpg\" class=\"rounded mx-auto d-block\">"."<br>"." Jenis: " . $row["Name"]. "<br>". " Harga: RM" . $row["Price"]."<br>". " Penerangan: ". $row["Detail"]."<br><br>";
					}
				} else {
					echo "0 results";
				}
			?>
		</div>

		<div id="getBrownies2">
			<?php
				
				$sql = "SELECT * FROM `brownies` WHERE ID=2";
				$result = $conn->query($sql);

				if($result ->num_rows>0){
					//output data of each row
					while($row=$result->fetch_assoc()){
						echo "<img src=\"./img/menuBtn2.jpg\" class=\"rounded mx-auto d-block\" height=200 width=250>"."<br>"." Jenis: " . $row["Name"]. "<br>". " Harga: RM" . $row["Price"]."<br>". " Penerangan: ". $row["Detail"]."<br><br>";
					}
				} else {
					echo "0 results";
				}
			?>
		</div>

		<div id="getBrownies3">
			<?php
				
				$sql = "SELECT * FROM `brownies` WHERE ID=3";
				$result = $conn->query($sql);

				if($result ->num_rows>0){
					//output data of each row
					while($row=$result->fetch_assoc()){
						echo "<img src=\"./img/menuBtn3.jpg\" class=\"rounded mx-auto d-block\" height=200 width=250>"."<br>"." Jenis: " . $row["Name"]. "<br>". " Harga: RM" . $row["Price"]."<br>". " Penerangan: ". $row["Detail"]."<br><br>";
					}
				} else {
					echo "0 results";
				}
			?>
		</div>

		<div id="getBrownies4">
			<?php
				
				$sql = "SELECT * FROM `brownies` WHERE ID=4";
				$result = $conn->query($sql);

				if($result ->num_rows>0){
					//output data of each row
					while($row=$result->fetch_assoc()){
						echo "<img src=\"./img/menuBtn4.jpg\" class=\"rounded mx-auto d-block\" height=200 width=250>"."<br>"." Jenis: " . $row["Name"]. "<br>". " Harga: RM" . $row["Price"]."<br>". " Penerangan: ". $row["Detail"]."<br><br>";
					}
				} else {
					echo "0 results";
				}
			?>
		</div>

		<?php 
		    $sql = "SELECT * FROM `brownies`";
		    $result = $conn->query($sql);
		    $resultName[] = array();
		    $resultPrice[] = array();
		    $resultDetail[] = array();

		    while($row=$result->fetch_assoc()){
		        // $allResults[] = $row["Name"];
		        $resultName[] = $row["Name"];
		        $resultPrice[] = $row["Price"];
		        $resultDetail[] = $row["Detail"];
		    }

		    $max = sizeof($resultName);
		    for ($x = 1; $x < $max; $x++) {
		        echo " Jenis: " . $resultName[$x]. "<br>". " Harga: RM" . $resultPrice[$x]."<br>". " Penerangan: ". $resultDetail[$x]."<br><br>";
		    }

		?>


		<script>
		$(document).ready(function(){
		  $("#getBrownies1").show();
		     	$("#getBrownies2").hide();
		     		$("#getBrownies3").hide();
		     			$("#getBrownies4").hide();

		     	$("#btnBrownies1").click(function(){
		     		$("#getBrownies2").hide();
		     		$("#getBrownies3").hide();
		     		$("#getBrownies4").hide();
		     		$("#getBrownies1").show();

		     	})

		     	$("#btnBrownies2").click(function(){
		     		$("#getBrownies4").hide();
		     		$("#getBrownies3").hide();
		     		$("#getBrownies1").hide();
		     		$("#getBrownies2").show();
		     	});

		     	$("#btnBrownies3").click(function(){
		     		$("#getBrownies4").hide();
		     		$("#getBrownies2").hide();
		     		$("#getBrownies1").hide();
		     		$("#getBrownies3").show();
		            $("#text").html("Second List Name");
		     	});

		     	$("#btnBrownies4").click(function(){
		     		$("#getBrownies2").hide();
		     		$("#getBrownies3").hide();
		     		$("#getBrownies1").hide();
		     		$("#getBrownies4").show();
		            $("#text").html("Second List Name");
		     	});
		});
		</script>

		</div>

	</div>	  

<!--Testimoni Tab-->

	    <div class="tab-pane fade" id="pills-testimony" role="tabpanel" aria-labelledby="pills-testimony-tab">
			  	<br>

<!--Testimoni Content-->

		<div class="card">
			<?php 
			    $sql = "SELECT * FROM `testimoni`";
			    $result = $conn->query($sql);
			    $testimony[] = array();
			    $testimonyName[] = array();
			    $testimonyDetail[] = array();
			    $testimonyImage[] = array();

			    while($row=$result->fetch_assoc()){
			        $testimony[] = $row["id"];
			        $testimonyName[] = $row["name"];
			        $testimonyDetail[] = $row["detail"];
			        $testimonyImage[] = $row["image"];
			    }

			    $max = sizeof($testimony);
			    for ($x = 1; $x < $max; $x++) {
			    	echo "<div class=\"cardHeader\">";
			        echo "Testimoni $testimony[$x]";
			        echo "<br>";
			        //<img src="/try/blaba.jpg">
			    	echo "<img src=\" " .$testimonyImage[$x]."\"class=\"rounded mx-auto d-block\" height=300px width=300px>";
			    	echo "</div>";
			    	echo "<div class=\"cardBody\">";
				    echo "<blockquote class=\"blockquote mb-0\">";
				    echo $testimonyDetail[$x];
				    echo "<footer class=\"blockquote-footer\">".$testimonyName[$x]."</footer>"."<br>";
				    echo "</blockquote><hr>";
			    }

			?>

		</div>
				
		<br>

			  		
			  
</div>
</div>
</div>

<hr>
<br>


<!--Footer-->
	<footer id="mainFooter">
		<p>Created By Boobies@Copyright 2018</p>
	</footer>

	</div>
</body>
</html>