<?php

	//database connection code 

	if(isset($_POST['submit'])){

			//store the user input data into some variables 
			$firstName			= $_POST['firstName'];
			$lastName			= $_POST['lastName'];
			$mail				= $_POST['userEmail'];
			$Password 			= $_POST['userPassword'];
			$PresentAddress 	= $_POST['PresentAddress'];
			$PermanentAddress 	= $_POST['PermanentAddress'];
			$City 				= $_POST['City'];
			$State 				= $_POST['State'];
			$Zip 				= $_POST['Zip'];

			//echo "Data : ".$firstName;
			//echo "Data : ".$lastName;
			//echo "Data : ".$mail;
			//echo "Data : ".$Password;
			//echo "Data : ".$PresentAddress;
			//echo "Data : ".$PermanentAddress;
			//echo "Data : ".$City;
			//echo "Data : ".$State;
			//echo "Data : ".$Zip;

			if($firstName == " " || $lastName == " " || $mail == " " || $password == " " || $PresentAddress == " " || 
				$PermanentAddress == " " || $City == " " || $State == " " || $Zip == " "){

				// do some action 

			}else{

				// mySQL code to insert the data into the database 
			}

	}
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<title> php form handling </title>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>

	<section>
		<div class="container">
		<h1> User Information </h1>
		<form method="post" action="">

			<div class="form-row">
			    <div class="form-group col-md-6">
			      <label for="firstName">First Name</label>
			      <input type="text" class="form-control" name="firstName" placeholder="Enter your First Name ">
			    </div>
			    <div class="form-group col-md-6">
			      <label for="lastName">Last Name</label>
			      <input type="text" class="form-control" name="lastName" placeholder="Enter your Last Name ">
			    </div>
			</div>


			  <div class="form-row">
			    <div class="form-group col-md-6">
			      <label for="userEmail">Email</label>
			      <input type="email" class="form-control" name="userEmail" placeholder="Enter your Email ">
			    </div>
			    <div class="form-group col-md-6">
			      <label for="userPassword">Password</label>
			      <input type="password" class="form-control" name="userPassword" placeholder="Make your Password ">
			    </div>
			  </div>

			  <div class="form-group">
			    <label for="inputAddress">Present Address</label>
			    <input type="text" class="form-control" name="PresentAddress" placeholder="Where are you staying right now ? ">
			  </div>

			  <div class="form-group">
			    <label for="inputAddress2">Permanent Address</label>
			    <input type="text" class="form-control" name="PermanentAddress" placeholder="Where is Your native home ?">
			  </div>

			  <div class="form-row">
			    <div class="form-group col-md-6">
			      <label for="inputCity">City</label>
			      <input type="text" class="form-control" name="City">
			    </div>

			    <div class="form-group col-md-4">
			      <label for="inputState">State</label>
			      <select name="State" value="Null" class="form-control">
			        <option selected>Mirpur</option>
			        <option selected>Badda</option>
			        <option selected>Gulshan</option>
			        <option selected>Dhanmondi</option>
			        <option selected>Mohammadpur</option>
			      </select>
			    </div>

			    <div class="form-group col-md-2">
			      <label for="inputZip">Zip</label>
			      <input type="text" class="form-control" name="Zip">
			    </div>
			  </div>

			  <div class="form-group">
			    <div class="form-check">
			      <input class="form-check-input" type="checkbox" id="gridCheck">
			      <label class="form-check-label" for="gridCheck">
			        Check me out
			      </label>
			    </div>
			  </div>

			  <button type="submit" name="submit" class="btn btn-primary">Registration</button>

		</form>
	</div>	
	</section>
	
</body>
</html>