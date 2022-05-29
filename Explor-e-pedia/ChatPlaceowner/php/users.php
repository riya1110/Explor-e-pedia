<?php
    session_start();
    include_once "../../config/dbconnect.php";
    $outgoing_id = $_SESSION['unique_id'];

    $place=$_GET['id'];
    //AND id=$placeowner
                $qryp="SELECT * FROM place WHERE id = '".$place."' ";
                $sqlp = mysqli_query($conn,$qryp);
                $rowp = mysqli_fetch_assoc($sqlp);
          
                $placeowner=$rowp['User_id'];

                echo $placeowner;

//AND Id='".$placeowner."'

    $sql = "SELECT * FROM user WHERE NOT unique_id = {$outgoing_id} AND Role_id=3  ORDER BY Id DESC";
    $query = mysqli_query($conn, $sql);
    $output = "";

    if(mysqli_num_rows($query) == 0){
        $output .= "No users are available to chat";
    }elseif(mysqli_num_rows($query) > 0){
        include_once "data.php";
    }
    echo $output;
?>