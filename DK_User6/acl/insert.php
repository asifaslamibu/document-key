<?php
include("../config_indemnifier.php");
// session_start();
// $user_id = $_SESSION['userid'];
if (!empty($_POST)) {
    $output = '';
    $message = '';
    $cname = mysqli_real_escape_string($db, $_POST["user"]);
    $cab_id = mysqli_real_escape_string($db, $_POST["cabinets"]);
    $folder = count($_POST["folder"]);
    echo $folder;
    for($i = 0;$i<$folder;$i++)
    {
        $f = $_POST["folder"][$i];
        $query = "INSERT INTO `acl`(`cabinet_id`,`folder_id`,`user_id`,`created_at`,`created_by`) Value ('$cab_id','$f','$cname',CURRENT_TIMESTAMP(),'0') ";
            // echo $query;
            if (mysqli_query($db, $query)) {
                    $output .= '<div class="alert alert-light-warning border-0 mb-4" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x close" data-dismiss="alert"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></button> <strong>' . $message . ' !</strong></div>';
                       $output .= $message;  
            
                } else {
                    $output .= 'Error' . $query;
                }
    }
    

    // if ($_POST["employee_id"] != '') {
    //     $query = "  
    //        UPDATE folders   
    //        SET folder_name='$cname'
    //        WHERE id='" . $_POST["employee_id"] . "'";
    //     $message = 'Data Updated  ';
    // } else {
    //     $query = "  
    //        INSERT INTO `folders`(`folder_name`,`created_at`,`cabinet_id`) Value ('$cname',CURRENT_TIMESTAMP(),'$cab_id') ";
    //     $message = 'Data Inserted';
    // }
    // if (mysqli_query($db, $query)) {
    //     $output .= '<div class="alert alert-light-warning border-0 mb-4" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x close" data-dismiss="alert"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></button> <strong>' . $message . ' !</strong></div>';
    //     //    $output .= $message;  

    // } else {
    //     $output .= 'Error' . $query;
    // }
    echo $output;
    // print_r( $_POST["folder"]);

}
