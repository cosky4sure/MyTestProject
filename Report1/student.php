<?php
session_start();
$valid = $_SESSION['valid'];
if(!$valid || $valid == ""){
header("Location:index.php");
}
?>
<!DOCTYPE html>

<html>
<head>
 <link rel="stylesheet" type="text/css"  href="color.css"/>
<title>TEST</title>

		<style>
		.button {
	  display: inline-block;
	  padding: 8px 15px;
	  font-size: 10px;
	  cursor: pointer;
	  text-align: center;	
	  text-decoration: none;
	  outline: none;
	  color: #fff;
	  background-color:green;
	  border: none;
	  border-radius: 8px;
	  box-shadow: 0 5px #999;
	}

	.button:hover {background-color: blue}

	.button:active {
	  background-color: #3e8e41;
	  box-shadow: 0 5px #666;
	  transform: translateX(4px);
	}


		</style>
</head>
<body>

<form class="contact_form  "action="verify_student.php" method="POST" name="contact_form" style="color:blue;">


	  <ul style="list-style-type:none;">

			<li>
			
			 <label for "name"><h2>Student Login</h2></label></label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp||&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<label><a href="index.php"><h2 style="color:blue">Teacher Login </h2></a></label>||&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<label><a href="admin.php"><h2 style="color:blue">Admin Login </h2></a></label>
			 
			
			</li>
			<li>
			<hr class="horizontal"/>
			</li></br>
			<li>
			
		   <label for "name"> Username:</label> 
		   <input type="text" name="admin" required></br></br>
		   
		   </li>
		   <li>
		     <label for "name"> Password:</label> 
			<input type="password"  name="password" required></br></br>
		   </li>
		   <li>
		     <label for "name"> </label> 
			 <button type="submit" class="button">Login</button>

		   </li>
		   <li>
			</br><hr class="horizontal2"/>
			</li></br>
	   </ul>
 
</body>
</html>