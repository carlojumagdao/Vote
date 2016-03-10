<?php

require 'connection.php';

if(isset($_POST['memberid'])){

	$strMemCode = $_POST['memberid'];

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
    for($intCounter = 0; $intCounter < $intFieldCounter; $intCounter++){
    	?>
    		<div class="collection">
		    	<a href="#!" class="black-text text-darken-2 collection-item"><?=$arrFieldName[$intCounter]?> <span class="badge black-text" style="font-weight: bold"><?=$arrFieldData[$intCounter]?></span>
		    	</a>
		  	</div>
    	<?php
    }
}

if(isset($_POST['posid'])){

	$strPosCode = $_POST['posid'];

    $stmt2 = $conn -> prepare('SELECT f.strPosDeFieldData, f.strPosDeFieldName 
    	FROM tblPositionDetail AS f 
    	LEFT JOIN tblDynamicField AS d 
    		ON f.strPosDeFieldName = d.strDynFieldName 
    	WHERE d.blDynStatus = 1 AND f.strPosDePosId = :PosCode 
    	ORDER BY d.strDynFieldName');

    $stmt2->bindParam(':PosCode', $strPosCode, PDO::PARAM_STR);
    $stmt2->execute();
    $qrDynResult = $stmt2 -> fetchAll();
    $intFieldCounter1 = 0;
    foreach ($qrDynResult as $qrDynRow) {
    	$arrFieldName1[$intFieldCounter1] = $qrDynRow['strPosDeFieldName'];
    	$arrFieldData1[$intFieldCounter1] = $qrDynRow['strPosDeFieldData'];
    	$intFieldCounter1++;
    }
    for($intCounter1 = 0; $intCounter1 < $intFieldCounter1; $intCounter1++){
    	?>
    		<div class="collection">
		    	<a href="#!" class="black-text text-darken-2 collection-item active"><?=$arrFieldName1[$intCounter1]?> <span class="badge black-text" style="font-weight: bold"><?=$arrFieldData1[$intCounter1]?></span>

		    	</a>
		  	</div>
    	<?php

    }
}

?>