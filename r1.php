<!DOCTYPE html>
  <html>
  <head>
  <title>Home</title>
  <link rel="icon" href="https://raw.githubusercontent.com/RJ81881/fantasy/master/PLAY%2011.png"/>
  <link rel="stylesheet" href="CSS/style.css"/>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Flamenco"/>
  </head>

    <body>
	<div class="p1" id="p">
	  <header>
	    <nav>
		<div class="row">
		 
		 <ul>
		  <li><a href="#">ABOUT US</a></li>
		  <li><a href="#">POINT SYSTEM</a></li>
		 </ul>
		</div>
		</nav>
		
	   
	    <div class="signup" id="s">
		
		<form action="r1.php" method="post">
	    <h1>SIGNUP</h1>
	    <input type="text"    min="5" max="20" name="uname"   required   autosave="on"    placeholder="Username" title="Name">
        <input type="password"min="5" max="20" name="pass"    required   autosave="off"   placeholder="Password" title="Password">
        <input type="submit"   name="submit"   value="SIGNUP">
		</form>
		
		<?php
		
 
$servername = "localhost";
$username = "Rahul";
$passworda = "RAHULJAIN@1999";
$dbname = "rahul";

if(isset($_POST['submit']))
        {
		
          $name = $_POST['uname'];		
          $password = $_POST['pass'];
		  
$conn = new mysqli($servername, $username, $passworda, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
         
		 $q = "select * from form where username = '$name' && password='$password' ";
		  $result = mysqli_query($conn,$q);
          $num = mysqli_num_rows($result);
		  
		  if($num == 1)
		  {
			echo "Already a user is registered with the given data";
          }
		  else
		  {
			 $qy = "insert into form(username,password) values ('$name','$password')" ;
			 mysqli_query($conn,$qy);
			 echo "New record created successfully";
			
		  }
		}
		?> 
	    </div>
	       

    </body>
</html>
