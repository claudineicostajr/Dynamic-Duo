<?php

// require_once("../recursoPHP/conexaoBanco.php");


$alterego=$_POST['alterego'];
$nome=$_POST['nome'];
$afiliacao=$_POST['afiliacao'];
$habilidades=$_POST['habilidades'];
$email=$_POST['email'];
$moralidade=$_POST['moralidade'];
$imagemCorpo=$_FILES['imagemCorpo'];
$imagemPerfil=$_FILES['imagemPerfil'];

// !! foto !!


$comando="INSERT INTO individuos (alterego, nome, afiliacao, habilidades, email, moralidade, imagemCorpo, imagemPerfil  ) VALUES('".$alterego."', '".$nome."', '".$afiliacao."', '".$habilidades."', '".$email."', '".$moralidade."', '".$imagemCorpo."', '".$imagemPerfil."'  )";

echo $comando;

?>