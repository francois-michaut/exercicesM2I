<?php 
    require_once "data.php";
    // var_dump($previsions);
  
   
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Météo</title>
</head>
<body>
    <h1>Météo</h1>
    <main>
        <table>
            <?php 
                foreach($previsions as $key => $value) {
                 $date = new DateTime($key);

                    echo '<tr><td>' . $date->format('l j F ') . '</td><td><img src=' . $value[FILENAME_K] . ' alt=' . $value[ALT_K] .'/></td><td>' . $value[TEMPS_K] . '</tr>';
                }
            ?>
        </table>
    </main>
</body>
</html>