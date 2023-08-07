<?php
    session_start();
    session_destroy();
    $_SESSION = array();
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../pags/style.css" >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="shortcut icon" href="../src/img/spot-icon.ico" type="image/x-icon">
    <script src="../src/scripts/JQuery/jquery-3.6.4.min.js"></script>
    
    <title> Pesquisa de Campo 4TI - Campus Camaçari</title>
</head>
<body>    
    <header>
        <figure class="head-logo">
            <a href="#"><img src="../src/img/ifba-logo.png" alt="IFBA Camaçari Logo"></a>
        </figure>
        <div class="head-nav">
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="pag1.php">Pag 1</a></li>
            <li><a href="pag2.php">Pag 2</a></li>
            <li><a href="pag3.php">Pag 3</a></li>
            <li><a href="about.php">Quem Somos</a></li>
            </div>
            <div class="head-nav">
                <li><a href=""><i class="fa fa-search" ></i></a></li>
                <li><a href="../crud/login.php"><i class="fa fa-cog" ></i></a></li>
                
            </ul>
        </div>
    </header>


