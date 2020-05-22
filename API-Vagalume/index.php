<!DOCTYPE html>
<html lang="en">
<?php
include_once('search.php');
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>API Vagalume</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>Procurar artista:</h1>
    <form action="." method="post">
        <input type="text" placeholder="Nome do artista..." name="search" value="">
        <input type="submit" name="btn-submit" value="Buscar">
    </form>

    <img src="<?php echo $image ?>">

    <h2>Nome:</h2>
    <p><?php echo $artistName ?></p>

</body>

</html>