<?php
include('add_hospital.php');

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
  <a  href="display.php">Users Details</a>
  <a href="donation_details.php">Donation Details</a>
  <a class="active" href="hospital_details.php">Hospital Details</a>
  <a  href= "check_up.php">Check_up Details</a>
   <a href= "agreement.php">Agreement Details</a>
  <div class="topnav-right">
    <a href="logout.php"> Log out </a>
  <a href= "settings.php">Settings </a>




  </div>
</div>



<div class="col-lg-6">

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

$qu ="SELECT * FROM hospital";
$data = mysqli_query($con,$qu);
$total = mysqli_num_rows($data);

if($total != 0)
{
  ?>

<table>
  <tr>
    <th> Hospital Name </th>
    <th> Contact Number </th>
    <th> Operations </th>
  </tr>



  <?php
  while($result = mysqli_fetch_assoc($data)){

echo"<tr>
    <td>".$result['HOSPITAL_NAME_BRANCH']."</td>
    <td>".$result['HOSPIATL_CONTACT']."</td>
        <td> <a href='delete3.php?un=$result[HOSPITAL_NAME_BRANCH]' onclick='return checkdelete()'> Delete </a> </td>
  </tr>";

  }

}
else
{
echo "no found";
}
?>
</table>




</div>

<div class="col-lg-6">
    <h3>Add New Hospital</h3>

  <form action="hospital_details.php?un=1" method="post">
    
    <?php include('check.php'); ?>

    <label><b>Hospital Name*</b></label>
    <input type="text" name="hospital_name" class="form-control" required="">
    <br>
    <label><b>Contact Number*</b></label>
    <input type="text" name="contact_number" class="form-control" required="">
    <br>
    
    <button type="submit" class="btn btn-primary" name ="submit" > Add </button>
  </form>
</div>




</body>
</html>
<script>
  function checkdelete(){
    return confirm('Are you sure you want to delete this data???');
  }
</script>