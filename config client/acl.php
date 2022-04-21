 <?php
    include('sessioninput.php');
    ?>
 <!DOCTYPE html>
 <html lang="en">

 <!-- Mirrored from designreset.com/cork/ltr/demo4/form_layouts.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 18 Mar 2022 07:08:38 GMT -->

 <head>
     <meta charset="utf-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
     <title>ACL - DocumentKey </title>
     <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
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
     <?php
        // $acl = "SELECT * FROM acl";
        // $data = mysqli_query($db, $acl);
        // 
        ?>
 </head>


 <body data-spy="scroll" data-target="#navSection" data-offset="100">




     <!--  END SIDEBAR  -->
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
                                 <li class="breadcrumb-item" aria-current="page"><span>ACL</span></li>
                             </ol>
                         </nav>

                     </div>
                 </li>
             </ul>
         </header>
     </div>
     <?php include 'sidebar.php';
        include("config_indemnifier.php");


        ?>
     <!--  BEGIN CONTENT AREA  -->
     <div id="content" class="main-content">
         <div class="layout-px-spacing">

             <div class="col-xl-12 col-lg-12 col-md-12 col-12 layout-spacing ">
                 <div class="widget-content-area br-4" id="aclss2">
                     <div class="container my-4">
                         <div class="row">
                             <div class="col-md-12">
                                 <form method="post" id="insert_form" enctype="multipart/form-data">
                                     <div class="form-row mb-4">
                                         <div class="form-group col-md-6">
                                             <label for="inputEmail4">Selects Users</label>
                                             <select class="form-control  basic" id="user" name="user">
                                                 <?php $devices = "SELECT * FROM users";
                                                    $devices1 = mysqli_query($db, $devices);
                                                    ?>
                                                 <?php foreach ($devices1 as $key => $value) { ?>
                                                     <option value="<?= $value['id']; ?>"><?= $value['username']; ?>
                                                     </option>
                                                 <?php
                                                    }
                                                    ?>
                                             </select>
                                         </div>
                                         <div class="form-group col-md-6">
                                             <label for="inputPassword4">Select Cabinet</label>
                                             <select class="form-control  basic" id="cabinets" onchange='get_folder(this.value)' name="cabinets">
                                                 <option>Please Select</option>
                                                 <?php $devices = "SELECT * FROM cabinets";
                                                    $devices1 = mysqli_query($db, $devices);
                                                    ?>
                                                 <?php foreach ($devices1 as $key => $value) { ?>
                                                     <option value="<?php echo $value["id"]; ?>"><?php echo $value["cabinet_name"]; ?>
                                                     </option>
                                                 <?php
                                                    } ?>
                                             </select>
                                         </div>
                                         <div class="form-group col-md-6">
                                             <label for="inputPassword4">Select Folder</label>
                                             <select class="form-control tagging" id="folders" multiple="multiple" name="folder[]">
                                                 <!-- <option>Sala</option> -->

                                             </select>
                                         </div>


                                     </div>
                             </div>


                             <div class="container">
                                 <div class="row">
                                     <div class="col-md-12">
                                         <button class="btn btn-success float-right font-weight-bold mx-2" name="submit" type="submit">SAVE</button>
                                         <!-- <a class="btn mx-2" href="manageusers.php" style="float: right;">CANCEL</a> -->

                                     </div>
                                 </div>
                             </div>

                             </form>
                         </div>
                     </div>
                 </div>

             </div>

             <div class="col-xl-12 col-lg-12 col-md-12 col-12 layout-spacing">
                 <div class="widget-content-area br-4">
                     <div class="widget-content widget-content-area br-6">
                         <?php
                            $result = mysqli_query($db, "SELECT * from vw_acl");
                            if (mysqli_num_rows($result) > 0) {
                            ?>
                             <table id="html5-extension" class="table table-hover non-hover" style="width:100%">
                                 <thead>
                                     <tr>
                                         <th>ID</th>
                                         <th>Users</th>
                                         <th>Cabinat</th>
                                         <th>Folders</th>
                                         <!-- <th>Created By</th>
                                    <th>Created at</th> -->
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
                                             <td class="text-center"><?php echo $row["username"]; ?></td>
                                             <td class="text-center"><?php echo $row["cabinet_name"]; ?></td>
                                             <td class="text-center"><?php echo $row["Expr1"]; ?></td>

                                             <td class="" id="delt">


                                                 <a class="delete_product" data-id='<?php echo $row['acl_id']; ?>' data-toggle="tooltip" data-placement="top" title="Delete"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2 text-danger warning ">
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
                         </table>
                     </div>
                 </div>

             </div>
         </div>

     </div>


     <!-- CONTENT AREA -->

     </div>
     <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
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
     <script>
         $(document).ready(function() {


             $('#insert_form').on("submit", function(event) {
                 event.preventDefault();
                 if ($('#folder').val() == "") {
                     alert("Please Select Folders");


                 } else {
                     // alert($('#cab_id').val());
                     $.ajax({
                         url: "acl/insert.php",
                         method: "POST",
                         data: $('#insert_form').serialize(),
                         beforeSend: function() {
                             $('#insert').val("Inserting");
                         },
                         success: function(data) {
                             console.log(data);
                             $('#insert_form')[0].reset();
                             $('#zoomupModal').modal('hide');
                             $('#employee_table').html(data);
                             $("#html5-extension").load(" #html5-extension");
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
                         url: 'acl/acl_view.php',
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
     <script src="plugins/highlight/highlight.pack.js"></script>
     <script src="assets/js/custom.js"></script>
     <!-- END GLOBAL MANDATORY SCRIPTS -->
     <script src="assets/js/scrollspyNav.js"></script>
     <script src="plugins/select2/select2.min.js"></script>
     <script src="plugins/select2/custom-select2.js"></script>
     <script>
         $(".tagging").select2({
             tags: true
         });
     </script>
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
         $(".tagging2").select3({
             tags: true
         });
     </script>
     <script>
         function get_folder(cart_id) {

             $.ajax({
                 url: 'folder/get_folder_data.php',
                 type: 'POST',
                 data: {
                     cabinets: cart_id
                 },
                 success: function(data) {
                     data = JSON.parse(data)
                     // console.log(data);
                     var len = data.length;
                     // alert(len)
                     $("#folders").empty();
                     if (len > 0) {

                         for (var i = 0; i < len; i++) {
                             var id = data[i]['id'];
                             var email = data[i]['email'];
                             console.log(email);
                             $('#folders').append(`<option value="${id}">${email}</option>`);

                         }

                     } else {
                         alert("No Folder found");
                     }




                 }
             });
         }
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

     <script>
         var main_desh, updat;
         $.ajax({
             url: "privileges/get_data.php",
             type: "POST",
             cache: false,
             success: function(data) {
                 data = JSON.parse(data)
                 console.log(data);



                 var acl = data['acl_tab'];
                 var r_acl = JSON.parse(acl);
                 var create = r_acl.create;
                 var edit = r_acl.update;
                 var deletes = r_acl.deleted;
                 var veiw = r_acl.view;




                 if (create == 0) {
                     document.getElementById('aclss2').style.display = 'none';
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

 </body>


 <!-- Mirrored from designreset.com/cork/ltr/demo4/form_layouts.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 18 Mar 2022 07:08:38 GMT -->

 </html>