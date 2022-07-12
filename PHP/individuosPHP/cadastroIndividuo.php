<?php

require_once("../conexaoBanco.php");


$alterego=$_POST['alterego'];
$nome=$_POST['nome'];
$afiliacao=$_POST['afiliacao'];
$habilidades=$_POST['habilidades'];
$moralidade=$_POST['moralidade'];
$imagemCorpo=$_FILES['imgCorpo']['name'];
$imagemPerfil=$_FILES['imgPerfil']['name'];

// !! foto !!

$extensao= strtolower(substr($imagemCorpo, -4));
$novoNomeFoto= "corpo".date("Y.m.d-H.i.s") . $extensao; //define um novo nome para o arquivo
$pasta="../../assets/IMGs/bancoImagens/"; //diretorio para update

$extensao2= strtolower(substr($imagemPerfil, -4));
$novoNomeFoto2= "perfil".date("Y.m.d-H.i.s") . $extensao2; //define um novo nome para o arquivo

move_uploaded_file($_FILES['imgCorpo']['tmp_name'], $pasta.$novoNomeFoto); //upload do arquivo
move_uploaded_file($_FILES['imgPerfil']['tmp_name'], $pasta.$novoNomeFoto2); //upload do arquivo

$comando="INSERT INTO individuos (alterego, nome, afiliacao, habilidades, moralidade, imagemCorpo, imagemPerfil  ) VALUES('".$alterego."', '".$nome."', '".$afiliacao."', '".$habilidades."', '".$moralidade."', '".$novoNomeFoto."', 
'".$novoNomeFoto2."')";

 // echo $comando;

$resultado=mysqli_query($conexao, $comando);

if ($resultado==true){
    header("Location: ../../index.php?retorno=6");
}else{
    header("Location ../../index.php?retorno=7");
}

?>