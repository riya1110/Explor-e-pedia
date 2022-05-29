<?php

	session_start();
	require '../config/dbconnect.php';

	$name=$_POST['name'];
	$category=$_POST['category'];
	$description=$_POST['description'];
	$Address1=$_POST['addressline1'];
	$Address2=$_POST['addressline2'];
	$City=$_POST['city'];
	$State=$_POST['state'];
	$ZipCode=$_POST['zipcode'];
	$Country=$_POST['country'];
	
	$date=date('y-m-d H:i:s');
	$User_id=$_SESSION['id'];
	
	require 'fileupload.php';
	$Photo=$target_file;
	$status=0;
	$famous=$_POST['famous'];

	$famous1=serialize($famous);
	$isactive=1;

		$register_qry="INSERT INTO place(User_id,status,name,category,famous,address1,address2,city,state,zipcode,country,description,photo,date_added,date_edited,isactive) 
		values('".$User_id."','".$status."','".$name."','".$category."','".$famous1."','".$Address1."','".$Address2."','".$City."','".$State."','".$ZipCode."','".$Country."','".$description."','".$Photo."','".$date."','".$date."','".$isactive."')";

		$rs=mysqli_query($conn,$register_qry);

		if($rs){
			
			header("location:Place");
		}
		else
		{
			echo "error";
		}



?>