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
    <link rel="stylesheet" type="text/css" href="assets/css/forms/switches.css">

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

$result = mysqli_query($db, "SELECT * from users");
?>

<body>
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
                                    <h4>Users List</h4>
                                    <button type="button" class="btn btn-primary mb-2 mr-2 float-right " data-toggle="modal" data-target="#fadeinModal">Add User</button>
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
                                            <th>S.No</th>
                                            <th>Username</th>
                                            <th>Email</th>
                                            <!-- <th>Cabinet Name</th> -->
                                            <!-- <th>Password</th> -->
                                            <th>Status</th>
                                            <!-- <th class="dt-no-sorting">Action</th> -->
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php
                                        $i = 1;
                                        while ($row = mysqli_fetch_array($result)) {
                                        ?>
                                            <tr>
                                                <td><?php echo $i ?></td>
                                                <td><?php echo $row["username"]; ?></td>
                                                <td><?php echo $row["email"]; ?></td>
                                                <td class="text-center"> <?php if ($row["isActive"] == '0') { ?>


                                                        <label class="switch s-icons s-outline  s-outline-success  mb-4 mr-2">
                                                            <input id="toggle_<?php echo $row["id"]; ?>" type="checkbox" name=toggle value="<?php echo $row["id"]; ?>">
                                                            <span class="slider round  mixin"></span>
                                                        </label>

                                                    <?php } else { ?>
                                                        <label class="switch s-icons s-outline  s-outline-success  mb-4 mr-2">
                                                            <input id="toggle_<?php echo $row["id"]; ?>" type="checkbox" checked="" name=toggle value="<?php echo $row["id"]; ?>" data-toggle="toggle" data-off="Closed" data-on="Open">
                                                            <span class="slider round mixin"></span>
                                                        </label>
                                                    <?php } ?>
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




                            </tbody>
                            </table>
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
    <div id="fadeinModal" class="modal animated fadeInDown" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Create User Form</h5>
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
                                <label for="">Username</label>
                                <input type="text" placeholder="Enter Username" id="username" name="username" class="form-control">
                            </div>
                            <div class="col">
                                <label for="">Email</label>
                                <input type="email" placeholder="Enter Email" id="email" name="email" class="form-control">
                            </div>
                        </div>



                        <div class="form-row mb-4">
                            <div class="col">
                                <label for=""> Password</label>
                                <input type="password" placeholder="Enter Password" id="password" name="password" class="form-control">
                            </div>
                            <div class="col">
                                <label for="">Confirm Password</label>
                                <input type="password" id="password2" placeholder="Enter Confirm Password" class="form-control">
                            </div>
                        </div>


                </div>
                <div class="modal-footer">
                    <button class="btn" data-dismiss="modal"><i class="flaticon-cancel-12"></i> Cancel</button>
                    <button type="submit" class="btn btn-primary">Create User</button>
                </div>
            </div>
            </form>
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
        $('input[name=toggle]').change(function() {
            var mode = $(this).prop('checked');
            console.log("hamza " + mode)
            var id = $(this).val();
            $.ajax({
                type: 'POST',
                dataType: 'JSON',
                url: 'create/active_inactiv.php',
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
                    location.reload();

                }
            });
        });
    </script>

    <script>
        function matchPassword() {

        }

        $(document).ready(function() {


            $('#insert_form').on("submit", function(event) {


                event.preventDefault();
                if ($('#cname').val() == "") {
                    alert("Name is required");


                } else {
                    // alert($('#cab_id').val());
                    $.ajax({
                        url: "users/insert_update_dpt.php",
                        method: "POST",
                        data: $('#insert_form').serialize(),
                        beforeSend: function() {
                            $('#insert').val("Inserting");
                        },
                        success: function(data) {
                            $('#insert_form')[0].reset();
                            $('#zoomupModal').modal('hide');
                            $('#employee_table').html(data);
                            $("#html5-extension").load(" #html5-extension");
                            // window.location.reload();
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
                        $('#cname').val(data.name);

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

    </script>
    <!-- END PAGE LEVEL CUSTOM SCRIPTS -->
</body>

<!-- Mirrored from designreset.com/cork/ltr/demo4/table_dt_html5.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 18 Mar 2022 07:08:36 GMT -->

</html>