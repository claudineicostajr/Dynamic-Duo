<?php

// require_once("../recursoPHP/conexaoBanco.php");


$alterego=$_POST['alterego'];
$nome=$_POST['nome'];
$afiliacao=$_POST['afiliacao'];
$habilidades=$_POST['habilidades'];
$moralidade=$_POST['moralidade'];
$imagemCorpo=$_FILES['imgPerfil'];
$imagemPerfil=$_FILES['imgCorpo'];

// !! foto !!

$extensao= strtolower(substr($imagemCorpo, -4));
$novoNomeFoto= date("Y.m.d-H.i.s") . $extensao; //define um novo nome para o arquivo
$pasta="../assets/IMGs"; //diretorio para update

move_uploaded_file($_FILES['imgCorpo']['tmp_name'], $pasta.$novoNomeFoto); //upload do arquivo

$comando="INSERT INTO individuos (alterego, nome, afiliacao, habilidades, moralidade, imagemCorpo, imagemPerfil  ) VALUES('".$alterego."', '".$nome."', '".$afiliacao."', '".$habilidades."', '".$moralidade."', '".$imagemCorpo."', '".$imagemPerfil."'  )";

echo $comando;

?>