 <?php
    include('sessioninput.php');
    ?>
 <!DOCTYPE html>
 <html lang="en">

 <!-- Mirrored from designreset.com/cork/ltr/demo4/table_dt_html5.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 18 Mar 2022 07:08:33 GMT -->

 <head>
     <meta charset="utf-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
     <title>Roles - DocumentKey</title>
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

     <link rel="stylesheet" type="text/css" href="assets/css/forms/theme-checkbox-radio.css">


 </head>
 <style>
     .modal-dialog {
         max-width: 642px;
     }
 </style>
 <!-- END PAGE LEVEL PLUGINS/CUSTOM STYLES -->
 <?php
    $cur_date = date('Y-m-d');
    include("config_indemnifier.php");
    // $user_id = $_SESSION['userid'];

    $result = mysqli_query($db, "SELECT * FROM `privilege`");
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
                                 <li class="breadcrumb-item" aria-current="page"><span>Roles</span></li>
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
                         <div class="widget-header">
                             <div class="row">
                                 <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                     <h4>Roles Table</h4>
                                     <button type="button" class="btn btn-primary mb-2 mr-2 float-right " id="create" type="submit" data-toggle="modal" data-target="#zoomupModal">Add Role</button>

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
                                             <th class="text-center">ID</th>
                                             <th class="text-center">Role Name</th>
                                             <!-- <th class="text-center">Created By</th> -->
                                             <!-- <th class="text-center">Created at</th> -->
                                             <th class="dt-no-sorting" id="delt">Action</th>
                                         </tr>
                                     </thead>
                                     <tbody>
                                         <?php
                                            $i = 1;
                                            while ($row = mysqli_fetch_array($result)) {
                                            ?>
                                             <tr>
                                                 <td class="text-center"><?php echo $i ?></td>
                                                 <td class="text-center"><?php echo $row["privilege"]; ?></td>
                                                 <!-- <td class="text-center"><?php echo $row["created_by"]; ?></td> -->
                                                 <!-- <td class="text-center"><?php echo $row["created_at"]; ?></td> -->
                                                 <td class="text-center" id="delt">

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

     </div>
     <!--  END CONTENT PART  -->

     </div>

     <div id="zoomupModal" class="modal animated zoomInUp custo-zoomInUp" role="dialog">

         <div class="modal-dialog">
             <!-- Modal content-->
             <div class="modal-content">
                 <div class="modal-header">
                     <h5 class="modal-title">Create Role</h5>
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
                                 <label for="">Role Name</label>
                                 <input type="text" placeholder="Enter Role Name" id="cname" name="cname" class="form-control">
                             </div>
                             <input type="hidden" name="employee_id" id="employee_id">

                         </div>

                         <div class="row">
                             <table class="table table-flush permission-table">
                                 <thead class="thead-light">
                                     <tr>
                                         <th>Module</th>
                                         <th>Permissions</th>
                                     </tr>
                                 </thead>
                                 <tbody>

                                     <tr>
                                         <td> Cabinets</td>
                                         <td>
                                             <div class="row">
                                                 <div class="col-3 n-chk">
                                                     <label class="new-control new-checkbox checkbox-success">
                                                         <input type="checkbox" value="1" id="view" name="view" class="new-control-input">
                                                         <span class="new-control-indicator"></span>View
                                                     </label>
                                                 </div>
                                                 <div class="col-3 n-chk">
                                                     <label class="new-control new-checkbox checkbox-success">
                                                         <input type="checkbox" value="1" id="create_cap" name="create" class="new-control-input">
                                                         <span class="new-control-indicator"></span>Create
                                                     </label>
                                                 </div>
                                                 <div class="col-3 n-chk">
                                                     <label class="new-control new-checkbox checkbox-success">
                                                         <input type="checkbox" value="1" id="update" name="update" class="new-control-input">
                                                         <span class="new-control-indicator"></span>Edit
                                                     </label>
                                                 </div>
                                                 <div class="col-3 n-chk">
                                                     <label class="new-control new-checkbox checkbox-success">
                                                         <input type="checkbox" value="1" id="delete" name="delete" class="new-control-input">
                                                         <span class="new-control-indicator"></span>Delete
                                                     </label>
                                                 </div>
                                             </div>
                                         </td>
                                     </tr>
                                     <tr>
                                         <td> Folders</td>
                                         <td>
                                             <div class="row">
                                                 <div class="col-3 n-chk">
                                                     <label class="new-control new-checkbox checkbox-success">
                                                         <input type="checkbox" class="new-control-input" value="1" id="view2" name="view2">
                                                         <span class="new-control-indicator"></span>View
                                                     </label>
                                                 </div>
                                                 <div class="col-3 n-chk">
                                                     <label class="new-control new-checkbox checkbox-success">
                                                         <input type="checkbox" class="new-control-input" value="1" id="create2" name="create2">
                                                         <span class="new-control-indicator"></span>Create
                                                     </label>
                                                 </div>
                                                 <div class="col-3 n-chk">
                                                     <label class="new-control new-checkbox checkbox-success">
                                                         <input type="checkbox" class="new-control-input" value="1" id="update2" name="update2">
                                                         <span class="new-control-indicator"></span>Edit
                                                     </label>
                                                 </div>
                                                 <div class="col-3 n-chk">
                                                     <label class="new-control new-checkbox checkbox-success">
                                                         <input type="checkbox" class="new-control-input" value="1" id="dlet2" name="dlet2">
                                                         <span class="new-control-indicator"></span>Delete
                                                     </label>
                                                 </div>
                                             </div>
                                         </td>
                                     </tr>

                                     <tr>
                                         <td> ACl</td>
                                         <td>
                                             <div class="row">
                                                 <div class="col-3 n-chk">
                                                     <label class="new-control new-checkbox checkbox-success">
                                                         <input type="checkbox" class="new-control-input" value="1" id="view_acl" name="view_acl">
                                                         <span class="new-control-indicator"></span>View
                                                     </label>
                                                 </div>
                                                 <div class="col-3 n-chk">
                                                     <label class="new-control new-checkbox checkbox-success">
                                                         <input type="checkbox" class="new-control-input" value="1" id="create_acl" name="create_acl">
                                                         <span class="new-control-indicator"></span>Create
                                                     </label>
                                                 </div>
                                                 <div class="col-3 n-chk">
                                                     <label class="new-control new-checkbox checkbox-success">
                                                         <input type="checkbox" class="new-control-input" value="1" id="edit_acl" name="edit_acl">
                                                         <span class="new-control-indicator"></span>Edit
                                                     </label>
                                                 </div>
                                                 <div class="col-3 n-chk">
                                                     <label class="new-control new-checkbox checkbox-success">
                                                         <input type="checkbox" class="new-control-input" value="1" id="dlet_acl" name="dlet_acl">
                                                         <span class="new-control-indicator"></span>Delete
                                                     </label>
                                                 </div>
                                             </div>
                                         </td>
                                     </tr>
                                     <tr>
                                         <td> Custome Fields</td>
                                         <td>
                                             <div class="row">
                                                 <div class="col-3 n-chk">
                                                     <label class="new-control new-checkbox checkbox-success">
                                                         <input type="checkbox" class="new-control-input" value="1" id="view_cf" name="view_cf">
                                                         <span class="new-control-indicator"></span>View
                                                     </label>
                                                 </div>
                                                 <div class="col-3 n-chk">
                                                     <label class="new-control new-checkbox checkbox-success">
                                                         <input type="checkbox" class="new-control-input" value="1" id="create_cf" name="create_cf">
                                                         <span class="new-control-indicator"></span>Create
                                                     </label>
                                                 </div>
                                                 <div class="col-3 n-chk">
                                                     <label class="new-control new-checkbox checkbox-success">
                                                         <input type="checkbox" class="new-control-input" value="1" id="edit_cf" name="edit_cf">
                                                         <span class="new-control-indicator"></span>Edit
                                                     </label>
                                                 </div>
                                                 <div class="col-3 n-chk">
                                                     <label class="new-control new-checkbox checkbox-success">
                                                         <input type="checkbox" class="new-control-input" value="1" id="dlet_cf" name="dlet_cf">
                                                         <span class="new-control-indicator"></span>Delete
                                                     </label>
                                                 </div>
                                             </div>
                                         </td>
                                     </tr>
                                     <tr>
                                         <td> Users</td>
                                         <td>
                                             <div class="row">
                                                 <div class="col-3 n-chk">
                                                     <label class="new-control new-checkbox checkbox-success">
                                                         <input type="checkbox" class="new-control-input" value="1" id="view_u" name="view_u">
                                                         <span class="new-control-indicator"></span>View
                                                     </label>
                                                 </div>
                                                 <div class="col-3 n-chk">
                                                     <label class="new-control new-checkbox checkbox-success">
                                                         <input type="checkbox" class="new-control-input" value="1" id="create_u" name="create_u">
                                                         <span class="new-control-indicator"></span>Create
                                                     </label>
                                                 </div>
                                                 <div class="col-3 n-chk">
                                                     <label class="new-control new-checkbox checkbox-success">
                                                         <input type="checkbox" class="new-control-input" value="1" id="edit_u" name="edit_u">
                                                         <span class="new-control-indicator"></span>Edit
                                                     </label>
                                                 </div>
                                                 <div class="col-3 n-chk">
                                                     <label class="new-control new-checkbox checkbox-success">
                                                         <input type="checkbox" class="new-control-input" value="1" id="dlet_u" name="dlet_u">
                                                         <span class="new-control-indicator"></span>Delete
                                                     </label>
                                                 </div>
                                             </div>
                                         </td>
                                     </tr>
                                     <tr>
                                         <td> Roles</td>
                                         <td>
                                             <div class="row">
                                                 <div class="col-3 n-chk">
                                                     <label class="new-control new-checkbox checkbox-success">
                                                         <input type="checkbox" class="new-control-input" value="1" id="view_r" name="view_r">
                                                         <span class="new-control-indicator"></span>View
                                                     </label>
                                                 </div>
                                                 <div class="col-3 n-chk">
                                                     <label class="new-control new-checkbox checkbox-success">
                                                         <input type="checkbox" class="new-control-input" value="1" id="create_r" name="create_r">
                                                         <span class="new-control-indicator"></span>Create
                                                     </label>
                                                 </div>
                                                 <div class="col-3 n-chk">
                                                     <label class="new-control new-checkbox checkbox-success">
                                                         <input type="checkbox" class="new-control-input" value="1" id="edit_r" name="edit_r">
                                                         <span class="new-control-indicator"></span>Edit
                                                     </label>
                                                 </div>
                                                 <div class="col-3 n-chk">
                                                     <label class="new-control new-checkbox checkbox-success">
                                                         <input type="checkbox" class="new-control-input" value="1" id="dlet_r" name="dlet_r">
                                                         <span class="new-control-indicator"></span>Delete
                                                     </label>
                                                 </div>
                                             </div>
                                         </td>
                                     </tr>
                                 </tbody>
                             </table>
                         </div>



                         <div class="modal-footer">
                             <button class="btn" data-dismiss="modal"><i class="flaticon-cancel-12"></i> Cancel</button>
                             <!--     <input type="" class="btn btn-primary" style="width: 120px;height: 42px;" type="submit" name="insert" id="insert" value="Insert" style="float:right" /> -->
                             <button type="button" class="btn btn-primary" onclick="getData()">Save</button>
                         </div>
                         <!-- <input type="submit" name="time" class="btn btn-primary"> -->
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
         var main_desh, updat;
         $.ajax({
             url: "privileges/get_data.php",
             type: "POST",
             cache: false,
             success: function(data) {
                 data = JSON.parse(data)
                 console.log(data);

                 var rol = data['roles'];
                 var r_role = JSON.parse(rol);
                 var create = r_role.create;
                 var edit = r_role.update;
                 var deletes = r_role.deleted;
                 var veiw = r_role.view;

                 if (create == 0) {
                     document.getElementById('create').style.display = 'none';
                 }



                 if (deletes === 0) {
                     // document.getElementById('iditi').style.display = 'none';
                     var elms = document.querySelectorAll("[id='delt']");

                     for (var i = 0; i < elms.length; i++)
                         elms[i].style.display = 'none';
                 }
                 // alert(deletes);





                 console.log("main_desh  =>" + create);


                 // $('#table').html(data);
             }
         });
     </script>
     <!-- END PAGE LEVEL CUSTOM SCRIPTS -->
     <script>
         function getData() {
             var rolName = document.getElementById("cname").value;
             console.log("Role Name " + rolName);
             var cabinets = {};
             var view = document.getElementById("view")
             if (view.checked) {
                 view = view.value;

             } else {
                 view = 0
             }


             var create = document.getElementById("create_cap")
             if (create.checked) {
                 create = create.value;

             } else {
                 create = 0
             }

             var update = document.getElementById("update")
             if (update.checked) {
                 update = update.value;

             } else {
                 update = 0
             }

             var deleted = document.getElementById("delete")
             if (deleted.checked) {
                 deleted = deleted.value;

             } else {
                 deleted = 0
             }



             cabinets = {
                 create: create,
                 update: update,
                 deleted: deleted,
                 view: view

             };

             var cabinetsS = JSON.stringify(cabinets);
             console.log(cabinetsS);


             var folder = {};
             var view = document.getElementById("view2")
             if (view.checked) {
                 view = view.value;

             } else {
                 view = 0
             }
             var create = document.getElementById("create2")
             if (create.checked) {
                 create = create.value;

             } else {
                 create = 0
             }

             var update = document.getElementById("update2")
             if (update.checked) {
                 update = update.value;

             } else {
                 update = 0
             }

             var deleted = document.getElementById("dlet2")
             if (deleted.checked) {
                 deleted = deleted.value;

             } else {
                 deleted = 0
             }

             folder = {
                 create: create,
                 update: update,
                 deleted: deleted,
                 view: view

             };
             var folderS = JSON.stringify(folder);
             console.log(folderS);

             var acl = {};
             var view = document.getElementById("view_acl")
             if (view.checked) {
                 view = view.value;

             } else {
                 view = 0
             }
             var create = document.getElementById("create_acl")
             if (create.checked) {
                 create = create.value;

             } else {
                 create = 0
             }

             var update = document.getElementById("edit_acl")
             if (update.checked) {
                 update = update.value;

             } else {
                 update = 0
             }

             var deleted = document.getElementById("dlet_acl")
             if (deleted.checked) {
                 deleted = deleted.value;

             } else {
                 deleted = 0
             }

             acl = {
                 create: create,
                 update: update,
                 deleted: deleted,
                 view: view

             };

             var aclS = JSON.stringify(acl);
             console.log(aclS);

             var custom_f = {};
             var view = document.getElementById("view_cf")
             if (view.checked) {
                 view = view.value;

             } else {
                 view = 0
             }
             var create = document.getElementById("create_cf")
             if (create.checked) {
                 create = create.value;

             } else {
                 create = 0
             }

             var update = document.getElementById("edit_cf")
             if (update.checked) {
                 update = update.value;

             } else {
                 update = 0
             }

             var deleted = document.getElementById("dlet_cf")
             if (deleted.checked) {
                 deleted = deleted.value;

             } else {
                 deleted = 0
             }

             custom_f = {
                 create: create,
                 update: update,
                 deleted: deleted,
                 view: view

             };
             var customef = JSON.stringify(custom_f);
             console.log(customef);

             //  
             var user = {};
             var view = document.getElementById("view_u")
             if (view.checked) {
                 view = view.value;

             } else {
                 view = 0
             }
             var create = document.getElementById("create_u")
             if (create.checked) {
                 create = create.value;

             } else {
                 create = 0
             }

             var update = document.getElementById("edit_u")
             if (update.checked) {
                 update = update.value;

             } else {
                 update = 0
             }

             var deleted = document.getElementById("dlet_u")
             if (deleted.checked) {
                 deleted = deleted.value;

             } else {
                 deleted = 0
             }

             user = {
                 create: create,
                 update: update,
                 deleted: deleted,
                 view: view

             };

             var userS = JSON.stringify(user);
             console.log(userS);

             //  

             //  
             var role = {};
             var view = document.getElementById("view_r")
             if (view.checked) {
                 view = view.value;

             } else {
                 view = 0
             }
             var create = document.getElementById("create_r")
             if (create.checked) {
                 create = create.value;

             } else {
                 create = 0
             }

             var update = document.getElementById("edit_r")
             if (update.checked) {
                 update = update.value;

             } else {
                 update = 0
             }

             var deleted = document.getElementById("dlet_r")
             if (deleted.checked) {
                 deleted = deleted.value;

             } else {
                 deleted = 0
             }

             role = {
                 create: create,
                 update: update,
                 deleted: deleted,
                 view: view

             };

             var roleS = JSON.stringify(role);
             console.log(roleS);


             if (rolName != "") {
                 $.ajax({
                     type: 'post',
                     url: 'privileges/create_role.php',
                     data: {
                         role_name: rolName,
                         cabinets: cabinetsS,
                         folder: folderS,
                         acl: aclS,
                         custom_f: customef,
                         user: userS,
                         role: roleS




                     },
                     datatype: 'json',
                     success: function(response) {

                         //  swal({
                         //      title: 'Saved succesfully',
                         //      padding: '2em'
                         //  })
                         console.log(response);

                         console.log("updated")
                         window.location.reload();
                     },
                     error: function(data) {
                         console.log("Error.", data);
                     }
                 });
             } else {
                 //  swal({
                 //      title: 'Select Roll Name',
                 //      padding: '2em'
                 //  })
             }
         }

         $('.delete_product').click(function() {
             var el = this;

             // Delete id
             var deleteid = $(this).data('id');
             // 

             var confirmalert = confirm("Are you sure?");
             if (confirmalert == true) {
                 // AJAX Request
                 $.ajax({
                     url: 'privileges/delet_dpt.php',
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
                     $(this).addClass('active');

                 }
             });
         });
     </script>

 </body>

 <!-- Mirrored from designreset.com/cork/ltr/demo4/table_dt_html5.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 18 Mar 2022 07:08:36 GMT -->

 </html>