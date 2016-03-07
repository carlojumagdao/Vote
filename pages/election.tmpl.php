<!DOCTYPE html>
<html lang="en">
<head>
	<title>Vote+ Add Member</title>
	<link href="../assets/css/prism.css" type="text/css" rel="stylesheet" media="screen,projection">
	<link href="../assets/css/chartist.min.css" type="text/css" rel="stylesheet" media="screen,projection">
</head>
<body>
	<div id="content">
		<div id="page-wrapper">
			<div class="container-fluid">
				<div class="row">
					<form method="POST" action="">
						<div class="col s12">
							<h3 class="page-header">
								General Settings	
							</h3>
						</div>
						<div class="col s12">
							<?php if(isset($strMessage)){ ?>
							<div class="card-panel white">
								<span style="font-weight: bold" class="<?=$strClassName?>">
									<?=$strMessage?>
								</span>
							</div>
							<?php } ?>
						</div>
						<div class="col s8">
							<div class="panel panel-default">
								<div class="panel-heading">
									<div class="switch">
										Election
										<label>
											<input name = "chkElection" type="checkbox" value="1" checked>
											<span class="lever"></span>
											Active
										</label>
									</div>
								</div>
								<div class="panel-body">
									<div class="row">
								        <div class="input-field col s12">
								        	<input value="<?=$strElecTitle?>" id="elec-title" type="text" class="validate" name = "elec-title" />
								        	<label for="elec-title">Election Title</label>
								        </div>
							      	</div>
							      	<div class="row">
										<div class="row">
											<div class="input-field col s12">
												<textarea name = "elec-desc" id="elec-desc" class="materialize-textarea"><?=$strElecDesc?></textarea>
												<label for="elec-desc">Election Description</label>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col s4">
							<div class="panel panel-default">
								<div class="panel-heading">
									Schedule
								</div>
								<div class="panel-body">
									<div class="row">
								        <div class="col s12">
								        	<label for="start-date">Start date</label>	
								        	<input name = "start-date" id = "start-date" name = "start-date" type="date" class="datepicker" value="<?=$strElecStart?>">
								        </div>
								    </div>
								    <div class="row">
								        <div class="col s12">
								        	<label for="end-date">End date</label>	
								        	<input name = "end-date" id = "end-date" name = "end-date" type="date" class="datepicker" value="<?=$strElecEnd?>">
								        </div>
								    </div>
								</div>
							</div>
						</div>
						<div class="col s4">
							<div class="panel panel-default">
								<div class="panel-heading">
									Save changes?
								</div>
								<div class="panel-body">
									<div class="row" style="text-align: center">
								        <input type="submit" class="btn waves-effect waves-light blue" type="submit" name="btnGenSetSave" value="Save">
									   	<input type="submit" class="btn-discard btn waves-effect waves-light white red-text text-darken-2" type="submit" name="action" name="btnGenSetDiscard" value="Discard">
							      	</div>
								</div>
							</div>
						</div>
						
						<div class="col s8" style="margin-top: -8%;">
							<div class="panel panel-default">
								<div class="panel-heading">
									<div class="switch">
										Survey
										<label>
											<input name = "chkSurvey" type="checkbox" value = "1"checked>
											<span class="lever"></span>
										</label>
									</div>
								</div>
								<div class="panel-body">
									<form method="POST" action="">
										<label for="elec-id">Survey Title</label>
										<select name = "selSurvey" class = "dropdown">
											<option>CCIS Faculty Survey</option>
											<option>PUP Survey</option>
										</select><br/>
									</form>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	<!-- </div> -->

	<script type="text/javascript" src="../assets/js/jquery/jquery-1.11.2.min.js"></script>
	<script type="text/javascript" src="../assets/js/materialize.js"></script> 
	<script type="text/javascript" src="../assets/js/perfect-scrollbar.min.js"></script>
	<script type="text/javascript" src="../assets/js/prism.js"></script>
	<script type="text/javascript" src="../assets/js/chartist.min.js"></script>
	<script type="text/javascript" src="../assets/js/plugins.js"></script>
</body>
</html>