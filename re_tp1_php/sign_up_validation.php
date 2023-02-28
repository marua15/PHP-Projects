<?php
if (isset($_POST['signup'])) {
    $firstname=$_POST['first-name'];
    $lastname=$_POST['last-name'];
    $username=$_POST['username'];
    $email=$_POST['email'];
    $password=$_POST['password'];

    mkdir("./RepUsers/".$username);
    $path = "./RepUsers/".$username;

    $file=fopen( $path."/sign_up_data.txt","a+");
    fwrite($file,$firstane. ":");                                                                                            
    fwrite($file,$lastname. ":");
    fwrite($file,$username. ":");
    fwrite($file,$email. ":");
    fwrite($file,md5($password)."\r\n");
    header("Location: login.php");
}
?> 