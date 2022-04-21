<?php
include("../config_indemnifier.php");
// session_start();
// $user_id = $_SESSION['userid'];
if (!empty($_POST)) {
    $output = '';
    $message = '';
    $cname = mysqli_real_escape_string($db, $_POST["cname"]);
    $cab_id = mysqli_real_escape_string($db, $_POST["cab_id"]);


    if ($_POST["employee_id"] != '') {
        $query = "  
           UPDATE folders   
           SET folder_name='$cname',cabinet_id='$cab_id'
           WHERE id='" . $_POST["employee_id"] . "'";
        $message = 'Data Updated  ';
    } else {
        $message = 'Data Inserted';
        $query = "  
           INSERT INTO `folders`(`folder_name`,`created_at`,`cabinet_id`) Value ('$cname',CURRENT_TIMESTAMP(),'$cab_id') ";
           

    }
    if (mysqli_query($db, $query)) {
        $output .= '<div class="alert alert-light-warning border-0 mb-4" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x close" data-dismiss="alert"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></button> <strong>' . $message . ' !</strong></div>';
        //    $output .= $message;  
        $query1 = "SELECT * FROM `cabinets` where id=$cab_id";
           $row = mysqli_fetch_assoc($db, $query);
        //    echo $row;
        // mkdir("C://xampp/htdocs/DK/uploads/$cname",0700);

    } else {
        $output .= 'Error' . $query;
    }
    echo $output;
}
