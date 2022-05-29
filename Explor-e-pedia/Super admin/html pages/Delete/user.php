<?php

	$id=$_GET['id'];
	require '../../../config/dbconnect.php';

	$qry="SELECT * FROM user where Id=$id";
	$rs=mysqli_query($conn,$qry);
	$row=mysqli_fetch_assoc($rs);

	if($row['IsActive']==0)
	{
		$qry1="UPDATE user SET IsActive=1 where Id=$id";
		$rs1=mysqli_query($conn,$qry1);
		header("location:../manage-user");
		exit();
	}
	elseif ($row['IsActive']==1) {
		$qry2="UPDATE user SET IsActive=0 where Id=$id";
		$rs2=mysqli_query($conn,$qry2);
		header("location:../manage-user");
		exit();
	}
	else
	{
		echo " error";
	}
?>