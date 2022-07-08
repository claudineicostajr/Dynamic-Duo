<?php
require_once("../conexaoBanco.php");

$alterego=$_POST['alterego'];
$nome=$_POST['nome'];
$afiliacao=$_POST['afiliacao'];
$habilidades=$_POST['habilidades'];
$moralidade=$_POST['moralidade'];
$imagemCorpo=$_FILES['imgCorpo']['name'];
$imagemPerfil=$_FILES['imgPerfil']['name'];
$idIndividuo=$_POST['idIndividuos'];

if($imagemCorpo!="" && $imagemPerfil==""){
    //veio uma foto nova
    $comando="SELECT imagemCorpo from individuos WHERE idIndividuos=".$idIndividuo;
    $resultado=mysqli_query($conexao,$comando);
    $fotoAntiga=mysqli_fetch_assoc($resultado);
    if($fotoAntiga['imagemCorpo']!=""){
        unlink("../../assets/IMGs/bancoImagens/".$fotoAntiga['imagemCorpo']);
    }

    $extensao=strtolower(substr($imagemCorpo,-4));
    $novoNomeFoto= "corpo".date("Y.m.d-H.i.s") . $extensao; //define um novo nome para o arquivo
    $pasta="../../assets/IMGs/bancoImagens/";
    move_uploaded_file($_FILES['imgCorpo']['tmp_name'],$pasta.$novoNomeFoto);

    $comando = "UPDATE individuos SET alterego ='".$alterego."', nome = '".$nome."', afiliacao= '".$afiliacao."', habilidades= '".$habilidades."', moralidade= '".$moralidade."', imagemCorpo= '".$novoNomeFoto."' WHERE idIndividuos=".$idIndividuo;

}else if($imagemCorpo=="" && $imagemPerfil!=""){
    $comando="SELECT imagemPerfil from individuos WHERE idIndividuos=".$idIndividuo;
    $resultado=mysqli_query($conexao,$comando);
    $fotoAntiga=mysqli_fetch_assoc($resultado);
    if($fotoAntiga['imagemPerfil']!=""){
        unlink("../../assets/IMGs/bancoImagens/".$fotoAntiga['imagemPerfil']);
    }

    $extensao=strtolower(substr($imagemPerfil,-4));
    $novoNomeFoto= "perfil".date("Y.m.d-H.i.s") . $extensao; //define um novo nome para o arquivo
    $pasta="../../assets/IMGs/bancoImagens/";
    move_uploaded_file($_FILES['imgPerfil']['tmp_name'],$pasta.$novoNomeFoto);

    $comando = "UPDATE individuos SET alterego ='".$alterego."', nome = '".$nome."', afiliacao= '".$afiliacao."', habilidades= '".$habilidades."', moralidade= '".$moralidade."', imagemPerfil= '".$novoNomeFoto."' WHERE idIndividuos=".$idIndividuo;
}else if($imagemCorpo!="" && $imagemPerfil!=""){

     //veio uma foto nova
     $comando="SELECT imagemCorpo from individuos WHERE idIndividuos=".$idIndividuo;
     $resultado=mysqli_query($conexao,$comando);
     $fotoAntiga=mysqli_fetch_assoc($resultado);
     if($fotoAntiga['imagemCorpo']!=""){
         unlink("../../assets/IMGs/bancoImagens/".$fotoAntiga['imagemCorpo']);
     }
 
     $extensao=strtolower(substr($imagemCorpo,-4));
     $novoNomeFotoC= "corpo".date("Y.m.d-H.i.s") . $extensao; //define um novo nome para o arquivo
     $pasta="../../assets/IMGs/bancoImagens/";
     move_uploaded_file($_FILES['imgCorpo']['tmp_name'],$pasta.$novoNomeFotoC);


    $comando="SELECT imagemPerfil from individuos WHERE idIndividuos=".$idIndividuo;
    $resultado=mysqli_query($conexao,$comando);
    $fotoAntiga=mysqli_fetch_assoc($resultado);
    if($fotoAntiga['imagemPerfil']!=""){
        unlink("../../assets/IMGs/bancoImagens/".$fotoAntiga['imagemPerfil']);
    }

    $extensao=strtolower(substr($imagemPerfil,-4));
    $novoNomeFotoP= "perfil".date("Y.m.d-H.i.s") . $extensao; //define um novo nome para o arquivo
    $pasta="../../assets/IMGs/bancoImagens/";
    move_uploaded_file($_FILES['imgPerfil']['tmp_name'],$pasta.$novoNomeFotoP);

    $comando = "UPDATE individuos SET alterego ='".$alterego."', nome = '".$nome."', afiliacao= '".$afiliacao."', habilidades= '".$habilidades."', moralidade= '".$moralidade."', imagemPerfil= '".$novoNomeFotoP."', 
    imagemCorpo='".$novoNomeFotoC."' WHERE idIndividuos=".$idIndividuo;

}else{
    $comando = "UPDATE individuos SET alterego ='".$alterego."', nome = '".$nome."', afiliacao= '".$afiliacao."', habilidades= '".$habilidades."', moralidade= '".$moralidade."' WHERE idIndividuos=".$idIndividuo;
}


$resultado=mysqli_query($conexao, $comando);

if($resultado==true){
    header("Location:  ../../index.php?retorno=10");
}else{
    header("Location:  ../../index.php?retorno=11");
}

?>