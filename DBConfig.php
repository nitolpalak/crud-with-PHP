<?php
$username = 'root';
$pass = '';
$server = 'localhost';
$db = 'info';

$conn = new mysqli($server,$username,$pass,$db);

if($conn->connect_error){
	die("Connection failed");

}

?>