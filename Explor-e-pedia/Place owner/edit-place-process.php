<?php

    require '../config/dbconnect.php';

    $id=$_POST['id'];
    $name=$_POST['name'];
    $category=$_POST['category'];
    $description=$_POST['description'];
    $Address1=$_POST['addressline1'];
    $Address2=$_POST['addressline2'];
    $City=$_POST['city'];
    $State=$_POST['state'];
    $ZipCode=$_POST['zipcode'];
    $Country=$_POST['country'];

    
    $date=date('y-m-d H:i:s');
    
    // require 'fileupload.php';
    // $Photo=$target_file;
    $status=0;
    $famous=$_POST['famous'];

    $famous1=serialize($famous);
    
    $date=date('y-m-d H:i:s');

     $edit_qry="UPDATE place SET status='".$status."',name='".$name."',category='".$category."',famous='".$famous1."',address1='".$Address1."',address2='".$Address2."',city='".$City."',state='".$State."',zipcode='".$ZipCode."',country='".$Country."',description='".$description."',date_edited='".$date."' where id=$id";
        //,photo='".$Photo."'

    $rs=mysqli_query($conn,$edit_qry);

    if($rs)
    {
        header("location:place");
        exit();
    }
    else
    {
        echo "error";
    }

?>