<?php

	session_start();
	require '../config/dbconnect.php';

	$DOB=$_POST['dob'];
	$Gender=$_POST['gender'];
	$CountryCode=$_POST['code'];
	$PhoneNumber=$_POST['phonenumber'];
	$Address1=$_POST['addressline1'];
	$Address2=$_POST['addressline2'];
	$City=$_POST['city'];
	$State=$_POST['state'];
	$ZipCode=$_POST['zipcode'];
	$Country=$_POST['country'];
	$University=$_POST['university'];
	$College=$_POST['college'];

	$date=date('y-m-d');
	$User_id=$_SESSION['id'];
	// $isactive=1;
	require 'fileupload.php';
	$ProfilePicture=$target_file;

	// if(!isset($_SESSION['']))
	//   {

		$register_qry="INSERT INTO user_profile(User_id,DOB,Gender,CountryCode,PhoneNumber,ProfilePicture,Address1,Address2,City,State,ZipCode,Country,University,College,DateAdded,DateEdited) 
		values('".$User_id."','".$DOB."','".$Gender."','".$CountryCode."','".$PhoneNumber."','".$ProfilePicture."','".$Address1."','".$Address2."','".$City."','".$State."','".$ZipCode."','".$Country."','".$University."','".$College."','".$date."','".$date."')";

		$rs=mysqli_query($conn,$register_qry);

		if($rs){
			
			header("location:Place");
		}
		else
		{
			echo "error";
		}
	// }
	// else
	// {
	// 	echo "error";
	// }


?>