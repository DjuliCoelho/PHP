<!DOCTYPE HTML>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Aula de PHP</title>
</head>
<body>
<?php
include("./menu.php");

print "Olá mundo.<br>";

echo "Olá mundo.<br>";

$var = "5";

print $var;
?>
<br>
<?php
echo $var;
echo "<br>";
$var2 = print "Teste de variável com print<br>";
print $var2;
/*
//$var3 = echo "Teste de variável com echo<br>";
*/

$var4 = 15;
$var5 = 50;
$total = $var4 + $var5;

echo "<br> O total é: ".$total."!";
echo '<br>  "total" é: ';
echo "<br>  \"total\" é: ";
echo "<br> O total é: $total!";

echo "<br>";
echo $var4 * (int)$var;

echo "<hr>";
//$var = (int)$var;
echo gettype($var);
echo "<br>";
$var6 = "10 pessoas5";
$var6 = (int)$var6;

echo $var4 + $var6;

echo "<br> $var6 <hr>";

$array = array(
    1 => "Pedro",
    1.5 => "Felipe",
    "1" => "Tiago",
    true => "Andre",
);

print_r ($array);
var_dump($array);
echo "<hr>";

if ($var4 > $var5 ){
    echo "Variável 4 é maior<br>";
    if($var4 == "15"){        
        echo "Variável 4 é igual a 15<br>";
    }else{       
        echo "Variável 4 não é uma string"; 
    }
}elseif($var5 == 50){
    echo "Variável 5 é 50<br>";
}else{    
    echo "Variável 5 é maior<br>";
}
echo "<hr>";
$i=10;
while ($i == 11){
    $i--;
    echo "$i ";
}
echo "<br>";

$i=10;
do{
    $i--;
    echo "$i ";

}while ($i == 11);


echo "<hr>";

for ($j = 0, $cont = 0; $j < 10 ; $cont++ ){
    echo "$j  cont: $cont<br>";
    $j++;
}
$pagina = "dividir";
$a = 10;
$b = 5;
switch($pagina){
    case "mais":
        echo $a + $b;
    break;
    case "menos":
        echo $a - $b;
    break;
    default:
        echo "<p>escolha uma operação</p>";
    break;
}


?>


<br><br><br><br><br><br><br><br><br>
</body>
</html>