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

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

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
			  <li class="navItem">
			    <a class="nav-link" id="pills-form-tab" data-toggle="pill" href="#pills-form" role="tab" aria-controls="form" aria-selected="false">Pendaftaran Ahli</a>
			  </li>
			  <li></li>
			  <li>
			 
			  <?php include 'dbR.php';?>

			  <?php if (isset($_SESSION['username'])): ?>
					<div class=content>
					<p>Selamat Datang <?php echo $_SESSION["username"]?></p>
					<p><a href="index.php?logout='1'" style="color:red;">Log keluar</a></p>
					</div>
				<?php endif ?>
	  			
				</li>
			</ul>

<!--Nav Menu End-->

<!--Refresh on the same tab -->

<script type="text/javascript">
	$(document).ready(function(){
    $('a[data-toggle="tab"]').on('show.bs.tab', function(e) {
        localStorage.setItem('activeTab', $(e.target).attr('href'));
    });
    var activeTab = localStorage.getItem('activeTab');
    if(activeTab){
        $('#pills-tab a[href="' + activeTab + '"]').tab('show');
    }
});
</script>

<!--End refreshing-->

<!--Halaman Utama Contents -->

		

		<hr>
			<div class="tab-content" id="pills-tabContent">
			  <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
			  	<br>
<!--Database respond after register-->
		
		<?php if (isset($_SESSION['success'])): ?>
					<div class="error success">
					<h3>
						<?php
							echo $_SESSION['success'];
							unset($_SESSION['success']);
							
						?>
					</h3>
					</div>
		<?php endif ?>
		

<!--Start the first content-->


			<figure>
				<img src="img/HomePage.jpg" class="rounded mx-auto d-block" alt="Brownies Bakar Sedapnye Hmmmmm">
			</figure>

			<div class="box-1">
				<p>Brownies enak lagi lazat sehingga menjilat jilat jari-jari anda!</p>
				<br>
				<p>Di sini ada pelbagai hidangan brownies yang boleh dipilih:</p>
			</div>		
	  </div>

<!--Halaman Utama Contents End-->

<!--Register Form -->

 <div class="tab-pane fade" id="pills-form" role="tabpanel" aria-labelledby="pills-form-tab">

 	<?php 
 	include 'register.php'; 
 	?>

 	
</div>
<!--End of Register Form -->
		
<!-- Menu Button -->

        <div class="tab-pane fade" id="pills-menu" role="tabpanel" aria-labelledby="pills-menu-tab">
			  	<br>

	    <div class="box-2">


		<?php
			
			$sql = "SELECT * FROM `brownies`";
		    $result = $conn->query($sql);
		    $resultName[] = array();
		    $resultPrice[] = array();
		    $resultDetail[] = array();
		    $resultImage[] = array();

		    if($result ->num_rows>0){
		    while($row=$result->fetch_assoc()){
		        $resultName[] = $row["Name"];
		        $resultPrice[] = $row["Price"];
		        $resultDetail[] = $row["Detail"];
		        $resultImage[] = $row["Image"];
		    }

		    $max = sizeof($resultName);
		    for ($x = 1; $x < $max; $x++) {
					echo "<div id = btnBrownies".$x." class=\"btn btn-secondary\" data-toggle=\"tooltip\" data-placement=\"left\" title=".$resultName[$x].">".$resultName[$x]."</div>";
				}

			for ($x = 1; $x < $max; $x++) {
					echo "<div id = getBrownies".$x.">";
		        	echo "<img src=\"".$resultImage[$x]."\" class=\"rounded mx-auto d-block\" height=200 width=250>"."<br>"." Jenis: " . $resultName[$x]. "<br>". " Harga: RM" . $resultPrice[$x]."<br>". " Penerangan: ". $resultDetail[$x]."<br><br>";
		        	echo "</div>";
			}} else {
				echo "0 results";
			}
		?>

<!--Menu Button End-->

			<br>
			<br>

<!--Button Function -->

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

<!--Button Function End -->

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

<!--Testimoni Content End-->

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