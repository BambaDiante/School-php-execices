<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Premier test</title>
    <style>
        h1,h2,section{
            margin:auto;
            justify-content:center;
            text-align:center;
        }
        table{
            border-collapse:collapse;
            border:1px solid black;
            margin:auto;
        }
        thead,tr,th,td{
            border:1px solid black;

        }
    </style>
</head>
<body>
    <h1>Voici le titre</h1>
    <div class="">
        <h2>Exercice 1</h2>
        <section>
            <?php
                DEFINE("PI",3.14);
                $rayon=5;
                $surface=$rayon*$rayon*PI;
                $diametre=2*$rayon;
                $perimetre=2*$rayon*PI;
                echo "Le diametre du cercle est: ".$diametre."<br>";
                echo "Le perimetre du cercle est: ".$perimetre."<br>";
                echo "La surface du cercle est: ".$surface;
                echo "<br>";
            ?>
        </section>
        <h2>Exercice 2</h2>
        <section>
            <table>
                <thead>
                    <tr>
                        <th>Nombre premiers</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th>1</th>
                    </tr>
                    <?php
                       
                       for($i=2;$i<30000;$i++){
                        $premier=3000;
                            for($j=2;$j<$i;$j++){
                                if($i%$j==0){
                                    $premier=0;
                                    break;
                                }
                            }
                            if($premier!=0){
                                echo "<tr>";
                                echo"<th>$i</th>";
                                echo "<tr>";
                            }
                                                      
                        }
                       
                    ?>
                </tbody>
            </table>
        </section>
        <h2>Exercice 3</h2>
        <section>
           <table>
                <thead>
                    <tr >
                        <th colspan="3">L2 informatique</th>
                    </tr>
                    <tr>
                        <th>Prenom</th>
                        <th>Nom</th>
                        <th>Note</th>
                    </tr>
               </thead>
               <tbody>
                  <?php
                     $eleves = [
                        'eleve1' => [
                            'nom' => 'Malick',
                            'prenom' => 'Niang',
                            'note' => 20
                        ],
                        'eleve2' => [
                            'nom' => 'ALiou',
                            'prenom' => 'Gueye',
                            'note' => 20
                        ],
                        'eleve3' => [
                            'nom' => 'Cheikh',
                            'prenom' => 'Fam',
                            'note' => 20
                        ],
                        'eleven' => [
                            'nom' => 'Haroun',
                            'prenom' => 'Mahamat',
                            'note' => 20
                        ]
                    ];  
                    $i=0;
                    foreach($eleves as $eleve ){
                           echo "<tr>"; 
                           echo "<td>".$eleve['nom']."</td>";
                           echo "<td>".$eleve['prenom']."</td>";
                           echo "<td>".$eleve['note']."</td>";
                           echo "</tr>";
                           $i++;
                        }             
                  ?>
               </tbody>
           </table>
        </section>
    </div>
</body>
</html>