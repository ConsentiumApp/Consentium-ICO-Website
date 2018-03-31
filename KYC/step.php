<?php
if (empty($_COOKIE['email'])) {
	header('Location: sign-in.php');
	exit;
}
if(isset($_FILES['file']) || !empty($_POST['fname']) || !empty($_POST['lname']) || 
	!empty($_POST['date_of_birth']) || !empty($_POST['citizenship'])){
	require_once('mysqli_connect.php');
	if(isset($_FILES['file'])) {
		$name = $_FILES['file']['name'];
		$tmp_name = $_FILES['file']['tmp_name'];
		$location = 'files/'.$name;
		move_uploaded_file($tmp_name, $location);
	}
	
	$sql = "update consentium_user set first_name='"
	.$_POST['fname']."', last_name='"
	.$_POST['lname']."', date_birth='"
	.$_POST['date_of_birth']."', citizenship='"
	.$_POST['citizenship'];
	
	if(isset($_FILES['file']) && !empty($name) && !empty($tmp_name)) {
		$sql = $sql."', passport_location='".$location;
	}

	$sql = $sql."' where email='".$_COOKIE['email']."'";
	if(mysqli_query($dbc, $sql)){
		include 'step.html';
		echo "<script type='text/javascript'> 
		$(document).ready(function(){
			var x = document.getElementsByClassName('tab'); x[0].style.display = 'none'; showTab(3); 
		});
		</script>";
	} else {
		echo 'Have error when update';
	}
	mysqli_close($dbc);
	exit;
}
include 'step.html';
require_once('mysqli_connect.php');
$sql = "select * from consentium_nationality";
$result = mysqli_query($dbc, $sql);
echo "<script type='text/javascript'>";
echo "var selectBox = document.getElementById('citizenship');
	var option;";
while ($nation = mysqli_fetch_array($result)){
  echo "option = document.createElement('option');";
  echo "option.text = '".$nation['name']."';";
  echo "option.value = \"".$nation['country']."\";";
  echo "selectBox.add(option);";
}
echo "</script>";
?>