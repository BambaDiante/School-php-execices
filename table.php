<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Affichage de la table</title>
    <style>
        h1{
            margin:auto;
            justify-content:center;
            text-align:center;
            margin:20px;
        }
        table{
            border-collapse:collapse;
            border:1px solid black;
            margin:auto;
            min-width:300px;
        }
        th{
            border:1px solid black;
            padding:10px;

        }
        #tete{
            color:red;

        }
    </style>
</head>
<body>
    <h1>Affichage de la table de multiplication </h1>
    <?php
      if(isset($_GET['nombre'])){
        $nombre=$_GET['nombre'];
        echo '<table>';
        echo "<tr>";
        echo "<th colspan='2' id='tete'>Table de ".$nombre."</th>";
        echo "</tr>";
        for($i=0;$i<=9;$i++){
            echo "<tr>";
            echo "<th>".($i+1)."x".$nombre."</th>";
            echo "<th>".($i+1)*$nombre."</th>";
            echo "</tr>";
        }
        echo "</table>";
      }    
      else{
        echo "Pas de nombre transmis"; 
      }
    ?>
</body>
</html>