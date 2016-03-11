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
    $qrPosition = $conn -> query("SELECT * FROM tblPosition WHERE blDelete = 0");
    $qrPosRows = $qrPosition -> fetchAll();
    require 'position.tmpl.php';
?>