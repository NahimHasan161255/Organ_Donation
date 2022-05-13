<?php include('signup.php'); ?>
<!DOCTYPE html>
<html>

<head>


  <title>organ_donation</title>
  <link rel = "stylesheet" type="text/css" href="bootstrap.css">
  <link rel="stylesheet" type="text/css" href="style.css">
  

<style>
.menu_bar {
  overflow: hidden;
  background-color: #333;
}
.menu_bar a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}
</style>


</head>




<body>


<div class="menu_bar">
        <a class="active" href="#">Organ Donation Bangladesh</a>
</div>





 <div class="container"> 
    <div class="raw">
       <div class="col-lg-4">
          <h2>Login</h2>
        	<form action="validation.php" method="post">
        	   <div class="form-group">
        			<label>UserName</label>
        			<input type="text" name="username" class="form-control" placeholder="UserName">
        		</div>  
        		<div class="form-group">
        			 <label>Password</label>
        			 <input type="password" name="password" class="form-control" placeholder="Password">
        		 
        		</div>
        		<button type="submit" class="btn btn-primary">Log in</button>
        		
        	</form>
        </div>
                             <div class="col-lg-4">
                             </div>

              <div class="col-lg-4">

        	<h4> Create a account if you don't have any</h4>
        	<form action = "login.php" method="post" >

            <?php include('check.php'); ?>


        		<div class="form-group">
        			<label>Name*</label>
        			<input type="text" name="name" class="form-control" placeholder="Name">  
        		</div>
        		<div class="form-group">
        			<label>NID*</label>
        			<input type="text" name="nid" class="form-control" placeholder="NID">  
        		</div>
        		<div class="form-group">
        			<label>Gmail*</label>
        			<input type="email" name="gmail" class="form-control" placeholder="Email">  
        		</div>
        		<div class="form-group">
        			<label>Address*</label>
        			<input type="text" name="address" class="form-control" placeholder="Address">  
        		</div>
        		<div class="form-group">
        			<label>Contact Number*</label>
        			<input type="text" name="contact_number" class="form-control" placeholder="Contact Number">  
        		</div>
        		<div class="form-group">
        			<label>UserName*</label>
        			<input type="text" name="username" class="form-control" placeholder="UserName">  
        		</div>
        		<div class="form-group">
        			 <label>Password*</label>
        			 <input type="password" name="password" class="form-control" placeholder="Password">
        		 
        		</div>
        		<button type="submit" class="btn btn-primary" name ="submit" > Sign up </button>
        		
        	</form>


        </div> 
    </div>
 </div>


</body>
</html>
