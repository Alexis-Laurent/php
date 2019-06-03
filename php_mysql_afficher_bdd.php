<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>    
    <?php
    // Connexion à la base de données
    try {
        $bdd = new PDO('mysql:host=localhost;dbname=produit;charset=utf8','root','');
    } catch(Exception $e) {
        die('Erreur : '.$e->getMessage());
    }

    // Récupération des produits
    $reponse = $bdd->query('SELECT * FROM produit');


    // affichage
    while ($donnees = $reponse->fetch())
    {
        echo $donnees['nom']." ".$donnees['prix_ht']." ".$donnees['prix_ttc']."<br>";
    }            

    // Fermeture du curseur d'analyse des résultats
    $reponse->closeCursor();
    ?>    
    
</body>
</html>