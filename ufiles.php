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
                                                    <td class="text-center"><a href="#" class="saa" data-id="<?php echo $row["id"]; ?>" title="Edit"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye">
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
                                    <!-- <div class="col-md-2 mb-3 ml-0">
                                    <a href="#" data-toggle="modal" data-target=".bd-example-modal-xl"><img
                                            src="assets/img/file.png" class="card-img-top pl-4 pr-4 pt-4"
                                            alt="widget-card-2">

                                        <div class="card-body">
                                            <h6 class="card-title"><?php // echo $row["doc_name"]; 
                                                                    ?></h6>
                                            <p class="text-secondary"><?php //echo $row["uploaded_on"]; 
                                                                        ?></p>
                                        </div>
                                    </a>
                                </div> -->



                                    <?php
                                    // $i++;
                                    // }
                                    ?>
                            </div>
                            <?php

                            ?>
                        </div>
                    </div>
                </div>


            </div>

        </div>
        <div class="footer-wrapper">
            <div class="footer-section f-section-1">
                <p class="">Copyright © 2021 <a target="_blank" href="https://designreset.com/">DesignReset</a>, All
                    rights
                    reserved.</p>
            </div>
            <div class="footer-section f-section-2">
                <p class="">Coded with <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart">
                        <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z">
                        </path>
                    </svg></p>
            </div>
        </div>
    </div>
    <!--  END CONTENT PART  -->

    </div>


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


    <!--- Modal -->



    <div class="modal fade bd-example-modal-xl" id="empModal" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="myExtraLargeModalLabel">File Information</h5>
                    <button type="button" class="close" data-dismiss="modal" onclick="datanull()" aria-label="Close">
                        <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x">
                            <line x1="18" y1="6" x2="6" y2="18"></line>
                            <line x1="6" y1="6" x2="18" y2="18"></line>
                        </svg>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <object style="border: none;" data-id="" standby="loading" data="" id="contentarea" type="application/pdf" width="500" height="690">

                                </object>
                            </div>
                            <div class="col" id="form">
                                <!-- <form method="post" id="insert_form" enctype="multipart/form-data"> -->
                                <?php
                                if (mysqli_num_rows($result1) > 0) {

                                    $i = 1;
                                    while ($row = mysqli_fetch_array($result1)) {

                                ?>
                                        <div class="input-group mb-4">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon5"><?php echo $row['field_name']; ?></span>
                                            </div>
                                            <input type="text" class="form-control" id="<?php echo $row['id']; ?>" placeholder="<?php echo $row['field_name']; ?>" name="" aria-label="Username">
                                        </div>
                                <?php
                                    }
                                }
                                ?>
                                <button name="insert" id="insert" type="submit" class="btn btn-primary mb-2 float-right">Save</button>

                                <!-- </form> -->

                            </div>
                        </div>

                    </div>
                    <!-- <p class="modal-text">Mauris mi tellus, pharetra vel mattis sed, tempus ultrices eros. Phasellus egestas sit amet velit sed luctus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Suspendisse potenti. Vivamus ultrices sed urna ac pulvinar. Ut sit amet ullamcorper mi.</p> -->


                </div>
                <div class="modal-footer">
                    <button class="btn" data-dismiss="modal" onclick="datanull()"><i class="flaticon-cancel-12"></i>
                        Discard</button>
                    <button type="button" class="btn btn-primary">OK</button>
                </div>
            </div>
        </div>
    </div>

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
    <!-- END PAGE LEVEL CUSTOM SCRIPTS -->
    <script type='text/javascript'>
        $(document).ready(function() {

            $('.text-center a').click(function() {
                // var plant = document.getElementsByClassName('saa');
                // var var_name = plant.getAttribute('data-id');
                // console.log(var_name)
                var userid = $(this).data('id');
                // alert(userid);
                dataid = userid;
                var object = document.getElementById("contentarea");
                object.setAttribute('data-id', dataid);
                // AJAX request
                $.ajax({
                    url: 'files/get_file.php',
                    type: 'post',
                    data: {
                        userid: userid
                    },
                    success: function(response) {

                        var object = document.getElementById("contentarea");
                        object.setAttribute('data', response);

                        var clone = object.cloneNode(true);
                        var parent = object.parentNode;

                        parent.removeChild(object);
                        parent.appendChild(clone);
                        $('#empModal').modal('show');
                    }
                });
                $.ajax({
                    url: 'files/get_file_data.php',
                    type: 'post',
                    data: {
                        userid: userid,
                        folder_id: id,
                    },
                    success: function(response) {
                        var string = JSON.parse(response);
                        // alert(string.length);
                        for (var i = 0; i <= string.length; i++) {
                            document.getElementById(string[i][3]).innerHTML = string[i][4];
                            document.getElementById(string[i][3]).value = string[i][4];

                            var object = document.getElementById(string[i][3]);
                            object.setAttribute('value', string[i][4]);

                            var clone = object.cloneNode(true);
                            var parent = object.parentNode;

                            parent.removeChild(object);
                            parent.appendChild(clone);
                        }

                    }
                });
            });
        });
        $('#insert').on("click", function(event) {
            event.preventDefault();
            if ($('#cname').val() == "") {
                alert("Name is required");


            } else {
                // console.log(field_data);
                var l = document.getElementById('form').getElementsByTagName('input').length;
                console.log(l);
                for (var i = 0; i < l; i++) {
                    // alert(i);
                    console.log(document.getElementById('form').getElementsByTagName('input')[i].value);
                    console.log(document.getElementById('form').getElementsByTagName('input')[i].id);
                    // document.getElementById('form').getElementsByTagName('input')[i];
                    console.log("File_ID" + dataid);
                    console.log("Folder_ID" + id);
                    var field_id = document.getElementById('form').getElementsByTagName('input')[i].id;
                    var field_data1 = document.getElementById('form').getElementsByTagName('input')[i].value;
                    field_data = {
                        folder_id: id,
                        file_id: dataid,
                        field_id: document.getElementById('form').getElementsByTagName('input')[i].id,
                        data: document.getElementById('form').getElementsByTagName('input')[i].value
                    }


                    $.ajax({
                        url: "files/insert_field_data.php",
                        method: "POST",
                        data: field_data,
                        beforeSend: function() {
                            $('#insert').val("Inserting");
                        },
                        success: function(data) {
                            // alert(data);
                            swal({
                                title: 'Updated Successfully!',
                                text: "Updated Field Values!",
                                type: 'success',
                                padding: '2em'
                            })
                        }
                    });

                }

            }
        });
    </script>

    <script>
        $('input[name=toggle]').change(function() {
            var mode = $(this).prop('checked');
            console.log("hamza " + mode)
            var id = $(this).val();
            $.ajax({
                type: 'POST',
                dataType: 'JSON',
                url: 'do_products.php',
                data: {
                    mode: mode,
                    id: id
                },
                success: function(data) {
                    var data = eval(data);
                    response_result = data.response_result;
                    success = data.success;
                    $("#heading").html(success);
                    $("#body").html(response_result);
                }
            });
        });
    </script>
    <script>
        jQuery(function($) {

            var path = window.location.href; // Just grabbing a handy reference to it
            $('ul a').each(function() {
                if (this.href === path) {
                    $(this).addClass('active1');

                }
            });
        });
    </script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->

</body>

<!-- Mirrored from designreset.com/cork/ltr/demo4/table_dt_html5.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 18 Mar 2022 07:08:36 GMT -->

</html>