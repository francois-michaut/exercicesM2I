<?php
const SITE_NAME = 'Pépinière Dominique';
const TITLE_SEP = ' - ';
define("URL_SEP", '/');
define("BASE_URL", 'http://www.pepdom.ca');
define("HOME_NAME",'Home');
define("PRODUCTS_NAME", 'Products');
define("ABOUT_NAME", 'About');
define("HOME_URL", BASE_URL);
define("PRODUCTS_URL", BASE_URL.URL_SEP.strtolower(PRODUCTS_NAME));
define("ABOUT_URL", BASE_URL.URL_SEP.strtolower(ABOUT_NAME));
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= SITE_NAME?></title>
</head>
<body>
    <div id="wrapper">
        <header>
            <h1>
                <?= HOME_NAME ?>
            </h1>
            <nav>
            <ul>
                <li><a href="<?= BASE_URL ?>"><?= HOME_NAME ?></a></li>
                <li><a href="<?= PRODUCTS_URL ?>"><?= PRODUCTS_NAME ?></a></li>
                <li><a href="<?= ABOUT_URL ?>"><?= ABOUT_NAME ?></a></li>
            </ul>
            </nav>
        </header>
        <main>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem, eius doloremque fugit quisquam aperiam ipsum, earum maiores voluptas hic, iure quia. Ex, accusamus. Libero, illo.
            </p>
        </main>
    </div>
</body>
</html>