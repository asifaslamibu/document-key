<?php
include("../config_indemnifier.php");
// session_start();
// $user_id = $_SESSION['userid'];
if (!empty($_POST)) {
    $output = '';
    $message = '';
    $cname = mysqli_real_escape_string($db, $_POST["cname"]);


    if ($_POST["employee_id"] != '') {
        $query = "  
           UPDATE cabinets   
           SET cabinet_name='$cname'
           WHERE id='" . $_POST["employee_id"] . "'";
        $message = 'Data Updated  ';
    } else {
        $query = "INSERT INTO `cabinets`(`cabinet_name`,`created_at`) Value ('$cname',CURRENT_TIMESTAMP()) ";
        // mkdir($cname);
        $message = 'Data Inserted';
    }
    try {

    if ($db->query($query) === TRUE) {
        mkdir("C://xampp/htdocs/DK_User/uploads/$cname",0700);
        $output .= 'Data Inserted Successfully';
        

    } else {
        $output .= 'Error';
    }
} catch (Exception $e) {
        $output = 'Duplicate Entry';
    }
    echo $output;
}
