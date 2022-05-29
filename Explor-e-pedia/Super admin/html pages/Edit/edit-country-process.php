<?php

    require '../../../config/dbconnect.php';

    $id=$_POST['id'];
    $country=$_POST['countryname'];
    $countrycode=$_POST['countrycode'];

    
    
    $date=date('y-m-d H:i:s');
   
    $edit_qry="UPDATE country SET country_name='".$country."',country_code='".$countrycode."',date_edited='".$date."' where id=$id";

    $rs=mysqli_query($conn,$edit_qry);
    if($rs)
    {
        header("location:../manage-country");
        exit();
    }
    else
    {
        echo "error";
    }

?>