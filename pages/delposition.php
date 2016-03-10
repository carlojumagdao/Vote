<?php
	require '../pages/connection.php';
	if(isset($_POST['id'])){

		$strPosCode = $_POST['id'];
		
		$stmt = $conn -> prepare('UPDATE tblPosition SET blDelete = 1 WHERE strPositionId = :PosCode');
	    $stmt->bindParam(':PosCode', $strPosCode, PDO::PARAM_STR);
	    $stmt->execute();
	    header("location:position.php");
	}
?>