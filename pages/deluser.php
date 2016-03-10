<script>
alert('test');
</script>

<?php
	require '../pages/connection.php';
	if(isset($_POST['id'])){

		$intUserCode = $_POST['id'];
		
		$stmt = $conn -> prepare('UPDATE tblUser SET blDelete = 1 WHERE intUserId = :UserCode');
	    $stmt->bindParam(':UserCode', $intUserCode, PDO::PARAM_INT);
	    $stmt->execute();
	    //header("location:user.php");
	}
?>