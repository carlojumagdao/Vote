<!DOCTYPE html>
<html>
<head>
	<title>Vote+ Voting Pages</title>
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">  
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="../assets/css/styles/materialize.min2.css" media="screen,projection">
    <link rel="stylesheet" href="../assets/css/styles/style2.css">
    <link href='https://fonts.googleapis.com/css?family=Josefin+Sans:400,400italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Josefin+Slab' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Mono' rel='stylesheet' type='text/css'>
    
    <script>
        var count = 0;
    </script>
</head>
<body style="background-image:url(../assets/img/);"> 
<header>
    <nav>
        <div class="nav-wrapper banner">
            <a href="#" class="brand-logo " style="font-family:century gothic;color:#f5c012"><!--<img  src="../assets/img/vote++ web logo.png" width="90">-->Online Voting System</a>   
    </nav>
</header>
<main>
    
    
<!--<div class="container6 ">
        <div class="row" >
        <div class="col s12 m12 l12">
            <div class="section2 ">
            <h6 class="flow-text" >Welcome Voters!</h6>
            <img src="../assets/img/welcome.jpg" >
            </div>
    </div>
    </div>
    </div>-->
    
      

   <!--president-->
     
    <div class="row " >
        <div class="col s12 m12 l12">
            <div class="section  grey-text text-darken-4">
                <span class="flow-text" style="font-size:30px;margin-left:20px;font-family:segoe ui;letter-spacing:1px;">Presidential Candidates (vote limit 1)</span>
            </div>
    </div>
      
    </div>
    
    
        
    <div class="row"> 
    <div class="col s12 m12 l12">
        <div class="row">
        <div class="col s12 m6 l3">
          <div class="card tooltipped" id="blah" onclick=myFunction1(id)  data-position="top" data-delay="50" data-tooltip="click this to vote">
            <div class="tilt pic">
              <img  class="circle responsive-img" src="../assets/img/profile3.jpg"  height="70%" width="70%" style="margin-left:37px;margin-top:20px">
                </div>
              <span class="card-title" style="font-family: 'Josefin Slab', serif;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Candidate:</span>
              
            <div class="card-content"  style="text-align:center;" >
              <p>Leonardo DiCarpio</p>
            </div>
          </div>
        </div>
        <div class="col s12 m6 l3">
          <div class="card tooltipped" id="blah1" onclick=myFunction1(id)   data-position="top" data-delay="50" data-tooltip="click this to vote">
            <div class="tilt pic">
              <img id="blah1" class="circle responsive-img" src="../assets/img/profile2.jpg" height="70%" width="70%" style="margin-left:37px;margin-top:20px">
                </div>
              <span class="card-title" style="font-family: 'Josefin Slab', serif;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Candidate:</span>
              
            <div class="card-content"  style="text-align:center;" >
              <p>Leonardo DiCarpio</p>
            </div>
          </div>
        </div>
        <div class="col s12 m6 l3">
          <div class="card tooltipped" id="blah2" onclick=myFunction1(id)  data-position="top" data-delay="50" data-tooltip="click this to vote">
            <div class="tilt pic">
              <img id="blah2" class="circle responsive-img" src="../assets/img/profile3.jpg" height="70%" width="70%" style="margin-left:37px;margin-top:20px">
                </div>
              <span class="card-title" style="font-family: 'Josefin Slab', serif;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Candidate:</span>
              
            <div class="card-content"  style="text-align:center;" >
              <p>Leonardo DiCarpio</p>
            </div>
          </div>
        </div>
        <div class="col s12 m6 l3">
          <div class="card tooltipped" id="blah3" onclick=myFunction1(id)  data-position="top" data-delay="50" data-tooltip="click this to vote">
            <div class="tilt pic">
              <img id="blah3" class="circle responsive-img" src="../assets/img/profile2.jpg" height="70%" width="70%" style="margin-left:37px;margin-top:20px">
                </div>
              <span class="card-title" style="font-family: 'Josefin Slab', serif;" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Candidate:</span>
              
            <div class="card-content"  style="text-align:center;" >
              <p>Leonardo DiCarpio</p>
            </div>
          </div>
        </div>
      </div>
        
    </div>
    </div>
            
    
    
    
    <!--<div class="row"> 
    <div class="col s12 m12 l12">
    <div class="row">
        <div class="col s12 m6 l3">
            <div class="card-panel2 tooltipped" data-position="top" data-delay="50" data-tooltip="click the picture to vote" style="width:180px;height:200px;margin-top:49px;margin-left:29px;">
               <div class="shrink pic">
               <img class="circle responsive-img" id="blah" onclick="myFunction()" src="../assets/img/profile3.jpg" width=158px height=150px  /> 
               </div>
            
            <div class="input-field col s6" style="margin-left:44px">
              <input placeholder="Name" id="first_name" type="text" class="validate">
              <label for="first_name " style="margin-left:39px"></label>
            </div>
        </div>
        <div class="col s12 m6 l3">
            <div class="card-panel2 tooltipped" data-position="top" data-delay="50" data-tooltip="click the picture to vote" style="width:166px;height:157px;margin-top:49px;margin-left:29px;">
               <img class="circle responsive-img" id="blah2" onclick="myFunction()" src="../assets/img/profile2.jpg" width=158px height=150px  /> 
            </div>
            <div class="input-field col s6" style="margin-left:44px">
              <input placeholder="Name" id="first_name" type="text" class="validate">
              <label for="first_name" style="margin-left:39px" ></label>
            </div>
        </div>
        <div class="col s12 m6 l3">
            <div class="card-panel2 tooltipped" data-position="top" data-delay="50" data-tooltip="click the picture to vote" style="width:166px;height:157px;margin-top:49px;margin-left:29px;">
               <img class="circle responsive-img" id="blah3" onclick="myFunction()" src="../assets/img/profile3.jpg" width=158px height=150px  /> 
            </div>
            <div class="input-field col s6" style="margin-left:44px">
              <input placeholder="Name" id="first_name" type="text" class="validate">
              <label for="first_name" style="margin-left:39px" ></label>
            </div>
        </div>
        <div class="col s12 m6 l3">
            <div class="card-panel2 tooltipped" data-position="top" data-delay="50" data-tooltip="click the picture to vote" style="width:166px;height:157px;margin-top:49px;margin-left:29px;">
               <img class="circle responsive-img" id="blah" onclick="myFunction()" src="../assets/img/profile2.jpg" width=158px height=150px  /> 
            </div>
            <div class="input-field col s6" style="margin-left:44px">
              <input placeholder="Name" id="first_name" type="text" class="validate">
              <label for="first_name" style="margin-left:39px" ></label>
            </div>
        </div>
    </div>
    </div>
    </div>-->
    
   <!-- vice president-->
    <!--<div class="container">  
    <div class="row" >
        <div class="col s12 m12 l12">
            <div class="section grey darken-3">
                <span style="font-size:30px;margin-left:20px;color:#fbc02d;font-family:segoe ui;letter-spacing:1px;display:block">Vice Presidential Candidates</span>
            </div>
    </div>
      
    </div>
    </div>
    
    <div class="row"> 
    <div class="col s12 m12 l12">
    <div class="row">
        <div class="col s12 m6 l3">
            <div class="card-panel2 tooltipped" data-position="top" data-delay="50" data-tooltip="click the picture to vote" style="width:166px;height:157px;margin-top:49px;margin-left:29px;">
               <img class="circle responsive-img" id="blah" onclick="myFunction()" src="../assets/img/profile3.jpg" width=158px height=150px  /> 
            </div>
            <div class="input-field col s6" style="margin-left:44px">
              <input placeholder="Name" id="first_name" type="text" class="validate">
              <label for="first_name" style="margin-left:39px" ></label>
            </div>
        </div>
        <div class="col s12 m6 l3">
            <div class="card-panel2 tooltipped" data-position="top" data-delay="50" data-tooltip="click the picture to vote" style="width:166px;height:157px;margin-top:49px;margin-left:29px;">
               <img class="circle responsive-img" id="blah" onclick="myFunction()" src="../assets/img/profile3.jpg" width=158px height=150px  /> 
            </div>
            <div class="input-field col s6" style="margin-left:44px">
              <input placeholder="Name" id="first_name" type="text" class="validate">
              <label for="first_name" style="margin-left:39px" ></label>
            </div>
        </div>
        <div class="col s12 m6 l3">
            <div class="card-panel2 tooltipped" data-position="top" data-delay="50" data-tooltip="click the picture to vote" style="width:166px;height:157px;margin-top:49px;margin-left:29px;">
               <img class="circle responsive-img" id="blah" onclick="myFunction()" src="../assets/img/profile3.jpg" width=158px height=150px  /> 
            </div>
            <div class="input-field col s6" style="margin-left:44px">
              <input placeholder="Name" id="first_name" type="text" class="validate">
              <label for="first_name" style="margin-left:39px" ></label>
            </div>
        </div>
        <div class="col s12 m6 l3">
            <div class="card-panel2 tooltipped" data-position="top" data-delay="50" data-tooltip="click the picture to vote" style="width:166px;height:157px;margin-top:49px;margin-left:29px;">
               <img class="circle responsive-img" id="blah" onclick="myFunction()" src="../assets/img/profile3.jpg" width=158px height=150px  /> 
            </div>
            <div class="input-field col s6" style="margin-left:44px">
              <input placeholder="Name" id="first_name" type="text" class="validate">
              <label for="first_name" style="margin-left:39px" ></label>
            </div>
        </div>
    </div>
    </div>
    </div>
    -->
<!-- director-->
   <!-- <div class="container">  
     <div class="row" >
        <div class="col s12 m12 l12">
            <div class="section grey darken-3">
                <span style="font-size:30px;margin-left:20px;color:#fbc02d;font-family:segoe ui;letter-spacing:1px;display:block">Director Candidates</span>
            </div>
    </div>
      
    </div>
    </div>
    
    <div class="row"> 
    <div class="col s12 m12 l12">
    <div class="row">
        <div class="col s12 m6 l3">
            <div class="card-panel2 tooltipped" data-position="top" data-delay="50" data-tooltip="click the picture to vote" style="width:166px;height:157px;margin-top:49px;margin-left:29px;">
               <img class="circle responsive-img" id="blah" onclick="myFunction()" src="../assets/img/profile3.jpg" width=158px height=150px  /> 
            </div>
            <div class="input-field col s6" style="margin-left:44px">
              <input placeholder="Name" id="first_name" type="text" class="validate">
              <label for="first_name" style="margin-left:39px" ></label>
            </div>
        </div>
        <div class="col s12 m6 l3">
            <div class="card-panel2 tooltipped" data-position="top" data-delay="50" data-tooltip="click the picture to vote" style="width:166px;height:157px;margin-top:49px;margin-left:29px;">
               <img class="circle responsive-img" id="blah" onclick="myFunction()" src="../assets/img/profile3.jpg" width=158px height=150px  /> 
            </div>
            <div class="input-field col s6" style="margin-left:44px">
              <input placeholder="Name" id="first_name" type="text" class="validate">
              <label for="first_name" style="margin-left:39px" ></label>
            </div>
        </div>
        <div class="col s12 m6 l3">
            <div class="card-panel2 tooltipped" data-position="top" data-delay="50" data-tooltip="click the picture to vote" style="width:166px;height:157px;margin-top:49px;margin-left:29px;">
               <img class="circle responsive-img" id="blah" onclick="myFunction()" src="../assets/img/profile3.jpg" width=158px height=150px  /> 
            </div>
            <div class="input-field col s6" style="margin-left:44px">
              <input placeholder="Name" id="first_name" type="text" class="validate">
              <label for="first_name" style="margin-left:39px" ></label>
            </div>
        </div>
        <div class="col s12 m6 l3">
            <div class="card-panel2 tooltipped" data-position="top" data-delay="50" data-tooltip="click the picture to vote" style="width:166px;height:157px;margin-top:49px;margin-left:29px;">
               <img class="circle responsive-img" id="blah" onclick="myFunction()" src="../assets/img/profile3.jpg" width=158px height=150px  /> 
            </div>
            <div class="input-field col s6" style="margin-left:44px">
              <input placeholder="Name" id="first_name" type="text" class="validate">
              <label for="first_name" style="margin-left:39px" ></label>
            </div>
        </div>
    </div>
    </div>
    </div>
    <div class="row"> 
    <div class="col s12 m12 l12">
    <div class="row">
        <div class="col s12 m6 l3">
            <div class="card-panel2 tooltipped" data-position="top" data-delay="50" data-tooltip="click the picture to vote" style="width:166px;height:157px;margin-top:49px;margin-left:29px;">
               <img class="circle responsive-img" id="blah" onclick="myFunction()" src="../assets/img/profile3.jpg" width=158px height=150px  /> 
            </div>
            <div class="input-field col s6" style="margin-left:44px">
              <input placeholder="Name" id="first_name" type="text" class="validate">
              <label for="first_name" style="margin-left:39px" ></label>
            </div>
        </div>
        <div class="col s12 m6 l3">
            <div class="card-panel2 tooltipped" data-position="top" data-delay="50" data-tooltip="click the picture to vote" style="width:166px;height:157px;margin-top:49px;margin-left:29px;">
               <img class="circle responsive-img" id="blah" onclick="myFunction()" src="../assets/img/profile3.jpg" width=158px height=150px  /> 
            </div>
            <div class="input-field col s6" style="margin-left:44px">
              <input placeholder="Name" id="first_name" type="text" class="validate">
              <label for="first_name" style="margin-left:39px" ></label>
            </div>
        </div>
        <div class="col s12 m6 l3">
            <div class="card-panel2 tooltipped" data-position="top" data-delay="50" data-tooltip="click the picture to vote" style="width:166px;height:157px;margin-top:49px;margin-left:29px;">
               <img class="circle responsive-img" id="blah" onclick="myFunction()" src="../assets/img/profile3.jpg" width=158px height=150px  /> 
            </div>
            <div class="input-field col s6" style="margin-left:44px">
              <input placeholder="Name" id="first_name" type="text" class="validate">
              <label for="first_name" style="margin-left:39px" ></label>
            </div>
        </div>
        <div class="col s12 m6 l3">
            <div class="card-panel2 tooltipped" data-position="top" data-delay="50" data-tooltip="click the picture to vote" style="width:166px;height:157px;margin-top:49px;margin-left:29px;">
               <img class="circle responsive-img" id="blah" onclick="myFunction()" src="../assets/img/profile3.jpg" width=158px height=150px  /> 
            </div>
            <div class="input-field col s6" style="margin-left:44px">
              <input placeholder="Name" id="first_name" type="text" class="validate">
              <label for="first_name" style="margin-left:39px" ></label>
            </div>
        </div>
    </div>
    </div>
    </div>-->
    <
    
    <!--/* button */ -->
    <div class="row"> 
    <div class="col s12 m12 l12">
    <div class="row">
        <div class="col s12 m6 l3">&nbsp;</div>
        <div class="col s12 m6 l3">&nbsp;</div>
        <div class="col s12 m6 l3">&nbsp;</div>
        <div class="col s12 m6 l3">
            <button class="btn-large waves-effect waves-grey grey-text text-darken-4 yellow darken-2 tooltipped" type="submit" name="action" data-position="top" data-delay="50" data-tooltip="submit your vote" style="font-size:18px;margin-left:40px;text-transform:none;">Submit
                <i class="material-icons right ">send</i>
            </button>
        </div>
        
        
    </div>
    </div>
    </div>
    
   </div> 
        </div>
   
    
</main>
<footer class="page-footer" >
    <div class="footer-copyright" >
            <div class="container white-text right flow-text " style="font-weight:bold;font-family: century gothic;font-size:16px;">
            Vote++  © 2016. Created by the Information Technology Students.
            <!--<a class="grey-text text-lighten-4 right" href="#!">More Links</a>-->
            </div>
          </div>
</footer>


    <script>
        document.getElementById('blah').style.borderColor="#fbc02d;"
    </script>
      
    
    <script src="../assets/js/jquery/dist/jquery-2.1.1.min.js"></script>
    <script src="../assets/js/style/materialize.min.js"></script>
    <script src="../assets/js/jquery/dist/jquery.min.js"></script>
    
    
    <script> $(document).ready(function(){
    $('.tooltipped').tooltip({delay: 50});
  });</script>
    
    <!--<script>
           $( "img" ).click(function() {
          $( this ).slideUp();
               document.getElementById("blah")onclick="myFunction()" 
        });
    </script>-->
    
        
        
        <script type="application/javascript">
        
        function myFunction(obj) {
          if (obj.innerHTML == "blah") {
            obj.style.border = "thick solid #000000";
            obj.x.style.backgroundColor = "#f5c012";
            return;
          }
          else (obj.innerHTML == "Click Me<br>Click Me Again") {
            obj.innerHTML = "Thank You";		
            return;	
          }
         
        }
            
            <script>
            $( '#blah' ).click(function() {
              $( "p" ).toggle();
            });
            </script>
    </script>
    
    <script>
    function myFunction1(id) {
        count++;
        alert(count);
        if(count%2 != 0){
            alert(count);
            var x = document.getElementById(id);
            x.style.outline = "1px solid #f5c012"; 
            x.style.outlineOffset = "10px"; 
            x.style.backgroundColor = "#f5c012";
        }
        else{
            x.style.clear = "both";

        }
    }
    </script>
<!--
    <script>
    function myFunction2() {
        var x = document.getElementById("blah2");
        x.style.outline = "1px solid #f5c012"; 
        x.style.outlineOffset = "10px";
        x.style.backgroundColor = "#f5c012";}
    </script>
    <script>
    function myFunction3() {
        var x = document.getElementById("blah3");
        x.style.outline = "1px solid #f5c012"; 
        x.style.outlineOffset = "10px"; 
        x.style.backgroundColor = "#f5c012";}
    </script>
-->
    
</body>
</html>
