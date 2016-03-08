<?php
    require 'banner.php';
    require 'navigation.php';
    require '../pages/connection.php';

    $qrUser = $conn -> query("SELECT intUserId, strUserFname, strUserLname, strUsername, strUserEmail, strAccountType FROM tblUser");
    $qrUserRows = $qrUser -> fetchAll();
    require 'user.tmpl.php';
?>