<?php
$local="localhost";
$usuario="root";
$senha="root";
$banco="dbShield";

$conexao=mysqli_connect($local, $usuario, $senha, $banco);

mysqli_set_charset($conexao, "utf8");
?>