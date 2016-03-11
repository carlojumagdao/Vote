<?php

require 'function.php';
session_start();

if(fnIsLoggedIn()){
    header("location: login.php");
}

if(isset($_POST['btnSave'])){

    $HCP= $_POST['head_Color_pass'];
    $BCP= $_POST['back_Color_pass'];
    $THP= $_POST['title_head_pass'];
    $WMP= $_POST['wel_mess_pass'];
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
  
    /*
 * COLOR PICKER TOOL
 */




</style>
<body>   

<div id="content"> 
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col s12">
                    <h3 class="page-header">
                        Edit your own Voting Page
                    </h3>
                </div>
                <div class="col s8">
                    <div class="panel panel-default">
                        <div class="panel-heading" >
                            Voting Page Editing
                        </div>
                        <form method="post">
                        <div class="panel-body">
                            <div> 
                                <div class="row">
                                    <div class="col s3">
                                        <div class="card-panel2 "  >
                                            &nbsp;
                                        </div>
                                    </div>
                                    <div class="col s4">
                                        <div class="card-panel2 " >
                                        <img id="logo-pic-vote" src="../assets/img/Photos-icon2.png" width="250px" /> 
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col s2">
                                            <div class="row">
                                            <div class="input-field col s12">
                                              
                                              <label for="password" style="font-size:18px;color:#263238;margin-top:10px">Logo:</label>
                                            </div>
                                          </div>
                                        </div>
                                    <div class="col s10">
                                        
                                        <div class="file-field input-field">
                                        
                                            <div class="btn waves-effect waves-black tooltipped yellow darken-2 grey-text text-darken-4 " data-position="top" data-delay="50" data-tooltip="choose your Logo">
                                                <span>File</span>
                                                <input type="file" onchange="readURL2(this);">
                                            </div>
                                            <div class="file-path-wrapper">
                                                <input class="file-path validate yellow-text text-darken-2" type="text">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                        <div class="col s4">
                                            <div class="row">
                                            <div class="input-field col s12">
                                              
                                              <label for="password" style="font-size:18px;color:#263238;">Header Color:</label>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="col s8">
                                        <div id="container" style="margin-top:20px;">
                                            <input type="text" id="showAlpha" name="head_Color_pass"  />
                                            
                                        </div>
                                        </div>
                                </div>
                                
                                <div class="row">
                                        <div class="col s4">
                                            <div class="row">
                                            <div class="input-field col s12">
                                              <label for="password" style="font-size:18px;color:#263238;">Background Color:</label>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="col s8">
                                        <div id="container" style="margin-top:20px;">
                                            <input  type="text" id="showAlpha2" name="back_Color_pass"  />
                                            
                                        </div>
                                        </div>
                                </div>
                                
                                <div class="row">
                                       
                                        <div class="col s12" >
                                            <div class="input-field col s12">
                                              <input id="titlehead" type="text" class="validate" name="title_head_pass" >
                                              <label for="titlehead">Title</label>
                                            </div>
                                        </div>
                                </div>
                                <div class="row">
                                        
                                        <div class="col s12" >
                                            <div class="input-field col s12">
                                              <textarea id="textarea1" class="materialize-textarea" name="wel_mess_pass"  ></textarea>
                                              <label for="textarea1">Message</label>
                                            </div>
                                        </div>
                                </div>
                                <div class="row">
                                        <div class="col s8">
                                            &nbsp;
                                        </div>
                                        
                                        <div class="col s4" >
                                            <input class="waves-effect btn waves-black tooltipped yellow darken-2 grey-text text-darken-4" data-position="top" data-delay="50" data-tooltip="save your changes" name="btnSave" type="submit"/>
                                        </div>
                                </div>
                            </div>
                          
                        </div>
                           
                        </form>
            </div>
        </div>
    </div>
</div>
</div>
    </div>
    
    
<script type="text/javascript" src="../assets/js/materialize.js"></script>
<script type="text/javascript" src="../assets/js/jquery/jquery-1.11.2.min.js"></script> 
<script src="../assets/css/spectrum.js"></script>



<script> 
    function readURL2(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
                reader.onload = function (e) {
                    $('logo-pic-vote')
                    .attr('src', e.target.result)
                    .width(250)
                    .height(250);
                };
            reader.readAsDataURL(input.files[0]);
        }
    }
</script>
<script>
    $("#preferredName").spectrum({
    preferredFormat: "name",
    showInput: true,
    
});
</script>
<script>
    $("#picker").spectrum({
    color: tinycolor,
    flat: bool,
    showInput: bool,
    showInitial: bool,
    allowEmpty: bool,
    showAlpha: bool,
    disabled: bool,
    localStorageKey: string,
    showPalette: bool,
    showPaletteOnly: bool,
    togglePaletteOnly: bool,
    showSelectionPalette: bool,
    clickoutFiresChange: bool,
    cancelText: string,
    chooseText: string,
    togglePaletteMoreText: string,
    togglePaletteLessText: string,
    containerClassName: string,
    replacerClassName: string,
    preferredFormat: string,
    maxSelectionSize: int,
    palette: [[string]],
    selectionPalette: [string]
});
</script>
<script>
    $("#showAlpha").spectrum({
    showAlpha: true,
    preferredFormat: "name",
    showInput: true,
    showPalette: true,
    showPaletteOnly: true,
    togglePaletteOnly: true,
    togglePaletteMoreText: 'more',
    togglePaletteLessText: 'less',
    color: "#f5c012",
});
</script>
<script>
    $("#showAlpha2").spectrum({
    showAlpha: true,
    preferredFormat: "name",
    showInput: true,
    showPalette: true,
    showPaletteOnly: true,
    togglePaletteOnly: true,
    togglePaletteMoreText: 'more',
    togglePaletteLessText: 'less',
    color: "#37474f",
});
</script>
          
<script> 
    $(document).ready(function(){
        $('.tooltipped').tooltip({delay: 50});
    });
</script>
        

</body>
</html>
 <?php
    if(isset($_POST['btnSave']))
             {
                $HCP= $_POST['head_Color_pass'];
                $BCP= $_POST['back_Color_pass'];
                $THP= $_POST['title_head_pass'];
                $WMP= $_POST['wel_mess_pass'];
        echo "<h1>$HCP</h1>";
             }


?>