<?php

	$id=$_GET['id'];
	require '../../../config/dbconnect.php';

	$qry="SELECT * FROM category where id=$id";
	$rs=mysqli_query($conn,$qry);
	$row=mysqli_fetch_assoc($rs);

	if($row['isactive']==0)
	{
		$qry1="UPDATE category SET isactive=1 where id=$id";
		$rs1=mysqli_query($conn,$qry1);
		header("location:../manage-category");
		exit();
	}
	elseif ($row['isactive']==1) {
		$qry2="UPDATE category SET isactive=0 where id=$id";
		$rs2=mysqli_query($conn,$qry2);
		header("location:../manage-category");
		exit();
	}
	else
	{
		echo " error";
	}
?>