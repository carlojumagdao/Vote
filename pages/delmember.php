<?php
	require 'connection.php';
	if(isset($_POST['id'])){

		$strMemCode = $_POST['id'];

		$qrMember = $conn -> prepare("SELECT strCandId FROM tblCandidate WHERE strCandMemId = :memid && blDelete = 0");
		$qrMember->bindParam(':memid',$strMemCode,PDO::PARAM_STR);
		$qrMember->execute();
		$qrMemRows = $qrMember -> fetchAll();

		if($qrMemRows){
			$strError = 1;
		} else{
			$stmt = $conn -> prepare('UPDATE tblMember SET blDelete = 1 WHERE strMemberId = :MemCode');
		    $stmt->bindParam(':MemCode', $strMemCode, PDO::PARAM_STR);
		    $stmt->execute();
		}
	    header("location:member.php");
	}
?>