<?php
$colors = array(
    'red',
    'blue',
    'black',
    'green',
    'grey',
);

$otherColors = array(
    'green',
    'blue',
    'black',
);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>Fonctions tableaux</title>
</head>
<body>
    <header>
        <h1>Fonctions tableaux</h1>
    </header>
    <main>
        <h2>Display $colors array in alphabetical order</h2>
        <?php
            echo "<ul>";
            sort($colors);
            foreach($colors as $color) {
                echo '<li>' .$color . '</li>';
            }
            echo "</ul>"
        ?>
        <h2>Apply a formating to each elements and display them, without any loop</h2>
        <?php
            function createLi($item) {
                $newLi = '<li>' . strtoupper($item) . '</li>';
                echo  $newLi;
            }
           array_map("createLi",$colors);
        ?>
        <h2>Add the values of $otherColors array to $colors ones and display all combined values on one line, without any loop</h2>
        <?php
            echo implode(',',array_merge($colors, $otherColors));
        ?>
    </main>
</body>
</html>