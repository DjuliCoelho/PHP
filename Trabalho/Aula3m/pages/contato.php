<p>Página de Contato</p>
<img src="ima/giphy.gif" width= "250"> 
<form action="./?p=contato"  method="post">
    <label> Nome: </label>
    <input type="text" name="nome"><br>
    <label> Sobrenome: </label>
    <input type="text" name="sobrenome"><br>
    <input type="submit">
</form>
<?php
    if (isset($_POST["nome"])){
        echo "Nome: ".$_POST["nome"]."<br>";
        echo "Sobrenome: ".$_POST["sobrenome"];
    }else{
        echo "Envie seu formulario";
    }
?>
<audio autoplay="autoplay" controls="controls">
<source src="ima/lady.mp3" type="audio/mp3" />
seu navegador não suporta HTML5
</audio>

<br><br><br><br><br><br>