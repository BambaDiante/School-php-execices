<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Troisieme age</title>
</head>
<body>
    <h1>Affichage des informations</h1>
    <?php
       if(isset($_GET['nom'])&&isset($_GET['prenom'])&&isset($_GET['age'])){
        echo 'Votre nom est :'.$_GET["nom"];
        echo "<br>";
        echo 'Votre prenom est '.$_GET["prenom"];
        echo "<br>";
        if($_GET['age']<=60){
           echo 'Votre nombre d\'annees restant pour atteindre 60ans  est :'. (60-$_GET["age"]);
        }
        else if($_GET['age']<=0){
           echo 'Votre age est invalide';
        }
        else if($_GET['age']>60){
            echo "Vous avez depasse 60ans";
        }
       }
       else{
        echo "Aucune information saisie ou champs incomplets";
       }
    ?>
</body>
</html>