<?php
session_start();

if(!isset($_SESSION['nameuser']))
{
	header('location:login.php');
}


?>


<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
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
  <a  href="home.php">Home</a>
  <a  href="display.php">Users Details</a>
  <a class="active" href="donation.php">Donation Details</a>
  <a href="hospital_details.php">Hospital Details</a>
  <a  href= "check_up.php">Check_up Details</a>
  <div class="topnav-right">
    <a href="logout.php"> Log out </a>
  




  </div>
</div>

</body>
</html>