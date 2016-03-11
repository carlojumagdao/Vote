<?php
require 'connection.php';

if(isset($_POST['btnEditPosition'])){

	$strPosId = $_POST['pos-id'];
	$strPosName = $_POST['pos-name'];
	$intVoteLimit = $_POST['pos-limit'];

	$qrPosition = $conn -> prepare("SELECT strCandId FROM tblCandidate WHERE strCandPosId = :posid && blDelete = 0");
		$qrPosition->bindParam(':posid',$strPosId,PDO::PARAM_STR);
		$qrPosition->execute();
	$qrPosRows = $qrPosition -> fetchAll();

	if($qrPosRows){
		$strError = 1;
		$strMessage = "Error: Cannot edit this record because it is a reference from another record.";
	} else {
		$delStmt = $conn -> prepare("DELETE FROM tblPositionDetail WHERE strPosDePosId = :posid");
		$delStmt->bindParam(':posid',$strPosId,PDO::PARAM_STR);
		$delStmt->execute();

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
				$strMessage = "Data Saved";
			}catch(PDOException $e){
				$conn->rollback();
				echo "<h3>".$e->getMessage()."</h3>";
				$strMessage = "Error: Data not save";
				$strError = 1;
			}
		}
	}	
require 'position.php';	
}
?>
