<?php

    require '../../../config/dbconnect.php';

    $id=$_POST['id'];
    $state=$_POST['statename'];    
    
    $date=date('y-m-d H:i:s');
   
    $edit_qry="UPDATE state SET state_name='".$state."',date_edited='".$date."' where id=$id";

    $rs=mysqli_query($conn,$edit_qry);
    if($rs)
    {
        header("location:../manage-state");
        exit();
    }
    else
    {
        echo "error";
    }

?>