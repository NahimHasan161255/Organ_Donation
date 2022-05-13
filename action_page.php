<?php 

session_start();

$check1 = array();

$c = mysqli_connect('localhost','root','','organ_donation');


if(isset($_POST['submit'])){
$d_ssn = mysqli_real_escape_string($c,$_POST['donor_ssn']);

$d_part= mysqli_real_escape_string($c,$_POST['donation_part']);

$d_type = mysqli_real_escape_string($c,$_POST['donation_type']);
$b_group = mysqli_real_escape_string($c,$_POST['blood_group']);
$c_hospital = mysqli_real_escape_string($c,$_POST['choose_hospital']);
$r_ssn = mysqli_real_escape_string($c,$_POST['referer_ssn']);

if(empty($d_ssn)){
	array_push($check1,"enter donor_ssn");
}
if(empty($r_ssn)){
	array_push($check1,"enter referer_ssn");
}



if(count($check1) == 0){
	
    	$q= " INSERT INTO donation(DONATION_PART , DONATION_TYPE , DONOR_BLOOD_GROUP , HOSPITAL_NAME_BRANCH , DONOR_SSN , REFERER_SSN) 
    	VALUES('$d_part' , '$d_type' , '$b_group' , '$c_hospital' , '$d_ssn' , '$r_ssn') ";

	mysqli_query($c, $q);

array_push($check1, "successfully register");

$details = 'Once my death has been confirmed and the death certification has been released by a doctor, I hereby give permission to donate';

	$q= " INSERT INTO agreement(AGREEMENT_DETAILS , DONOR_SSN) VALUES ('$details' , '$d_ssn') ";

	mysqli_query($c, $q);
}


}

?>