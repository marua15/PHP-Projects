<?php

$id=$_POST['id'];
$firstname=$_POST['fname'];
$lastname=$_POST['lname'];
$address=$_POST['address'];
$zip=$_POST['zip'];
$city=$_POST['city'];
$state=$_POST['state'];
$email=$_POST['eaddress'];
$phone=$_POST['phone'];
$checkinDate=$_POST['checkindate'];
$checkoutDate=$_POST['checkoutdate'];

$servername = "localhost";
$username = "username";
$password = "";
$dbname = "hotelres_connection";

try {
  $conn = new PDO("mysql:host=$servername;hotelres_connection=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql = "INSERT INTO hotelres (id, fname, lname,address,zip,city,state,eaddress,phone,checkindate,checkoutdate)
  VALUES ('$id', '$firstname', '$lastname','$address','$zip','$city','$state','$email','$phone','$checkinDate','$checkoutDate')";
  // use exec() because no results are returned
  $conn->exec($sql);
  echo "New record created successfully";
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

$conn = null;



?>