<?php
// print_r($_POST);
if (!isset($_POST['first-name'], $_POST['last-name'], $_POST['username'], $_POST['email'], $_POST['password-name'])) return;
$firstName = $_POST['first-name'];
$lastName = $_POST['last-name'];
$userName = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$root_path = $_SERVER["DOCUMENT_ROOT"];
mkdir($root_path . "/RepUsers/" . $username);
$path =  $root_path . "/RepUsers/" . $username;

$file = fopen($_SERVER[""] . "/sign_up_data.txt", "a+");
fwrite($file, $firstName . ":" . $lastName . ":" . $userName . ":" . $email . ":" . md5($password) . "\r\n");
header("Location: login.php");
