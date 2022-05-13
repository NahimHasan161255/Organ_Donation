<?php
$con = mysqli_connect('localhost','root','','organ_donation');
$ssn=$_GET['un'];
$query ="DELETE FROM general_user WHERE USER_SSN='$ssn'";
$data = mysqli_query($con,$query);
if($data){
	echo "<font color ='blue'>Record Delete from table";

	?>
	<meta HTTP-EQUIV="Refresh" content="0; URL=http://localhost/organ_donation/display.php">
	<?php
}
else{
echo "sorry";
}
?>
