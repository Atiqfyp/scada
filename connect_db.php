<?php 

$db_user ='epiz_25170311';
$db_password ='rWlq4OaP2lb5';
$db_host ='sql106.epizy.com';
$db_name ='epiz_25170311_fyp_data';

$conn = mysqli_connect($db_host,$db_user,$db_password,$db_name);

if (!$conn) {
	echo ' Connection error not connected :' . mysqli_error($conn);
}


	 ?>