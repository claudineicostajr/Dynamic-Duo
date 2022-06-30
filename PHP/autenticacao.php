<?php

require_once("conexaoBanco.php");

$nomeUsuario=$_POST['nomeUsuario'];
$senha=$_POST['senha'];

//função md5() criptografia a senha no algoritmo MD5
// $senhaMD5=md5($senha);
$comando="SELECT * FROM usuarios WHERE nomeUsuario='".$nomeUsuario."' AND senha='".$senha."'";
// echo $comando;

$resultado=mysqli_query($conexao, $comando);
$linhas=mysqli_num_rows($resultado);

if($linhas==0){
    header("Location: ../index.htmlerro");
}else{
    $usuario=mysqli_fetch_assoc($resultado);
        if($usuario['nivel']=='1'){
            header ("Location: agentes.php");
        } else{
            header ("Location: executor.php");
        }
}
?> 