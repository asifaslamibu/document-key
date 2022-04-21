<?php
include("../config_indemnifier.php");
// session_start();
// $user_id = $_SESSION['userid'];
if (!empty($_POST)) {
    $output = '';
    $message = '';
    $username = mysqli_real_escape_string($db, $_POST["username"]);
    $email = mysqli_real_escape_string($db, $_POST["email"]);
    $password = mysqli_real_escape_string($db, $_POST["password"]);


    if ($_POST["employee_id"] != '') {
        $query = "  
           UPDATE folders   
           SET folder_name='$cname'
           WHERE id='" . $_POST["employee_id"] . "'";
        $message = 'Data Updated  ';
    } else {
        $query = "  
           INSERT INTO `users`(`username`,`email`,`password`,`isActive`,`created_at`) Value ('$username','$email','$password','1',CURRENT_TIMESTAMP()) ";
        $message = 'Data Inserted';
    }
    if (mysqli_query($db, $query)) {
        $output .= '<div class="alert alert-light-warning border-0 mb-4" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x close" data-dismiss="alert"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></button> <strong>' . $message . ' !</strong></div>';
        //    $output .= $message;  

    } else {
        $output .= 'Error' . $query;
    }
    echo $output;
}
