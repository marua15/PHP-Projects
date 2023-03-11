 <?php


$servername ="localhost";
$username = "root";
$passwordDB = "";
$database = "portal_connection";


//Grabbing the data 
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$id=$_POST['id'];
$password=$_POST['password'];

// Create connection
$conn = new mysqli($servername,$username,$passwordDB,$database);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

$sql = "INSERT INTO portal (id,firstname, lastname, password)
VALUES ('$id', '$firstname', '$lastname', '$password')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();





// if ($conn->connect_error) {
//   die("Connection failed: " . $conn->connect_error);
// }else{

//   $sql="INSERT  into registration (id,first_name,last_name,password)
//   values('$id','$firstname','$lastname','$password'))";

//  $result = $conn->query($sql); 

//  if(!$result){
//   echo "Invalid query";
//  }

//   echo"registration successfuly";
  
// }


?>
