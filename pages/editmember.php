<?php

require 'function.php';
session_start();

if(fnIsLoggedIn()){
    header("location: login.php");
} else {
    require 'connection.php';
}

if(empty($_POST['member_id']) || empty($_POST['last_name']) || empty($_POST['email']) || empty($_POST['first_name'])){
	$strError = 1;
} else{
	$strMemberID= $_POST['member_id'];
	$strLastName= $_POST['last_name'];
	$strMiddleName= $_POST['middle_name'];
	$strFirstName= $_POST['first_name'];
	$strEmail= $_POST['email'];

	$qrMember = $conn -> prepare("SELECT strCandId FROM tblCandidate WHERE strCandMemId = :memid && blDelete = 0");
		$qrMember->bindParam(':memid',$strMemberID,PDO::PARAM_STR);
		$qrMember->execute();
	$qrMemRows = $qrMember -> fetchAll();

	if($qrMemRows){
		$strError = 1;
		$strMessage = "Error: Cannot edit this record because it is a reference from another record.";
	} else{
		$conn->beginTransaction();
		try{
			$stmt2 = $conn -> prepare("UPDATE tblMember SET strMemFname=:firstname,strMemMname=
									:middlename,strMemLname=:lastname,strMemEmail=:email
									WHERE strMemberID = :memberID");
			$stmt2->bindParam(':firstname',$strFirstName,PDO::PARAM_STR);
			$stmt2->bindParam(':middlename',$strMiddleName,PDO::PARAM_STR);
			$stmt2->bindParam(':lastname',$strLastName,PDO::PARAM_STR);
			$stmt2->bindParam(':email',$strEmail,PDO::PARAM_STR);
			$stmt2->bindParam(':memberID',$strMemberID,PDO::PARAM_STR);
			$stmt2->execute();

			$delStmt = $conn -> prepare("DELETE FROM tblMemberDetail WHERE strMemDeMemId = :memberID");
			$delStmt->bindParam(':memberID',$strMemberID,PDO::PARAM_STR);
			$delStmt->execute();

			$stmt3 = $conn -> prepare("INSERT INTO tblMemberDetail(strMemDeFieldData,
									strMemDeMemId,strMemDeFieldName) 
									VALUES(:fieldData,:memberID,:fieldName)");

			foreach ($_POST as $key => $value) {
				$strFieldName = "";
				if($key == "member_id" || $key == "last_name" || $key == "first_name" || $key == "email" || $key =="middle_name"){
				} else {
					$strFieldName = $key;
					$strFieldData = $value;
					$stmt3->bindParam(':fieldData',$strFieldData,PDO::PARAM_STR);
					$stmt3->bindParam(':memberID',$strMemberID,PDO::PARAM_STR);
					$stmt3->bindParam(':fieldName',$strFieldName,PDO::PARAM_STR);
					$stmt3->execute();
				}
			}
			$conn->commit();
		}catch(PDOException $e){
			$conn->rollback();
			echo "<h3>".$e->getMessage()."</h3>";
			$strError = 1;
		}
	}
}
if(isset($strError)){
	header("location:../pages/member.php?mes=1");
} else{
	header("location:../pages/member.php?mes=2");
}
?>
