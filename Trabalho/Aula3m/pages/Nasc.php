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
<hr>
<img src="ima/we.jpg" width= "250"> 
<hr>

<audio autoplay="autoplay" controls="controls">
<source src="ima/born.mp3" type="audio/mp3" />
seu navegador não suporta HTML5
</audio>

<br>