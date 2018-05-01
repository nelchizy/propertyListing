<?php
	
    //$rand = strtoupper(substr(uniqid(sha1(time())),0,8));

    //echo $rand;
    
function generateKey()
{
	$randomKey = NULL;
	$keys = "23456789ABCDEFGHJKLMNPQRSTUVWXYZ";
	$stringArray = str_split($keys);

	for($i = 0;$i < 7;$i++)
	{
		$index = (rand() % count($stringArray));
		$randomKey .= $stringArray[$index];
	}
	return $randomKey;
}


?>