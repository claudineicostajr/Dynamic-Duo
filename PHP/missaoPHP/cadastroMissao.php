<?php

require_once("../conexaoBanco.php");

$nome=$_POST['nomeMissao'];
$descricao=$_POST['descricaoMissao'];
$data=$_POST['dataMissao'];
$local=$_POST['cep'];
$heroi=$_POST['selecaoHerois'];
$vilao=$_POST['selecaoInimigo'];
$status=1;

$idRecursos = array();
$idRecursos=$_POST['selecaoRecursos'];


$comando="INSERT INTO missoes (nome, descricao, data, local, heroi, vilao, status) VALUES ('".$nome."', '".$descricao."', '".$data."', '".$local."', '".$heroi."', '".$vilao."', ".$status.")";

 // echo $comando;

 $resultado=mysqli_query($conexao, $comando);

 $missao="SELECT MAX(idMissao) as idMissao FROM missoes";
 $resultadoMissao=mysqli_query($conexao, $missao);
 $idMissao=mysqli_fetch_assoc($resultadoMissao);

 for($i=0; $i<sizeof($idRecursos); $i++){  
    $comando="INSERT INTO missoes_has_recursos (missoes_idMissao, recursos_idRecurso)
     VALUES (".$idMissao['idMissao'].", ".$idRecursos[$i].")";
    $resultado=mysqli_query($conexao, $comando);
 }    
    
 if ($resultado==true){
   header("Location: ../../index.php?retorno=8");
}else{
   header("Location ../../index.php?retorno=9");
}

  
?>