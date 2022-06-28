<?php

// require_once("../recursoPHP/conexaoBanco.php");


$nome=$_POST['nomeMissao'];
$descricao=$_POST['descricaoMissao'];
$data=$_POST['dataMissao'];
$local=$_POST['cep'];
$heroi=$_POST['selecaoHerois'];
$vilao=$_POST['selecaoInimigo'];
$recursos=$_POST['selecaoRecursos'];

$comando="INSERT INTO missoes (nome, descricao, data, local, heroi, vilao) VALUES('".$nome."', '".$descricao."', '".$data."', '".$local."', '".$heroi."', '".$vilao."', '".$recursos."')";

echo $comando;

?>