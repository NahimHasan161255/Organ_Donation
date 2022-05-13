
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
  background-image: url("p3.jpg");
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
  <<a href="home.php?un=0">Home</a>
   <a href="registration.php?un=0">Registration</a>
   <a href="want_organ.php?un=0">Want Organ</a>
   <a class="active" href="show_post.php?un=0">Show Post</a>
   <div class="topnav-right">
    <a href="logout.php"> Log out </a>
    <a href="#about">About</a>
  




  </div>
</div>

</body>
</html>
<style type="text/css">
td{
	padding: 10px;
  color: blue;
}	
th{
  padding: 10px;
  color: red;
}
</style>

<?php



$con = mysqli_connect('localhost','root');
mysqli_select_db($con, 'organ_donation');

error_reporting(0);

$qu ="SELECT * FROM wanted as w join general_user as g on w.USER_SSN=g.USER_SSN";
$data = mysqli_query($con,$qu);
$total = mysqli_num_rows($data);

if($total != 0)
{
	?>

<table>
	<tr>
		<th>Serial</th>
		<th>Last Date</th>
		<th>Wanted Part</th>
        <th>Post</th>
        <th>Blood_Group</th>
        <th > User_Ssn </th>
        <th > Contact </th>
	</tr>



	<?php
	while($result = mysqli_fetch_assoc($data)){

echo"<tr>
		<td>".$result['SERIAL_NO']."</td>
		<td>".$result['LAST_DATE']."</td>
        <td>".$result['WANTED_PART']."</td>
        <td>".$result['POST']."</td>
        <td>".$result['BLOOD_GROUP']."</td>
        <td>".$result['USER_SSN']."</td>
        <td>".$result['USER_CONTACT']."</td>
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