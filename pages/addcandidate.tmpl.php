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
        /*background-color: #f5c012;*/
    }
    .collection a.collection-item.failed:hover {
        background-color: #f5c012;
    }
    .collection .collection-item.active {
        background-color: #f5c012;
        border: 1px solid #f5c012;
    }
    .collection .collection-item.failed {
        background-color: transparent;
        border: 1px solid #f5c012;
        border-radius: 20px;
    }
    .collection{
        border-radius: 20px;
        border: 0px solid #e0e0e0; 
    }
</style>
<body>   

<div id="content"> 
    <div id="page-wrapper">
        <div class="container-fluid">
            <form method="POST" action="addcandidate.php" enctype="multipart/form-data">
            <div class="row">
                <div class="col s12">
                    <h3 class="page-header">
                        New Candidate
                    </h3>
                </div>
                <div class="col s12">
                    <?php if(isset($strMessage)){ ?>
                    <div class="card-panel white">
                        <span style="font-weight: bold">
                            <?=$strMessage?>
                        </span>
                    </div>
                    <?php } ?>
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
                                    <input id="cand-id" type="text" class="validate" value="<?=$strIncrementedCode?>" name="cand-id">
                                    <label for="cand-id">Candidate ID</label>
                                </div>
                                <div class="col s8">
                                    <label>Position Name:</label>
                                    <select name="pos-code" class="browser-default" onchange="dispPos(this)">
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
                                    <select name="mem-code" class="browser-default" onchange="dispMem(this)">
                                        <option value="" disabled selected>-Select-</option>
                                        <?php
                                            foreach($qrMemberRows as $qrMemberRow){
                                                $strMemName = $qrMemberRow['strMemFname']." ".$qrMemberRow['strMemLname'];
                                                $strMemId = $qrMemberRow['strMemberId'];
                                                echo "<option value='$strMemId'>$strMemName</option>";
                                            }
                                        ?>
                                    </select>
                                    <button type="button" class="col s12 btn btn-primary validate  blue darken-2 valcand">Validate</button>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col s4">
                                    <div class="file-field input-field">
                                        <div class="btn waves-effect waves-black tooltipped yellow darken-2 grey-text text-darken-4 " data-position="top" data-delay="50" data-tooltip="choose file">
                                            <span>File</span>
                                            <input name = "pic" type="file" onchange="readURL(this);">
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
                <div class="col s12">
                    <div id="edit-content"></div>
                </div>
            </div>
            </form>
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

    var memid = "undefine";
    var posid = "undefine";

    function dispMem(select) {
        document.getElementById("edit-content").style.display = 'none';
        memid = select.value;
        return false;
    }

    function dispPos(select) {
        document.getElementById("edit-content").style.display = 'none';
        posid = select.value;
        return false;
    }
    $('.valcand').on('click', function() {
        document.getElementById("edit-content").style.display = 'block';
        if(memid == "undefine" || posid == "undefine"){
            alert("nothing to validate");
        } else {
            $.post('candmemposdet.php',{'memberid':memid,'posid':posid},function(data){
                $("#edit-content").html(data);
            });
            return false;
        }
    });
</script>
</body>
</html>