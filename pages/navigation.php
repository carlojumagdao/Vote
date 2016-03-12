<!DOCTYPE html>
<html>
	<head>
		<title>Vote+ Nav</title>
		  <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">  
          <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
          <link rel="stylesheet" href="../assets/css/materialize.min.css" media="screen,projection">
          <link rel="stylesheet" href="../assets/css/style.css">
	</head>
	<body>
		<div id="navigation-id" >
			<aside id="left-sidebar-nav">
				<ul id="slide-out" style="position:relative;" class="custom-nav side-nav fixed">
					<div class="user-details">
						<center>
							<div>
								<div class="col s12" >
									<img style="margin-top: 12%;" src="<?=$_SESSION['picpath']?>" alt="profile" class="circle responsive-img valign profile-image" width="130">
								</div>
								<div class="col s12">
									<p style="font-size: 14px;color:white">Logged in as:</p>
									<p class="profile-name"style="font-size: 19px;color:white">
									<?php
										echo $_SESSION['fname']." ".$_SESSION['lname'];
									?>
									</p>
								</div>
							</div>
						</center>
					</div>
					<li>
						<a  href="dashboard.php" class="collapsible-header waves-effect waves-cyan" style="right:15px;"><i class="material-icons  mdi-action-dashboard">
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
											<a href="candidate.php" >&emsp;All Candidates</a>
										</li>                                         
										<li>
											<a href="addcandidate.php">&emsp;Add new</a>
										</li>
									</ul>
								</div>
							</li>  
						</ul>
					</li>
					<li class="no-padding">
						<ul class="collapsible" data-collapsible="accordion">
							<li ><a class="collapsible-header waves-effect waves-cyan"><i class="mdi-editor-mode-edit"></i> Users<i class="material-icons right mdi-navigation-arrow-drop-down"></i></a>
								<div class="collapsible-body" style="">
									<ul>
										<li>
											<a href="user.php" >&emsp;All Users</a>
										</li>                                         
										<li>
											<a href="adduser.php">&emsp;Add new</a>
										</li>
									</ul>
								</div>
							</li>  
						</ul>
					</li>
					<li class="no-padding">
						<ul class="collapsible" data-collapsible="accordion">
							<li ><a class="collapsible-header waves-effect waves-cyan"><i class="mdi-action-description"></i> Survey<i class="material-icons right mdi-navigation-arrow-drop-down"></i></a>
								<div class="collapsible-body" style="">
									<ul>
										<li>
											<a href="survey.php" >&emsp;All Survey</a>
										</li>                                         
										<li>
											<a href="addsurvey.php">&emsp;Add new</a>
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
											<a href="editpasscode.php" >&emsp;Passcode Page</a>
										</li>                                         
										<li>
											<a href="editvotingpage.php">&emsp;Voting Page</a>
										</li> 
										<li>
											<a href="editsecurity.php">&emsp;Security Page</a>
										</li>
										<li>
											<a href="editcampaignpage.php">&emsp;Campaign Page</a>
											
										</li>
                                        <li>
											<a href="edituserpage.php">&emsp;User Page</a>
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
		<script src="../assets/js/jquery/dist/jquery-2.1.1.min.js"></script>
		<script src="../assets/js/jquery/dist/jquery.min.js"></script>	
	</body>
</html>