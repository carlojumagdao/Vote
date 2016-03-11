<?php
require 'function.php';
session_start();

if(fnIsLoggedIn()){
    header("location: login.php");
} 
?>

<!DOCTYPE html>
<html>
<head>
	<title>Vote+ Passcode Page</title>
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">  
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="../assets/css/styles/materialize.min2.css" media="screen,projection">
    <link rel="stylesheet" href="../assets/css/styles/style3.css">
</head>
<body style="background-image:url(../assets/img/glass3.jpg)"> 
<header>
    <nav>
        <div class="nav-wrapper banner">
            <a href="#" class="brand-logo"><img src="../assets/img/vote++ web logo.png" width="160" height="40"> </a>   
    </nav>
</header>
<main>
        <div class="container7" >
            <div class="row">
                <div class="s12 m12 l12">
                    <div class="row">
                    <div class="col s8 m3 l4">&nbsp;</div>
                    <div class="col s8 m3 l4">
                        <div class="card-panel" style="width:500px;">
                            <!--<img src="../assets/img/logo.png" width="100%" height="100%" style="margin-left:8px;">-->
                            <a style="color:#263238;margin-left:40px;font-size:90px"> Welcome!</a>
                            <div class="input-field col s6 tooltipped " data-position="top" data-delay="50" data-tooltip="type your given passcode here" style="margin-bottom:20px;margin-left:120px">
                                <i class="material-icons prefix ">lock_open</i>
                              <input id="passcode" type="text" length="6" style="font-size:35px;">
                              <label for="passcode">Passcode</label>
                            </div>
                           
                            <div class="row" >
                                <div class="col s12">
                                <label style="font-size:25px;margin-left:120px;margin-bottom:20px;color:#eceff1;">Security Question</label>
                          <select class="browser-default N/A transparent" style="margin-left:120px;font-size:16px;height:40px;width:200px;border-color:#fbc02d;color:#fafafa">
                            <option value="" disabled selected style="font-family:segoe ui;color:#f57f17;font-size:16px;font-family:segoe ui">Choose your option</option>
                            <option value="1" style="font-family:segoe ui;font-size:16px;color:black">What is your pet's name?</option>
                            <option value="2" style="font-family:segoe ui;font-size:16px;color:black">Who is your first kiss?</option>
                            <option value="3" style="font-family:segoe ui;font-size:16px;color:black">Where is your bithplace?</option>
                          </select>
            
                        </div>
                                </div>
                        <div class="row">
                            <div class="input-field col s6 tooltipped" data-position="top" data-delay="50" data-tooltip="type your answer here" style="margin-left:120px">
                                <i class="small material-icons prefix left ">create</i>
                                <input id="answer" type="text" class="validate" style="font-size:25px">
                              <label for="answer">Answer</label>
                            </div>
                        </div>
                            <a href="../pages/votinguser.php" class="btn waves-effect waves-grey grey-text text-darken-4 yellow darken-2" type="submit" name="action" style="font-size:20px;margin-left:160px;text-transform:none;">Proceed
                <!--<i class="material-icons right mdi-content-send"></i>-->
            </a>
                        
                    </div>
                    <div class="col s8 m3 l4">&nbsp;</div>
                    </div>
                </div>
            </div>
        </div>
   
    
</main>
<footer1 class="page-footer" >
    <div class="footer-copyright" >
            <div class="container grey-text text-lighten-5 right" style="font-family: century gothic;font-size:16px;">
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Vote++  © 2016. Created by the Information Technology Students.
            <!--<a class="grey-text text-lighten-4 right" href="#!">More Links</a>-->
            </div>
          </div>
    </footer1>


    <script>
        document.getElementById('blah').style.borderColor="#fbc02d;"
    </script>
      
    
    <script src="../assets/js/jquery/dist/jquery-2.1.1.min.js"></script>
    <script src="../assets/js/style/materialize.min.js"></script>
    <script src="../assets/js/jquery/dist/jquery.min.js"></script>
    
    <script> $(document).ready(function(){
    $('.tooltipped').tooltip({delay: 50});
  });</script>
    <script>
    $(document).ready(function() {
    $('input#passcode').characterCounter(6);
  });
    </script>
    
</body>
</html>
