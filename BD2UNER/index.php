<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/carrusel1.css">
    <link rel="stylesheet" href="css/items1.css">
    <link rel="stylesheet" href="css/footer.css">

</head>
<body>
    <?php
        include_once __DIR__."/php/header.php"; // $header
        include_once __DIR__."/php/login.php"; // $login
        include_once __DIR__."/php/carrusel1.php"; // $carrusel
        include_once __DIR__."/php/item1.php"; // $items
        include_once __DIR__."/php/footer.php"; // $footer
    ?>

    <?php
        echo $header;
        echo $login;
        echo $carrusel;
        echo $items;
        echo $footer;

    ?>
</body>
</html>