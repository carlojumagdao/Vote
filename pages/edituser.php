<?php
require 'function.php';
session_start();

if(fnIsLoggedIn()){
    header("location: login.php");
} else {
    require 'connection.php';
}
if(isset($_POST['btnEditUser'])){
	$intUserId = $_POST['user-id'];
	$strUserFname = $_POST['user-fname'];
	$strUserLname = $_POST['user-lname'];
	$strUsername = $_POST['user-uname'];
	$strUserEmail = $_POST['user-email'];
	$strAccType = $_POST['user-account'];

	if(empty($intUserId) || empty($strUserFname) || empty($strUserLname) || empty($strUsername) || empty($strUserEmail)
		|| empty($strAccType)){
		$strMessage = "Error: Data Not Saved";
		$strError = 1;
	} else {
		$intUserId = $_POST['user-id'];
		$strUserFname = $_POST['user-fname'];
		$strUserLname = $_POST['user-lname'];
		$strUsername = $_POST['user-uname'];
		$strUserEmail = $_POST['user-email'];
		$strAccType = $_POST['user-account'];

		$conn->beginTransaction();
		try{
			$stmt2 = $conn -> prepare("UPDATE tblUser SET strUserFname=:userfname, strUserLname=:userlname, strUsername=:useruname, strUserEmail=:useremail, strAccountType=:useraccount WHERE intUserId = :userid");
			$stmt2->bindParam(':userfname',$strUserFname,PDO::PARAM_STR);
			$stmt2->bindParam(':userlname',$strUserLname,PDO::PARAM_STR);
			$stmt2->bindParam(':useruname',$strUsername,PDO::PARAM_STR);
			$stmt2->bindParam(':useremail',$strUserEmail,PDO::PARAM_STR);
			$stmt2->bindParam(':useraccount',$strAccType,PDO::PARAM_STR);
			$stmt2->bindParam(':userid',$intUserId,PDO::PARAM_INT);
			$stmt2->execute();

			$conn->commit();
		}catch(PDOException $e){
			$conn->rollback();
			echo "<h3>".$e->getMessage()."</h3>";
			$strError = 1;
		}
	}
	if(isset($strError)){
		header("location:../pages/user.php?mes=1");
	} else{
		header("location:../pages/user.php?mes=2");
	}
}
?>
