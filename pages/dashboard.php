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
<title>Vote+ Create Form</title>
    <?php
require 'banner.php';
require 'navigation.php';
require 'connection.php';
require 'smartcounter.php';


?>
 
   
 <link rel="stylesheet" href="../assets/css/spectrum.css" />
	
</head>
<style>
    select {
        visibility: visible;
        display: inline;
        margin-top: 2%;
        margin-bottom: 2%;
    }
    .collection a.collection-item:not(.active):hover {
        background-color: #f5c012;
    }
    .card .card-content p {
        padding-left: 10px;
    }
    .card{
        margin: none;
        margin-top: none;
    }
</style>
<body>   

<div id="content"> 
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col s12">
                    <h3 class="page-header">
                        Dashboard
                    </h3>
                </div>
                <div id="card-stats">
                        <div class="row">
                            <div class="col s12 m6 l4">
                                <div class="card" >
                                    <div class="card-content  green white-text">
                                        <p class="card-stats-title" style="font-size:14px;margin-left:30px"><i class="mdi-social-person" ></i> Total No. of Members</p>
                                        <h4 class="card-stats-number">566</h4>
                                        <p class="card-stats-compare" style="font-size:14px;margin-left:60px"><i class="mdi-hardware-keyboard-arrow-up"></i> 15% <span class="green-text text-lighten-5">from yesterday</span>
                                        </p>
                                    </div>
                                    <div class="card-action  green darken-2">
                                        <div id="clients-bar"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col s12 m6 l4">
                                <div class="card">
                                    <div class="card-content purple white-text">
                                        <p class="card-stats-title" style="font-size:14px;margin-left:30px"><i class="mdi-action-extension"></i>&nbsp;&nbsp;Total No. of Position</p>
                                        <h4 class="card-stats-number">$8990.63</h4>
                                        <p class="card-stats-compare" style="font-size:14px;margin-left:60px"><i class="mdi-hardware-keyboard-arrow-up"></i> 70% <span class="purple-text text-lighten-5">last month</span>
                                        </p>
                                    </div>
                                    <div class="card-action purple darken-2">
                                        <div id="sales-compositebar"></div>

                                    </div>
                                </div>
                            </div>                            
                            <div class="col s12 m6 l4">
                                <div class="card">
                                    <div class="card-content blue-grey white-text">
                                        <p class="card-stats-title" style="font-size:14px;margin-left:30px"><i class="mdi-action-perm-identity"></i> Total No. Position</p>
                                        <h4 class="card-stats-number">$806.52</h4>
                                        <p class="card-stats-compare" style="font-size:14px;margin-left:60px"><i class="mdi-hardware-keyboard-arrow-up"></i> 80% <span class="blue-grey-text text-lighten-5">from yesterday</span>
                                        </p>
                                    </div>
                                    <div class="card-action blue-grey darken-2">
                                        <div id="profit-tristate"></div>
                                    </div>
                                </div>
                            </div>
                    </div>
                            
                            
                            
                            <div class="row"> 
                            <div class="col s12 m6 l3">
                                <div class="card" style="width:240px;">
                                    <div class="card-content pink white-text">
                                        <p class="card-stats-title" style="font-size:14px;padding:28px"><i class="mdi-action-trending-up"></i>&nbsp;&nbsp;Total No. of Votes</p>
                                        <h4 class="card-stats-number">1806</h4>
                                        <p class="card-stats-compare " style="font-size:14px;margin-left:20px"><i class="mdi-hardware-keyboard-arrow-down"></i> 3% <span class="deep-purple-text text-lighten-5">from last month</span>
                                        </p>
                                    </div>
                                    <div class="card-action  pink darken-3">
                                        <div id="invoice-line"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col s12 m6 l5">
                                <div class="card" style="width:420px;">
                                    <div class="card-content teal darken-3 white-text">
                                        <p class="card-stats-title" style="font-size:14px;padding:20px"><i class="mdi-file-folder-shared"></i>&nbsp;&nbsp;Total No. members who already set their Security Quetion.</p>
                                        <h4 class="card-stats-number">1806</h4>
                                        <p class="card-stats-compare" style="font-size:14px;margin-left:90px"><i class="mdi-hardware-keyboard-arrow-down"></i> 3% <span class="deep-purple-text text-lighten-5">from last month</span>
                                        </p>
                                    </div>
                                    <div class="card-action  teal darken-4">
                                        <div id="invoice-line"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col s12 m6 l4">
                                <div class="card" style="width:330px;">
                                    <div class="card-content orange darken-3 white-text">
                                        <p class="card-stats-title" style="font-size:14px;padding:20px"><i class="mdi-content-flag"></i>&nbsp;&nbsp;Todays No. of member who did not Vote.</p>
                                        <h4 class="card-stats-number">1806</h4>
                                        <p class="card-stats-compare" style="font-size:14px;margin-left:58px"><i class="mdi-hardware-keyboard-arrow-down"></i> 3% <span class="deep-purple-text text-lighten-5">from last month</span>
                                        </p>
                                    </div>
                                    <div class="card-action  orange darken-4">
                                        <div id="invoice-line"></div>
                                    </div>
                                </div>
                            </div>
                            
                            
                            </div>
                    
                            <div class="row">
                            <div class="col s12 m6 l4">
                                <div class="card" >
                                    <div class="card-content   blue accent-2 white-text">
                                        <p class="card-stats-title" style="font-size:14px;margin-left:30px;padding:28px"><i class="mdi-maps-my-location" ></i> Total No. members in Luzon</p>
                                        <h4 class="card-stats-number">566</h4>
                                        <p class="card-stats-compare" style="font-size:14px;margin-left:70px"><i class="mdi-hardware-keyboard-arrow-up"></i> 15% <span class="green-text text-lighten-5">from yesterday</span>
                                        </p>
                                    </div>
                                    <div class="card-action  blue darken-4">
                                        <div id="clients-bar"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col s12 m6 l4">
                                <div class="card">
                                    <div class="card-content red accent-2 white-text">
                                        <p class="card-stats-title" style="font-size:14px;padding:28px"><i class="mdi-maps-my-location"></i>&nbsp;&nbsp;Total No. members in Visayas</p>
                                        <h4 class="card-stats-number">$8990.63</h4>
                                        <p class="card-stats-compare" style="font-size:14px;margin-left:70px"><i class="mdi-hardware-keyboard-arrow-up"></i> 70% <span class="purple-text text-lighten-5">last month</span>
                                        </p>
                                    </div>
                                    <div class="card-action  red darken-4">
                                        <div id="sales-compositebar" ></div>

                                    </div>
                                </div>
                            </div>                            
                            <div class="col s12 m6 l4">
                                <div class="card">
                                    <div class="card-content teal accent-4 white-text">
                                        <p class="card-stats-title" style="font-size:14px;padding:28px"><i class="mdi-maps-my-location"></i> Total No. members in Mindanao</p>
                                        <h4 class="card-stats-number">$806.52</h4>
                                        <p class="card-stats-compare" style="font-size:14px;margin-left:70px"><i class="mdi-hardware-keyboard-arrow-up"></i> 80% <span class="blue-grey-text text-lighten-5">from yesterday</span>
                                        </p>
                                    </div>
                                    <div class="card-action cyan darken-4">
                                        <div id="profit-tristate"></div>
                                    </div>
                                </div>
                            </div>
                    </div>
                            
                            
                            
                        </div>
                    </div>
            </div>
        </div>
    </div>
</div>
</div>
    </div>
    
    
<script type="text/javascript" src="../assets/js/materialize.js"></script>
<script type="text/javascript" src="../assets/js/jquery/jquery-1.11.2.min2.js"></script> 
<script type="text/javascript" src="../assets/js/raphael-min.js"></script>
<script type="text/javascript" src="../assets/js/style/plugins.js"></script>




<script> 
    $(document).ready(function(){
        $('.tooltipped').tooltipped({delay: 50});
    });
</script>
        

</body>
</html>
