<?php

	require '../config/dbconnect.php';
	session_start();

	$firstname=$_POST['firstname'];
	$lastname=$_POST['lastname'];
	$emailaddress=$_POST['emailaddress'];
	$password=$_POST['password'];
	$cpass=$_POST['confirmpassword'];
	$role=$_POST['roleid'];
	$EncryptPassword = md5($password);
	$ran_id = rand(time(), 100000000);
	$status = "Active now";
	//$_SESSION['name']=$name;
	//$usertype=1;

	$IsActive=1;
	$date=date('y-m-d');

	if($password==$cpass)
	{
		//$spassword = password_hash($password, PASSWORD_BCRYPT, array('cost' => 12));

		$register_qry="INSERT INTO user(Role_id,unique_id,FirstName,LastName,Email_id,Password,Date_added,Date_edited,status) 
		values('".$role."','".$ran_id."','".$firstname."','".$lastname."','".$emailaddress."','".$EncryptPassword."','".$date."','".$date."','".$status."')";

		$rs=mysqli_query($conn,$register_qry);

		if($rs){

			header("location:login");
		}
		else
		{
			echo "error";
		}
	}
	else
	{
		echo "error";
	}


?>