<?php 
include("../config_indemnifier.php");
$userid = $_POST['userid'];
$sql = "SELECT * FROM dockey.upload_files where id =".$userid;
$result = mysqli_query($db,$sql);
$response;
while( $row = mysqli_fetch_array($result))
{
    $id = $row['id'];
    $folder_id = $row['folder_id'];
    $doc_name = $row['doc_name'];
    $doc_type = $row['doc_type'];
    $doc_location = $row['doc_location'];
    $doc_date = $row['doc_data'];
    
   
    $response = $doc_location;
}


echo $response;

?>