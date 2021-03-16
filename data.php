<?php

include('dbcon.php');

echo $user=$_POST['username'];
echo $pass=$_POST['password'];

$q ="INSERT INTO student (username, password) VALUES ('$user', '$pass')";

mysqli_query($con,$q);


?>