<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter Produit</title>
    <link rel="stylesheet" href="add_product.css">
</head>
<body>
    <form action="validation_add_product.php" method="post">
        <div class="ajouter">
        <label for="id">Identifiant : </label>
        <input type="number" name="id" required>
        <label for="nomprod">Nom du produit : </label>
        <input type="text" name="nomprod" required>
        <label for="prix">Prix : </label>
        <input type="number" name="prix" required>
        <label for="image">Image : </label>
        <input type="image" name="image" required>
        <button type="submit" name="ajouter">
            Ajouter
        </button>
        </div>
        
    </form>
</body>
</html>