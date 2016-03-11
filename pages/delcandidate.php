<?php
require 'connection.php';

if(isset($_GET['code'])){
	
	$strCandCode = $_GET['code'];
		
	$stmt = $conn -> prepare('UPDATE tblCandidate SET blDelete = 1 WHERE strCandId = :candid');
    $stmt->bindParam(':candid', $strCandCode, PDO::PARAM_STR);
    $stmt->execute();
    header("location:candidate.php");
}

?>