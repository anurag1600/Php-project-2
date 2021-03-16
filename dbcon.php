<?php

$con= mysqli_connect('localhost','root','','archana');

if($con)
{
	echo "connect";
}
else
{
	echo "not connect";
}

?>