<?php

include('mpctdisplay.php');

 $name=$_POST['name'];
 $email=$_POST['email'];
 $phone=$_POST['phone'];




$q ="INSERT INTO teacher (name,email,phone) VALUES ('$name', '$email',$phone')";

mysqli_query($col,$q);


?>