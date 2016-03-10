<!DOCTYPE html>
<html lang="en">
<head>
	<title>Vote+ Edit Position</title>
	<style>
		select {
			visibility: visible;
			display: inline;
			margin-top: 1%;
			margin-bottom: 2%;
		}
		.input-field label{
			position: initial;
			font-size: 13px;
		}	
		label{
			font-size: 14px;
		}
		.btn{
			margin-top: 3%;
		}	
	</style>
</head>
<body>
<div id="content">
	<div id="page-wrapper">
		<div class="container-fluid">
			<div class="row">
				<div class="col s12">
					<h3 class="page-header">
						Edit Position
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
				<form action="editposition.php" method="POST">
				<div class="col s8">
					<div class="panel panel-default">
						<div class="panel-heading" >
							Position Details
						</div>
						<div class="panel-body">
							<div class="row">
								<!-- <div> -->
								
								<div class="input-field col s12">
						        	<label for="pos-id">Position ID<span style="color: red">*</span></label>
						        	<input type="text" class="validate" name = "pos-id" value="<?=$strPosCode?>"/>
						        </div>
						        <div class="input-field col s12">
						        	<label for="pos-name">Position Name<span style="color: red">*</span></label>
						        	<input type="text" class="validate" name = "pos-name" value = "<?=$strPosName?>" />
						        </div>
						        <div class="input-field col s12">
						        	<label for="pos-limit">Vote Limit<span style="color: red">*</span></label>
						        	<input type="number" class="validate" name = "pos-limit" value="<?=$intVoteLimit?>" />
						        </div>
						        <input type="submit" class="btn btn-primary" name = "btnEditPosition" />
							</div>
						</div>	
					</div>
				</div>
				<div class="col s4">
					<div class="panel panel-default">
						<div class="panel-heading" >
							Position Reference
						</div>
						<div class="panel-body">
							<div class="row">
								<?php $formloader->render_form(); ?>
								
							</div>
						</div>	
					</div>
				</div>
				</form>
				<div class="col s6">
					<div class="panel panel-default">
						<div class="panel-heading">
							Current Election 
						</div>
						<div class="panel-body">
							<div class="row">
						        <div class="input-field col s12">
						        	<label for="elec-title">Election Title</label>
						        	<input value="<?=$strElecTitle?>" id="elec-title" type="text" class="validate" name = "elec-title" />
						        </div>
					      	</div>
					      	<div class="row">
								<div class="row">
									<div class="input-field col s12">
										<label for="elec-desc">Election Description</label>
										<textarea name = "elec-desc" id="elec-desc" class="materialize-textarea"><?=$strElecDesc?></textarea>
										<a href="election.php" style="margin-bottom: -10%"class="waves-effect waves-light btn yellow darken-2">Edit</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col s6">
					<div class="panel panel-default">
						<div class="panel-heading">
							Election Schedule
						</div>
						<div class="panel-body">
							<div class="row">
						        <div class="col s12">
						        	<label for="start-date">Start date</label>	
						        	<input id="start-date" type="text" value="<?=$strElecStart?>">
						        </div>
						    </div>
						    <div class="row">
						        <div class="col s12">
						        	<label for="end-date">End date</label>	
						        	<input id="end-date" type="text" value="<?=$strElecStart?>">
						        </div>
						    </div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="fixed-action-btn" style="bottom: 45px; right: 24px;">
        <a href="position.php"class="btn-floating tooltipped btn-large yellow darken-2" data-position="left" data-tooltip="Add New">
            <i class="large mdi-action-extension"></i>
        </a>
    </div>
</div>
</body>
</html>