
<?php

$u = $_GET['un'];
session_start();


?>

<!DOCTYPE html>
<html>
<head>
  
<link rel = "stylesheet" type="text/css" href="bootstrap.css">
  <link rel="stylesheet" type="text/css" href="style.css">

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


<div class="col-lg-4">
  <h3>Donor Search</h3>
  <form action="search_result.php?un=0" method="post">


    <label for="wanted_Part">Wanted_Part*</label>
    <select id="wanted_Part" name="wanted_Part" class="form-control">
      <option value="Eye">Eye</option>
      <option value="Kidney">Kidney</option>
      <option value="Both">Both</option>
    </select>

    </select>
     <label for="blood_group">Blood_Group*</label>
    <select id="blood_group" name="blood_group" class="form-control">
      <option value="A+">A+</option>
      <option value="A-">A-</option>
      <option value="B+">B+</option>
      <option value="B-">B-</option>
      <option value="AB+">AB+</option>
      <option value="AB-">AB-</option>
      <option value="O+">O+</option>
      <option value="O-">O-</option>
    </select>
    
              
    <button type="submit" class="btn btn-primary" name ="submit" > Search </button>
  </form>
</div>



</body>
</html>






