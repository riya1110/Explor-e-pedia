<?php

    require '../../../config/dbconnect.php';

    $id=$_POST['id'];
    $categoryname=$_POST['categoryname'];
    
    
    $date=date('y-m-d H:i:s');
   
    $edit_qry="UPDATE category SET category_name='".$categoryname."',date_edited='".$date."' where id=$id";

    $rs=mysqli_query($conn,$edit_qry);
    if($rs)
    {
        header("location:../manage-category");
        exit();
    }
    else
    {
        echo "error";
    }

?>