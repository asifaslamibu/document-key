 <?php
    include('sessioninput.php');
    ?>
 <div id="load_screen">
     <div class="loader">
         <div class="loader-content">
             <div class="spinner-grow align-self-center"></div>
         </div>
     </div>
 </div>
 <!--  BEGIN NAVBAR  -->
 <div class="header-container fixed-top">
     <header class="header navbar navbar-expand-sm">

         <ul class="navbar-item theme-brand flex-row  text-center">
             <li class="nav-item theme-logo">
                 <a href="index-2.html">
                     <img src="../keys.png" class="navbar-logo" alt="logo">
                 </a>
             </li>
             <li class="nav-item theme-text">
                 <a href="index-2.html" class="nav-link"> DocumentKey </a>

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

         </ul>
     </header>
 </div>
 <!--  END NAVBAR  -->

 <!--  BEGIN NAVBAR  -->

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
                     <a href="dash.php" aria-expanded="false" data-active="true" class="dropdown-toggle">
                         <div class="">
                             <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-airplay">
                                 <path d="M5 17H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-1">
                                 </path>
                                 <polygon points="12 15 17 21 7 21 12 15"></polygon>
                             </svg>
                             <span>Dashboard</span>
                         </div>
                     </a>
                 </li>

                 <li class="menu">
                     <a href="ucab.php" aria-expanded="false" data-active="false" class="dropdown-toggle">
                         <div class="">
                             <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-archive">
                                 <polyline points="21 8 21 21 3 21 3 8"></polyline>
                                 <rect x="1" y="3" width="22" height="5"></rect>
                                 <line x1="10" y1="12" x2="14" y2="12"></line>
                             </svg>
                             <span>Cabinets</span>
                         </div>
                     </a>
                 </li>
                 <li class="menu">
                     <a href="ucab.php" aria-expanded="false" data-active="false" class="dropdown-toggle">
                         <div class="">
                             <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-archive">
                                 <polyline points="21 8 21 21 3 21 3 8"></polyline>
                                 <rect x="1" y="3" width="22" height="5"></rect>
                                 <line x1="10" y1="12" x2="14" y2="12"></line>
                             </svg>
                             <span>Add Documents</span>
                         </div>
                     </a>
                 </li>

                 <!-- <li class="menu">
                        <a href="folder_table.php" aria-expanded="false" data-active="false" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-folder">
                                    <path d="M22 19a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h5l2 3h9a2 2 0 0 1 2 2z">
                                    </path>
                                </svg>
                                <span>Folders</span>
                            </div>
                        </a>
                    </li>
                    <li class="menu">
                        <a href="acl.php" aria-expanded="false" data-active="false" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-folder">
                                    <path d="M22 19a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h5l2 3h9a2 2 0 0 1 2 2z">
                                    </path>
                                </svg>
                                <span>ACL</span>
                            </div>
                        </a>
                    </li> -->
                 <li class="menu">
                     <a href="users.php" aria-expanded="false" data-active="false" class="dropdown-toggle">
                         <div class="">
                             <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users">
                                 <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                 <circle cx="9" cy="7" r="4"></circle>
                                 <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                                 <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                             </svg>
                             <span>Users</span>
                         </div>
                     </a>
                 </li>

             </ul>

         </nav>

     </div>