<!DOCTYPE HTML>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Página Exemplo</title>
    </head>
    <body>
        <?php
            require_once("./menu.php");
        ?>
        <h1> Página de exemplo </h1>
        <a href="./exemplo.php?parametro=exemplo">Exemplo GET</a>
        <?php
            include_once("./pagina.php");
            include_once("./menu.php");

        if(isset($_GET["parametro"])){
            echo $_GET["parametro"];
        }
        ?>
    </body>
</html>

<?php 
    $varPrint = print "Hello Word! <br>";
    echo $varPrint;
?>