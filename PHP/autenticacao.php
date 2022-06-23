<?php

require_once("PHP/conexaoBanco.php");

$usuario=$_POST['usuario'];
$senha=$_POST['senha'];

//função md5() criptografia a senha no algoritmo MD5
$senhaMD5=md5($senha);
$comando="SELECT * FROM usuarios WHERE email='".$email."' AND senha='".$senhaMD5."'";

$resultado=mysqli($conexao, $comando);

$linhas=mysqli_query($resultado);

if(){
    header("Location: ")
}else{
    $usuario=mysqli_fetch_assoc($resultado);
        if(){
            header ("Location: ");
        } else {
            header ("Location: ");
        }
}
?>