<script>
    alert('test');
</script>
<?php
    require 'banner.php';
    require 'navigation.php';
    require '../pages/connection.php';

    $qrPos = $conn -> query("SELECT strPositionId, strPosName from tblPosition");
    $qrPosRows = $qrPos -> fetchAll();
    
    require 'candidate.tmpl.php';
?>