<?php
if (isset($_POST['submit'])) {
	echo $_POST['email']."/".$_POST['password'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$confirmPass = $_POST['confirm_pass'];
	require_once('mysqli_connect.php');
	$query = "select * from consentium_user where email = '$email'";
	$result = @mysqli_query($dbc, $query);
	if (mysqli_num_rows($result) > 0){
		include 'sign-up.html';
			echo "<script type='text/javascript'>document.getElementById('error2').style.display='block';</script>";
			exit;
	} else {
		if($password != $confirmPass) {
			include 'sign-up.html';
			echo "<script type='text/javascript'>document.getElementById('error1').style.display='block';";
			echo "document.getElementsByName('email')[0].value='".$email."';</script>";
			exit;
		}
		$sql_update = "insert into consentium_user (email, password) values 
		('$email', '$password')";
		if (mysqli_query($dbc, $sql_update)) {
			setcookie("email", $email);
			header('Location: step.html');
		} else {
			echo "Error: ".mysqli_error($dbc);
		}
	}
	mysqli_close($dbc);
	exit;
}
include 'sign-up.html';
?>