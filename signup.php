		
		<?php
		session_start();
		header('location:Login.php');
 
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