 <?php 
    include('sessioninput.php');
    ?>
 <!DOCTYPE html>
 <html lang="en">

 <!-- Mirrored from designreset.com/cork/ltr/demo4/form_fileupload.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 18 Mar 2022 07:08:44 GMT -->

 <head>
     <meta charset="utf-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
     <title>File Upload | CORK - Multipurpose Bootstrap Dashboard Template </title>
     <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
     <!-- BEGIN GLOBAL MANDATORY STYLES -->
     <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
     <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
     <link href="assets/css/plugins.css" rel="stylesheet" type="text/css" />
     <!-- END GLOBAL MANDATORY STYLES -->

     <!-- BEGIN PAGE LEVEL STYLES -->
     <link href="assets/css/scrollspyNav.css" rel="stylesheet" type="text/css" />
     <link href="plugins/file-upload/file-upload-with-preview.min.css" rel="stylesheet" type="text/css" />
     <!-- END PAGE LEVEL STYLES -->
     <link rel="stylesheet" type="text/css" href="plugins/select2/select2.min.css">
     <link href="plugins/animate/animate.css" rel="stylesheet" type="text/css" />
     <script src="plugins/sweetalerts/promise-polyfill.js"></script>
     <link href="plugins/sweetalerts/sweetalert2.min.css" rel="stylesheet" type="text/css" />
     <link href="plugins/sweetalerts/sweetalert.css" rel="stylesheet" type="text/css" />
     <link href="assets/css/components/custom-sweetalert.css" rel="stylesheet" type="text/css" />
 </head>
 <?php
    $cur_date = date('Y-m-d');
    include("config_indemnifier.php");
    // $user_id = $_SESSION['userid'];

    // $result = mysqli_query($db, "SELECT f.id,folder_name,cabinet_id,c.cabinet_name,f.created_at,f.created_by FROM `folders` f inner JOIN cabinets c oN c.id = f.cabinet_id");
    ?>

 <body data-spy="scroll" data-target="#navSection" data-offset="100">

     <!--  BEGIN NAVBAR  -->
     <div class="header-container fixed-top">
         <header class="header navbar navbar-expand-sm">

             <ul class="navbar-item theme-brand flex-row  text-center">
                 <li class="nav-item theme-logo">
                     <a href="index-2.html">
                         <img src="assets/img/logo.svg" class="navbar-logo" alt="logo">
                     </a>
                 </li>
                 <li class="nav-item theme-text">
                     <a href="index-2.html" class="nav-link"> CORK </a>
                 </li>
             </ul>

             <ul class="navbar-item flex-row ml-md-0 ml-auto">
                 <li class="nav-item align-self-center search-animated">
                     <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search toggle-search">
                         <circle cx="11" cy="11" r="8"></circle>
                         <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                     </svg>
                     <form class="form-inline search-full form-inline search" role="search">
                         <div class="search-bar">
                             <input type="text" class="form-control search-form-control  ml-lg-auto" placeholder="Search...">
                         </div>
                     </form>
                 </li>
             </ul>

             <ul class="navbar-item flex-row ml-md-auto">

                 <li class="nav-item dropdown language-dropdown">
                     <a href="javascript:void(0);" class="nav-link dropdown-toggle" id="language-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                         <img src="assets/img/ca.png" class="flag-width" alt="flag">
                     </a>
                     <div class="dropdown-menu position-absolute" aria-labelledby="language-dropdown">
                         <a class="dropdown-item d-flex" href="javascript:void(0);"><img src="assets/img/de.png" class="flag-width" alt="flag"> <span class="align-self-center">&nbsp;German</span></a>
                         <a class="dropdown-item d-flex" href="javascript:void(0);"><img src="assets/img/jp.png" class="flag-width" alt="flag"> <span class="align-self-center">&nbsp;Japanese</span></a>
                         <a class="dropdown-item d-flex" href="javascript:void(0);"><img src="assets/img/fr.png" class="flag-width" alt="flag"> <span class="align-self-center">&nbsp;French</span></a>
                         <a class="dropdown-item d-flex" href="javascript:void(0);"><img src="assets/img/ca.png" class="flag-width" alt="flag"> <span class="align-self-center">&nbsp;English</span></a>
                     </div>
                 </li>

                 <li class="nav-item dropdown message-dropdown">
                     <a href="javascript:void(0);" class="nav-link dropdown-toggle" id="messageDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                         <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail">
                             <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z">
                             </path>
                             <polyline points="22,6 12,13 2,6"></polyline>
                         </svg>
                     </a>
                     <div class="dropdown-menu position-absolute" aria-labelledby="messageDropdown">
                         <div class="">
                             <a class="dropdown-item">
                                 <div class="">

                                     <div class="media">
                                         <div class="user-img">
                                             <div class="avatar avatar-xl">
                                                 <span class="avatar-title rounded-circle">KY</span>
                                             </div>
                                         </div>
                                         <div class="media-body">
                                             <div class="">
                                                 <h5 class="usr-name">Kara Young</h5>
                                                 <p class="msg-title">ACCOUNT UPDATE</p>
                                             </div>
                                         </div>
                                     </div>

                                 </div>
                             </a>
                             <a class="dropdown-item">
                                 <div class="">
                                     <div class="media">
                                         <div class="user-img">
                                             <img src="assets/img/profile-15.jpg" class="img-fluid mr-2" alt="avatar">
                                         </div>
                                         <div class="media-body">
                                             <div class="">
                                                 <h5 class="usr-name">Daisy Anderson</h5>
                                                 <p class="msg-title">ACCOUNT UPDATE</p>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                             </a>
                             <a class="dropdown-item">
                                 <div class="">

                                     <div class="media">
                                         <div class="user-img">
                                             <div class="avatar avatar-xl">
                                                 <span class="avatar-title rounded-circle">OG</span>
                                             </div>
                                         </div>
                                         <div class="media-body">
                                             <div class="">
                                                 <h5 class="usr-name">Oscar Garner</h5>
                                                 <p class="msg-title">ACCOUNT UPDATE</p>
                                             </div>
                                         </div>
                                     </div>

                                 </div>
                             </a>
                         </div>
                     </div>
                 </li>

                 <li class="nav-item dropdown notification-dropdown">
                     <a href="javascript:void(0);" class="nav-link dropdown-toggle" id="notificationDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                         <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bell">
                             <path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path>
                             <path d="M13.73 21a2 2 0 0 1-3.46 0"></path>
                         </svg><span class="badge badge-success"></span>
                     </a>
                     <div class="dropdown-menu position-absolute" aria-labelledby="notificationDropdown">
                         <div class="notification-scroll">

                             <div class="dropdown-item">
                                 <div class="media server-log">
                                     <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-server">
                                         <rect x="2" y="2" width="20" height="8" rx="2" ry="2"></rect>
                                         <rect x="2" y="14" width="20" height="8" rx="2" ry="2"></rect>
                                         <line x1="6" y1="6" x2="6" y2="6"></line>
                                         <line x1="6" y1="18" x2="6" y2="18"></line>
                                     </svg>
                                     <div class="media-body">
                                         <div class="data-info">
                                             <h6 class="">Server Rebooted</h6>
                                             <p class="">45 min ago</p>
                                         </div>

                                         <div class="icon-status">
                                             <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x">
                                                 <line x1="18" y1="6" x2="6" y2="18"></line>
                                                 <line x1="6" y1="6" x2="18" y2="18"></line>
                                             </svg>
                                         </div>
                                     </div>
                                 </div>
                             </div>

                             <div class="dropdown-item">
                                 <div class="media ">
                                     <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart">
                                         <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z">
                                         </path>
                                     </svg>
                                     <div class="media-body">
                                         <div class="data-info">
                                             <h6 class="">Licence Expiring Soon</h6>
                                             <p class="">8 hrs ago</p>
                                         </div>

                                         <div class="icon-status">
                                             <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x">
                                                 <line x1="18" y1="6" x2="6" y2="18"></line>
                                                 <line x1="6" y1="6" x2="18" y2="18"></line>
                                             </svg>
                                         </div>
                                     </div>
                                 </div>
                             </div>

                             <div class="dropdown-item">
                                 <div class="media file-upload">
                                     <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text">
                                         <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                                         <polyline points="14 2 14 8 20 8"></polyline>
                                         <line x1="16" y1="13" x2="8" y2="13"></line>
                                         <line x1="16" y1="17" x2="8" y2="17"></line>
                                         <polyline points="10 9 9 9 8 9"></polyline>
                                     </svg>
                                     <div class="media-body">
                                         <div class="data-info">
                                             <h6 class="">Kelly Portfolio.pdf</h6>
                                             <p class="">670 kb</p>
                                         </div>

                                         <div class="icon-status">
                                             <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check">
                                                 <polyline points="20 6 9 17 4 12"></polyline>
                                             </svg>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </li>

                 <li class="nav-item dropdown user-profile-dropdown">
                     <a href="javascript:void(0);" class="nav-link dropdown-toggle user" id="userProfileDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                         <img src="assets/img/profile-16.jpg" alt="avatar">
                     </a>
                     <div class="dropdown-menu position-absolute" aria-labelledby="userProfileDropdown">
                         <div class="">
                             <?php
                                if ($_SESSION["user_id"]) {
                                ?>
                                 <div class="dropdown-item">
                                     <a class=""><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user">
                                             <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                             <circle cx="12" cy="7" r="4"></circle>
                                         </svg>

                                         <?php echo $_SESSION["user_name"]; ?>

                                     </a>
                                 <?php
                                } else echo "<h1>Please login first .</h1>";
                                    ?>
                                 </div>
                                 <div class="dropdown-item">
                                     <a class="" href="apps_mailbox.html"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-inbox">
                                             <polyline points="22 12 16 12 14 15 10 15 8 12 2 12"></polyline>
                                             <path d="M5.45 5.11L2 12v6a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-6l-3.45-6.89A2 2 0 0 0 16.76 4H7.24a2 2 0 0 0-1.79 1.11z">
                                             </path>
                                         </svg> Inbox</a>
                                 </div>
                                 <div class="dropdown-item">
                                     <a class="" href="auth_lockscreen.html"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-lock">
                                             <rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect>
                                             <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                                         </svg> Lock Screen</a>
                                 </div>
                                 <div class="dropdown-item">
                                     <!-- <a href="logout.php"> -->
                                     <a class="" href="logout.php"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-log-out">
                                             <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                                             <polyline points="16 17 21 12 16 7"></polyline>
                                             <line x1="21" y1="12" x2="9" y2="12"></line>
                                         </svg> Sign Out</a>
                                 </div>
                         </div>
                     </div>
                 </li>
                 </li>

             </ul>
         </header>
     </div>
     <!--  END NAVBAR  -->

     <!--  BEGIN NAVBAR  -->
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
                                 <li class="breadcrumb-item"><a href="javascript:void(0);">Forms</a></li>
                                 <li class="breadcrumb-item active" aria-current="page"><span>File Upload</span></li>
                             </ol>
                         </nav>

                     </div>
                 </li>
             </ul>
         </header>
     </div>
     <!--  END NAVBAR  -->

     <!--  BEGIN MAIN CONTAINER  -->
     <div class="main-container" id="container">

         <div class="overlay"></div>
         <div class="search-overlay"></div>

         <!--  BEGIN SIDEBAR  -->
         <div class="sidebar-wrapper sidebar-theme">

             <nav id="sidebar">
                 <div class="shadow-bottom"></div>

                 <ul class="list-unstyled menu-categories" id="accordionExample">


                     <li class="menu">
                         <a href="file_upload.php" aria-expanded="false" class="dropdown-toggle">
                             <div class="">
                                 <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-target">
                                     <circle cx="12" cy="12" r="10"></circle>
                                     <circle cx="12" cy="12" r="6"></circle>
                                     <circle cx="12" cy="12" r="2"></circle>
                                 </svg>
                                 <span>File Upload</span>
                             </div>
                         </a>
                     </li>

                 </ul>

             </nav>

         </div>
         <!--  END SIDEBAR  -->

         <!--  BEGIN CONTENT AREA  -->
         <div id="content" class="main-content">
             <div class="pl-2 pr-2 pb-2">

                 <form method="post" id="insert_form" enctype="multipart/form-data">

                     <div class="row layout-top-spacing">

                         <div id="fuSingleFile" class="col-lg-12 layout-spacing">
                             <div class="statbox widget box box-shadow">
                                 <div class="widget-header">
                                     <div class="row">
                                         <div class="col-xl-12 col-md-12 col-sm-12 col-12 p-4">
                                             <div class="row">

                                                 <div class="col-md-6">
                                                     <div class="form-group ">
                                                         <label for="inputPassword4">Select Cabinet</label>

                                                         <select class="form-control  basic" id="cabinets" onchange='get_folder(this.value)' name="cabinets">
                                                             <option>Please Select</option>
                                                             <?php $devices = "SELECT * FROM cabinets";
                                                                $devices1 = mysqli_query($db, $devices);
                                                                ?>
                                                             <?php foreach ($devices1 as $key => $value) { ?>
                                                                 <option value="<?php echo $value["id"]; ?>">
                                                                     <?php echo $value["cabinet_name"]; ?>
                                                                 </option>
                                                             <?php
                                                                } ?>
                                                         </select>
                                                     </div>
                                                 </div>

                                                 <div class="col-md-6">

                                                     <div class="form-group">
                                                         <label for="inputPassword4">Select Folder</label>
                                                         <select class="form-control tagging" id="folders" onchange='get_fields(this.value)' name="folders">
                                                             <!-- <option>Sala</option> -->

                                                         </select>
                                                     </div>
                                                 </div>
                                                 <div class="col-md-8" id="form">

                                                 </div>

                                                 <div class="col-md-8" id="result">

                                                 </div>




                                             </div>
                                         </div>
                                     </div>
                                 </div>
                                 <div class="widget-content widget-content-area">
                                     <div class="row">
                                         <div class="col-xl-6 col-md-6 col-sm-12 col-12">
                                             <h4>Upload Files</h4>
                                         </div>
                                         <div class="col-xl-6 col-md-6 col-sm-12 col-12">

                                             <!-- <button name="insert" id="insert" type="submit"
                                           class="btn btn-primary mb-2 float-right">Save</button> -->
                                             <input type="submit" class="btn btn-primary" name="insert" id="insert" value="Save" style="float:right" />
                                         </div>
                                     </div>
                                     <div class="custom-file-container" data-upload-id="myFirstImage">
                                         <label>Upload (Single File) <a href="javascript:void(0)" class="custom-file-container__image-clear" title="Clear Image">x</a></label>
                                         <label class="custom-file-container__custom-file">
                                             <input type="file" id="image" name="v_image" onchange="proccess(window.lastFile=this.files[0])" class="custom-file-container__custom-file__custom-file-input" accept="image/*">
                                             <input type="hidden" name="MAX_FILE_SIZE" value="10485760" />

                                             <span class="custom-file-container__custom-file__custom-file-control"></span>
                                         </label>
                                         <div class="custom-file-container__image-preview" width="5000" height="5000">
                                         </div>
                                     </div>



                                 </div>
                             </div>
                         </div>

                     </div>
                 </form>



             </div>

             <div class="footer-wrapper">
                 <div class="footer-section f-section-1">
                     <p class="">Copyright © 2021 <a target="_blank" href="https://p2ptrack.com/">P2P Track</a>, All
                         rights reserved.</p>
                 </div>
                 <div class="footer-section f-section-2">
                     <p class="">Coded with <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart">
                             <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z">
                             </path>
                         </svg></p>
                 </div>
             </div>
         </div>
         <!--  END CONTENT AREA  -->
     </div>
     <!-- END MAIN CONTAINER -->


     <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
     <script src='https://cdn.rawgit.com/naptha/tesseract.js/1.0.10/dist/tesseract.js'></script>
     <script src="assets/js/libs/jquery-3.1.1.min.js"></script>
     <script src="bootstrap/js/popper.min.js"></script>
     <script src="bootstrap/js/bootstrap.min.js"></script>
     <script src="plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
     <script src="plugins/blockui/jquery.blockUI.min.js"></script>
     <script src="assets/js/app.js"></script>
     <!-- BEGIN THEME GLOBAL STYLE -->
     <script src="assets/js/scrollspyNav.js"></script>
     <script src="plugins/sweetalerts/sweetalert2.min.js"></script>
     <script src="plugins/sweetalerts/custom-sweetalert.js"></script>
     <!-- END THEME GLOBAL STYLE -->
     <script>
         $(document).ready(function() {
             App.init();
         });
         var fileName;

         $('input[type="file"]').change(function(e) {
             fileName = e.target.files[0].name;
             alert(fileName);
         });


         function proccess(file) {
             $(".result").html("");

             //Preview Image
             var src = (window.URL ? URL : webkitURL).createObjectURL(file);
             $("#image").attr("src", src);

             //Proccess Image
             Tesseract.recognize(file)
                 .progress(function(data) {
                     console.log(data);
                     progress(data);
                 })
                 .then(function(data) {
                     console.log(data);
                     result(data)
                 })

         }


         function progress(packet) {
             var r = $("#result");

             if (r.length > 0 && r.find(".status").last().html() == packet.status) {
                 if ('progress' in packet) {
                     r.find("progress").last().val(packet.progress);
                 }

             } else {
                 var tStatus = "<div class='status ten wide column'>" + packet.status + "</div>";
                 var tProgress = "<div class='six wide column'>" + (typeof packet.progress == "undefined" ? "" : ("<progress value='" + packet.progress + "' max='1'>")) + "</div>";

                 r.append(tStatus + tProgress);
             }
         }


         function result(data) {
             var r = $("#result");
             //r.html("");
             r.append(
                 "<textarea class='form-control' id='exampleFormControlTextarea1' name='data_text' rows='3'>" + data.text + "</textarea>"
             );

         }
     </script>
     <script src="plugins/highlight/highlight.pack.js"></script>
     <script src="assets/js/custom.js"></script>
     <!-- END GLOBAL MANDATORY SCRIPTS -->

     <!-- BEGIN PAGE LEVEL PLUGINS -->
     <script src="assets/js/scrollspyNav.js"></script>
     <script src="plugins/file-upload/file-upload-with-preview.min.js"></script>

     <script src="plugins/bootstrap-select/bootstrap-select.min.js"></script>
     <script src="plugins/select2/select2.min.js"></script>
     <script src="plugins/select2/custom-select2.js"></script>
     <script>
         $(".tagging").select2({
             tags: true
         });
     </script>
     <!-- END PAGE LEVEL SCRIPTS -->
     <script>
         //First upload
         var firstUpload = new FileUploadWithPreview('myFirstImage')
         //Second upload
         var secondUpload = new FileUploadWithPreview('mySecondImage')
     </script>
     <!-- END PAGE LEVEL PLUGINS -->
 </body>
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
                     alert("No Field found");
                 }




             }
         });
     }

     function get_fields(cart_id) {

         $.ajax({
             url: 'folder/get_fields.php',
             type: 'POST',
             data: {
                 cabinets: cart_id
             },
             success: function(data) {
                 console.log(data);
                 data = JSON.parse(data)
                 console.log(data);
                 var len = data.length;
                 // alert(len)
                 // $('span').remove();
                 $('[type=text]').remove();
                 // $("#folders").empty();
                 if (len > 0) {

                     for (var i = 0; i < len; i++) {
                         var id = data[i]['id'];
                         var email = data[i]['email'];
                         console.log(email);
                         $('#form').append(`<div class="input-group mb-2">
                                
                                    <input type="text" class="form-control" id="${id}"
                                        placeholder="${email}" name="" aria-label="Username">
                                </div>`);

                     }

                 } else {
                     alert("No Folder found");
                 }




             }
         });
     }


     $("#insert_form").on('submit', (function(e) {
         e.preventDefault();
         $.ajax({
             url: "files/upload_file.php",
             type: "POST",
             data: new FormData(this),
             contentType: false,
             cache: false,
             processData: false,
             beforeSend: function() {
                 $('#insert').val("Saving");
             },
             success: function(data) {
                 // console.log(data);
                 // alert(data);
                 // alert(fileName);
                 // console.log(field_data);
                 var l = document.getElementById('form').getElementsByTagName('input').length;
                 // alert(l);
                 for (var i = 0; i < l; i++) {
                     // alert(i);
                     var id = document.getElementById('folders').value;
                     // alert(id);
                     console.log(document.getElementById('form').getElementsByTagName('input')[i].value);
                     console.log(document.getElementById('form').getElementsByTagName('input')[i].id);
                     // document.getElementById('form').getElementsByTagName('input')[i];
                     console.log("File_ID" + data);
                     console.log("Folder_ID" + id);
                     var field_id = document.getElementById('form').getElementsByTagName('input')[i].id;
                     var field_data1 = document.getElementById('form').getElementsByTagName('input')[i].value;
                     field_data = {
                         folder_id: id,
                         file_id: data,
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
                             console.log(data);
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
     }));
 </script>
 <!-- Mirrored from designreset.com/cork/ltr/demo4/form_fileupload.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 18 Mar 2022 07:08:45 GMT -->

 </html>