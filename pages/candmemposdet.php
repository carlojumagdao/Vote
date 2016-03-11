<?php

require 'connection.php';
$blMatch = true;
$intMemFieldCount = 0;
$intPosFieldCount = 0;
$intMatch = 0;
$arrPosFieldName = array();
$arrPosFieldData = array();
$arrFieldName = array();
$arrFieldData = array();

if(isset($_POST['memberid']) && isset($_POST['posid'])){
    $strMemCode = $_POST['memberid'];
    $strPosCode = $_POST['posid'];

    $stmt1 = $conn -> prepare('SELECT f.strMemDeFieldData, f.strMemDeFieldName 
                             FROM tblMemberDetail AS f 
                             LEFT JOIN tblDynamicField AS d 
                                 ON f.strMemDeFieldName = d.strDynFieldName 
                             WHERE d.blDynStatus = 1 AND f.strMemDeMemId = :MemCode 
                             ORDER BY d.strDynFieldName');

    $stmt1->bindParam(':MemCode', $strMemCode, PDO::PARAM_STR);
    $stmt1->execute();
    $qrDynResult = $stmt1 -> fetchAll();
    $intFieldCounter = 0;

    foreach ($qrDynResult as $qrDynRow) {
        $arrFieldName[$intFieldCounter] = $qrDynRow['strMemDeFieldName'];
        $arrFieldData[$intFieldCounter] = $qrDynRow['strMemDeFieldData'];
        $intFieldCounter++;
    }

    $stmt2 = $conn -> prepare('SELECT f.strPosDeFieldData, f.strPosDeFieldName 
                             FROM tblPositionDetail AS f 
                             LEFT JOIN tblDynamicField AS d 
                                 ON f.strPosDeFieldName = d.strDynFieldName 
                             WHERE d.blDynStatus = 1 AND f.strPosDePosId = :PosCode 
                             ORDER BY d.strDynFieldName');

    $stmt2->bindParam(':PosCode', $strPosCode, PDO::PARAM_STR);
    $stmt2->execute();
    $qrDynResult = $stmt2 -> fetchAll();
    $intPosFieldCounter = 0;

    foreach ($qrDynResult as $qrDynRow) {
        $arrPosFieldName[$intPosFieldCounter] = $qrDynRow['strPosDeFieldName'];
        $arrPosFieldData[$intPosFieldCounter] = $qrDynRow['strPosDeFieldData'];
        $intPosFieldCounter++;
    }
    
    $intPosFieldCount = sizeof($arrPosFieldName);
    ?>
    <div class="col s6">
        <div class="panel panel-default">
            <div class="panel-heading" >
                Position Requirement
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col s12">
    <?php
    for($intCounter = 0; $intCounter < $intPosFieldCount; $intCounter++){
        ?>
        <div class="collection">
            <a href="#!" class="black-text text-darken-2 collection-item active"><?=$arrPosFieldName[$intCounter]?> <span class="badge black-text" style="font-weight: bold"><?=$arrPosFieldData[$intCounter]?></span>
            </a>
        </div>          
        <?php            
    }
    ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
        $intMemFieldCount = sizeof($arrFieldName);
    ?>
    <div class="col s6">
        <div class="panel panel-default">
            <div class="panel-heading" >
                Member Detail
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col s12">
    <?php
    for($intCounter = 0; $intCounter < $intMemFieldCount; $intCounter++){
        for($intPosCounter = 0; $intPosCounter < $intPosFieldCount; $intPosCounter++){
            if(($arrPosFieldName[$intPosCounter] == $arrFieldName[$intCounter]) && ($arrPosFieldData[$intPosCounter] == $arrFieldData[$intCounter])){
                ?>
                <div class="collection">
                    <a href="#!" class="black-text text-darken-2 collection-item active"><?=$arrFieldName[$intCounter]?> <span class="badge black-text" style="font-weight: bold"><?=$arrFieldData[$intCounter]?></span>
                    </a>
                </div>          
                <?php
                $intMatch++;
                break;
            } else if (($arrPosFieldName[$intPosCounter] == $arrFieldName[$intCounter]) && ($arrPosFieldData[$intPosCounter] != $arrFieldData[$intCounter])){
                ?>
                <div class="collection">
                    <a href="#!" class="black-text text-darken-2 collection-item failed"><?=$arrFieldName[$intCounter]?> <span class="badge black-text" style="font-weight: bold"><?=$arrFieldData[$intCounter]?></span>
                    </a>
                </div>          
                <?php 
            }
        }     
    }
    ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
}
?>
<div class="col s12">
    <div class="card-panel white">
        <span style="font-weight: bold">
            <?php  
                if($intPosFieldCount == 0){
                    echo "<i class='mdi-navigation-check' style='color:blue;'></i> No Position requirement .  ";
                    echo "<input type='submit' class='btn btn-primary' name='btnSaveCand' value='Save'>";
                }else if($intMatch == $intPosFieldCount){
                    echo "<i class='mdi-navigation-check' style='color:blue;'></i> Position requirement satisfied.  ";
                    echo "<input type='submit' class='btn btn-primary' name='btnSaveCand' value='Save'>";
                }else {
                    echo "<i class='mdi-navigation-close' style='color:red;'></i> Position requirement not satisfied, this member cannot be a candidate for this position. ";
                    echo "<input type='submit' class='btn btn-danger' name='btnSaveCand' value='Overrule and Save'>";
                }
            ?>
        </span>
    </div>
</div>