<?php
    require 'banner.php';
    require 'navigation.php';
    require '../pages/connection.php';
    // $DynFieldsResult = $conn -> query("SELECT fieldName FROM DynamicField WHERE blStatus = 1");
    // $DynFieldsData = $DynFieldsResult -> fetchAll();
    // $DynDataResult = $conn -> query("SELECT memberID, fName, lName, email FROM Member");
    // $DynData = $DynDataResult -> fetchAll();
    // print_r($DynData);
    $qrDynFields = $conn -> query("SELECT strDynFieldName FROM tblDynamicField WHERE blDynStatus = 1 ORDER BY strDynFieldName");
    $qrDynFieldsRows = $qrDynFields -> fetchAll();

    $qrMember = $conn -> query("SELECT strMemberId, strMemFname, strMemMname, strMemLname, strMemEmail FROM tblMember");
    $qrMemberRows = $qrMember -> fetchAll();
    require 'member.tmpl.php';
?>