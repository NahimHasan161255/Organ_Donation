
<?php
session_start();

?>


<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
  background-image: url("p1.webp");
  background-size: cover;

}

.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #4CAF50;
  color: white;
}

.topnav-right {
  float: right;
}
</style>
</head>
<body>

<div class="topnav">
  <a  href="home.php?un=1">Home</a>
  <a href="display.php">Users Details</a>
  <a href="donation_details.php">Donation Details</a>
  <a href="hospital_details.php">Hospital Details</a>
  <a href= "check_up.php">Check_up Details</a>
   <a class="active" href= "agreement.php">Agreement Details</a>
  <div class="topnav-right">
    <a href="logout.php"> Log out </a>
    <a href= "settings.php">Settings </a>
  




  </div>
</div>

</body>
</html>
<style type="text/css">
td{
	padding: 10px;
}	
th{
  padding: 10px;
} 
</style>

<?php



$con = mysqli_connect('localhost','root');
mysqli_select_db($con, 'organ_donation');

error_reporting(0);

$qu ="SELECT * FROM agreement";
$data = mysqli_query($con,$qu);
$total = mysqli_num_rows($data);

if($total != 0)
{
	?>

<table>
	<tr>
		    <th> Serial No </th>
		    <th> Agreement Details </th>
		    <th> Donor ssn </th>
       
	</tr>



	<?php
	while($result = mysqli_fetch_assoc($data)){

echo"<tr>
		<td>".$result['SERIAL_NO']."</td>
		<td>".$result['AGREEMENT_DETAILS']."</td>
        <td>".$result['DONOR_SSN']."</td>
                <td> <a href='delete4.php?un=$result[SERIAL_NO]' onclick='return checkdelete()'> Delete </a> </td>
	</tr>";

	}

}
else
{
echo "no found";
}
?>
</table>
<script>
	function checkdelete(){
		return confirm('Are you sure you want to delete this data???');
	}
</script>