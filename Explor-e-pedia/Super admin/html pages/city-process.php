<?php

	session_start();
	require_once '../../config/dbconnect.php';

	$city_name=$_POST['cityname'];
	$state_id=$_POST['state_id'];
	
	
	$date=date('y-m-d H:i:s');
	$isactive=1;



		$register_qry="INSERT INTO city(state_id,city_name,date_added,date_edited) 
		values('".$state_id."','".$city_name."','".$date."','".$date."')";

		$rs=mysqli_query($conn,$register_qry);

		if($rs){
			
			header("location:manage-city");
		}
		else
		{
			echo "error";
		}



?>