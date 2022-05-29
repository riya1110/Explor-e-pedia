<?php

	session_start();
	require '../config/dbconnect.php';

	$email1=$_POST['emailaddress'];
	$password1=$_POST['password'];

	$EncryptPassword = md5($password1);

	$login_qry="SELECT * FROM user where Email_id='$email1' and Password='$EncryptPassword' and IsActive=1";

	$rs=mysqli_query($conn,$login_qry);

	$count=mysqli_num_rows($rs);
	$row=mysqli_fetch_assoc($rs);

	if($count>0)
	{	

		if($row['Role_id'] == 3){

			$_SESSION['id']=$row['Id'];
			$_SESSION['name']=$row['FirstName'];
			$_SESSION['email']=$row['Email_id'];
			$_SESSION['lname']=$row['LastName'];
			$_SESSION['unique_id']=$row['unique_id'];
			
			header("location:../User/user-profile");
			exit();
			}
		else if($row['Role_id'] == 2){


			$_SESSION['id']=$row['Id'];
			$_SESSION['name']=$row['FirstName'];
			$_SESSION['email']=$row['Email_id'];
			$_SESSION['lname']=$row['LastName'];
			$_SESSION['unique_id']=$row['unique_id'];
			
			header("location:../Place owner/place-owner-profile");
		}
		else if($row['Role_id'] == 1){


			$_SESSION['id']=$row['Id'];
			$_SESSION['name']=$row['FirstName'];
			$_SESSION['email']=$row['Email_id'];
			$_SESSION['lname']=$row['LastName'];
			$_SESSION['unique_id']=$row['unique_id'];
			
			header("location:../Super Admin/html pages/manage-place");
		}
		
	}
	else
	{
		header("location:../index"); 
	}

?>