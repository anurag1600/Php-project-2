<?php

include('itm12db.php');
 
echo $name=$_POST['name'];
 
echo $address=$_POST['address'];
 



$q ="INSERT INTO student (name,address)VALUES('$name','$address')";

mysqli_query($col,$q);


?>