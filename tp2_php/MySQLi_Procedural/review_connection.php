<?php


//Grabbing the data 
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$email=$_POST['email'];
$moviename=$_POST['moviename'];
$rate=$_POST['rate'];


$servername = "localhost";
$username = "root";
$password = "";
$database="review_connection";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

$sql = "INSERT INTO review (firstname, lastname, email, moviename, rate)
VALUES ('$firstname', '$lastname', '$email', '$moviename', '$rate')";

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);




?>