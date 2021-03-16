<?php

$col= mysqli_connect('localhost','root','','itm6');

if($col)
{
	echo "connected ";
}
else
{
	echo "not connect";
}

?>