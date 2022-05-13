
<?php
include('check_up_details.php');
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
  <a  href="home.php?un=1">Home</a>
  <a  href="display.php">Users Details</a>
  <a href="donation_details.php">Donation Details</a>
  <a href="hospital_details.php">Hospital Details</a>
  <a class="active" href= "check_up.php">Check_up Details</a>
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
label{
  color: white;
}
</style>

<?php



$con = mysqli_connect('localhost','root');
mysqli_select_db($con, 'organ_donation');

error_reporting(0);

$qu ="SELECT * FROM check_up";
$data = mysqli_query($con,$qu);
$total = mysqli_num_rows($data);

if($total != 0)
{
  ?>

<table>
  <tr>
        <th>Check Up Serial</th>
        <th>Check Up Details</th>
        <th>Tissue Type</th>
        <th>Donation Serial</th>
        <th colspan="2"> Operations </th>
  </tr>



  <?php
  while($result = mysqli_fetch_assoc($data)){

echo"<tr>
    <td>".$result['CHECK_UP_SERIAL']."</td>
    <td>".$result['CHECK_UP_DETAILS']."</td>
        <td>".$result['TISSUE_TYPE']."</td>
        <td>".$result['DONATION_SERIAL']."</td>
        <td> <a href='delete2.php?un=$result[CHECK_UP_SERIAL]' onclick='return checkdelete()'> Delete </a> </td>
  </tr>";

  }

}
else
{
echo "no data found";
}
?>
</table>


    
</div>

<div class="col-lg-6">
    <h3>Add new check up details</h3>

  <form action="check_up.php?un=1" method="post">
    
    <?php include('check.php'); ?>

    <label><b>Check_up_Serial*</b></label>
    <input type="text" name="check_up_serial" class="form-control" required="">
    <br>
    <label><b>Check_Up_Details*</b></label>
    <input type="text" name="check_up_details" class="form-control" required="">
    <br>
    <label><b>Tissue_Type*</b></label>
    <input type="text" name="tissue_type" class="form-control" required="">
    <br>
    <label><b>Donation_Serial*</b></label>
    <input type="text" name="donation_serial" class="form-control" required="">
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