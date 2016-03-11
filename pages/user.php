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

    $qrUser = $conn -> query("SELECT intUserId, strUserFname, strUserLname, strUsername, strUserEmail, strAccountType FROM tblUser WHERE blDelete = 0");
    $qrUserRows = $qrUser -> fetchAll();
    require 'user.tmpl.php';
?>