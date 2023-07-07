<p> Sobre Nós</p>
<img src="ima/sup.jpg" width="350">
<form action="./?p=sobreNos"  method="post">
    <label> @Insta: </label>
    <input type="text" name="Insta" placeholder="@fulaninhodetal"><br>
    <label> @Twitter: </label>
    <input type="text" name="Twitter" placeholder="@chuchudetal"><br>
    <input type="submit">
</form>
<?php
    if (isset($_POST["Insta"])){
        echo "Insta: ".$_POST["Insta"]."<br>";
        echo "Twitter: ".$_POST["Twitter"];
    }else{
        echo "Envie seu Insta ft Twitter (:";
    }
?>
