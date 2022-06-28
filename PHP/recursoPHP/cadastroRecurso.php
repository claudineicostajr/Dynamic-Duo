<?php
require_once("../conexaoBanco.php");

$nome=$_POST['nome'];
$descricao=$_POST['descricao'];

$comando="INSERT INTO recursos (nome, descricao) VALUES ('".$nome."','".$descricao."')";

echo $comando;
?>