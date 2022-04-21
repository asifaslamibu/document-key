<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from designreset.com/cork/ltr/demo4/auth_login.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 18 Mar 2022 07:07:34 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>Login Cover | CORK - Multipurpose Bootstrap Dashboard Template </title>
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/plugins.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/authentication/form-1.css" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->
    <link rel="stylesheet" type="text/css" href="assets/css/forms/theme-checkbox-radio.css">
    <link rel="stylesheet" type="text/css" href="assets/css/forms/switches.css">
</head>
<style>
    .form-form .form-form-wrap form .field-wrapper svg {
        position: absolute;
        top: 16px;

        fill: rgba(27, 85, 226, 0.23921568627450981);
    }

    .bg {
        background-image: url("../key.png");

        height: 100%;
        background-position: center;
        background-repeat: no-repeat;
        background-size: 480px;

    }
</style>

<body class="form">

    <?php
    $cur_date = date('Y-m-d');
    include("config_indemnifier.php");
    ?>

    <?php
    //    include("config.php");
    session_start();

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // username and password sent from form 

        $myusername = mysqli_real_escape_string($db, $_POST['username']);
        $mypassword = mysqli_real_escape_string($db, $_POST['password']);

        $sql = "SELECT id FROM users WHERE email = '$myusername' and password = '$mypassword' and isActive = 1";

        $result = mysqli_query($db, $sql);
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        $id = $row['id'];
        // print_r($id);

        $count = mysqli_num_rows($result);

        // If result matched $myusername and $mypassword, table row must be 1 row

        if ($count == 1) {
            //  session_register("user_name");
            $_SESSION["user_name"] = $myusername;
            $_SESSION['user_id'] = $id;
            // $_SESSION["favanimal"] = "cat";
            //  $_SESSION['login_user'] = ;
            //  echo $_SESSION["user_id"];


            header("location: dash.php");
        } else {
            $error = "Your Login Name or Password is invalid";
        }
    }
    ?>
    <div class="form-container">
        <div class="form-form">
            <div class="form-form-wrap">
                <div class="form-container">
                    <div class="form-content">

                        <h1 class="">Log In to <a href="index-2.html"><span class="brand-name">DocumentKey</span></a></h1>
                        <!-- <p class="signup-link">New Here? <a href="auth_register.html">Create an account</a></p> -->
                        <form class="text-left" action="" method="post">
                            <div class="form">

                                <div id="username-field" class="field-wrapper input">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user">
                                        <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                        <circle cx="12" cy="7" r="4"></circle>
                                    </svg>
                                    <input id="username" name="username" type="email" class="form-control" placeholder="Email">
                                </div>

                                <div id="password-field" class="field-wrapper input mb-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-lock">
                                        <rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect>
                                        <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                                    </svg>
                                    <input id="password" name="password" type="password" class="form-control" placeholder="Password">
                                </div>
                                <div class="d-sm-flex justify-content-between">
                                    <div class="field-wrapper toggle-pass">
                                        <p class="d-inline-block">Show Password</p>
                                        <label class="switch s-primary">
                                            <input type="checkbox" id="toggle-password" class="d-none">
                                            <span class="slider round"></span>
                                        </label>
                                    </div>
                                    <div class="field-wrapper">
                                        <button type="submit" value=" Submit " class="btn btn-primary" value="">Log In</button>
                                    </div>

                                </div>




                            </div>
                        </form>
                        <p class="terms-conditions"> <a href="index-2.html"></a> <a href="javascript:void(0);"></a><a href="javascript:void(0);"></a> <a href="javascript:void(0);"></a>.</p>

                    </div>
                </div>
            </div>
        </div>
        <div class="form-image bg">
            <div class="l-image" style="background-color: transparent;">
            </div>
        </div>
    </div>


    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="assets/js/libs/jquery-3.1.1.min.js"></script>
    <script src="bootstrap/js/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>

    <!-- END GLOBAL MANDATORY SCRIPTS -->
    <script src="assets/js/authentication/form-1.js"></script>

</body>

<!-- Mirrored from designreset.com/cork/ltr/demo4/auth_login.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 18 Mar 2022 07:07:34 GMT -->

</html>