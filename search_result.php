
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
  <a href="home.php?un=0">Home</a>
   <a class="active" href="search_donor.php?un=0">Search Donor</a>
   <a href="post_for_donor.php?un=0">Post For Donor</a>
   <div class="topnav-right">
    <a href="logout.php"> Log out </a>
  




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

$con = mysqli_connect('localhost','root','','organ_donation');


if(isset($_POST['submit'])){
$wn = mysqli_real_escape_string($con,$_POST['wanted_Part']);
$bg = mysqli_real_escape_string($con,$_POST['blood_group']);
}

error_reporting(0);

$qu ="SELECT * FROM donation as d join hospital as h on d.HOSPITAL_NAME_BRANCH=h.HOSPITAL_NAME_BRANCH
where (DONATION_PART='$wn' or DONATION_PART='Both') and DONOR_BLOOD_GROUP='$bg' ";
$data = mysqli_query($con,$qu);
$total = mysqli_num_rows($data);


if($total != 0)
{
	?>

<table>
	<tr>
		    <th> Part </th>
		    <th> Donation Type </th>
        <th> Donor Blood Group </th>
        <th> Hospital Name </th>
        <th> Hospital Contact </th>
	</tr>



	<?php
	while($result = mysqli_fetch_assoc($data)){

echo"<tr>
		     <td>".$result['DONATION_PART']."</td>
         <td>".$result['DONATION_TYPE']."</td>
         <td>".$result['DONOR_BLOOD_GROUP']."</td>
         <td>".$result['HOSPITAL_NAME_BRANCH']."</td>
         <td>".$result['HOSPIATL_CONTACT']."</td>
	</tr>";

	}

}
else
{
echo "no found";
}
?>
</table>
