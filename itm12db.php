<?php

$col= mysqli_connect('localhost','root','','itm12');

if($col)
{
	echo "connected ";
}
else
{
	echo "not connect";
}

?>