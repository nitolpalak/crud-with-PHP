<?php
require "DBConfig.php";

if($_SERVER["REQUEST_METHOD"]=="POST"){
	$name=$_POST["name"];
	$email=$_POST["email"];
	$dep=$_POST["dep"];
	$reg=$_POST["reg"];

	
	$mysql_qry="insert into info(Name,Email,Dep,Reg) values('$name','$email','$dep','$reg')";
	if($conn->query($mysql_qry)==TRUE){
		echo "successful";
		$message="Success";
		header('location: Sublime1.php?meg='.$message);
	}
}

?>