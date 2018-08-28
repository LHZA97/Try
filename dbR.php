<?php\
include 'db.php'
 ?>
 
<?php 
	session_start();


	$username = "";
	$email = "";
	$error = array();

	$db = mysqli_connect('localhost', 'root', '1234', 'BrowniesDB');
	

	if (isset($_POST['register'])){
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$email = mysqli_real_escape_string($db, $_POST['email']);
		$password1 = mysqli_real_escape_string($db, $_POST['password1']);
		$password2 = mysqli_real_escape_string($db, $_POST['password2']);

		
		 //---if your table user is "table_user" and fieldname username is "username"
		$query = 'SELECT name FROM ahli WHERE name = "' . $username . '" LIMIT 1';
	 	$result  = mysqli_query($db, $query);
		$totalNumRowResult = mysqli_num_rows($result);

	 	if($totalNumRowResult > 0) {
	 	 $error[] = 'User exist';
	 	}

		if (empty($username)) {
			array_push($error, "Username is required");
		}
		if (empty($email)) {
			array_push($error, "Email is required");
		}
		if (empty($password1)) {
			array_push($error, "Password is required");
		}
		if ($password1 != $password2) {
			array_push($error, "Password not match");
		}

		if (count($error)==0){
			$password = md5($password1);
			$sql = "INSERT INTO ahli (name, email, password) VALUES ('$username', '$email', '$password')" ;
			mysqli_query($db, $sql);
			$_SESSION['username'] = $username;
			$_SESSION['success'] = "Anda sudah log masuk!";
			header('location: index.php');


		}
	}
	if (isset($_GET['logout'])){
		session_destroy();
		unset($_SESSION['username']);
		header('location: login.php');	
		}

	if (isset($_POST['login'])){
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$password1 = mysqli_real_escape_string($db, $_POST['password1']);


		if (empty($username)) {
			array_push($error, "Username is required");
		}
		if (empty($password1)) {
			array_push($error, "Password not match");
		}

	if (count($error)==0) {
		$password = md5($password);
		$query = "SELECT * FROM ahli WHERE username='$username' AND password='$password'";
		$result = mysqli_query($db, $query);
		if (mysqli_num_rows($result)==1) {
			$_SESSION['username'] = $username;
			$_SESSION['success'] = 'Anda sudah log masuk';
			header('location: index.php');
		} else {
			array_push($error, "wrong username/password combination");
			header('location: login.php');
		}
	}
}
?>