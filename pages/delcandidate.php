<?php
require 'connection.php';

if(isset($_GET['code'])){
	
	$strCandCode = $_GET['code'];
	$txtPic = $_GET['txtPic'];
	echo "$txtPic";
		
	$stmt = $conn -> prepare('UPDATE tblCandidate SET blDelete = 1 WHERE strCandId = :candid');
    $stmt->bindParam(':candid', $strCandCode, PDO::PARAM_STR);
    $stmt->execute();
    unlink($txtPic);
    header("location:candidate.php");
}

?>