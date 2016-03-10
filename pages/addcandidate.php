<?php
require 'banner.php';
require 'navigation.php';
require 'connection.php';
require 'smartcounter.php';

$strCandCode = "CAND-000-MN";
$qrCandidate = $conn -> query("SELECT strCandId FROM tblCandidate ORDER BY strCandId");
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

