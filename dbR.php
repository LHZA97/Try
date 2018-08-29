<?php
include 'db.php'
 ?>

<?php 
	
	$status = session_status();
		if($status == PHP_SESSION_NONE){
		    //There is no active session
		    session_start();
		}else
		if($status == PHP_SESSION_DISABLED){
    		//Sessions are not available
		}else
		if($status == PHP_SESSION_ACTIVE){
		    //Destroy current and start new one
		    session_destroy();
		    session_start();
}
	


	$username = "";
	$email = "";
	$errors = array();

	$db = mysqli_connect('localhost', 'root', '1234', 'BrowniesDB');
	

	if (isset($_POST['register'])){
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$email = mysqli_real_escape_string($db, $_POST['email']);
		$password1 = mysqli_real_escape_string($db, $_POST['password1']);
		$password2 = mysqli_real_escape_string($db, $_POST['password2']);

		
		 //check if user exist or not
		$query = 'SELECT name FROM ahli WHERE name = "' . $username . '" LIMIT 1';
	 	$result  = mysqli_query($db, $query);
		$totalNumRowResult = mysqli_num_rows($result);

	 	if($totalNumRowResult > 0) {
	 	 $errors[] = 'User exist';
	 	}else{
	 	// ensure that the form fields are filled properly
		if (empty($username)) {
			array_push($errors, "Masukkan Nama Pengguna");
		}
		if (empty($email)) {
			array_push($errors, "Masukkan Email");
		}
		if (empty($password1)) {
			array_push($errors, "Masukkan Kata Laluan");
		}
		if ($password1 != $password2) {
			array_push($errors, "Kata Laluan tidak sama");
		}}

		//if there are no errors, save user to database
		if (count($errors)==0){
			$password = md5($password1); //encrypt the password
			$sql = "INSERT INTO ahli (name, email, password) VALUES ('$username', '$email', '$password')" ;
			mysqli_query($db, $sql);
			$_SESSION['username'] = $username;
			$_SESSION['success'] = "Anda sudah log masuk!";
			header('location: login.php');


		}
	}
	

	
	//log user in from the login page
	if (isset($_POST['login'])) {
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$password = mysqli_real_escape_string($db, $_POST['password']);

		// ensure form fill properly
		if (empty($username)) {
			array_push($errors, "Masukkan Nama Pengguna");
		}
		if (empty($password)) {
			array_push($errors, "Masukkan Kata Laluan");
		}
		if (count($errors) == 0) {
			$password = md5($password);//encrypt password
			$query= 'SELECT * FROM ahli WHERE name="'.$username.'" AND password="'.$password.'"';
			$result = mysqli_query($db, $query);
			if (mysqli_num_rows($result)==1) {
				//log user in
				$_SESSION['username'] = $username;
				$_SESSION['success'] = 'Anda sudah log masuk';
				header('location: index.php');
			}else{
				array_push($errors, "Kombinasi Nama Pengguna dan Kata Laluan yang salah");
				header('location: login.php');
			}
		}

	}

	//logout
	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['username']);
		header('location: index.php');
	}


?>