<?php

$u = $_GET['un'];
session_start();


?>


<!DOCTYPE html>
<html>
<head>
<link rel = "stylesheet" type="text/css" href="bootstrap.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
  background-image: url("p.jpg");
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
  
    <?php
    if($u==1){
    ?>
    <a class="active" href="home.php?un=1">Home</a>
    <a href="admin_show_post.php"> Show Post </a>
   <div class="topnav-right">
    <a href="logout.php"> Log out </a>
	<a href= "settings.php">Settings </a>

	<?php
}
else{
?>
<a class="active" href="home.php?un=0">Home</a>
   <a href="registration.php?un=0">Registration</a>
   <a href="want_organ.php?un=0">Want Organ</a>
   <a href="show_post.php?un=0">Show Post</a>
   <div class="topnav-right">
    <a href="logout.php"> Log out </a>
    <a href="#about">About</a>
<?php
}
?>
  </div>
</div>
<br><br>
<div>
<div class="col-lg-4">
	<font size="5" color="blue"><b>What Can Be Donated</b></font>
	<h3>Eight of the major organs can be transplanted . Most often, organ donors are deceased, but some organs can be donated by living donors.</h3>
	<h3>
    <b>Deceased organ donors can donate:</b> kidneys (2), eyes (2) .
   </h3>
   <h3>
    <b>Living organ donors can donate:</b> kidney (1), eye (1) . 

	</h3>
	<br>
</div>
<div class="col-lg-4">
	<font size="5" color="blue" align= "center" ><b>How Donation Works</b></font>
	<h3>Organ donation is the process of providing an organ, organs, or partial organ to transplant into one or more people. Organ donors can be deceased or living.
	</h3>
	<br>
</div>
<div class="col-lg-4">
	<font size="5" color="blue"><b>Who Can Donate</b></font>
	<h3>Organ donors can be deceased or living.All people should consider themselves potential organ and tissue donors—regardless of age, health, race, or ethnicity. Don’t rule yourself out! No one is too old or too young to be a deceased donor and most major religions support donation.
	</h3>
	<br>
</div>
</div>

</body>
</html>






