<?php
require_once("../conexaoBanco.php");

$nome=$_POST['nomeRecurso'];
$descricao=$_POST['descricaoRecurso'];

$comando="INSERT INTO recursos (nome, descricao) VALUES ('".$nome."','".$descricao."')";

echo $comando;
?>