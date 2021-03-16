


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

<?php
  
  if(isset($_POST['update'])){

      echo $name = $_POST['name'];
       echo $address = $_POST['address'];

       $query ="UPDATE student SET name = '$name',address = '$address' where id=$id";
       $fire = mysqli_query($col, $query);

      // //if($fire)echo "data updated successfully.";
      if($fire) header("Location:itm12display.php");

  } 



?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


	<form method="post" action="">
	<br>
	Name:<input type="text" name="name" value="<?php echo $user['name']?>">

	<br>

	Address:<input type="text" name="address" value="<?php echo $user['address']?>">
	<br>

	<input type="submit" name="update"  value="update">
</form>
</body>
</html>