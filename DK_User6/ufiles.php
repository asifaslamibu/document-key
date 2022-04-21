<?php
// include 'sesstioninput.php'
?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from designreset.com/cork/ltr/demo4/table_dt_html5.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 18 Mar 2022 07:08:33 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>DataTables HTML5 Export | CORK - Multipurpose Bootstrap Dashboard Template </title>
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
    <link href="assets/css/loader.css" rel="stylesheet" type="text/css" />
    <script src="assets/js/loader.js"></script>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/plugins.css" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->
    <link href="plugins/animate/animate.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/components/custom-modal.css" rel="stylesheet" type="text/css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    <link href="assets/css/scrollspyNav.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="plugins/select2/select2.min.css">
    <!-- BEGIN PAGE LEVEL CUSTOM STYLES -->
    <link rel="stylesheet" type="text/css" href="plugins/table/datatable/datatables.css">
    <link rel="stylesheet" type="text/css" href="plugins/table/datatable/custom_dt_html5.css">
    <link rel="stylesheet" type="text/css" href="plugins/table/datatable/dt-global_style.css">
    <link href="assets/css/components/cards/card.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="assets/css/elements/alert.css">
    <link href="plugins/animate/animate.css" rel="stylesheet" type="text/css" />
    <script src="plugins/sweetalerts/promise-polyfill.js"></script>
    <link href="plugins/sweetalerts/sweetalert2.min.css" rel="stylesheet" type="text/css" />
    <link href="plugins/sweetalerts/sweetalert.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/components/custom-sweetalert.css" rel="stylesheet" type="text/css" />
</head>


<style>
    .active1 {
        /* background-color: black; */
        color: blue;
    }
</style>
<!-- END PAGE LEVEL PLUGINS/CUSTOM STYLES -->
<?php
include("sessioninput.php");

$cur_date = date('Y-m-d');
include("config_indemnifier.php");
$user_id = $_SESSION['user_id'];


$id = $_GET['id'];
$fid = $_GET['id'];

$result = mysqli_query($db, "SELECT * FROM dockey.upload_files where folder_id = $id;");
$result1 = mysqli_query($db, "SELECT * FROM dockey.custom_field where folder_id = $id;");

$qry = mysqli_query($db, "SELECT *,folders.id as folder_id FROM cabs INNER JOIN folders ON cabs.id = folders.cabinet_id where folders.id = $id;"); // select query
$data = mysqli_fetch_array($qry);


?>

<body>
    <script>
        var id = "<?php echo $_GET['id'] ?>";
    </script>
    <!-- BEGIN LOADER -->
    <div class="sub-header-container">
        <header class="header navbar navbar-expand-sm">
            <a href="javascript:void(0);" class="sidebarCollapse" data-placement="bottom"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu">
                    <line x1="3" y1="12" x2="21" y2="12"></line>
                    <line x1="3" y1="6" x2="21" y2="6"></line>
                    <line x1="3" y1="18" x2="21" y2="18"></line>
                </svg></a>

            <ul class="navbar-nav flex-row">
                <li>
                    <div class="page-header">

                        <nav class="breadcrumb-one" aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0);">Dashboard</a></li>

                                <!-- <li class="breadcrumb-item" aria-current="page"><span>Cabinets</span></li> -->
                                <li class="breadcrumb-item active1" aria-current="page"><a href="ufolder.php?id=<?php echo $_GET['fid']; ?>"><?php echo $data['cabinet_name'] ?></a></li>

                                <li class="breadcrumb-item active1" aria-current="page"><span><?php echo $data['folder_name'] ?></span></li>
                            </ol>
                        </nav>

                    </div>
                </li>
            </ul>

        </header>
    </div>
    <?php include 'sidebar.php' ?>


    <!--  BEGIN CONTENT PART  -->
    <div id="content" class="main-content">
        <div class="layout-px-spacing">

            <div class="row layout-top-spacing">
                <div class="col-lg-12 col-12 layout-spacing">
                    <div class="statbox widget box box-shadow">
                        <div id="employee_table"></div>
                        <div class="widget-content widget-content-area br-6">


                            <div class="row">
                                <div class="col-xl-12 col-md-12 col-sm-12 col-12 p-4">
                                    <h4> Files</h4>
                                </div>
                                <?php
                                ?>
                                <?php
                                if (mysqli_num_rows($result) > 0) {
                                ?>
                                    <table id="html5-extension" class="table table-hover non-hover" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>File Name</th>
                                                <th>FIle Type</th>
                                                <th>Uploaded By</th>
                                                <th>Uploaded at</th>
                                                <th class="dt-no-sorting">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $i = 1;
                                            while ($row = mysqli_fetch_array($result)) {
                                            ?>
                                                <tr>
                                                    <td><?php echo $i ?></td>
                                                    <td><?php echo $row["doc_name"]; ?></td>
                                                    <td><?php echo $row["doc_type"]; ?></td>
                                                    <td><?php echo $row["uploaded_by"]; ?></td>
                                                    <td><?php echo $row["uploaded_on"]; ?></td>

                                                    <td class="text-center"><a class="saa" id="mv_secure_page" data-id="<?php echo $row["id"]; ?>" data-chat="<?php echo $row["doc_type"]; ?>" title="Edit"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye">
                                                                <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                                                <circle cx="12" cy="12" r="3"></circle>
                                                            </svg>
                                                        </a>

                                                    </td>
                                                </tr>
                                            <?php
                                                $i++;
                                            }
                                        } else { ?>
                                            <tr>

                                            </tr>
                                        <?php }
                                        ?>
                                        </tbody>
                                    </table>
                            </div>

                        </div>
                    </div>
                </div>


            </div>

        </div>
        <!--  END CONTENT PART  -->



        <script src="assets/js/libs/jquery-3.1.1.min.js"></script>
        <script src="bootstrap/js/popper.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <script src="plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
        <script src="assets/js/app.js"></script>

        <script>
            $(document).ready(function() {
                App.init();
            });
        </script>
        <script src="assets/js/custom.js"></script>
        <!-- END GLOBAL MANDATORY SCRIPTS -->
        <script src="plugins/highlight/highlight.pack.js"></script>

        <!-- END GLOBAL MANDATORY STYLES -->

        <!--  BEGIN CUSTOM SCRIPT FILE  -->
        <script src="assets/js/scrollspyNav.js"></script>

        <!-- BEGIN PAGE LEVEL CUSTOM SCRIPTS -->
        <script src="plugins/select2/select2.min.js"></script>
        <script src="plugins/select2/custom-select2.js"></script>

        <script src="plugins/table/datatable/datatables.js"></script>
        <!-- NOTE TO Use Copy CSV Excel PDF Print Options You Must Include These Files  -->
        <script src="plugins/table/datatable/button-ext/dataTables.buttons.min.js"></script>
        <script src="plugins/table/datatable/button-ext/jszip.min.js"></script>
        <script src="plugins/table/datatable/button-ext/buttons.html5.min.js"></script>
        <script src="plugins/table/datatable/button-ext/buttons.print.min.js"></script>
        <script src="plugins/file-upload/file-upload-with-preview.min.js"></script>
        <script src="plugins/sweetalerts/sweetalert2.min.js"></script>
        <script src="plugins/sweetalerts/custom-sweetalert.js"></script>

        <script>
            $(document).on('click', '#mv_secure_page', function(e) {

                // alert($(this).data('id'));
                var chat = $('#mv_secure_page').data("chat");
                var ide = $(this).data('id');

                var data = $("#m_form1").serialize();
                $.ajax({
                    data: {
                        chat: chat,
                        ide: ide
                    },
                    type: "post",
                    url: "log.php",
                    success: function(data) {
                        // alert("Data: " + data);
                    }
                });
            });
        </script>


        <script>
            var dataid;
            var field_data;

            function get_all() {
                var l = document.getElementById('form').getElementsByTagName('input').length;
                console.log(l);
                for (var i = 0; i < l; i++) {
                    alert(i);
                    console.log(document.getElementById('form').getElementsByTagName('input')[i].value);
                    console.log(document.getElementById('form').getElementsByTagName('input')[i].id);
                    // document.getElementById('form').getElementsByTagName('input')[i];
                    console.log("File_ID" + dataid);
                    console.log("Folder_ID" + id);

                    field_data = {
                        folder_id: id,
                        file_id: dataid,
                        field_id: document.getElementById('form').getElementsByTagName('input')[i].id,
                        data: document.getElementById('form').getElementsByTagName('input')[i].value
                    }

                    <?php
                    $folder_id = 'id';
                    $file_id = 'dataid';
                    $field_id = 'field_id';
                    $data = 'field_data';
                    $query = "INSERT INTO `dockey`.`file_data`(`folder_id`,`file_id`,`field_id`,`data`)VALUES($folder_id,$file_id,$field_id,'$data') ON DUPLICATE KEY UPDATE data='$data';";
                    if (mysqli_query($db, $query)) {
                        $output .= 'Data Added SuccessFully';
                        //    $output .= $message;  

                    } else {
                        $output .= 'Something went Wrong';
                    }

                    $message = 'Data Inserted';
                    ?>

                }
            }

            function datanull() {
                $('#contentarea').prop('data', '');
                var elements = document.getElementsByTagName("input");
                for (var ii = 0; ii < elements.length; ii++) {
                    if (elements[ii].type == "text") {
                        elements[ii].value = "";
                    }
                }

                //objectEl.outerHTML = objectEl.outerHTML.replace(/data="(.+?)"/, 'data=""');

            }
            //First upload
            // var firstUpload = new FileUploadWithPreview('myFirstImage')
            // //Second upload
            // var secondUpload = new FileUploadWithPreview('mySecondImage')
        </script>


        <script>
            $('#html5-extension').DataTable({
                "dom": "<'dt--top-section'<'row'<'col-sm-12 col-md-6 d-flex justify-content-md-start justify-content-center'B><'col-sm-12 col-md-6 d-flex justify-content-md-end justify-content-center mt-md-0 mt-3'f>>>" +
                    "<'table-responsive'tr>" +
                    "<'dt--bottom-section d-sm-flex justify-content-sm-between '<'dt--pages-count  mb-sm-0 mb-3'i><'dt--pagination'p>>",
                buttons: {
                    buttons: [{
                            extend: 'copy',
                            className: 'btn btn-sm'
                        },
                        {
                            extend: 'csv',
                            className: 'btn btn-sm'
                        },
                        {
                            extend: 'excel',
                            className: 'btn btn-sm'
                        },
                        {
                            extend: 'print',
                            className: 'btn btn-sm'
                        }
                    ]
                },
                "oLanguage": {
                    "oPaginate": {
                        "sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>',
                        "sNext": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>'
                    },
                    "sInfo": "Showing page _PAGE_ of _PAGES_",
                    "sSearch": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>',
                    "sSearchPlaceholder": "Search...",
                    "sLengthMenu": "Results :  _MENU_",
                },
                "stripeClasses": [],
                "lengthMenu": [7, 10, 20, 50],
                "pageLength": 7
            });
        </script>



        <!-- END GLOBAL MANDATORY SCRIPTS -->

        <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->

</body>

<!-- Mirrored from designreset.com/cork/ltr/demo4/table_dt_html5.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 18 Mar 2022 07:08:36 GMT -->

</html>