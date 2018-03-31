<?php
DEFINE ('DB_USER', 'tiensql');
DEFINE ('DB_PASSWORD', 'Jus!sk$1SpoaSWa1#');
DEFINE ('DB_HOST', '216.198.213.85:3306');
DEFINE ('DB_NAME', 'novumcapitalkyc');

$dbc = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
OR die('Could not connect to MySQL '.mysqli_connect_error());

?>