<?php
// Vos déclarations de fonctions ici
declare(strict_types=1);
function br(): string {
    return  '<br>';
}
function hn( string $content, int $number ) : string {
    return '<h' . $number .'>' . $content . '</h' . $number . '>'; 
}
function span( string $content, string $police='Arial', string $color='#000000', int $size=12 ): string {
    return '<span style="font-family:' . $police . ';color:' . $color . ';font-size:' . $size .'pt">' . $content . '</span>';
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quelques fonctions</title>
</head>
<body>
    <?=hn('Quelques fonctions',1)?>
    <main>
        <?=hn('Petit titre', 2)?>
        <p>Dans le texte un <?=span('simple span')?> de rien du tout. et un <?=span('autre span', 'Courier New', 'blue', 16)?></p>
    </main>
</body>
</html>