<!DOCTYPE html>
<html>
     <head>
          <title>Vote+</title>
          <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">  
          <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
          <link rel="stylesheet" href="../assets/css/materialize.min.css" edia="screen,projection">
          <link rel="stylesheet" href="../assets/css/style.css">
     </head>

    
        <body class=" loaded" style="background-image:url(../assets/img/body7.jpg); position:fixed; width:100%;">
  <!-- Start Page Loading -->
  <div id="loader-wrapper">
      <div id="loader"></div>        
      <div class="loader-section section-left"></div>
      <div class="loader-section section-right"></div>
  </div>
  <!-- End Page Loading -->
            

      
        <div id="login-page" class="row" >
            <div class="col s4">&nbsp;</div>
            <div class="col s4">&nbsp;</div>
    <div class="col s4 z-depth-4 card-panel N/A transparent" style="margin-left:750px;margin-top:325px;opacity:inherit;">
      <form class="login-form">
        
        <div class="row margin" style="margin-top:20px;">
          <div class="input-field col s12 ">
            <i class="mdi-social-person-outline prefix yellow-text text-accent-4"></i>
            <input id="username" type="text" class="yellow-text text-accent-4">
            <label for="username" class="center-align ">Username</label>
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12">
            <i class="mdi-action-lock-outline prefix  yellow-text text-accent-4"></i>
            <input id="password" type="password" class="yellow-text text-accent-4">
            <label for="password" class="" >Password</label>
          </div>
        </div>
        <div class="row" >
          <div class="input-field col s6 " style="margin-left:130px;" >
            
            <a  href="memberform" class="btn waves-effect yellow darken-2 waves-grey grey-text text-darken-4" style="font-size:18px;font-family:century gothic;text-transform:none;"><i class="material-icons left mdi-action-lock-open grey-text text-darken-4"></i>Log in</a>
          </div>
        </div>
          <label for="birthdate" class="">Birthdate</label>
          <input id="birthdate" type="date" class="datepicker">
        

      </form>
    </div>
  </div>
    

  
        <script src="../assets/js/jquery/dist/jquery-2.1.1.min.js"></script>
		<script src="../assets/js/materialize.min.js"></script>
		<script src="../assets/js/jquery/dist/jquery.min.js"></script>
        <script> 
            $('.datepicker').pickadate({
              labelMonthNext: 'Next month',
              labelMonthPrev: 'Previous month',
              labelMonthSelect: 'Select a month',
              labelYearSelect: 'Select a year',
              monthsFull: [ 'January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December' ],
              monthsShort: [ 'Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec' ],
              weekdaysFull: [ 'Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday' ],
              weekdaysShort: [ 'Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat' ],
              weekdaysLetter: [ 'S', 'M', 'T', 'W', 'T', 'F', 'S' ],
              today: 'Today',
              clear: 'Clear',
              close: 'Close'
            });    
        </script>
    </body>
  </html>
        