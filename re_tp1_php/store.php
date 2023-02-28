<?php

 echo "<div class='products'>";
echo "<h2>Liste des produits:</h2>";

 foreach ($products as $product) {
     echo "<div class='product'>";
     echo "<p>".$product['image']."</p>";
     echo "<h3>".$product['nomprod']."</h3>";
     echo "<p>Prix: ".$product['prix']." €</p>";
     echo "</div>";
 }
 echo "</div>";
 $products[] = array(
    "id" => $product[0],
     "nomprod" => $product[1], 
     "prix" => $product[2], 
     "image" => $product[3]);
     $id=$_POST['id'];
    $nomprod=$_POST['nomprod'];
    $prix=$_POST['prix'];
    $image = $_FILES['image']['name'];

?> 