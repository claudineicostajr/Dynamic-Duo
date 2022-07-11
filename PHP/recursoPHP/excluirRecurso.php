<?php

require_once ("../conexaoBanco.php");

$idRecurso=$_POST['idRecurso'];

    $verRecursos="SELECT recursos_idRecurso FROM missoes_has_recursos WHERE recursos_idRecurso =".$idRecurso; 

    //echo $verRecursos;

    $resultadoRecursos = mysqli_query($conexao, $verRecursos);
    $linhas=mysqli_num_rows($resultadoRecursos);

    if($linhas>0){
        header("Location: ../../index.php?retorno=1");
    }else{
        $comando = "DELETE FROM recursos WHERE idRecurso=".$idRecurso;
        $resultado=mysqli_query($conexao, $comando);
        if($resultado==true){
            header("Location: ../../index.php?retorno=4");
        }else{
            header("location: ../../index.php?retorno=5");
        }
    }

?>