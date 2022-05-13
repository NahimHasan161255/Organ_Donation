<?php 

session_start();

$check2 = array();

$c = mysqli_connect('localhost','root','','organ_donation');


if(isset($_POST['submit'])){
$u_ssn = mysqli_real_escape_string($c,$_POST['user_ssn']);

$w_part= mysqli_real_escape_string($c,$_POST['wanted_part']);

$b_group = mysqli_real_escape_string($c,$_POST['blood_group']);
$details = mysqli_real_escape_string($c,$_POST['details']);
$l_date = mysqli_real_escape_string($c,$_POST['last_date']);

if(empty($u_ssn)){
	array_push($check2,"enter user_ssn");
}
if(empty($details)){
	array_push($check2,"enter details");
}



if(count($check2) == 0){
	
    	$q= " INSERT INTO wanted(LAST_DATE , WANTED_PART , POST , BLOOD_GROUP , USER_SSN) 
    	VALUES('$l_date' , '$w_part' , '$details' , '$b_group' , '$u_ssn') ";

	mysqli_query($c, $q);

array_push($check2, "successfully post");
}


}

?>