<?php

session_start();

$con = mysqli_connect('localhost','root');
mysqli_select_db($con, 'organ_donation');

$username = $_POST['username'];

$pass = $_POST['password'];

$qu="select * from admin where ADMIN_USERNAME = '$username' && ADMIN_PASSWORD = '$pass' ";
$result = mysqli_query($con, $qu);

$num = mysqli_num_rows($result);
if($num == 1){
$_SESSION['nameuser'] = "admin";
	header('location:home.php?un=1');

}
else{
	
$qu="select * from general_user where USER_USERNAME = '$username' && USER_PASSWORD = '$pass' ";

$result = mysqli_query($con, $qu);

$num = mysqli_num_rows($result);

if($num == 1){
	
	$_SESSION['nameuser'] = "user";
	header('location:home.php?un=0');


}else{
 
header('location:login.php');
 echo "string";
}
}


?>