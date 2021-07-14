<form action="contato_controller.php.php" method="post"> 

 <input type="hidden" name = "acao" value="incluir">



Nome: <input type="text" name="nome"><br>
Telefone: <input type="text" name="telefone"><br>


 <input type="submit" value="Cadastrar >>">


</form>
<?php

if (isset($_GET["msg"])) {

echo "<h1>". $_GET["msg"]. "</h1>";
}
?>