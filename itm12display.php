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
		<th>Address</th>
		<th>Action</th>

	</tr>

<?php

include "itm12db.php";

$data="select * from student";
$q=mysqli_query($col,$data);

while($result=mysqli_fetch_array($q)){

?>

<tr>
	<td><?php echo $result['id'];?></td>
	<td><?php echo $result['name'];?></td>
	<td><?php echo $result['address'];?></td>
	<td>
		<a href="view12.php?id=<?php echo $result['id'];?>">View</a>
		<a href="edit12.php?id=<?php echo $result['id'];?>">Edit</a>
		<a href="">Delete</a>
	</td>



</tr>
<?php
}
?>
</table>

</body>
</html>