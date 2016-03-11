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
}
	if (isset($_POST['btnSubmit'])){

		if(empty($_POST['user_fname']) || empty($_POST['user_lname']) || empty($_POST['user_email']) || empty($_POST['user_uname']) || empty($_POST['user_password'])){
			 echo"<script> alert ('Fill up all the details') </script>";
			 $strError = 1;
		} else if (($_POST['user_password']) != ($_POST['user_confirm'])){
			 	echo"<script> alert ('Password do not match.') </script>";
			 	$strError = 1;
		} else {
			try{
				$strUserFName= $_POST['user_fname'];
				$strUserLName= $_POST['user_lname'];
				$strUserName= $_POST['user_uname'];
				$strUserEmail= $_POST['user_email'];
				$strUserPassword = $_POST['user_password'];
				$strAccType= $_POST['account_type'];
				$stmt1 = $conn -> prepare("INSERT INTO tblUser(strUserFname,strUserLname,
								strUsername,strUserEmail,strPassword,strAccountType) VALUES(:userFname,:userLname,:userUname,:userEmail,:userPassword,:userAccount)");
				$stmt1->bindParam(':userFname',$strUserFName,PDO::PARAM_STR);
				$stmt1->bindParam(':userLname',$strUserLName,PDO::PARAM_STR);
				$stmt1->bindParam(':userUname',$strUserName,PDO::PARAM_STR);
				$stmt1->bindParam(':userEmail',$strUserEmail,PDO::PARAM_STR);
				$stmt1->bindParam(':userPassword',$strUserPassword,PDO::PARAM_STR);
				$stmt1->bindParam(':userAccount',$strAccType,PDO::PARAM_STR);
				$stmt1->execute();
			} catch(PDOException $e){
				echo "<h1>".$e->getMessage()."</h1>";
				$strError = 1;
			}
		}
		if(isset($strError)){
			$strMessage = "Error: Data Not Saved";
		} else{
			$strMessage = "Save successful.";
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