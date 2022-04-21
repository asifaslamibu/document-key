<?php
include("config_indemnifier.php");
session_start();
$id = $_SESSION['user_id'];
// echo $id;
$chat = mysqli_real_escape_string($db, $_POST["chat"]);
$ide = mysqli_real_escape_string($db, $_POST["ide"]);


$query  = "INSERT INTO `log`(`user_id`,`file_type`,`file_id`,`datatime`) VALUES ('$id','$chat','$ide',CURRENT_TIMESTAMP())";
$result = mysqli_query($db, $query);

echo "<script>
    alert('log Generate'); 
    </script>";
