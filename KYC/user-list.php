<?php
	if(empty($_COOKIE['user']) || $_COOKIE['user'] != 'NoVum'){
		echo "You don't have access to this page";
		exit;
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin panel</title>
	<link rel="shortcut icon" type="image/png" href="img/favicon.png"/>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="modal-style.css" rel="stylesheet">
	<style type="text/css">
		table {
			border-collapse: collapse;
			width: 100%;
			background-color: #fff;
			margin-top: 50px;
		}

		table, th, td {
			border: 1px solid black;
			padding: 10px;
			text-align:center;
		}

		h1 {
			text-align: center;
			color: #ffefcd;
		}

		button{
			float:left; 
			background-color:#EDE7F6;
			color: grey; 
			width: 80px; 
			height:30px; 
			margin-bottom:10px; 
			margin-left:10px;
			font-weight:bold;
		}

		tr:nth-child(even) {background-color: #efe3c9;}
	</style>

</head>
<body style="background-color: #342c19">
<h1>User detail</h1>
<button onclick="logOut()">Logout</button>
<table>
	<tr>
		<th>#</th>
		<th>Email</th>
		<th>Name</th>
		<th>Date of birth</th>
		<th>Citizenship</th>
		<th>Passport</th>
	</tr>
<?php
require_once('mysqli_connect.php');
$sql = "select * from consentium_user";
$result = mysqli_query($dbc, $sql);
$id = 0;
while ($user = mysqli_fetch_array($result)) {
	$id += 1;
	echo "<tr>";
	echo "<td>".$id."</td>";
	echo "<td>".$user['email']."</td>";
	echo "<td>".$user['first_name']." ".$user['last_name']."</td>";
	echo "<td>".$user['date_birth']."</td>";
	echo "<td>".$user['citizenship']."</td>";
	if(!empty($user['passport_location'])) {
		echo "<td><a href='javascript: showImage(\"".$user['passport_location']."\",\"".$user['first_name']." ".$user['last_name']."\")'>View</a></td>";
	} else {
		echo "<td/>";
	}
	echo "</tr>";
}
mysqli_close($dbc);
?>
</table>
<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- The Close Button -->
  <span class="close">&times;</span>

  <!-- Modal Content (The Image) -->
  <img class="modal-content" id="img01"/>

  <!-- Modal Caption (Image Text) -->
  <div id="caption"></div>
</div>

<script type="text/javascript">
function showImage(image_source, name) {
	var modal = document.getElementById('myModal');

	// Get the image and insert it inside the modal - use its "alt" text as a caption
	var modalImg = document.getElementById("img01");
	var captionText = document.getElementById("caption");
	
    modal.style.display = "block";
    modalImg.src = image_source;
    captionText.innerHTML = name;

	// Get the <span> element that closes the modal
	var span = document.getElementsByClassName("close")[0];

	// When the user clicks on <span> (x), close the modal
	span.onclick = function() { 
	  modal.style.display = "none";
	}
}

function logOut() {
    document.cookie = "user=";
    window.open("admin.php", "_self");
}
</script>
</body>
</html>
