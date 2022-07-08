<?php
require_once("../conexaoBanco.php");

$nome=$_POST['nomeMissao'];
$descricao=$_POST['descricaoMissao'];
$data=$_POST['dataMissao'];
$local=$_POST['cep'];
$heroi=$_POST['selecaoHerois'];
$vilao=$_POST['selecaoInimigo'];
$status=1;

$comando = "UPDATE missoes SET nomeMissao ='".$nome."', descricaoMissao = ".$descricao.", dataMissao= '".$data."', cep= '".$local."', selecaoHerois= '".$heroi."', selecaoInimigo= '".$vilao."' WHERE idMissao=".$idMisao;

echo $comando;

$resultado=mysqli_query($conexao, $comando);

if($resultado==true){
    header("Location:  ../../index.php?retorno=12");
}else{
    header("Location:  ../../index.php?retorno=13");
}

?>