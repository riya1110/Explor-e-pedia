<?php

	session_start();
	require_once '../../config/dbconnect.php';

	$categoryname=$_POST['categoryname'];
	
	
	$date=date('y-m-d H:i:s');
	$isactive=1;



		$register_qry="INSERT INTO category(category_name,date_added,date_edited) 
		values('".$categoryname."','".$date."','".$date."')";

		$rs=mysqli_query($conn,$register_qry);

		if($rs){
			
			header("location:manage-category");
		}
		else
		{
			echo "error";
		}



?>