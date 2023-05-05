<?php 
function generaStringaRandom($lunga) {
    $caratteri = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@[]{}#?!';
    $stringaRandom = '';
    for ($i = 0; $i < $lunga; $i++) {
        $stringaRandom .= $caratteri[rand(0, strlen($caratteri) - 1)];
    }
    session_start();
        $_SESSION["password"] = $stringaRandom;
        header("Location: session.php");
}

?>