<?php include __DIR__ ."/funzione.php"?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
    <form action="index.php" method="GET">
            <div class="mb-4">
                <label for="lunghezza">lunghezza password</label>
                <input type="text" id="lunghezza" name="lunghezza">
            </div>
            <button class="btn btn-primary">Invia</button>
    </form>

    <h2><?php 
    if(isset($_GET["lunghezza"])){
    $lunghezza = $_GET["lunghezza"];
    echo generaStringaRandom($lunghezza); 
    }
    ?></h2>
</body>
</html>