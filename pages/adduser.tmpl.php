<!DOCTYPE html>
<html lang="en">
<head>
	<title>Vote+ Add User</title>
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
						New User
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
						<div class="panel-heading" >
							User Profile
						</div>
						<div class="panel-body">
						<form method = "POST" action="" name = "UserForm">
							<div class="row">
								<div>
									<label class="control-label">First Name <span style="color: red">*</span></label>
									<input type="text" name="user_fname" id="user_fname" class="validate">
								</div>	
								<div>
									<label class="control-label">Last Name <span style="color: red">*</span></label>
									<input type="text" name="user_lname" id="user_lname" class="validate">
								</div>	
								<div>
									<label for = "user_email" data-error="" data-success="">Email <span style="color: red">*</span></label>
									<input type="email" name="user_email" id="user_email" class="validate">
								</div>	
								<div>
									<label class="control-label">Username <span style="color: red">*</span></label>
									<input type="text" name="user_uname" id="user_uname" class="validate">
								</div>	
								<div>
									<label for = "user_password" data-error="" data-success="">Password <span style="color: red">*</span></label>
									<input type="password" name="user_password" id="user_password" class="validate">
								</div>		
								<div id =  "user_confirm">
									<label for = "user_confirm" class="validate">Confirm Password <span style="color: red">*</span></label>
									<input type="password" name="user_confirm" id="user_confirm" class="validate" onblur = fnValidate(this,"user_password","user_confirm")>
								</div>	
								<div class="input-field">
									<label for="location">Account Type <span style="color: red">*</span></label>
									<select name="account_type" id="account_type" class="form-control ">
										<option value="Administrator" selected="">Administrator</option>
										<option value="Encoder">Encoder</option>
									</select>
								</div>
								<input type="submit" class="btn btn-primary" name = "btnSubmit" value="Submit">
							</div>
						</form>
							
						</div>	
					</div>
				</div>
				<div class="col s4">
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
				<div class="col s4">
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
</div>
<script src="../assets/js/jquery/dist/jquery.js"></script>
<script src="../assets/js/jquery/jquery-ui.min.js"></script>
<script src="../assets/js/materialize.min.js"></script> 
<script>
   function fnValidate(obj, pass, strdivname){
       var confirm = obj.value;
       var password = document.getElementById(pass).value;

        if((password == "") || (password != confirm)){
        	//alert('Password do not match.');
            //password.label= "data-error";
            alertpassword.attr('data-error','hue');
            //document.getElementById(strdivname). = "invalid";
        } else{
        	// alert('Password matched.');
        }
    }
</script>
</body>
</html>
