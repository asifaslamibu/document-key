<?php
include("../config_indemnifier.php");
session_start();
$id = $_SESSION['id'];

$qry = mysqli_query($db, "SELECT pv.* FROM dockey.users as us join dockey.privilege as pv on pv.id=us.privilege where us.id='$id'"); // select query

// $result = mysqli_query($db, $qry);
$row = mysqli_fetch_array($qry);
echo json_encode($row);

