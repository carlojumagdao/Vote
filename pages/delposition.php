<?php
	require 'connection.php';
	if(isset($_POST['id'])){

		$strPosCode = $_POST['id'];

		$qrPosition = $conn -> prepare("SELECT strCandId FROM tblCandidate WHERE strCandPosId = :posid && blDelete = 0");
		$qrPosition->bindParam(':posid',$strPosCode,PDO::PARAM_STR);
		$qrPosition->execute();
		$qrPosRows = $qrPosition -> fetchAll();

		if($qrPosRows){
		} else{
			try{
				$stmt = $conn -> prepare('UPDATE tblPosition SET blDelete = 1 WHERE strPositionId = :PosCode');
		    	$stmt->bindParam(':PosCode', $strPosCode, PDO::PARAM_STR);
		    	$stmt->execute();
			} catch(PDOException $e){
				// error message
			}
			
		} 
	}
	require 'position.php';
?>