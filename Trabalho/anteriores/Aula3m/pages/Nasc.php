<p>Data de nascimento</p>
<form action="./?p=Nasc"  method="post">
    <label> Dia: </label>
    <input type="text" name="dia"><br>
    <label> Mes: </label>
    <input type="text" name="mes"><br>
    <input type="submit">
</form>
<?php
    if (isset($_POST["dia"])){
        echo "Dia: ".$_POST["dia"]."<br>";
        echo "Mes: ".$_POST["mes"];
    }else{
        echo "Envie seu nascimento";
    }

?>

<br>