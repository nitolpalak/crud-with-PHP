<?php
require "DBConfig.php";
?>

<!DOCTYPE html>
<html>
<head>
	<title>Form</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
<?php
$sql = "SELECT * FROM info";
$result = $conn->query($sql);

?>
<div class="container">
<h2>Data</h2>
<table class="table">
<thead>
<tr>
<th>Name</th>
<th>Email</th>
<th>Department</th>
<th>Registration No.</th>
</tr>
</thead>
<tbody>


<?php
if($result->num_rows>0){
	while($row = $result->fetch_assoc()){
		echo '<tr class="success">
			 <td>'.$row["Name"].'</td>
			 <td>'.$row["Email"].'</td>
			 <td>'.$row["Dep"].'</td>
			 <td>'.$row["Reg"].'</td>
			 </tr>';
	}
}

$conn->close();

?>

</table>
</tbody>


<a class = "btn btn-success" href="Sublime1.php">OK</a>


</body>
</html>