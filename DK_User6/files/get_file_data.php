<?php 
include("../config_indemnifier.php");
$file_id = $_POST['userid'];
// $folder_id = $_POST['folder_id'];
$sql = "SELECT * FROM dockey.file_data where file_id = $file_id";
$result = mysqli_query($db,$sql);
$response = [];
$row1 = mysqli_fetch_all($result);
while( $row = mysqli_fetch_array($result))
{
    $id = $row['id'];
    $folder_id = $row['folder_id'];
    $doc_name = $row['file_id'];
    $doc_type = $row['field_id'];
    $doc_location = $row['data'];
    // $doc_date = $row['doc_data'];
    
   
    $response = $doc_location;
}


echo json_encode($row1);

?>