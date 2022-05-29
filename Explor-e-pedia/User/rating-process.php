<?php

    session_start();
    require '../config/dbconnect.php';


        $uID =$_POST['uID'];
        $ratedIndex = $_POST['rate'];
        $place_id=$_POST['placeid'];
        $user_id=$_SESSION['id'];
        $comment=$_POST['comment'];
        
         
        $isactive=1;
        $date=date('y-m-d');

    
        $qry="INSERT INTO place_rating(place_id,user_id,rating_number,comments,Date_added,Date_edited,isactive) 
        values('".$place_id."','".$user_id."','".$ratedIndex."','".$comment."','".$date."','".$date."','".$isactive."')";

        $rs=mysqli_query($conn,$qry);

        // $sql = $conn->query("SELECT id FROM place_rating");
        // $numR = $sql->num_rows;

        // $sql = $conn->query("SELECT SUM(rating_number) AS total FROM place_rating");
        //  $rData = $sql->fetch_array();
        // $total = $rData['total'];

        // $avg = $total / $numR;

        if($rs){

            header("location:search-places");
        }
        else
        {
            echo "error";
        }

    
    
?>