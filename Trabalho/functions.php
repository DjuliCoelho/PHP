<?php

function load_page(){
    if(isset($_GET['p'])){
        $page = $_GET['p'];
    }else{
        $page = "home";
    } 

    switch($page){
        case "home":
            require_once("./pages/home.php");
        break;
        case "sobreNos":
            require_once("./pages/sobreNos.php");
        break;
        case "contato":
            require_once("./pages/contato.php");
        break;
        case "calcular":
            require_once("./pages/calcular.php");
        break;
        default:
        require_once("./pages/error404.php");
        break;
    }
}

function load_title(){
    //(Condição) ? Verdadeiro : Falso;
    isset($_GET["p"])? $titulo = $_GET["p"]: $titulo = "home";

    switch($titulo){
        case "home":
            echo "Página Home";
        break;
        case "sobreNos":
            echo "Página Sobre Nós";
        break;
        case "contato":
            echo "Página de Contato";
        break;
        case "calcular":
            echo "Página Calcular";
        break;
        default:
            echo "Página de ERRO";
        break;
        }
}

?>