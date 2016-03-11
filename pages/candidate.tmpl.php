
<html>
<head>
<title>Candidates</title>
<!-- INCLUDED PLUGIN CSS ON THIS PAGE -->
<link href="../assets/css/prism.css" type="text/css" rel="stylesheet" media="screen,projection"
<link href="../assets/css/cdn-datatable/jquery.dataTables.min.css" type="text/css" rel="stylesheet" media="screen,projection">
<link href="../assets/plugins/jquery.dataTables.min.css" type="text/css" rel="stylesheet" media="screen,projection">
<link href="../assets/css/chartist.min.css" type="text/css" rel="stylesheet" media="screen,projection">
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
                    <?php
                        foreach ($qrPosRows as $strPosRow){
                            $strPosId = $strPosRow['strPositionId'];
                            $strPosname = $strPosRow['strPosName'];
                            $qrCand = $conn -> query("SELECT strCandMemId, txtPic from tblCandidate WHERE strCandPosId = '$strPosId' ");
                            $qrCandRows = $qrCand -> fetchAll();

                            foreach ($qrCandRows as $strCandRow){
                                $strMemId = $strCandRow['strCandMemId'];
                                $strPicPath = $strCandRow['txtPic'];
                                $qrCandDetail = $conn -> query("SELECT strMemFname, strMemMname, strMemLname from tblMember WHERE strMemberId = '$strMemId' ");
                                $qrDetailRows = $qrCandDetail -> fetchAll();

                                foreach ($qrDetailRows as $strDetailRow){
                                    $strMemFName = $strDetailRow['strMemFname'];
                                    $strMemMName = $strDetailRow['strMemMname'];
                                    $strMemLName = $strDetailRow['strMemLname'];
                                }
                                ?>
                                <div class="col s12">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <?php echo($strPosname); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col s12 m6 l3">
                                        <div class="card tooltipped" id="candidate" data-position="top" data-delay="50" data-tooltip=<?php echo("$strMemFName.$strMemMName.$strMemLName"); ?>>
                                            <div>
                                                <img  class="circle responsive-img" src="<?=$strPicPath?>"  height="70%" width="70%" style="margin-left:37px;margin-top:20px">
                                            </div>
                                            <div class="card-content"  style="text-align:center;" >
                                                <p><?php echo($strMemFName." ". $strMemMName." ". $strMemLName); ?></p>
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
    <script type="text/javascript" src="../assets/js/jquery/jquery-1.11.2.min.js"></script>
    <script type="text/javascript" src="../assets/js/materialize.js"></script> 
    <script type="text/javascript" src="../assets/js/prism.js"></script>
    <script type="text/javascript" src="../assets/js/perfect-scrollbar.min.js"></script>
    <script type="text/javascript" src="../assets/plugins/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="../assets/js/data-tables-script.js"></script>
    <script type="text/javascript" src="../assets/js/chartist.min.js"></script>
    <script type="text/javascript" src="../assets/js/plugins.js"></script>

</body>
</html>