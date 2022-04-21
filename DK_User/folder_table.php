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


    <link href="assets/css/scrollspyNav.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="plugins/select2/select2.min.css">
    <!-- BEGIN PAGE LEVEL CUSTOM STYLES -->
    <link rel="stylesheet" type="text/css" href="plugins/table/datatable/datatables.css">
    <link rel="stylesheet" type="text/css" href="plugins/table/datatable/custom_dt_html5.css">
    <link rel="stylesheet" type="text/css" href="plugins/table/datatable/dt-global_style.css">
    <!-- END PAGE LEVEL CUSTOM STYLES -->
    <style>
        .layout-px-spacing {
            min-height: calc(100vh - 166px) !important;
        }
    </style>

</head>
<!-- END PAGE LEVEL PLUGINS/CUSTOM STYLES -->
<?php
$cur_date = date('Y-m-d');
include("config_indemnifier.php");
// $user_id = $_SESSION['userid'];

$result = mysqli_query($db, "SELECT f.id,folder_name,cabinet_id,c.cabinet_name,f.created_at,f.created_by FROM `folders` f inner JOIN cabinets c oN c.id = f.cabinet_id");
?>


<body>
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

                                <li class="breadcrumb-item"><a href="javascript:void(0);">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page"><span>Folders</span></li>
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
                        <div class="widget-header">
                            <div class="row">
                                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                    <h4>Folders Table</h4>
                                    <!-- <button type="button" class="btn btn-primary mb-2 mr-2 float-right" id="add" data-toggle="modal" data-target="#zoomupModal">Add Folders</button> -->
                                    <button type="button" class="btn btn-primary mb-2 mr-2 float-right " id="create" type="submit" data-toggle="modal" data-target="#zoomupModal">Add Folder</button>

                                </div>
                            </div>
                        </div>
                        <div class="widget-content widget-content-area br-6">
                            <?php
                            if (mysqli_num_rows($result) > 0) {
                            ?>
                                <table id="html5-extension" class="table table-hover non-hover" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Folder Name</th>
                                            <th>Cabinet Name</th>
                                            <th>Created By</th>
                                            <th>Created at</th>
                                            <th class="dt-no-sorting">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $i = 1;
                                        while ($row = mysqli_fetch_array($result)) {
                                        ?>
                                            <tr>
                                                <td class="text-center"><?php echo $i ?></td>
                                                <td class="text-center"><?php echo $row["folder_name"]; ?></td>
                                                <td class="text-center"><?php echo $row["cabinet_name"]; ?></td>
                                                <td class="text-center"><?php echo $row["created_by"]; ?></td>
                                                <td class="text-center"><?php echo $row["created_at"]; ?></td>
                                                <td class="text-center"><a name="edit" id="<?php echo $row["id"]; ?>" class="edit_data" data-toggle="tooltip" data-placement="top" title="Edit"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 text-success">
                                                            <path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z">
                                                            </path>
                                                        </svg></a>
                                                    <a class="delete_product" data-id='<?php echo $row['id']; ?>' data-toggle="tooltip" data-placement="top" title="Delete"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2 text-danger warning ">
                                                            <polyline points="3 6 5 6 21 6"></polyline>
                                                            <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                                            </path>
                                                            <line x1="10" y1="11" x2="10" y2="17"></line>
                                                            <line x1="14" y1="11" x2="14" y2="17"></line>
                                                        </svg></a>
                                                </td>
                                            </tr>
                                        <?php
                                            $i++;
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            <?php
                            } else {
                                echo "No result found";
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">



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
    <div id="zoomupModal" class="modal animated zoomInUp custo-zoomInUp" role="dialog">

        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Create Folder</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x">
                            <line x1="18" y1="6" x2="6" y2="18"></line>
                            <line x1="6" y1="6" x2="18" y2="18"></line>
                        </svg>
                    </button>
                </div>

                <div class="modal-body">
                    <form method="post" id="insert_form" enctype="multipart/form-data">

                        <div class="form-row mb-4">
                            <div class="col">
                                <label for="">Folder Name</label>
                                <input type="text" placeholder="Enter Folder Name" id="cname" name="cname" class="form-control">
                            </div>
                            <div class="col">
                                <label for="">Selects Cabinet </label>
                                <select class="placeholder js-states form-control" id="cab_id" name="cab_id">
                                    <!-- <option>Samad</option> -->
                                    <?php $devices = "SELECT * FROM cabinets";
                                    $devices1 = mysqli_query($db, $devices);
                                    ?>
                                    <?php foreach ($devices1 as $key => $value) { ?>
                                        <option value="<?= $value['id']; ?>"><?= $value['cabinet_name']; ?>
                                        </option>
                                    <?php
                                    }
                                    ?>
                                </select>
                            </div>
                            <input type="hidden" name="employee_id" id="employee_id">

                        </div>
                        <div class="modal-footer">
                            <button class="btn" data-dismiss="modal"> Cancel</button>
                            <input class="btn btn-primary" style="width: 120px;height: 42px;" name="insert" id="insert" value="Insert" />
                            <!-- <button  name="insert" id="insert" value="Insert"class="btn btn-primary">Submit</button> -->
                        </div>
                    </form>
                </div>

            </div>
        </div>
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
    <script>
        $('#html5-extension').DataTable({
            "dom": "<'dt--top-section'<'row'<'col-sm-12 col-md-6 d-flex justify-content-md-start justify-content-center'B><'col-sm-12 col-md-6 d-flex justify-content-md-end justify-content-center mt-md-0 mt-3'f>>>" +
                "<'table-responsive'tr>" +
                "<'dt--bottom-section d-sm-flex justify-content-sm-between text-center'<'dt--pages-count  mb-sm-0 mb-3'i><'dt--pagination'p>>",
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
    <script>
        $(document).ready(function() {
            $('#create').on("click", function(event) {
                $('#insert_form')[0].reset();

            })


            $('#insert').on("click", function(event) {

                event.preventDefault();
                if ($('#cname').val() == "") {
                    alert("Name is required");


                } else {
                    // alert($('#cab_id').val());
                    $.ajax({
                        url: "folder/insert_update_dpt.php",
                        method: "POST",
                        data: $('#insert_form').serialize(),
                        beforeSend: function() {
                            $('#insert').val("Inserting");
                        },
                        success: function(data) {
                            $('#insert_form')[0].reset();
                            $('#zoomupModal').modal('hide');
                            $('#employee_table').html(data);
                            // $("#html5-extension").load(" #html5-extension");
                            window.location.reload();
                        }
                    });
                }
            });


            $(document).on('click', '.edit_data', function() {

                var employee_id = $(this).attr("id");
                // alert(employee_id)
                $.ajax({
                    url: "folder/fetch_dpt.php",
                    method: "POST",
                    data: {
                        employee_id: employee_id
                    },
                    dataType: "json",
                    success: function(data) {
                        console.log(data)

                        $('#employee_id').val(data.id);
                        $('#cname').val(data.folder_name);
                        $('#cab_id').val(data.cabinet_id);

                        $('#insert').val("Update");
                        $('#title_edit').text("Edit Data");
                        $('#zoomupModal').modal('show');
                    }
                });
            });

            $('.delete_product').click(function() {
                var el = this;

                // Delete id
                var deleteid = $(this).data('id');
                // 

                var confirmalert = confirm("Are you sure?");
                if (confirmalert == true) {
                    // AJAX Request
                    $.ajax({
                        url: 'folder/delet_dpt.php',
                        type: 'POST',
                        data: {
                            id: deleteid
                        },
                        success: function(response) {

                            if (response == 1) {
                                // Remove row from HTML Table
                                $(el).closest('tr').css('background', 'tomato');
                                $(el).closest('tr').fadeOut(800, function() {
                                    $(this).remove();
                                    swal({
                                        title: 'Delete Record succesfully',
                                        padding: '2em'
                                    })
                                });

                            } else {
                                alert('Invalid ID.');
                            }

                        }
                    });
                }

            });
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
    <!-- END GLOBAL MANDATORY SCRIPTS -->

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->


    <!-- END PAGE LEVEL CUSTOM SCRIPTS -->
</body>

<!-- Mirrored from designreset.com/cork/ltr/demo4/table_dt_html5.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 18 Mar 2022 07:08:36 GMT -->

</html>