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
		<th>City</th>
		<th>Phone</th>
		<th>Address</th>
		<th>College</th>
		<th>Branch</th>
		<th>Action</th>

	</tr>

<?php

include "itmdb.php";

$data="select * from user";
$q=mysqli_query($col,$data);

while($result=mysqli_fetch_array($q)){

?>

<tr>
	<td><?php echo $result['id'];?></td>
	<td><?php echo $result['name'];?></td>
	<td><?php echo $result['email'];?></td>
	<td><?php echo $result['city'];?></td>
	<td><?php echo $result['phone'];?></td>
	<td><?php echo $result['address'];?></td>
	<td><?php echo $result['college'];?></td>
	<td><?php echo $result['branch'];?></td>
	

	<td>
		<a href="view.php?=<?php echo $result['id'];?>">View</a>
		<a href="edit.php?=<?php echo $result['id'];?>">Edit</a>
		<a href="">Delete</a>
	</td>



</tr>
<?php
}
?>
</table>

</body>
</html>