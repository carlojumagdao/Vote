<?php
    require 'banner.php';
    require 'navigation.php';
    require '../pages/connection.php';

    $qrPosition = $conn -> query("SELECT * FROM tblPosition WHERE blDelete = 0");
    $qrPosRows = $qrPosition -> fetchAll();
    require 'position.tmpl.php';
?>