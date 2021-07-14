<?php
// BANCO DE DADOS
require "conexao.php";

class ContatoModel {

public function inserir(Contato $Contato){

	$banco = conexao::getInstance();

	var_dump($banco);die;


$nome = $contato ->nome;
$telefone = $contato ->telefone;

$sql = "insert into contato (nome, telefone) values ('$nome', '$telefone')";
return $banco->exec($sql);
}


}