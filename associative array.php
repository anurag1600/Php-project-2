<?php
//PHP Arrays | PHP Associative Array | Traversing ??
$courses = array ("c++"=>"1000", "java"=>"1200", "Php"=>"12000");


print_r($courses );

//echo $courses[php];

foreach ($courses as $key => $value) {echo " key is "  . $key . " value is " . $value . "</br>";
	# code...
}


?>