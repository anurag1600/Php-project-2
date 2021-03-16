<?php

include('itmdb.php');
 
 $name=$_POST['name'];
 $email=$_POST['email'];
 $city=$_POST['city'];
 $phone=$_POST['phone'];
 $address=$_POST['address'];
 $college=$_POST['college'];
 $branch=$_POST['branch'];



$q ="INSERT INTO user (name,email,city,phone,address,college,branch)VALUES('$name','$email','$city','$phone','$address','$college','$branch')";

mysqli_query($col,$q);


?>