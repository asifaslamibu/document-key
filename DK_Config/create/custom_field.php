<?php

include("../config_indemnifier.php");
// session_start();
// $user_id = $_SESSION['userid'];
if (!empty($_POST)) {
    $output = '';
    $message = '';
    $folder_id = mysqli_real_escape_string($db, $_POST["folder_id"]);
    $folder = count($_POST["fields"]);
    echo $folder;
    for($i = 0;$i<$folder;$i++)
    {
        $f = $_POST["fields"][$i];
        $query = "INSERT INTO `custom_field`( `field_name`, `folder_id`, `created_on`) VALUES ('$f','$folder_id',CURRENT_TIMESTAMP()) ";
            // echo $query;
            if (mysqli_query($db, $query)) {
                    $output .= '<div class="alert alert-light-warning border-0 mb-4" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x close" data-dismiss="alert"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></button> <strong>' . $message . ' !</strong></div>';
                       $output .= $message;  
            
                } else {
                    $output .= 'Error' . $query;
                }
    }
    

    echo $output;
    print_r($_POST["fields"]);

}
