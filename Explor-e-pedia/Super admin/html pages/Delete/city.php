<?php

	$id=$_GET['id'];
	require '../../../config/dbconnect.php';

	$qry="SELECT * FROM city where id=$id";
	$rs=mysqli_query($conn,$qry);
	$row=mysqli_fetch_assoc($rs);

	if($row['isactive']==0)
	{
		$qry1="UPDATE city SET isactive=1 where id=$id";
		$rs1=mysqli_query($conn,$qry1);
		header("location:../manage-city");
		exit();
	}
	elseif ($row['isactive']==1) {
		$qry2="UPDATE city SET isactive=0 where id=$id";
		$rs2=mysqli_query($conn,$qry2);
		header("location:../manage-city");
		exit();
	}
	else
	{
		echo " error";
	}
?>