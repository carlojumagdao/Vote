<!DOCTYPE html>
<html lang="en">
<head>
	<title>Vote+ Edit User</title>
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
						Edit User
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
				<form action="edituser.php" method="POST">
				<div class="col s8">
					<div class="panel panel-default">
						<div class="panel-heading" >
							User Profile
						</div>
						<div class="panel-body">
							<div class="row">
								<!-- <div> -->
								
								<div class="input-field col s12">
						        	<input type="text" class="validate" name = "user-id" hidden value="<?=$strUserCode?>"/>
						          	<label for="user-fname">First Name<span style="color: red">*</span></label>
						        	<input type="text" class="validate" name = "user-fname" value = "<?=$strUserFname?>" />
						        </div>
						        <div class="input-field col s12">
						        	<label for="user-lname">Last Name<span style="color: red">*</span></label>
						        	<input type="text" class="validate" name = "user-lname" value="<?=$strUserLname?>" />
						        </div>
						        <div class="input-field col s12">
						        	<label for="user-email">Email<span style="color: red">*</span></label>
						        	<input type="email" class="validate" name = "user-email" value = "<?=$strUserEmail?>" />
						        </div>
						        <div class="input-field col s12">
						        	<label for="user-uname">Username<span style="color: red">*</span></label>
						        	<input type="text" class="validate" name = "user-uname" value = "<?=$strUserUname?>" />
						        </div>
						        <div class="input-field col s12">
						        	<label for="user-password">Password<span style="color: red">*</span></label>
						        	<input type="password" class="validate" name = "user-password" value="<?=$strPassword?>"/>
						        </div>
						        <div class="input-field col s12">
									<label for="user-account">Account Type <span style="color: red">*</span></label>
									<select name="user-account" id="user-account" class="form-control">
										<option value="<?=$strAccType?>" selected=""><?php echo $strAccType?></option>
										<option value="Administrator">Administrator</option>
										<option value="Encoder">Encoder</option>
									</select>
								</div>

						        <input type="submit" class="btn btn-primary" name = "btnEditUser" />
							</div>
						</div>	
					</div>
				</div>
				
				</form>
				
				
			</div>
		</div>
	</div>
	<div class="fixed-action-btn" style="bottom: 45px; right: 24px;">
        <a href="user.php"class="btn-floating tooltipped btn-large yellow darken-2 mdi-editor-mode-edit" data-position="left" data-tooltip="Add New">
            <i class="large mdi-action-extension"></i>
        </a>
    </div>
</div>
</body>
</html>