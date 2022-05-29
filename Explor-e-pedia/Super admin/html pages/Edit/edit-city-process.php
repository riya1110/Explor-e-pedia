<?php

    require '../../../config/dbconnect.php';

    $id=$_POST['id'];
    $cityname=$_POST['cityname'];

    
    
    $date=date('y-m-d H:i:s');
   
    $edit_qry="UPDATE city SET city_name='".$cityname."',date_edited='".$date."' where id=$id";

    $rs=mysqli_query($conn,$edit_qry);
    if($rs)
    {
        header("location:../manage-city");
        exit();
    }
    else
    {
        echo "error";
    }

?>