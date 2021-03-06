<html>
<head>
<title>Users</title>
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
                        All Users
                    </h3>
                </div>
                 <div class="col s12">
                    <?php if(isset($_GET['mes'])){ 
                        $intMes = $_GET['mes'];
                        if($intMes == 1){?>
                            <div class="card-panel white">
                                <span style="font-weight: bold" class="<?=$strClassName?>">
                                    Error: Data not saved.
                                </span>
                            </div>
                        <?php } else if($intMes == 2){ ?>
                            <div class="card-panel white">
                                <span style="font-weight: bold" class="<?=$strClassName?>">
                                    Data Saved.
                                </span>
                            </div>
                        <?php }
                    } ?>
                </div>

                <div class="col s12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            List of users
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col s12">
                                    <div id="data-table-simple_wrapper" class="dataTables_wrapper">
                                    </div>
                                    <table id="data-table-simple" class="member-table" cellspacing="0" role="grid" aria-describedby="data-table-simple_info">
                                        <thead>
                                            <tr>
                                                <td>#</td>
                                                <td>First Name</td>
                                                <td>Last Name</td>
                                                <td>Username</td>
                                                <td>Email</td>
                                                <td>Account Type</td>
                                                <td></td>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <td>#</td>
                                                <td>First Name</td>
                                                <td>Last Name</td>
                                                <td>Username</td>
                                                <td>Email</td>
                                                <td>Account Type</td>
                                                <td></td>
                                            </tr>
                                        </tfoot>
                                        <tbody>     
                                            <?php
                                                foreach ($qrUserRows as $strUserRow) {
                                                    echo "<tr>";
                                                    $intUserID = $strUserRow['intUserId'];
                                                    $strUserFname = $strUserRow['strUserFname'];
                                                    $strUserLname =$strUserRow['strUserLname'];
                                                    $strUsername =$strUserRow['strUsername'];
                                                    $strUserEmail =$strUserRow['strUserEmail'];
                                                    $strAccountType = $strUserRow['strAccountType'];
                                                    echo "<td class = 'code'>$intUserID</td>";
                                                    echo "<td>$strUserFname</td>";
                                                    echo "<td>$strUserLname</td>";
                                                    echo "<td>$strUsername</td>";
                                                    echo "<td>$strUserEmail</td>";
                                                    echo "<td>$strAccountType</td>";
                                                    ?>
                                                    <td>
                                                    <button type="button" class="btn-floating tooltipped btn-small waves-effect waves-light blue view" onclick="rowFunction()" data-position="top" data-tooltip="Edit"><i class="small mdi-content-create"></i></button>
                                                    <a href="#modal2" class="btn-floating tooltipped btn-small waves-effect waves-light red btn modal-trigger delete-rec" data-position="right" data-tooltip="Delete"><i class="small mdi-action-delete" ></i></a>
                                                </td>
                                                <?php
                                                    echo "</tr>";   
                                                }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="modal2" class="modal">
            <div class="modal-content">
                <p>Are you sure to delete this record?</p>
            </div>
            <div class="modal-footer">
                <button class=" modal-action modal-close waves-effect waves-green btn-flat">No</button>
                <button class=" modal-action modal-close waves-effect waves-green btn-flat deleteUser">Yes</button>
            </div>
        </div> 
        <div class="fixed-action-btn" style="bottom: 45px; right: 24px;">
            <a href="adduser.php"class="btn-floating tooltipped btn-large yellow darken-2" data-position="left" data-tooltip="Add New">
                <i class="large mdi-content-add"></i>
            </a>
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
    <script>
        $('.view').on('click', function() {
            var id = $(this).parent().parent().find('.code').text();
            $.post('viewuser.php',{'id':id},function(data){
                document.getElementById("content").style.display = 'none'; 
                $("#edit-content").html(data);
            });
            return false;
        });
    </script>
    <script>
        var id;

        $('.delete-rec').on('click', function() {
          id = $(this).parent().parent().find('.code').text();
        });

        $('.deleteUser').on('click', function() {
          $.post('deluser.php',{'id':id},function(data){
                location.reload();
            });
            return false;
        });
    </script>
</body>
</html>