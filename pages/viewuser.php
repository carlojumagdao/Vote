<?php

require 'connection.php';
require '../loaders/php/editPosformLoader.php';


$formResult = $conn -> query("SELECT * FROM tblUser");
$formData = $formResult -> fetchAll();
foreach ($formData as $form) {
    $data = $form['intUserId'];
}
if(isset($_POST['id'])){

	$strUserCode = $_POST['id'];
	
	$stmt = $conn -> prepare('SELECT * FROM tblUser WHERE intUserId = :UserCode');
    $stmt->bindParam(':UserCode', $strUserCode, PDO::PARAM_STR);
    $stmt->execute();
    $qrUserResult = $stmt -> fetchAll();

    foreach ($qrUserResult as $qrUserRow) {
    	$strUserFname = $qrUserRow['strUserFname'];
    	$strUserLname = $qrUserRow['strUserLname'];
        $strUserUname = $qrUserRow['strUsername'];
        $strUserEmail = $qrUserRow['strUserEmail'];
        $strPassword = $qrUserRow['strPassword'];
        $strAccType = $qrUserRow['strAccountType'];
    }

}
    require 'viewuser.tmpl.php';
?>