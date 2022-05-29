<?php

	require '../config/dbconnect.php';

	function getUserIpAddr(){
	    if(!empty($_SERVER['HTTP_CLIENT_IP'])){
	        //ip from share internet
	        $ip = $_SERVER['HTTP_CLIENT_IP'];
	    }elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
	        //ip pass from proxy
	        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
	    }else{
	        $ip = $_SERVER['REMOTE_ADDR'];
	    }
	    return $ip;
	}

	$fullname = $_POST['fullname'];
	$email_id = $_POST['email_id'];
	$subject = $_POST['subject'];
	$comments = $_POST['comments'];

	$ip_add=getUserIpAddr();

	$feed_qry = "INSERT INTO contact_us(fullname, email_id, subject,comments,ip_address)
				VALUES ('".$fullname."','".$email_id."','".$subject."','".$comments."','".$ip_add."')";
	
	$rs = mysqli_query($conn, $feed_qry);

	if($rs){ 
		header('location:search-places');
	}
	else{
		echo 'error';
	}

?>