<?php 

// Server name must be localhost 
$host = "localhost"; 
// In my case, user name will be root 
$user = "root"; 
// Password is empty 
$password = ""; 
$dbname = "survey_db";
//$conn =  new mysqli($host, $user, $password,$host); 
//if (!$conn ->error)  
//die("Connection failure! "); 
//echo "Database Connected!";
//mysqli_close($conn);


// Creating a connection 
$conn =  new mysqli('localhost:85','root','','survey_db'); 

// Check connection 
if (!$conn) { 
	die("Connection failure "); 
} 
echo "Database Connected";

mysqli_close($conn);