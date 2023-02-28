<?php
if (isset($_POST['supprimer_produit'])) {
    $prenom=$_COOKIE["username"];

    $id = $_POST['id'];
    $newProducts = array();
    foreach ($products as $product) {
        if ($product['id'] != $id) {
            $newProducts[] = $product;
        }
    }
    $products = $newProducts;
    // Sauvegarder les données des produits dans un fichier texte
    mkdir("./RepUsers/".$id);
    $path = "./RepUsers/".$id;

    $file=fopen( $path."/product_data.txt","a+");
   
    foreach ($products as $product) {
        fwrite($file, $product['id'].",".$product['nomprod'].",".$product['prix'].",".$product['image']."\n");
    }
    fclose($file);
    header("Location: formulaireee.php");
}
?>