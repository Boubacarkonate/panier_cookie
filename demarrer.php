<?php
setcookie("panier[produit1]",0);
setcookie("panier[produit2]",0);
setcookie("panier[produit3]",0);

header("location:panier.php");  //redirection à la page panier.php => au lieu que l'utilisateur accède à cette page qui lui sera inutile, on le redirige automatiquement vers une autre page