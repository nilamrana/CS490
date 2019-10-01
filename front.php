<?php

	header("Content-type: application/json; charset=UTF-8");
 
	$ucid=$_POST['ucid'];
	$password=$_POST['password'];
 
	$info ='ucid'=$ucid&'password'=$password);
 	$curl = curl_init();
  
	curl_setopt($curl, CURLOPT_URL,'http://web.njit.edu/~cah24/cs490/middle.php');  
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($curl,CURLOPT_POST,1);
	curl_setopt($curl, CURLOPT_POSTFIELDS, $info);
	curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
	
	$response = curl_exec($curl);
 	echo $response;
	curl_close($curl);

?>

