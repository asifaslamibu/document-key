<?php
// include("sessioninput.php");

?>
<style>
    .active {
        background: #fff;
        box-shadow: 0 1px 3px 0 rgb(0 0 0 / 10%), 0 1px 2px 0 rgb(0 0 0 / 6%);
        border-radius: 6px;
        color: #0e1726;
    }
</style>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

<script>
    var main_desh, updat;
    $.ajax({
        url: "privileges/get_data.php",
        type: "POST",
        cache: false,
        success: function(data) {
            data = JSON.parse(data)
            console.log(data);

            var cab = data['cabinet_tab'];
            var r_cab = JSON.parse(cab);
            var create = r_cab.create;
            var edit = r_cab.update;
            // var deletes = r_cab.deleted;
            var veiw = r_cab.view;

            if (veiw === '0') {
                document.getElementById('coabinett').style.display = 'none';

            }


            var fol = data['folder_tab'];
            var r_fol = JSON.parse(fol);
            var create = r_fol.create;
            var edit = r_fol.update;
            var deletes = r_fol.deleted;
            var veiw = r_fol.view;
            if (veiw === '0') {
                document.getElementById('folder1').style.display = 'none';

            }
            // if (create == '0') {
            //     document.getElementById('create').style.display = 'none';
            // }

            var acl = data['acl_tab'];
            var r_acl = JSON.parse(acl);
            var create = r_acl.create;
            var edit = r_acl.update;
            var deletes = r_acl.deleted;
            var veiw = r_acl.view;
            if (veiw === '0') {
                document.getElementById('aclss').style.display = 'none';

            }

            var cf = data['custom_tab'];
            var r_cf = JSON.parse(cf);
            var create = r_cf.create;
            var edit = r_cf.update;
            var deletes = r_cf.deleted;
            var veiw = r_cf.view;
            if (veiw === '0') {
                document.getElementById('customfield').style.display = 'none';

            }

            var rol = data['roles'];
            var r_role = JSON.parse(rol);
            var create = r_role.create;
            var edit = r_role.update;
            var deletes = r_role.deleted;
            var veiw = r_role.view;
            if (veiw === '0') {
                document.getElementById('roless').style.display = 'none';

            }


            var usr = data['user_tab'];
            var r_usr = JSON.parse(usr);
            var create = r_usr.create;
            var edit = r_usr.update;
            var deletes = r_usr.deleted;
            var veiw = r_usr.view;
            if (veiw === '0') {
                document.getElementById('userss').style.display = 'none';

            }

            console.log("main_desh  =>" + create);


            // $('#table').html(data);
        }
    });
</script>
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
                <a  class="nav-link"> DocumentKey </a>
            </li>
        </ul>



        <ul class="navbar-item flex-row ml-md-auto">

            <li class="nav-item dropdown user-profile-dropdown">
                <a href="javascript:void(0);" class="nav-link dropdown-toggle user" id="userProfileDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                    <img src="assets/user.png" alt="avatar">
                </a>
                <div class="dropdown-menu position-absolute" aria-labelledby="userProfileDropdown">
                    <div class="">
                        <?php
                        if ($_SESSION["id"]) {
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
                    <a href="dash.php" class="dropdown-toggle" id="desh">
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

                <li class="menu" id="coabinett">
                    <a href="cabinets.php" class="dropdown-toggle">
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
                <li class="menu" id="folder1">
                    <a href=" folder_table.php" class="dropdown-toggle">
                        <div class="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-folder">
                                <path d="M22 19a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h5l2 3h9a2 2 0 0 1 2 2z">
                                </path>
                            </svg>
                            <span>Folders</span>
                        </div>
                    </a>
                </li>
                <li class="menu" id="aclss">
                    <a href="acl.php" class="dropdown-toggle">
                        <div class="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-folder">
                                <path d="M22 19a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h5l2 3h9a2 2 0 0 1 2 2z">
                                </path>
                            </svg>
                            <span>ACL</span>
                        </div>
                    </a>
                </li>
                <li class="menu" id="customfield">
                    <a href="edit_acl.php" class="dropdown-toggle">
                        <div class="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus-square">
                                <rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect>
                                <line x1="12" y1="8" x2="12" y2="16"></line>
                                <line x1="8" y1="12" x2="16" y2="12"></line>
                            </svg>
                            <span>Custom Fields</span>
                        </div>
                    </a>
                </li>

                <li class="menu" id="userss">
                    <a href="users.php" class="dropdown-toggle">
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
                <li class="menu" id="roless">
                    <a href="roles.php" class="dropdown-toggle">
                        <div class="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users">
                                <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                <circle cx="9" cy="7" r="4"></circle>
                                <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                                <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                            </svg>
                            <span>Roles</span>
                        </div>
                    </a>
                </li>

            </ul>

        </nav>

    </div>

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