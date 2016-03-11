<?php
require 'function.php';
session_start();

if(fnIsLoggedIn()){
    header("location: login.php");
} else {
    require 'banner.php';
    require 'navigation.php';
    require 'connection.php';
}
	$qrPos = $conn -> query("SELECT strPosName FROM tblPosition WHERE blDelete = 0");
    $qrPosRows = $qrPos -> fetchAll();
    
    $qrCand = $conn -> query("SELECT c.strCandId, m.strMemberId,m.strMemEmail,p.strPosName, p.strPositionId, m.strMemFname, m.strMemLname
    						,c.txtPic FROM tblPosition AS p INNER JOIN tblCandidate AS c
								ON p.strPositionId = c.strCandPosId
							LEFT JOIN tblMember AS m
								ON c.strCandMemId = m.strMemberId WHERE c.blDelete = 0;");
    $qrCandRows = $qrCand -> fetchAll();
    
    require 'candidate.tmpl.php';
?>