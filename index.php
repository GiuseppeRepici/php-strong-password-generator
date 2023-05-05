<?php session_start();?>

<?php include __DIR__ ."/funzione.php"?>
<?php 
    if(isset($_GET["lunghezza"])){
    $lunghezza = $_GET["lunghezza"];
    generaStringaRandom($lunghezza); 
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body class="bg-primary">
    <h1 class="text-center">STRONG PASSWORD GENERATOR</h1>
    <H2 class="text-center">GENERA UNA PASSWORD SICURA</H2>
<div class="container bg-light">
    <form action="index.php" method="GET">
            <div class="mb-4 d-flex justify-content-between">
                <label class="" for="lunghezza">Lunghezza password:</label>
                <input class="" type="text" id="lunghezza" name="lunghezza">
            </div>
            <button type="submit" class="mb-5 btn btn-primary">Invia</button>
            <button type="reset" class="mb-5 btn btn-secondary">Annulla</button>
    </form>
</div>
   
    
</body>
</html>