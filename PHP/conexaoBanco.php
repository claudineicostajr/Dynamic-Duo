<?php
$local="localhost";
$usuario="root";
$senha="root";
$banco="dbshield";

$conexao=mysqli_connect($local, $usuario, $senha, $banco);

mysqli_set_charset($conexao, "utf8");
?>