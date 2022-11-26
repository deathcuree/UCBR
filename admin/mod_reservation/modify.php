<?php
require_once("../../includes/initialize.php");
if (!isset($_SESSION['ADMIN_ID'])){
    redirect(WEB_ROOT ."admin/login.php");
}
function dbMODIFY(){ //eto yung naka comment
$id = $_GET['id'];
$arrival=$_POST['arrival'];
$departure=$_POST['departure'];
$sql="UPDATE reservation SET arrival='$arrival', departure='$departure', WHERE reservation_id=".$id;
$result = dbMODIFY($sql);
if(!$result)
{
  die('Could not modify record: '.mysqli_error(die)); 
} else {

header('Location:index_resv.php');}
}
?>