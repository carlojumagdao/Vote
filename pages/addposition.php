<?php
	require 'banner.php';
	require 'navigation.php';
	require 'connection.php';
	require '../loaders/php/PosformLoader.php';
	require 'smartcounter.php';



	if(isset($_POST['btnAddPosition'])){
		$strPositionId = $_POST['pos-id'];
		$strPositionName = $_POST['pos-name'];
		$intPosVoteLimit = $_POST['pos-limit'];

		if(empty($strPositionId) || empty($strPositionName) || empty($intPosVoteLimit) || $intPosVoteLimit < 1){
			$strMessage = "Error: Data Not Saved";
			$strError = 1;
		} else{
			$conn->beginTransaction();
			try{
				$stmt2 = $conn -> prepare("INSERT INTO tblPosition(strPositionId,strPosName
										,intPosVoteLimit) VALUES(:posid,:posname,:poslimit)");
				$stmt2->bindParam(':posid',$strPositionId,PDO::PARAM_STR);
				$stmt2->bindParam(':posname',$strPositionName,PDO::PARAM_STR);
				$stmt2->bindParam(':poslimit',$intPosVoteLimit,PDO::PARAM_STR);
				$stmt2->execute();

				$stmt3 = $conn -> prepare("INSERT INTO tblPositionDetail(strPosDePosId,
											strPosDeFieldName,strPosDeFieldData) VALUES
											(:posid,:posname,:posdata)");
				foreach ($_POST as $key => $value) {
					if($key == "btnAddPosition" || $key == "pos-id" || $key == "pos-name" || $key == "pos-limit"){
					} else {
						$strFieldName = $key;
						$strFieldData = $value;
						$stmt3->bindParam(':posid',$strPositionId,PDO::PARAM_STR);
						$stmt3->bindParam(':posname',$strFieldName,PDO::PARAM_STR);
						$stmt3->bindParam(':posdata',$strFieldData,PDO::PARAM_STR);
						$stmt3->execute();
					}
				}
				$conn->commit();
			}catch(PDOException $e){
				$conn->rollback();
				// echo "<h1>".$e->getMessage()."</h1>";
				$strError = 1;
			}
		}
		if(isset($strError)){
			// $strMessage = "Error: Data Not Saved";
		} else{
			// $strMessage = "Save successful.";
		}
	}


	$formResult = $conn -> query("SELECT * FROM tblMemberForm");
	$formData = $formResult -> fetchAll();

	foreach ($formData as $form) {
		$data = $form['strMemForm'];
	}

	$strCode = " ";
	$strLatestPosResult = $conn -> query(" SELECT strPositionId FROM tblPosition ORDER BY strPositionId");
	$strLatestPosData = $strLatestPosResult -> fetchAll();
	foreach ($strLatestPosData as $strLatestPosCode) {
		$strCode = $strLatestPosCode['strPositionId'];
	}
	$strIncrementedCode = smartcounter($strCode);

	$strSchedResult = $conn -> query(" SELECT * FROM tblSchedule");
	$strSchedRows = $strSchedResult -> fetchAll();
	foreach ($strSchedRows as $strSchedRow) {
		$strElecStart = $strSchedRow['datSchedStart'];
		$strElecEnd = $strSchedRow['datSchedEnd'];
	}

	$strLatElecResult = $conn -> query(" SELECT * FROM tblElection");
	$strLatElecRows = $strLatElecResult -> fetchAll();
	foreach ($strLatElecRows as $strLatElecRow) {
		$strElecTitle = $strLatElecRow['strElecTitle'];
		$strElecDesc = $strLatElecRow['strElecDesc'];
		$strElecStatus = $strLatElecRow['blElecStatus'];
	}
	$loader = new formLoader($data, ' ');
	require 'addposition.tmpl.php';
?>