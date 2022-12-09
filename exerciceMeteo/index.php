<?php 
    require_once "data.php";
    // var_dump($previsions);
    foreach($previsions as $value => $day) {
        print_r(gettype($value));
        $date = new DateTime($value);
        $date->format('S');
        var_dump($date);
        // echo $value;
        // $value = new DateTime();
        // $value->format('l');
        // $value-> format('d');
        // $value-> format('n');
        // var_dump(new Datetime($value)format('l d n'));
    }
   
    
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
                    echo '<tr><td>' . $key . '</td><td><img src=' . $value[FILENAME_K] . ' alt=' . $value[ALT_K] .'/></td><td>' . $value[TEMPS_K] . '</tr>';
                }
            ?>
        </table>
    </main>
</body>
</html>