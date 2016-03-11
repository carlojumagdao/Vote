<?php
require 'function.php';
require 'connection.php';
session_start();

if(!fnIsLoggedIn()){
    header("location: index.php");
}

if(isset($_POST['btnLogin'])){
	$strUsername = $_POST['username'];
	$strPassword = $_POST['password'];

	$qrUser = $conn -> prepare("SELECT * FROM tblUser WHERE strUsername = :username && strPassword = :password && blDelete = 0");
	$qrUser->bindParam(':username',$strUsername,PDO::PARAM_STR);
	$qrUser->bindParam(':password',$strPassword,PDO::PARAM_STR);
	$qrUser->execute();

	$qrUserRows = $qrUser -> fetchAll();

	if($qrUserRows){
		foreach ($qrUserRows as $qrUserRow) {
			$id = $qrUserRow['intUserId'];
			$fname = $qrUserRow['strUserFname'];
			$lname = $qrUserRow['strUserLname'];
			$account = $qrUserRow['strAccountType'];
			$picpath = $qrUserRow['txtPicPath'];
		}
		$_SESSION['id'] = $id;
		$_SESSION['fname'] = $fname;
		$_SESSION['lname'] = $lname;
        $_SESSION['picpath'] = $picpath;
		$_SESSION['account'] = $account;
		
		header("location: index.php");
	}
}
require 'login.tmpl.php';