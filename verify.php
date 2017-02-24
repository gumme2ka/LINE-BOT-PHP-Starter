<?php
	$access_token = 'IbgSsg+DwS1syPjPqRb1mg7Wu8LJQvkJeaJWLAj9pyXqP1JBCp8bWGwuxcbvyk6Aj7nRt0gfmc1Zp04Oj6sACE1NGhE3QXVVwyDyQwZRFhAIHBTfuAG8twNuB3hZItoSVS3Ja/ZSkHEmhwU2EVy9wgdB04t89/1O/w1cDnyilFU=';

	$url = 'https://api.line.me/v1/oauth/verify';

	$headers = array('Authorization: Bearer ' . $access_token);

	$ch = curl_init($url);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
	$result = curl_exec($ch);
	curl_close($ch);

	echo $result;
?>