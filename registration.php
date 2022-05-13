<?php include('action_page.php'); ?>
<?php
$u = $_GET['un'];
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="bootstrap.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
  background-image: url("p2.jpg");
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

input[type=text], select {
  width: 100%;
  padding: 12px 14px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 14px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}


</style>
</head>
<body>

<div class="topnav">
 
   <?php
    if($u==1){
    ?>
    <a href="home.php?un=1">Home</a>
   <a class="active" href="registration.php?un=1">Registration</a>
   <div class="topnav-right">
    <a href="logout.php"> Log out </a>
    <a href="#about">About</a>
  <a href= "settings.php">Settings </a>

  <?php
}
else{
?>
<a  href="home.php?un=0">Home</a>
   <a class="active" href="registration.php?un=0">Registration</a>
   <a href="want_organ.php?un=0">Want Organ</a>
   <div class="topnav-right">
    <a href="logout.php"> Log out </a>
    <a href="#about">About</a>
<?php
}
?>
    
  </div>
</div>



<div class="col-lg-4">
    
</div>

<div class="col-lg-2">
    
</div>
<div class="col-lg-6">
    <h3>Registration Form</h3>
  <form action="registration.php?un=0" method="post">

    <?php include('check1.php'); ?>


    <label>Donor_ssn*</label>
    <input type="text" name="donor_ssn" class="form-control" >
    
    <label for="donation_part">Donation_Part*</label>
    <select id="donation_part" name="donation_part">
      <option value="Eye">Eye</option>
      <option value="Kidney">Kidney</option>
      <option value="Both">Both</option>
    </select>
     <label for="donation_type">Donation_Type*</label>
    <select id="donation_type" name="donation_type">
      <option value="Advance">Advance</option>
      <option value="Instant">Instant</option>
    </select>
     <label for="blood_group">Blood_Group*</label>
    <select id="blood_group" name="blood_group">
      <option value="A+">A+</option>
      <option value="A-">A-</option>
      <option value="B+">B+</option>
      <option value="B-">B-</option>
      <option value="AB+">AB+</option>
      <option value="AB-">AB-</option>
      <option value="O+">O+</option>
      <option value="O-">O-</option>
    </select>
    <label for="choose_hospital">Choose Hospital*</label>
    <select id="choose_hospital" name="choose_hospital">
      <option value="Square,Panthapath">Square,Panthapath</option>
      <option value="Apollo,Bashundhara">Apollo,Bashundhara</option>
      <option value="Labaid,Dhanmondi">Labaid,Dhanmondi</option>
      <option value="Ibn Sina,Dhanmondi">Ibn Sina,Dhanmondi</option>
    </select>
              <label>Referer_ssn*</label>
              <input type="text" name="referer_ssn" class="form-control" >
    <button type="submit" class="btn btn-primary" name ="submit" onclick='return checkdelete()' > Register </button>
  </form>
</div>




</body>
</html>

<script>
  function checkdelete(){
    return confirm('Once my death has been confirmed and the death certification has been released by a doctor, I hereby give permission to donate:');
  }
</script>
