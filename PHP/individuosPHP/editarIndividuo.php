<?php
require_once("../conexaoBanco.php");

$alterego=$_POST['alterego'];
$nome=$_POST['nome'];
$afiliacao=$_POST['afiliacao'];
$habilidades=$_POST['habilidades'];
$moralidade=$_POST['moralidade'];
$imagemCorpo=$_FILES['imgCorpo']['name'];
$imagemPerfil=$_FILES['imgPerfil']['name'];

$comando = "UPDATE individuos SET alterego ='".$alterego."', nome = ".$nome.", afiliacao= '".$afiliacao."', habilidades= '".$habilidades."', moralidade= '".$moralidade."', imgCorpo= '".$imagemCorpo."', imgPerfil= '".$imagemPerfil."' WHERE idIndividuos=".$idIndividuos;

// echo $comando;

$resultado=mysqli_query($conexao, $comando);

if($resultado==true){
    header("Location:  ../../index.php?retorno=10");
}else{
    header("Location:  ../../index.php?retorno=11");
}

?>