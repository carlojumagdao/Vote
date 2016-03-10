<!DOCTYPE html>
<html>
<head>
<title>Vote+ Create Form</title>
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
</style>
<body>   

<div id="content"> 
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col s12">
                    <h3 class="page-header">
                        New Candidate
                    </h3>
                </div>
                <div class="col s12">
                    <div class="panel panel-default">
                        <div class="panel-heading" >
                            Candidate Details
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col s4">
                                    <div class="card-panel2 tooltipped" data-position="top" data-delay="50" data-tooltip="candidate picture">
                                        <img id="cand-pic" src="../assets/img/Avatar.jpg" width="250px" /> 
                                    </div>
                                </div>
                                <div class="input-field col s8">
                                    <input id="first_name" type="text" class="validate" value="<?=$strIncrementedCode?>">
                                    <label for="first_name">Candidate ID</label>
                                </div>
                                <div class="col s8">
                                    <label>Position Name:</label>
                                    <select class="browser-default" onchange="dispPos(this)">
                                    <option value="" disabled selected>-Select-</option>
                                        <?php
                                            foreach($qrPosRows as $qrPosRow){
                                                $strPosName = $qrPosRow['strPosName'];
                                                $strPosId = $qrPosRow['strPositionId'];
                                                echo "<option value='$strPosId'>$strPosName</option>";
                                            }
                                        ?>
                                    </select>
                                </div>
                                <div class="col s8">
                                    <label>Member Name:</label>
                                    <select class="browser-default" onchange="dispMem(this)">
                                        <option value="" disabled selected>-Select-</option>
                                        <?php
                                            foreach($qrMemberRows as $qrMemberRow){
                                                $strMemName = $qrMemberRow['strMemFname']." ".$qrMemberRow['strMemLname'];
                                                $strMemId = $qrMemberRow['strMemberId'];
                                                echo "<option value='$strMemId'>$strMemName</option>";
                                            }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col s4">
                                    <div class="file-field input-field">
                                        <div class="btn waves-effect waves-black tooltipped yellow darken-2 grey-text text-darken-4 " data-position="top" data-delay="50" data-tooltip="choose file">
                                            <span>File</span>
                                            <input type="file" onchange="readURL(this);">
                                        </div>
                                        <div class="file-path-wrapper">
                                            <input class="file-path validate yellow-text text-darken-2" type="text">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>  
                    </div>
                </div>
                <div class="col s6">
                    <div class="panel panel-default">
                        <div class="panel-heading" >
                            Position Reference
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col s12">
                                    <div id="pos-content"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col s6">
                    <div class="panel panel-default">
                        <div class="panel-heading" >
                            Member Detail
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col s12">
                                    <div id="mem-content"></div>
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
<script type="text/javascript" src="../assets/js/jquery/jquery-1.11.2.min.js"></script> 
<script> 
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
                reader.onload = function (e) {
                    $('#cand-pic')
                    .attr('src', e.target.result)
                    .width(250)
                    .height(250);
                };
            reader.readAsDataURL(input.files[0]);
        }
    }
</script>
<script> 
    $(document).ready(function(){
        $('.tooltipped').tooltip({delay: 50});
    });
</script>
<script> 

    var memid;
    var posid;

    function dispMem(select) {
        memid = select.value;
        $.post('candmemposdet.php',{'memberid':memid},function(data){
            $("#mem-content").html(data);
        });
        return false;
    }

    function dispPos(select) {
        posid = select.value;
        $.post('candmemposdet.php',{'posid':posid},function(data){
            $("#pos-content").html(data);
        });
        return false;
    }
</script>
</body>
</html>