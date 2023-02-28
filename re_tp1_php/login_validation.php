<?php
if (isset($_POST['login'])) {
   $username=$_POST['username'];
   $password=$_POST['password'];

   $path = "./RepUsers/".$username;

   $file=fopen( $path."/sign_up_data.txt","a+");
   

   while (!feof($file)) {
    $string=fgets($file);
   $array=explode(":",$string);
    if ($username==@$array[2] && md5($password)==substr(@$array[4],0,32)) {
        header("Location: formulaireee.php");
    }
   }
   echo("mot de passe ou identifiant est incorrect :( ");
}

?>