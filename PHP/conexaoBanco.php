<?php
$local="127.0.0.1";
$usuario="root";
$senha="";
$banco="dbshield";

$conexao=mysqli_connect($local, $usuario, $senha, $banco);

mysqli_set_charset($conexao, "utf8");
?>