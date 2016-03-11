<?php
require 'function.php';
session_start();

if(fnIsLoggedIn()){
    header("location: login.php");
} else {
    require 'banner.php';
    require 'navigation.php';
    require '../pages/connection.php';
}

	if(isset($_GET['code'])){
	    $getmemid = $_GET['code'];
	}

    $qrDynFields = $conn -> query("SELECT strDynFieldName FROM tblDynamicField WHERE blDynStatus = 1 ORDER BY strDynFieldName");
    $qrDynFieldsRows = $qrDynFields -> fetchAll();

    $qrMember = $conn -> query("SELECT strMemberId, strMemFname, strMemMname, strMemLname, strMemEmail FROM tblMember WHERE blDelete = 0");
    $qrMemberRows = $qrMember -> fetchAll();
    require 'member.tmpl.php';
?>