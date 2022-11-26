<?php
require_once('connect.php');
$delete_id=$_GET['id'];
mysqli_query($conn,"DELETE FROM `tblreservation` WHERE CONFIRMATIONCODE='$delete_id'");
header('location:index.php');
?>