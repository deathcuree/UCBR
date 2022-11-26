<?php
include("../../includes/initialize.php");
$action = (isset($_GET['action']) && $_GET['action'] != '') ? $_GET['action'] : '';

switch ($action) {
	case 'modify' :
	dbMODIFY();
	break;
	
	case 'delete' :
	dbDELETE();
	break;
	
	case 'deleteOne' :
	dbDELETEONE();
	break;

	case 'confirm' :
	doConfirm();
	break;

	case 'cancel' :
	doCancel();
	break;

	case 'checkin' :
	doCheckin();
	break;

	case 'checkout' :
	doCheckout();
	break;

	case 'cancelroom' :
	doCancelRoom();
	break;
	}

function doCheckout(){
global $mydb;
$con = mysqli_connect("localhost","root","","UCBR_db");
$query = "DELETE FROM tblreservation WHERE `CONFIRMATIONCODE` ='" . $_GET['code'] ."'";
$query_run = mysqli_query($con, $query);


	$sql = "UPDATE `tblreservation` SET `STATUS`='Checkedout' WHERE `CONFIRMATIONCODE` ='" . $_GET['code'] ."'";
	$mydb->setQuery($sql);
	$mydb->executeQuery();

	$sql = "UPDATE `tblpayment` SET `STATUS`='Checkedout' WHERE `CONFIRMATIONCODE` ='" . $_GET['code'] ."'";
	$mydb->setQuery($sql);
	$mydb->executeQuery();

	if($query_run)
    {
        $_SESSION['message'] = "Deleted successfully.";
        header("Location: index.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Deletion unsucessful.";
        header("Location: index.php");
        exit(0);
    }
}

function doCheckin(){
global $mydb;

$sql = "UPDATE `tblreservation` SET `STATUS`='Checkedin' WHERE `CONFIRMATIONCODE` ='" . $_GET['code'] ."'";
$mydb->setQuery($sql);
$mydb->executeQuery();
 
$code=$_GET['code']; // cinopy ko lang sa view.php
	$query="SELECT  `G_FNAME` ,  `G_LNAME` ,  `G_ADDRESS` ,  `TRANSDATE` ,  `CONFIRMATIONCODE` ,  `PQTY` ,  `SPRICE` ,`STATUS`
			FROM  `tblpayment` p,  `tblguest` g
			WHERE p.`GUESTID` = g.`GUESTID` AND `CONFIRMATIONCODE`='".$code."'";
	$mydb->setQuery($query);
	$res = $mydb->loadSingleResult();

$sql = "UPDATE `tblpayment` SET `STATUS`='Checkedin' WHERE `CONFIRMATIONCODE` ='" . $_GET['code'] ."'";
$mydb->setQuery($sql);
$mydb->executeQuery();

 // send e-mail to ...
$email="nikaandaya21@gmail.com";
$to=$email;

// Your subject
$subject="Your confirmation link here";

// From
$header="from: your name <your email>";

// Your message
$message="Your Confirmation link \r\n";
$message.="Click on this link to activate your account \r\n";
$message.="http://www.yourweb.com/confirmation.php?passkey=$code";

// send email
$sentmail = mail($to,$subject,$message,$header);

// if your email succesfully sent
if($sentmail){
echo "Your Confirmation link Has Been Sent To Your Email Address.";
}
else {
echo "Cannot send Confirmation link to your e-mail address";
}
message("Reservation Upadated successfully!", "success");
redirect('index.php');

}

function doCancel(){
global $mydb;

$sql = "UPDATE `tblreservation` r,tblroom rm SET ROOMNUM=ROOMNUM + 1 WHERE r.`ROOMID`=rm.`ROOMID` AND  `CONFIRMATIONCODE` ='" . $_GET['id'] ."'";
$mydb->setQuery($sql);
$mydb->executeQuery();

$sql = "UPDATE `tblreservation` SET `STATUS`='Cancelled' WHERE `CONFIRMATIONCODE` ='" . $_GET['id'] ."'";
$mydb->setQuery($sql);
$mydb->executeQuery();

$sql = "UPDATE `tblpayment` SET `STATUS`='Cancelled' WHERE `CONFIRMATIONCODE` ='" . $_GET['id'] ."'";
$mydb->setQuery($sql);
$mydb->executeQuery();

message("Reservation Updated successfully!", "success");
redirect('index.php');

}

function doCancelRoom(){
global $mydb;

$sql = "UPDATE `tblreservation` r,tblroom rm SET ROOMNUM=ROOMNUM + 1 WHERE r.`ROOMID`=rm.`ROOMID` AND  `CONFIRMATIONCODE` ='" . $_GET['id'] ."'";
$mydb->setQuery($sql);
$mydb->executeQuery();

$sql = "UPDATE `tblreservation` SET `STATUS`='Cancelled' WHERE `CONFIRMATIONCODE` ='" . $_GET['id'] ."'";
$mydb->setQuery($sql);
$mydb->executeQuery();

$sql = "UPDATE `tblpayment` SET `STATUS`='Cancelled' WHERE `CONFIRMATIONCODE` ='" . $_GET['id'] ."'";
$mydb->setQuery($sql);
$mydb->executeQuery();

message("Reservation Updated successfully!", "success");
redirect('index.php');
}

function doConfirm(){
global $mydb;

$sql = "UPDATE `tblreservation` r,tblroom rm SET ROOMNUM=ROOMNUM - 1 WHERE r.`ROOMID`=rm.`ROOMID` AND  `CONFIRMATIONCODE` ='" . $_GET['code'] ."'";
$mydb->setQuery($sql);
$mydb->executeQuery();

$sql = "UPDATE `tblreservation` SET `STATUS`='Confirmed' WHERE `CONFIRMATIONCODE` ='" . $_GET['code'] ."'";
$mydb->setQuery($sql);
$mydb->executeQuery();

$sql = "UPDATE `tblpayment` SET `STATUS`='Confirmed' WHERE `CONFIRMATIONCODE` ='" . $_GET['code'] ."'";
$mydb->setQuery($sql);
$mydb->executeQuery();

message("Reservation updated successfully!", "success");
redirect('index.php');
}	

function dbDELETEONE(){
global $mydb;

$sql = "DELETE FROM `tblreservation` WHERE `CONFIRMATIONCODE` ='" . $_GET['delete'] ."'";
$mydb->setQuery($sql);
$mydb->executeQuery();

$sql = "DELETE FROM `tblpayment` WHERE `CONFIRMATIONCODE` ='" . $_GET['delete'] ."'";
$mydb->setQuery($sql);
$mydb->executeQuery();

message("Reservation updated successfully!", "success");
redirect('index.php');
}
?> 


<!-- // $servername = 'localhost';
// $username = 'root';
// $password = "";
// $database = 'UCBR_db';
// $connection = new mysqli($servername, $username, $password, $database);

// if(isset($_GET['delete'])) {
// 	$delete_id=$_GET['delete'];

// 	$sql="DELETE FROM `tblreservation` WHERE RESERVEID='.$delete_id.' LIMIT 1";
// 	$result=mysqli_query($connection,$sql);
// 	if($result){
// 		header('location:index.php');
// 	} else {
// 		die(mysqli_error(($connection)));
// 	}
// } -->


<!-- // function dbDELETEONE(){
// 	if ( isset($_GET['id']) ) {
// 		$delete_id = $_GET['id'];

// 		$servername = 'localhost';
// 		$username = 'root';
// 		$password = "";
// 		$database = 'UCBR_db';

// 		// Create connection
// 		$connection = new mysqli($servername, $username, $password, $database);

// 		$sql = "DELETE FROM tblreservation WHERE CONFIRMATIONCODE=$delete_id";
// 		$connection->query(($sql));


// 	}

// 	header('location: index.php');
// } -->



<!-- // function dbMODIFY(){ //eto yung naka comment
// 	$id = $_GET['id'];
// 	$arrival=$_POST['arrival'];
// 	$departure=$_POST['departure'];
	
// 	$sql="UPDATE reservation SET arrival='$arrival', departure='$departure', WHERE reservation_id=".$id;
// 	$result = dbMODIFY($sql);
	
// 	if(!$result)
// 	{
// 	  ('Could not modify record: '.mysqli_error(die)); 
// 	} else {
	
// 	header('Location:index_resv.php');}
// 	} -->
