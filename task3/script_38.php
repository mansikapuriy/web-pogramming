<?php
	$a=array("a"=>"red","b"=>"green","c"=>"blue");
  echo array_shift($a)."<br>";
  print_r ($a);
  
  array_unshift($a,"blue");
  print_r($a);
?>
