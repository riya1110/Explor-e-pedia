<?php

	session_start();
	require_once '../../config/dbconnect.php';

	$state_name=$_POST['statename'];
	$country_id=$_POST['country_id'];
	
	
	$date=date('y-m-d H:i:s');
	$isactive=1;



		$register_qry="INSERT INTO state(country_id,state_name,date_added,date_edited) 
		values('".$country_id."','".$state_name."','".$date."','".$date."')";

		$rs=mysqli_query($conn,$register_qry);

		if($rs){
			
			header("location:manage-state");
		}
		else
		{
			echo "error";
		}



?>