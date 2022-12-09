<?php 
 $mois_coul = array( 'Janvier' => 'blue', 'Février' => 'white', 'Mars' => 'Red', 'Avril' => 'Yellow', 'Mai' => 'Grey', 'Juin' => 'Lime', 'Juillet' => 'lightblue', 'Août' => 'fuchsia', 'Septembre' => 'lightgrey', 'Octobre' => 'olive', 'Novembre' => 'pink', 'Décembre' => 'purple', )
 ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <title>Mois couleur</title>
    <style>
        .container {
            width : 80%;
            border : 1px solid brown;
            margin : 10px;
            padding : 20px;
        }
    </style>
</head>
<body>
    <div id="wrapper">
        <header>
            <h1>Mois couleur</h1>
        </header>
        <main>
            <div class="container">
                <!--Première table ici -->
                <table>
                    <?php
                        foreach($mois_coul as $key => $value) {
                            echo '<tr><td style="background-color:' . $value . '">' . $key . '</td></tr>';                        }
                    ?>
                </table>
            </div>
            <div class="container">
                <!--Seconde table ici -->
                <table>
                    <tr>
                        <?php 
                            foreach($mois_coul as $key => $value){
                                echo '<td style="background-color:' . $value . '">' . $key . '</td>'; 
                            }
                        ?>
                    </tr>
                </table>
            </div>
        </main>
        <footer>
        </footer>
    </div>
</body>
</html>