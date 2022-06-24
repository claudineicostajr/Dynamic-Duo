<?php

// require_once("../recursoPHP/conexaoBanco.php");


$nome=$_POST['nome'];
$descricao=$_POST['descricao'];
$data=$_POST['data'];
$local=$_POST['local'];
$heroi=$_POST['heroi'];
$vilao=$_POST['vilao'];


// !! foto !!


$comando="INSERT INTO missoes (nome, descricao, data, local, heroi, vilao) VALUES('".$nome."', '".$descricao."', '".$data."', '".$local."', '".$heroi."', '".$vilao."')";

echo $comando;

?>