
<?php
require_once "./pages/functions.php";
if(isset($_POST["op"])){
    $op = $_POST["op"];
    $v1 = (float)$_POST["valor1"];
    $v2 = (float)$_POST["valor2"];
    echo "<hr>";
    echo gettype($v1);
    echo "<br> $v1";
    echo "<hr>";

    if($op == ""){
        echo "Escolha uma operação";
    }else{
        switch($op){
            case "somar":
                echo "O resultado da Soma é : " .somar($v1, $v2);
            break;
            case "diminuir":
                echo "O resultado da Subtração é : ".diminuir($v1, $v2);
            break;
            case "multiplicar":
                echo "O resultado da Multiplicação é : ".multi($v1, $v2);
            break;
            case "dividir":
                echo "O resultado da Divisão é : ".divi($v1, $v2);
            break;
            default:
                echo "Escolha uma operação válida";
            break;
        }
    }
}



?>

<form method="post">
    <label>Valor 1: </label><br>
    <input type="text" name="valor1"><br><br>
    <label>Valor 2: </label><br>
    <input type="text" name="valor2"><br><br>
    <label>Operação :</label><br>
    <input type="text" name="op"><br><br>
    <input type="submit"><br>
</form>
<img src="ima/nazareconfusamatematica.gif" width= "250">