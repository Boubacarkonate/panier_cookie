<!DOCTYPE html>
<?php
$panier = $_COOKIE["panier"];       //récupération de mon cookie avec la clé panier de la page demarrage.php
var_dump($panier);

switch (@$_GET['stock']) {              //@ = opérateur de contrôle d'erreur  => utiliser dans ce projet pour supprimer le warning
    case 'produit1':
        $panier['produit1']++;                      // incrémentation de la future valeur du cookie
                    //clé           ,   valeur          
        setcookie("panier[produit1]",$panier["produit1"]);      // => cookie panier modifié
        break;
    case 'produit2':
        $panier['produit2']++;
        setcookie("panier[produit2]",$panier["produit2"]);
        break;
    case 'produit3':
        $panier['produit3']++;
        setcookie("panier[produit3]",$panier["produit3"]);
        break;
    
    default:
        # code...
        break;
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PANIER</title>
    <style>
        h1,p{text-align: center;}
        table{width: 300px; margin: auto; border: solid; border-collapse: collapse; }
        td{ border: solid;text-align: center;width: 200px;}
    </style>
</head>
<body>
    <h1>PANIER</h1>
    <h1>AJOUTER DES ARTICLES</h1>

    <!-- table>tr>td*2   méthode emmet-->
    <table>
        <tr>
            <td>AJOUTER</td>
            <td>VOTRE COMMANDE</td>
        </tr>
        <tr>
            <td><a href="./panier.php?stock=produit1">produit 1</a>[5€]</td>
            <td><?php echo $panier['produit1'] ?></td>
        </tr>
        <tr>
            <td><a href="./panier.php?stock=produit2">produit 2</a>[4€]</td>
            <td><?php echo $panier['produit2'] ?></td>
        </tr>
        <tr>
            <td><a href="./panier.php?stock=produit3">produit 3</a>[6€]</td>
            <td><?php echo $panier['produit3'] ?></td>
        </tr>
    </table>
    <p>
        <a href="./demarrer.php">vider le panier</a>
    </p>
    <p>
        <a href="total.php">TOTAL</a>
    </p>

</body>
</html>