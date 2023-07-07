<?php
(if(isset($_POST["cadastro"])){
    $cadastro = $_POST["cadastro"];
    $c1 = (float)$_POST["campo1"];
    $c2 = (float)$_POST["campo2"];
    echo "<hr>";
    echo gettype($c1);
    echo "<br> $c1";
    echo "<hr>";)

    if($cadastro == ""){
        echo "Preencha os campos";
    }else{
        while($cadastro){
            case "123":
                echo " : " .somar($v1, $v2);
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