<?php
require_once('mysqli_connect.php');
$sql = "select * from consentium_user where email='".$_GET['email']."'";
$result = mysqli_query($dbc, $sql);
$user = mysqli_fetch_array($result);
$object = new stdClass();
$object->first_name = $user['first_name'];
$object->last_name = $user['last_name'];
$object->date_birth = $user['date_birth'];
$object->citizenship = $user['citizenship'];
$jsonObject = json_encode($object);
mysqli_close($dbc);
echo $jsonObject;
?>