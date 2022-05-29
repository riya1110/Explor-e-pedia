<?php

	$hostname="localhost";
	$username="root";
	$password="";
	$dbname="explorepedia";

	$conn=mysqli_connect($hostname , $username , $password , $dbname);

	try{

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        //close the connection to DB
        //$conn->close();

    } catch(Exception $e) {

        $error_message = $e->getMessage();
        echo "<p>Error message: $error_message </p>";
    }
?>