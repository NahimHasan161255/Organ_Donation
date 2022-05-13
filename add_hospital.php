<?php 

session_start();

$check = array();

$con = mysqli_connect('localhost','root','','organ_donation');


if(isset($_POST['submit'])){
$hn = mysqli_real_escape_string($con,$_POST['hospital_name']);
$cn = mysqli_real_escape_string($con,$_POST['contact_number']);


	array_push($check, "successfully Added");

    	$qy= " INSERT INTO hospital(HOSPITAL_NAME_BRANCH , HOSPIATL_CONTACT ) VALUES ('$hn' , '$cn') ";

	mysqli_query($con, $qy);



}

?>