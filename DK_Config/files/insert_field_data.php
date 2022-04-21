<?php
include("../config_indemnifier.php");
// session_start();
// $user_id = $_SESSION['userid'];
if (!empty($_POST)) {
    $output = '';
    $message = '';
    $folder_id =  $_POST["folder_id"];
    $file_id =  $_POST["file_id"];
    $field_id =  $_POST["field_id"];
    $data =  $_POST["data"];


    
        $query = "INSERT INTO `dockey`.`file_data`(`folder_id`,`file_id`,`field_id`,`data`)VALUES($folder_id,$file_id,$field_id,'$data') ON DUPLICATE KEY UPDATE data='$data';";
        echo "INSERT INTO `dockey`.`file_data`(`folder_id`,`file_id`,`field_id`,`data`)VALUES($folder_id,$file_id,$field_id,'$data')";
        if (mysqli_query($db, $query)) {
            $output .= 'Data Added SuccessFully';
            //    $output .= $message;  
    
        } else {
            $output .= 'Something went Wrong';
        }
         
           $message = 'Data Inserted';
    
    echo $output;
}
