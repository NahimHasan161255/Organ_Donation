<?php
$con = mysqli_connect('localhost','root','','organ_donation');
$sn=$_GET['un'];
$query ="DELETE FROM hospital WHERE HOSPITAL_NAME_BRANCH='$sn'";
$data = mysqli_query($con,$query);
if($data){
	echo "<font color ='blue'>Record Delete from table";

	?>
	<meta HTTP-EQUIV="Refresh" content="0; URL=http://localhost/organ_donation/hospital_details.php">
	<?php
}
else{
echo "sorry";
}
?>
