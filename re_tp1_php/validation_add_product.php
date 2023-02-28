<?php
if (isset($_POST['ajouter'])) {
    $id=$_POST['id'];
    $nomprod=$_POST['nomprod'];
    $prix=$_POST['prix'];
    $image = $_FILES['image']['name'];
    move_uploaded_file($_FILES['image']['tmp_name'],$prenom."\\".$image);
    
    mkdir("./RepUsers/".$id);
    $path = "./RepUsers/".$id;

    $file=fopen( $path."/product_data.txt","a+");

   

     fwrite($file,$id. ":");
    fwrite($file,$nomprod. ":");
    fwrite($file,$prix. ":");
    fwrite($file,$image. "\r\n");
    header("Location: store.php");
}

?>