<?php


   require '../config/dbconnect.php';

    $placeid=$_POST['placeid'];

    require './fileupload1.php';
    $image=$imgFiles;

    $image = serialize($image);

    $qry="INSERT INTO placeimages(place_id,images) 
		values('".$placeid."','".$image."')";

		$rs=mysqli_query($conn,$qry);

		if($rs){
			
			header("location:place");
		}
		else
		{
			echo "error";
		}
?>