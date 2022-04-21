<?php
include("../config_indemnifier.php");
// session_start();
// $user_id = $_SESSION['userid'];
if (!empty($_POST)) {
    $output = '';
    $message = '';

    $role_name = mysqli_real_escape_string($db, $_POST["role_name"]);
    $cabinets = mysqli_real_escape_string($db, $_POST['cabinets']);
    $folder = mysqli_real_escape_string($db, $_POST['folder']);
    $acl = mysqli_real_escape_string($db, $_POST['acl']);
    $custom_f = mysqli_real_escape_string($db, $_POST['custom_f']);
    $user = mysqli_real_escape_string($db, $_POST['user']);
    $role = mysqli_real_escape_string($db, $_POST['role']);
    echo $role_name;



    $query = "INSERT INTO `privilege`(`privilege`,`cabinet_tab`,`folder_tab`,`acl_tab`,`custom_tab`,`user_tab`,`roles`,`create_at`) Value ('$role_name','$cabinets','$folder','$acl','$custom_f','$user','$role',CURRENT_TIMESTAMP()) ";
    // mkdir($cname);
    echo $query;
    if (mysqli_query($db, $query)) {
        echo 1;
        $message = 'Data Inserted';
    }

    // echo $output;
}
