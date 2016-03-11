<?php

require 'function.php';
session_start();

if(fnIsLoggedIn()){
    header("location: login.php");
} else {
    require 'banner.php';
	require 'navigation.php';
	require 'connection.php';
	require '../loaders/php/formLoader.php';
	require 'upload.php';
}
$strError = 0;
	if (isset($_POST['btnSubmit'])){

		if(empty($_POST['user_fname']) || empty($_POST['user_lname']) || empty($_POST['user_email']) || empty($_POST['user_uname']) || empty($_POST['user_password'])){
			 echo"<script> alert ('Fill up all the details') </script>";
			 $strError = 1;
		} else if (($_POST['user_password']) != ($_POST['user_confirm'])){
			 	echo"<script> alert ('Password do not match.') </script>";
			 	$strError = 1;
		} else {
			if(empty($_FILES['pic'])){
				$strError = 2;
			} else {
				$picData = fnUpload('pic');
				if($picData[0] == 1){
					$strPicPath = $picData[1];
				} else {
					$strPicError = $picData[2];
					$strError = 1;
				}
				try{
					$strUserFName= $_POST['user_fname'];
					$strUserLName= $_POST['user_lname'];
					$strUserName= $_POST['user_uname'];
					$strUserEmail= $_POST['user_email'];
					$strUserPassword = $_POST['user_password'];
					$strAccType= $_POST['account_type'];
					$stmt1 = $conn -> prepare("INSERT INTO tblUser(strUserFname,strUserLname,
									strUsername,strUserEmail,strPassword,strAccountType,txtPicPath) VALUES(:userFname,:userLname,:userUname,:userEmail,md5(:userPassword),:userAccount,:picpath)");
					$stmt1->bindParam(':userFname',$strUserFName,PDO::PARAM_STR);
					$stmt1->bindParam(':userLname',$strUserLName,PDO::PARAM_STR);
					$stmt1->bindParam(':userUname',$strUserName,PDO::PARAM_STR);
					$stmt1->bindParam(':userEmail',$strUserEmail,PDO::PARAM_STR);
					$stmt1->bindParam(':userPassword',$strUserPassword,PDO::PARAM_STR);
					$stmt1->bindParam(':picpath',$strPicPath,PDO::PARAM_STR);
					$stmt1->bindParam(':userAccount',$strAccType,PDO::PARAM_STR);
					$stmt1->execute();
				} catch(PDOException $e){
					echo "<h1>".$e->getMessage()."</h1>";
					$strError = 1;
				}
			}
		}
		if($strError == 1){    
	        if(isset($strPicError)){
	            $strMessage = "Error: Data not Save. ".$strPicError;
	        } else {
	            $strMessage = "Error: Data not Save.";
	            unlink($strPicPath);
	        }
	    } else if($strError == 2){
	        $strMessage = "Error: Candidate id or picture cannot be empty";
	    } else{
	        $strMessage = "Data Saved.";
	    }
	}

	$formResult = $conn -> query("SELECT * FROM tblUser");
	$formData = $formResult -> fetchAll();

	$strSchedResult = $conn -> query(" SELECT * FROM tblSchedule");
	$strSchedRows = $strSchedResult -> fetchAll();
	foreach ($strSchedRows as $strSchedRow) {
		$strElecStart = $strSchedRow['datSchedStart'];
		$strElecEnd = $strSchedRow['datSchedEnd'];
	}

	$strLatElecResult = $conn -> query(" SELECT * FROM tblElection");
	$strLatElecRows = $strLatElecResult -> fetchAll();
	foreach ($strLatElecRows as $strLatElecRow) {
		$strElecTitle = $strLatElecRow['strElecTitle'];
		$strElecDesc = $strLatElecRow['strElecDesc'];
		$strElecStatus = $strLatElecRow['blElecStatus'];
	}

	require 'adduser.tmpl.php';
?>