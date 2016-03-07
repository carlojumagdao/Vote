<?php
	require 'banner.php';
	require 'navigation.php';
	require 'connection.php';


	$strElecName = "";
	$strElecStart = "";
	$strElecEnd = "";

	if(isset($_POST['btnGenSetSave'])){

		if(isset($_POST['chkElection'])){
			$strElecStatus = $_POST['chkElection'];
		} else {
			$strElecStatus = 0;
		}
		if(isset($_POST['chkSurvey'])){
			$strSurvStatus = $_POST['chkSurvey'];
		} else{
			$strSurvStatus = 0;
		}
		$strElecTitle = trim($_POST['elec-title']);
		$strElecDesc = trim($_POST['elec-desc']);
		$strElecStart = trim($_POST['start-date']);
		$strElecEnd = trim($_POST['end-date']);
		$strSurvey = trim($_POST['selSurvey']);
		$id = 1;

		if(!empty($strElecTitle) && !empty($strElecStart) && !empty($strElecEnd)){
			$blSuccess = fnBeginTransaction($conn, $strElecTitle, $strElecDesc, $strElecStart, $strElecEnd, $id);
			if($blSuccess){
				$strMessage = "Settings Saved.";
			} else{
				$strMessage = "Something went wrong.";
				$strClassName = "error-message";
			}
		} else{
			$strMessage = "Please fill out all required fields";
			$strClassName = "error-message";
		}

	}

	function fnBeginTransaction($conn, $strElecTitle, $strElecDesc, $strElecStart, $strElecEnd, $id){
		$conn->beginTransaction();
		try{

			$stmt = $conn->prepare("UPDATE tblElection 
									SET strElecTitle = :electitle,
										strElecDesc = :elecdesc, 
										blElecStatus = :elecstatus 
									WHERE intElectionId = :id");
			$stmt->bindParam(':electitle',$strElecTitle,PDO::PARAM_STR);
			$stmt->bindParam(':elecdesc',$strElecDesc,PDO::PARAM_STR);
			$stmt->bindParam(':elecstatus',$strElecStatus,PDO::PARAM_STR);
			$stmt->bindParam(':id',$id,PDO::PARAM_INT);
			$stmt->execute();

			$stmt2 = $conn->prepare("UPDATE tblSchedule
									SET datSchedStart = :elecstart,
										datSchedEnd = :elecend
									WHERE intSchedId = :id");
			$stmt2->bindParam(':elecstart',$strElecStart,PDO::PARAM_STR);
			$stmt2->bindParam(':elecend',$strElecEnd,PDO::PARAM_STR);
			$stmt2->bindParam(':id',$id,PDO::PARAM_INT);
			$stmt2->execute();
			$conn->commit(); 
			return 1;
		}catch(PDOException $e){
			$conn->rollback();
			return 0;
			echo "<h1>".$e->getMessage();
		}
	}
	$strLatElecResult = $conn -> query(" SELECT * FROM tblElection");
	$strLatElecRows = $strLatElecResult -> fetchAll();
	foreach ($strLatElecRows as $strLatElecRow) {
		$strElecTitle = $strLatElecRow['strElecTitle'];
		$strElecDesc = $strLatElecRow['strElecDesc'];
		$strElecStatus = $strLatElecRow['blElecStatus'];
	}

	$strSchedResult = $conn -> query(" SELECT * FROM tblSchedule");
	$strSchedRows = $strSchedResult -> fetchAll();
	foreach ($strSchedRows as $strSchedRow) {
		$strElecStart = $strSchedRow['datSchedStart'];
		$strElecEnd = $strSchedRow['datSchedEnd'];
	}
	require "election.tmpl.php";
?>