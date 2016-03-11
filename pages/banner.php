<!DOCTYPE html>
<html>
     <head>
          <title>Vote+</title>
     </head>
<body>     
     <div id="banner-id">
          <ul id="dropdown1" class="dropdown-content">
               <li>
                    <a class="grey-text text-darken-3 waves-effect waves-yellow" href="">Account Settings</a>
               </li>
               <li class="divider grey lighten-1 "></li>
               <li>
                    <a class="grey-text text-darken-3 waves-effect waves-yellow" href="logout.php">Logout</a>
               </li>
               <li class="divider grey lighten-1"></li>
          </ul>    
          <nav>
               <div class="nav-wrapper banner">
                    <a href="#" class="brand-logo"><img src="../assets/img/vote++ web logo.png" width="90"></a>   
                    <ul id="nav-mobile" class="right hide-on-med-and-down">
                         <li>
                              <a class="dropdown-button black-text waves-effect waves-yellow" href="candidateprofile.php" data-activates="dropdown1">
                              <i class="material-icons left mdi-action-view-quilt black-text text-accent-4"></i>Howdy, <?=$_SESSION['fname']?><i class="material-icons right mdi-navigation-arrow-drop-down text-accent-4"></i>
                              </a>
                         </li>
                    </ul>     
               </div>
          </nav>
     </div>
</body>
</html>