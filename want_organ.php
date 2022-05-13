
<?php

$u = $_GET['un'];
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
   <a href="search_donor.php?un=0">Search Donor</a>
   <a href="post_for_donor.php?un=0">Post For Donor</a>
   <div class="topnav-right">
    <a href="logout.php"> Log out </a>

  </div>
</div>



</body>
</html>






