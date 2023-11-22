<!DOCTYPE html>
<?php
$panierTotal = $_COOKIE['panier'];
var_dump($panierTotal);
$total = ($panierTotal['produit1']*5) + ($panierTotal['produit2']*4) +  ($panierTotal['produit3']*6);
//$total = 0;
// $total += $panierTotal['produit1']*5;
// $total += $panierTotal['produit2']*4;
// $total += $panierTotal['produit3']*6;


?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TOTAL PANIER</title>
    <style>
         h1, p{
            text-align: center;
        }
        h1{
            padding-bottom: 15%;
        }
    </style>
</head>
<body>
    <h1>TOTAL ACHATS</h1>
        <p>
            quantité produit1 = <?php echo $panierTotal["produit1"] ?>
        </p>
        <p>
            quantité produit2 = <?php echo $panierTotal["produit2"] ?>
        </p>
        <p>
            quantité produit3 = <?php echo $panierTotal["produit3"] ?>
        </p>
    <p>
        Le total de votre panier = <strong> <?php echo $total ?> €</strong>
    </p>
    <p>
        <a href="./panier.php">modifier le panier</a>
    </p>
    <p>
        <a href="./demarrer.php">vider le panier</a>
    </p>
    
</body>
</html>