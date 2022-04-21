<?php
include("../config_indemnifier.php");
// session_start();
// $user_id = $_SESSION['userid'];
if (!empty($_POST)) {
    $output = '';
    $message = '';
    $folder_id =  $_POST["folders"];
    $cab_id =  $_POST["cabinets"];
    // $field_id =  $_POST["field_id"];
    $data =  $_POST["data_text"];
    $query1 = "SELECT * FROM `cabinets` where id=$cab_id";
        $result = mysqli_query($db, $query1);

        // Associative array
        $row = mysqli_fetch_assoc($result);
        $cab = $row['cabinet_name'];

        $query2 = "SELECT * FROM `folders` where id=$folder_id";
        $result2 = mysqli_query($db, $query2);

        // Associative array
        $row2 = mysqli_fetch_assoc($result2);
        $folder_name = $row2['folder_name'];
        $file_name = $_FILES['v_image']['name'];
        require('../fpdf.php');


            
           

    if($_FILES['v_image']['name']){
        
        
        $img = "C:/xampp/htdocs/DK_User/uploads/$cab/$folder_name/".$_FILES['v_image']['name'];
    
        $pdf = new FPDF();
        $pdf->AddPage();
        $pdf->Image($img,20,40,170,170);
        $filename=$file_name.".pdf";
        $dir = "C:/xampp/htdocs/DK_User/uploads/$cab/$folder_name/$filename";
        $pdf->Output($dir,'F');
        move_uploaded_file($_FILES['v_image']['tmp_name'], "C:/xampp/htdocs/DK_User/uploads/$cab/$folder_name/".$img);
        }


// echo $img."".$folder_id."".$cab_id;
        $sql = "INSERT INTO `upload_files`( `folder_id`, `doc_name`, `doc_type`, `doc_location`,`uploaded_by`,`doc_data`) VALUES ($folder_id,'$file_name','pdf','$img',1,'$data')";

if ($db->query($sql) === TRUE) {
    
  $last_id = $db->insert_id;
//   echo "New record created successfully. Last inserted ID is: " . $last_id;
} else {
//   echo "Error: " . $sql . "<br>" . $conn->error;
}
    
    echo $last_id;
}