<?php
	require '../pages/connection.php';
	if(isset($_POST['id'])){

		$strMemCode = $_POST['id'];
		
		$stmt = $conn -> prepare('UPDATE tblMember SET blDelete = 1 WHERE strMemberId = :MemCode');
	    $stmt->bindParam(':MemCode', $strMemCode, PDO::PARAM_STR);
	    $stmt->execute();
	    header("location:member.php");
	}
?>