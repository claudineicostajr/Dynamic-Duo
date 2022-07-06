<?php

require_once ("../conexaoBanco.php");

$idRecurso=$_POST['idRecurso'];

    $verRecursos="SELECT idRecurso FROM recursos WHERE =".$idRecurso;

    //echo $verRecursos;

    $resultadoRecursos = mysqli_query($conexao, $verRecursos);
    $linhas=mysqli_num_rows($resultadoRecursos);

    if($linhas==0){
        $comando="DELETE FROM relacoes WHERE idRecurso=".$idRecurso;
        $resultado=mysqli_query($conexao, $comando);
        if ($resultado==true){
            header ("Location: consultaRecursoForm.php?retorno=2");
        }
    } else {      
        header ("Location: consultaRecursoForm.php?retorno=3");
    }


?>