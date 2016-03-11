<?php
require 'function.php';
session_start();

if(fnIsLoggedIn()){
    header("location: login.php");
} else {
    require 'connection.php';
}


if(isset($_POST['btnEditPosition'])){

	$strPosId = $_POST['pos-id'];
	$strPosName = $_POST['pos-name'];
	$intVoteLimit = $_POST['pos-limit'];

	if(empty($strPosId) || empty($strPosName) || empty($intVoteLimit) || $intVoteLimit < 1){
		$strMessage = "Error: Data Not Saved";
		$strError = 1;
	} else {
	$strPosId= $_POST['pos-id'];
	$strPosName= $_POST['pos-name'];
	$intVoteLimit= $_POST['pos-limit'];

	$conn->beginTransaction();
	try{
		$stmt2 = $conn -> prepare("UPDATE tblPosition SET strPosName=:posname, intPosVoteLimit=:poslimit WHERE strPositionId = :posid");
		$stmt2->bindParam(':posname',$strPosName,PDO::PARAM_STR);
		$stmt2->bindParam(':poslimit',$intVoteLimit,PDO::PARAM_INT);
		$stmt2->bindParam(':posid',$strPosId,PDO::PARAM_STR);
		$stmt2->execute();

		$delStmt = $conn -> prepare("DELETE FROM tblPositionDetail WHERE strPosDePosId = :posid");
		$delStmt->bindParam(':posid',$strPosId,PDO::PARAM_STR);
		$delStmt->execute();

		$stmt3 = $conn -> prepare("INSERT INTO tblPositionDetail(strPosDeFieldData,
								strPosDePosId,strPosDeFieldName) 
								VALUES(:fieldData,:posid,:fieldName)");

		foreach ($_POST as $key => $value) {
			$strFieldName = "";
			if($key == "pos-id" || $key == "pos-name" || $key == "pos-limit" || $key == "btnEditPosition"){
				// nothing is here.
			} else {
				$strFieldName = $key;
				$strFieldData = $value;
				$stmt3->bindParam(':fieldData',$strFieldData,PDO::PARAM_STR);
				$stmt3->bindParam(':posid',$strPosId,PDO::PARAM_STR);
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
	if(isset($strError)){
		header("location:../pages/position.php?mes=1");
	} else{
		header("location:../pages/position.php?mes=2");
	}
}
?>
