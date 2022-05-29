<?php

                        $fileNames = array_filter($_FILES['postimage']['name']);

                        $imgFiles = array();

                        $targetDir = "../uploadimages/";  

                        $allowTypes = array('jpg','png','jpeg','gif');

                        if(!empty($fileNames)){ 

                        	foreach($_FILES['postimage']['name'] as $key=>$val){ 
        // File upload path 
                        		$fileName = basename($_FILES['postimage']['name'][$key]); 
                        		$targetFilePath = $targetDir . $fileName; 
                        		
        // Check whether file type is valid 
                        		$fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION); 
                        		if(in_array($fileType, $allowTypes)){ 
            // Upload file to server 
                        			if(move_uploaded_file($_FILES["postimage"]["tmp_name"][$key], $targetFilePath)){                   
                array_push($imgFiles, $fileName);  // this is for storing in database
                
            }else{ 
            	$errorUpload .= $_FILES['postimage']['name'][$key].' | '; 
            } 
        }else{ 
        	$errorUploadType .= $_FILES['postimage']['name'][$key].' | '; 
        } 
    }
}

?>