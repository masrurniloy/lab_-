<?php

echo "You have selected : ";
$count=0;
foreach ($_POST['check_list'] as $select)
	$count++;
	
$i=0;
foreach ($_POST['check_list'] as $select)
{
	if($i != $count)
		echo ", ";
	echo $select;
	$i++;
}

?>