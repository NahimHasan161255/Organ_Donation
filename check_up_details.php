<?php 

session_start();

$check = array();

$con = mysqli_connect('localhost','root','','organ_donation');


if(isset($_POST['submit'])){
$cup = mysqli_real_escape_string($con,$_POST['check_up_serial']);
$cud = mysqli_real_escape_string($con,$_POST['check_up_details']);
$tt = mysqli_real_escape_string($con,$_POST['tissue_type']);
$ds = mysqli_real_escape_string($con,$_POST['donation_serial']);






	array_push($check, "successfully Added");

    	$qy= " INSERT INTO check_up(CHECK_UP_SERIAL , CHECK_UP_DETAILS , TISSUE_TYPE , DONATION_SERIAL) VALUES ('$cup' , '$cud' , '$tt' , '$ds') ";

	mysqli_query($con, $qy);



}

?>