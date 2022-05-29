<?php

	session_start();
	require_once '../../config/dbconnect.php';

	$countryname=$_POST['countryname'];
	$countrycode=$_POST['countrycode'];
	
	
	$date=date('y-m-d H:i:s');
	$isactive=1;



		$register_qry="INSERT INTO country(country_name,country_code,date_added,date_edited) 
		values('".$countryname."','".$countrycode."','".$date."','".$date."')";

		$rs=mysqli_query($conn,$register_qry);

		if($rs){
			
			header("location:manage-country");
		}
		else
		{
			echo "error";
		}



?>