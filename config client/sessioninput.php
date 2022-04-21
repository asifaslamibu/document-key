<?php
session_start();

if ($_SESSION["user_name"]) {
?>
    <!-- <input type="hidden"> -->
<?php
} else {
    echo "<h1>Please login first .</h1>";
    header("location: dash.php");
}

?>