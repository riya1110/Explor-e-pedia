<?php

    require '../../config/dbconnect.php';

    $id=$_GET['id'];
    $status=1;

    
    
    $date=date('y-m-d H:i:s');
   
    $edit_qry="UPDATE place SET status='".$status."',date_edited='".$date."' where id=$id";

    $rs=mysqli_query($conn,$edit_qry);
    if($rs)
    {
        header("location:manage-place");
        exit();
    }
    else
    {
        echo "error";
    }

?>