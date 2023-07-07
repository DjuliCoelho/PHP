<?php
require_once "./pages/formula.php";
if(isset($_POST["op"])){
    $op = $_POST["op"];
    $v1 = (float)$_POST["valor1"];
    $v2 = (float)$_POST["valor2"];
    $v3 = (float)$_POST["valor3"];
    echo "<hr>";
    echo gettype($v1);
    echo "<br> $v1";
    echo "<hr>";

   
    if($op == ""){
        echo "dividir";
    }else{
        switch($op){
            
            case "multi":
                echo "".multi($v1, $v2, $v3);
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
    <label>Valor 3: </label><br>
    <input type="text" name="valor3"><br><br>
    <label>Multi :</label><br>
    <input type="text" name="op"><br><br>
    <input type="submit"><br>
</form>
<img src="ima/nazareconfusamatematica.gif" width= "250">
