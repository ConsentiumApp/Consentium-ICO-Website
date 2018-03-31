<?php
	if(isset($_POST['submit'])){
		if ($_POST['user'] == "novumcapital" && $_POST['password'] == "N0vumCapital8!"){
			header("Location: user-list.php");
			setcookie('user', 'NoVum');
		} else {
			include 'admin.html';
			echo "<script type='text/javascript'>document.getElementById('error').style.display = 'block'</script>";
		}
		exit;
	}

	include 'admin.html';
?>

