<?php
session_start();
?>

<?php
if ($_SESSION["user_id"]) {
?>
    <!-- <input type="hidden"> -->
<?php
} else {
    echo "<h1>Please login first .</h1>";
    header("location: index.php");
}

?>