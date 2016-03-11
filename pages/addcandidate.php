<?php
require 'function.php';
session_start();

if(fnIsLoggedIn()){
    header("location: login.php");
} else {
    require 'banner.php';
    require 'navigation.php';
    require 'connection.php';
    require 'smartcounter.php';
    require 'upload.php';
}

$strCandCode = "CAND-000-MN";
$strError = 0;


if(isset($_POST['btnSaveCand'])){

    $path = " ";
    $strCandCode = $_POST['cand-id'];
    $strMemCode = $_POST['mem-code'];
    $strPosCode = $_POST['pos-code'];

    if(empty($strCandCode) || empty($_FILES['pic'])){
        $strError = 2;
    } else {
        $picData = fnUpload('pic');
        if($picData[0] == 1){
            $strPicPath = $picData[1];
        } else {
            $strPicError = $picData[2];
            $strError = 1;
        }
        try{
            $stmt2 = $conn -> prepare("INSERT INTO tblCandidate(strCandId,strCandMemId,strCandPosId,txtPic) VALUES(:candid,:memid,:posid,:picpath)");
            $stmt2->bindParam(':candid',$strCandCode,PDO::PARAM_STR);
            $stmt2->bindParam(':memid',$strMemCode,PDO::PARAM_STR);
            $stmt2->bindParam(':posid',$strPosCode,PDO::PARAM_STR);
            $stmt2->bindParam(':picpath',$strPicPath,PDO::PARAM_STR);
            $stmt2->execute();
        } catch(PDOException $e){
            $strError = 1;
        }
    }
    if($strError == 1){    
        if(isset($strPicError)){
            $strMessage = "Error: Data not Save. ".$strPicError;
        } else {
            $strMessage = "Error: Data not Save.";
            unlink($strPicPath);
        }
    } else if($strError == 2){
        $strMessage = "Error: Candidate id or picture cannot be empty";
    } else{
        $strMessage = "Data Saved.";
    }
}

$qrCandidate = $conn -> query("SELECT strCandId FROM tblCandidate WHERE blDelete = 0 ORDER BY strCandId");
$qrCandRows = $qrCandidate -> fetchAll();

foreach ($qrCandRows as $qrCandRow) {
    $strCandCode = $qrCandRow['strCandId'];
}
$strIncrementedCode = smartcounter($strCandCode);

$qrMember = $conn -> query("SELECT strMemberId, strMemFname, strMemMname, strMemLname FROM tblMember WHERE blDelete = 0 ORDER BY strMemFname");
$qrMemberRows = $qrMember -> fetchAll();

$qrPosition = $conn -> query("SELECT strPositionId, strPosName FROM tblPosition WHERE blDelete = 0 ORDER BY strPosName");
$qrPosRows = $qrPosition -> fetchAll();

require 'addcandidate.tmpl.php';
?>

