<?php

require "class_contato.php.php";
require "contato_model.php.php";

$requisicao = $_POST["acao"];

if ($requisicao == "incluir") {

$contato = new Contato;
$contato->nome = $_POST["nome"];
$contato->telefone = $_POST["telefone"];

$model =  new ContatoModel ;
$retorno = $model-> inserir($contato);

var_dump($retorno);

} else if ($requisicao == "pesquisar") {

} else if ($requisicao == "deletar") {

}





