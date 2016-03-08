<?php

// require 'navigation.php';
// require 'banner.php';
require 'connection.php';
require '../loaders/php/editformLoader.php';


$arrFieldName= array (' ');
$arrFieldData= array (' ');

if(isset($_POST['id'])){

	$strMemCode = $_POST['id'];
	
	$stmt = $conn -> prepare('SELECT * FROM tblMember WHERE strMemberId = :MemCode');
    $stmt->bindParam(':MemCode', $strMemCode, PDO::PARAM_STR);
    $stmt->execute();
    $qrMemResult = $stmt -> fetchAll();

    foreach ($qrMemResult as $qrMemRow) {
    	$strMemFname = $qrMemRow['strMemFname'];
    	$strMemMname = $qrMemRow['strMemMname'];
    	$strMemLname = $qrMemRow['strMemLname'];
    	$strMemEmail = $qrMemRow['strMemEmail'];
    	$intMemSecId = $qrMemRow['intMemSecId'];
    	$strMemSecAnswer = $qrMemRow['strMemSecAnswer'];
    	$strMemPasscode = $qrMemRow['strMemPasscode'];
    	$datMemVoted = $qrMemRow['datMemVoted'];
    }

   	//Voting details initialization
    $strQuestDesc = "Not set";
    if(!isset($strMemSecAnswer)){
    	$strMemSecAnswer = "Not set";
    }
    if(!isset($strMemPasscode)){
    	$strMemPasscode = "Not set";
    }
    if(!isset($datMemVoted)){
    	$datMemVoted = "Not set";
    }
    if(!isset($strMemSecAnswer)){
    	$strMemSecAnswer = "Not set";
    }

   	$stmtSecQue = $conn -> prepare('SELECT * FROM tblQuestion WHERE intQuestid = :id');
    $stmtSecQue->bindParam(':id', $intMemSecId, PDO::PARAM_INT);
    $stmtSecQue->execute();
    $qrSecQue = $stmtSecQue -> fetchAll();
    foreach ($qrSecQue as $qrSecQueRow) {
    	$strQuestDesc = $qrSecQueRow['txtQuestDesc'];
    }

    $stmt1 = $conn -> prepare('SELECT f.strMemDeFieldData, f.strMemDeFieldName 
    	FROM tblMemberDetail AS f 
    	LEFT JOIN tblDynamicField AS d 
    		ON f.strMemDeFieldName = d.strDynFieldName 
    	WHERE d.blDynStatus = 1 AND f.strMemDeMemId = :MemCode 
    	ORDER BY d.strDynFieldName');

    $stmt1->bindParam(':MemCode', $strMemCode, PDO::PARAM_STR);
    $stmt1->execute();
    $qrDynResult = $stmt1 -> fetchAll();
    $intFieldCounter = 0;
    foreach ($qrDynResult as $qrDynRow) {
    	$arrFieldName[$intFieldCounter] = $qrDynRow['strMemDeFieldName'];
    	$arrFieldData[$intFieldCounter] = $qrDynRow['strMemDeFieldData'];
    	$intFieldCounter++;
    }
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
	$formResult = $conn -> query("SELECT * FROM tblMemberForm");
	$formData = $formResult -> fetchAll();

	foreach ($formData as $form) {
		$data = $form['strMemForm'];
	}
	$loader = new formLoader($data,'editmember.php',$strMemCode,$strMemFname,$strMemMname,$strMemLname,$strMemEmail,$arrFieldName,$arrFieldData);
	//yung submit.php ay yung action sa form
    require 'viewmember.tmpl.php';
}
?>