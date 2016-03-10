<?php
// Created at: Sublime Text 3
// Writer: Carlo Jumagdao
// Date: February 22, 2016
// Time: 4:14am
?>
<!DOCTYPE html>
<html>
<head>
	<title>Vote+ Create Form</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"> 
	<link rel="stylesheet" href="../assets/css/c-materialize.min.css" edia="screen,projection">
	<link href="../assets/css/style.css" type="text/css" rel="stylesheet">
	<style>
		#panel-body{
			padding: 15px;
			background-color: red;
		}
		h1{
			font-size: 40px;
			margin: 2% 3% 2% 0%;
		}
		#form-container{
			background-color: #fff;
			padding: 0% 0% 0% 1%;
		}
	</style>
</head>
<body>
	<div id="banner-id">
		<ul id="dropdown1" class="dropdown-content" style="margin-top:70px;">
		   <li>
		        <a class="grey-text text-darken-3 waves-effect waves-yellow" href="#!">New Voter</a>
		   </li>
		   <li class="divider grey lighten-1 "></li>
		   <li>
		        <a class="grey-text text-darken-3 waves-effect waves-yellow" href="#!">two</a>
		   </li>
		   <li class="divider grey lighten-1"></li>
		   <li>
		        <a class="grey-text text-darken-3 waves-effect waves-yellow" href="#!">three</a>
		   </li>
		</ul>    
		<nav>
		   <div class="nav-wrapper banner">
		        <a href="#" class="brand-logo"><img src="../assets/img/vote++ web logo.png" width="90"></a>   
		        <ul id="nav-mobile" class="right hide-on-med-and-down">
		             <li >
		                  <a class="dropdown-button waves-effect waves-grey accent-4 black-text" href="#!" data-activates="dropdown1"><i class="small material-icons left mdi-social-notifications black-text text-accent-4" ></i>Notification<i class="material-icons right mdi-navigation-arrow-drop-down text-accent-4"></i>
		                  </a>
		             </li>
		             <li>
		                  <a class="black-text waves-effect waves-yellow" href="sass.html">
		                  <i class="material-icons left mdi-action-view-quilt black-text text-accent-4"></i>Dashboard
		                  </a>
		             </li>
		        </ul>     
		   </div>
		</nav>
     </div>          
	<div id="navigation-id" >
		<aside id="left-sidebar-nav">
			<ul id="slide-out" style="position:relative;" class="custom-nav side-nav fixed">
				<div class="user-details">
					<center>
						<div>
							<div class="col s12" >
								<img style="margin-top: 12%;" src="../assets/img/avatar.jpg" alt="profile" class="circle responsive-img valign profile-image" width="130">
							</div>
							<div class="col s12">
								<p style="font-size: 14px;color:white">Logged in as:</p>
								<p class="profile-name"style="font-size: 19px;color:white">Carlo Jumagdao</p>
							</div>
						</div>
					</center>
				</div>
				<li>
					<a  href="election.php" class="collapsible-header waves-effect waves-cyan" style="right:15px;"><i class="material-icons  mdi-action-dashboard">
					</i> Dashboard</a>
				</li>
				<li class="no-padding">
					<ul class="collapsible" data-collapsible="accordion">
						<li ><a class="collapsible-header waves-effect waves-cyan"><i class="mdi-social-person-add "></i> Members<i class="material-icons right mdi-navigation-arrow-drop-down"></i></a>
							<div class="collapsible-body" style="">
								<ul>                                   
									<li>
										<a href="member.php">&emsp; All Members</a>
									</li>
									<li>
										<a href="addmember.php">&emsp; Add New</a>
									</li>
									<li>
										<a href="memberform.php" >&emsp; Member Form</a>
									</li>   
								</ul>
							</div>
						</li>
					</ul>
				</li>
				<li class="no-padding">
					<ul class="collapsible" data-collapsible="accordion">
						<li ><a class="collapsible-header waves-effect waves-cyan"><i class="mdi-action-extension"></i> Position<i class="material-icons right mdi-navigation-arrow-drop-down"></i></a>
							<div class="collapsible-body" style="">
								<ul>
									<li>
										<a href="position.php" >&emsp;All Positions</a>
									</li>                                         
									<li>
										<a href="addposition.php">&emsp;Add new</a>
									</li>
								</ul>
							</div>
						</li>  
					</ul>
				</li>
				<li class="no-padding">
					<ul class="collapsible" data-collapsible="accordion">
						<li ><a class="collapsible-header waves-effect waves-cyan"><i class="mdi-action-perm-identity"></i> Candidate<i class="material-icons right mdi-navigation-arrow-drop-down"></i></a>
							<div class="collapsible-body" style="">
								<ul>
									<li>
										<a href="#" >&emsp;All Candidates</a>
									</li>                                         
									<li>
										<a href="#">&emsp;Add new</a>
									</li>
								</ul>
							</div>
						</li>  
					</ul>
				</li>
				<li class="no-padding">
					<ul class="collapsible" data-collapsible="accordion">
						<li ><a class="collapsible-header waves-effect waves-cyan"><i class="mdi-editor-mode-edit"></i> Survey<i class="material-icons right mdi-navigation-arrow-drop-down"></i></a>
							<div class="collapsible-body" style="">
								<ul>
									<li>
										<a href="#" >&emsp;All Surveys</a>
									</li>                                         
									<li>
										<a href="#">&emsp;Add new</a>
									</li>
									<li>
										<a href="#">&emsp;Survey Form</a>
									</li>
								</ul>
							</div>
						</li>  
					</ul>
				</li>
				<li class="no-padding">
					<ul class="collapsible" data-collapsible="accordion">
						<li >
							<a class="collapsible-header waves-effect waves-cyan"><i class="mdi-action-settings"></i> Settings<i class="material-icons right mdi-navigation-arrow-drop-down"></i></a>
							<div class="collapsible-body" style="">
								<ul>
									<li>
										<a href="election.php" >&emsp;General</a>
									</li>                                         
								</ul>
							</div>
						</li>  
					</ul>
				</li>
				<li class="no-padding">
					<ul class="collapsible" data-collapsible="accordion">
						<li >
							<a class="collapsible-header waves-effect waves-cyan"><i class="mdi-editor-format-paint"></i>Customize<i class="material-icons right mdi-navigation-arrow-drop-down"></i></a>
							<div class="collapsible-body" style="">
								<ul>
									<li>
										<a href="#" >&emsp;Passcode Page</a>
									</li>                                         
									<li>
										<a href="#">&emsp;Voting Page</a>
									</li> 
									<li>
										<a href="#">&emsp;Campaign Page</a>
									</li>
									<li>
										<a href="#">&emsp;Survey Page</a>
									</li>
								</ul>
							</div>
						</li>  
					</ul>
				</li>
				
				<li class="no-padding">
					<ul class="collapsible" data-collapsible="accordion">
						<li >
							<a class="collapsible-header waves-effect waves-cyan"><i class="mdi-editor-insert-chart"></i> Reports<i class="material-icons right mdi-navigation-arrow-drop-down"></i></a>
							<div class="collapsible-body" style="">
								<ul>
									<li>
										<a href="#" ><i class="mdi-action-done" ></i>&emsp;Voting Result</a>
									</li>                                         
									<li>
										<a href="#"><i class="mdi-social-poll"></i>&emsp;Survey Result</a>
									</li> 
								</ul>
							</div>
						</li>  
					</ul>
				</li>
				
				<li>
					<a  href="#!" class="collapsible-header waves-effect waves-cyan" style="right:15px;"><i class="material-icons  mdi-action-view-day">
					</i>Audit</a>
				</li>
			<a href="#" data-activates="slide-out" class="sidebar-collapse btn-floating btn-medium waves-effect waves-light hide-on-large-only cyan"></a>
			</ul> 
		</aside>
	</div>

	<div id="content">
		<div class="container">
			<div class="row">
				<div class="col s12">
                    <h3 class="page-header">
                        Customize Form
                    </h3>
                </div>
			    <div class="col s12">
			    	<div class="panel panel-default">
			    		<div class="panel-heading">
			    			Form
			    		</div>
			    		<div>			
			    			<div id="formBuilder"></div>
			    		</div>
			    	</div>
			    </div>
	      	</div>
	    </div>
	</div>

	<script src="../assets/js/jquery/dist/jquery.min.js"></script>
	<script src="../assets/js/materialize.min.js"></script> 
	<script src="../assets/js/jquery/jquery-ui.min.js"></script>
	<script src="src/libraries/dust-js/dust-core-0.3.0.min.js"></script>
	<script src="src/libraries/dust-js/dust-full-0.3.0.min.js"></script>
	<script src="src/libraries/dust-js/dust-helpers.js"></script>
	<script src="src/libraries/tabs.jquery.js"></script>
	<script src="src/formBuilder.jquery.js"></script>

	<script>
		$('#formBuilder').formBuilder({
			load_url: 'src/json/example.json',
			save_url: '../demo/save.php',
			onSaveForm: function() {
				window.location.href = '../demo/render.php';
			}
		});
	</script>
</body>
</html>
