<?php 

session_start();

$check = array();

$con = mysqli_connect('localhost','root','','organ_donation');


if(isset($_POST['submit'])){
$name = mysqli_real_escape_string($con,$_POST['name']);
$ssn = mysqli_real_escape_string($con,$_POST['nid']);
$gmail = mysqli_real_escape_string($con,$_POST['gmail']);
$address = mysqli_real_escape_string($con,$_POST['address']);
$contact_number = mysqli_real_escape_string($con,$_POST['contact_number']);
$username = mysqli_real_escape_string($con,$_POST['username']);
$password = mysqli_real_escape_string($con,$_POST['password']);

if(empty($name)){
	array_push($check,"enter name");
}
if(empty($ssn)){
	array_push($check,"enter ssn");
}
if(empty($gmail)){
	array_push($check,"enter gmail");
}
if(empty($address)){
	array_push($check,"enter address");
}
if(empty($contact_number)){
	array_push($check,"enter contact_number");
}
if(empty($username)){
	array_push($check,"enter username");
}
if(empty($password)){
	array_push($check,"enter password");
}



if(count($check) == 0){
	array_push($check, "successfully sign up");

    	$qy= " INSERT INTO general_user(USER_NAME , USER_SSN , USER_GMAIL , USER_ADDRESS , USER_CONTACT , USER_USERNAME , USER_PASSWORD) VALUES ('$name' , '$ssn' , '$gmail' , '$address' , '$contact_number' ,'$username' , '$password') ";

	mysqli_query($con, $qy);

}

}

?>