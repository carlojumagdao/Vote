<?php
require 'function.php';
session_start();

if(fnIsLoggedIn()){
    header("location: login.php");
} else {
    require 'connection.php';
    require '../loaders/php/editPosformLoader.php';
}


$arrFieldName= array (' ');
$arrFieldData= array (' ');
$formResult = $conn -> query("SELECT * FROM tblMemberForm");
$formData = $formResult -> fetchAll();
foreach ($formData as $form) {
    $data = $form['strMemForm'];
}
if(isset($_POST['id'])){

	$strPosCode = $_POST['id'];
	
	$stmt = $conn -> prepare('SELECT * FROM tblPosition WHERE strPositionId = :PosCode');
    $stmt->bindParam(':PosCode', $strPosCode, PDO::PARAM_STR);
    $stmt->execute();
    $qrPosResult = $stmt -> fetchAll();

    foreach ($qrPosResult as $qrPosRow) {
    	$strPosName = $qrPosRow['strPosName'];
    	$intVoteLimit = $qrPosRow['intPosVoteLimit'];
    }

    $stmt1 = $conn -> prepare('SELECT f.strPosDeFieldData, f.strPosDeFieldName 
    	FROM tblPositionDetail AS f 
    	LEFT JOIN tblDynamicField AS d 
    		ON f.strPosDeFieldName = d.strDynFieldName 
    	WHERE d.blDynStatus = 1 AND f.strPosDePosId = :PosCode 
    	ORDER BY d.strDynFieldName');

    $stmt1->bindParam(':PosCode', $strPosCode, PDO::PARAM_STR);
    $stmt1->execute();
    $qrDynResult = $stmt1 -> fetchAll();
    $intFieldCounter = 0;
    foreach ($qrDynResult as $qrDynRow) {
    	$arrFieldName[$intFieldCounter] = $qrDynRow['strPosDeFieldName'];
    	$arrFieldData[$intFieldCounter] = $qrDynRow['strPosDeFieldData'];
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
}
    $formloader = new formLoader($data,' ',$arrFieldName,$arrFieldData);
    require 'viewposition.tmpl.php';
?>