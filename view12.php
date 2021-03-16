<?php
include ('itm12db.php');

if (isset($_GET['id']))
{
 $id =$_GET['id'];
$query ="select * From student where id=$id";
$fire =mysqli_query($col,$query);

//if($fire)echo "we got the data.";
$user = mysqli_fetch_assoc($fire);
//echo $user['username'];

}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h2>name:<?php echo $user['name'] ?></h2>
	<h2>address:<?php echo $user['address'] ?></h2>

</body>
</html>