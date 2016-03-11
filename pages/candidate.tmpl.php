
<html>
<head>
<title>Candidates</title>

<style>
.z-depth-1, nav, .card-panel, .card, .toast, .btn, .btn-large, .btn-floating, .dropdown-content, .collapsible, .side-nav {
    box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
}

.card .card-action a:not(.btn):not(.btn-large):not(.btn-floating) {
    color: #EE6E73;
    margin-right: 20px;
    transition: color .3s ease;
    text-transform: uppercase;
}
.card .card-action a:not(.btn):not(.btn-large):not(.btn-floating):hover {
    color: red;
}
.blog-card ul.card-action-buttons li {
    display: inline-block;
    padding-left: 5px;
}
.blog-card ul.card-action-buttons {
    margin: -26px 10px 0px 0px;
    text-align: right;
}
</style>

</head>
<body>
    <div id="edit-content"></div>
    <div id="content">
        <div class="container">
            <div class="row">
                <div class="col s12">
                    <h3 class="page-header">
                        All Candidates
                    </h3>
                    <?php foreach ($qrPosRows as $qrPosRow) { ?>
                        <div class="col s12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <?=$qrPosRow['strPosName'];?>
                                </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col s12">
                                        <?php foreach ($qrCandRows as $qrCandRow) {
                                            if($qrPosRow['strPosName'] == $qrCandRow['strPosName']){
                                            ?>
                                            <div class="col s12 l4">
                                                <div class="blog-card">
                                                    <div class="card">
                                                        <div class="card-image">
                                                            <img class="cand-pic" src="<?=$qrCandRow['txtPic']?>">
                                                                <span class="card-title" style="font-size: 18px;">
                                                                </span>

                                                        </div>
                                                        <ul class="card-action-buttons">
                                                            <li>
                                                                <a class="btn-floating waves-effect waves-light light-blue"href="viewmember.php?code=<?=$qrCandRow['strMemberId']?>"><i class="mdi-action-info activator"></i></a>
                                                            </li>
                                                            <li>
                                                                <a class="btn-floating waves-effect waves-light red darken-3" href="delcandidate.php?code=<?=$qrCandRow['strCandId']?>"><i class="mdi-action-delete"></i></a>
                                                            </li>   
                                                        </ul>
                                                        <div class="card-action" >
                                                            <b style="font-size: 18px">
                                                                <?=$qrCandRow['strMemFname']." ".$qrCandRow['strMemLname']?>
                                                            </b>
                                                            <br/>
                                                            <?=$qrCandRow['strMemEmail']?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php
                                            }
                                        }
                                        ?>      
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>  
                    <?php } ?>            
                </div>               
            </div>
        </div>
    </div>
    </div>
    <script type="text/javascript" src="../assets/js/jquery/jquery-1.11.2.min.js"></script>
    <script type="text/javascript" src="../assets/js/materialize.js"></script>
</body>
</html>