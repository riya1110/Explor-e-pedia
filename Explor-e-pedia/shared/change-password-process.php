<?php

		session_start();
		require '../config/dbconnect.php';

		$id = $_SESSION["id"];/* userid of the user */
		$oldEncryptPassword = md5($_POST["oldpassword"]);
		$newEncryptPassword = md5($_POST["newpassword"]);
		$confirmEncryptPassword = md5($_POST["confirmpassword"]);

		if(count($_POST)>0) {
			$result = mysqli_query($conn,"SELECT * from user  WHERE Id='" . $id . "'");
			$row=mysqli_fetch_array($result);

				if($oldEncryptPassword == $row["Password"] && $newEncryptPassword == $confirmEncryptPassword) {
						mysqli_query($conn,"UPDATE user set Password='" . $newEncryptPassword . "' WHERE Id='" . $id . "'");
						//$message = "Password Changed Sucessfully";
						header("location:change-password-success"); 
					} 
				else{
	 					
	 					
	 					header("location:change-password-unsuccessful");
					}
		}
?>