<?php
$con = mysqli_connect('localhost','root','','organ_donation');
$sn=$_GET['un'];
$query ="DELETE FROM check_up WHERE CHECK_UP_SERIAL = '$sn'";
$data = mysqli_query($con,$query);
if($data){
	echo "<font color ='blue'>Record Delete from table";

	?>
	<meta HTTP-EQUIV="Refresh" content="0; URL=http://localhost/organ_donation/check_up.php">
	<?php
}
else{
echo "sorry";
}
?>