<!DOCTYPE>
<html>
<head>
	<title></title>
</head>
<body>

<table>
	<tr>
		<th>ID</th>
		<th>Name</th>
		<th>Email</th>
		<th>Phone</th>
		
	</tr>

<?php

include "database.php";

$data="select * from teacher";
$q=mysqli_query($col,$data);

while($result=mysqli_fetch_array($q)){

?>

<tr>
	<td><?php echo $result['id'];?></td>
	<td><?php echo $result['name'];?></td>
	<td><?php echo $result['email'];?></td>
	<td><?php echo $result['phone'];?></td>


	<td>
		<a href="">View</a>
		<a href="">Edit</a>
		<a href="">Delete</a>
	</td>



</tr>
<?php
}
?>
</table>

</body>
</html>