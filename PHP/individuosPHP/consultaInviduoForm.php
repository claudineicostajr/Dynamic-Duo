
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta name="1º Author" content="Anderson Nunes">
    <meta name="2º Author" content="Claudinei Costa Jr.">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Exo+2:wght@400;600&display=swap" rel="stylesheet">
    <title>Consultas de Individuos</title>
</head>
<body>
<div id="pesquisaIndividuos">
    <input type="text" name="pesquisa" id="pesquisarIndividuosInput" placeholder="Busca por indivíduos">
    <button id="btnPesquisarIndividuos" type="submit">Pesquisar</button>
</div>
<div id="tabelaResultadosIndividuos">
    <table id="tabelaIndividuos">
        <tbody>
             <tr>
                <td>
                    Foto de Perfil
                </td> 
                <td>
                    Alterego
                </td>
                <td>
                    Editar
                </td>
            </tr>
            
            <tr>
                <?php
                    require_once("../conexaoBanco.php");
                    $comando="SELECT * FROM individuos";

                    if(isset($_GET['pesquisa']) && $_GET['pesquisa']!=""){
                        $pesquisa=$_GET['pesquisa'];
                        $comando.= " WHERE alterego like '".$pesquisa."%'";
                    }
                    //echo $comando;
                    $resultado=mysqli_query($conexao,$comando);
                    $individuos=array();
                    $linhas=mysqli_num_rows($resultado);
                    
                    if($linhas==0){
                        echo "<tr><td colspan='2'>Nenhum individuo encontrado!</td></tr>";
                    }else{		

                        while($i = mysqli_fetch_assoc($resultado)){
                            array_push($individuos, $i);
                        }

<<<<<<< HEAD
                    foreach($individuos as $i){
                        echo "<tr>";
                        echo "<td> <img class='selecaoPerfil' src='assets/IMGs/bancoImagens/".$i['imagemPerfil']."'> </td>";                   
                        echo "<td>".$i['alterego']."</td>";                   
            ?> 
                    <!-- form editar -->
                    <td>
                        <form action="PHP/individuosPHP/editarIndividuo.php" method="POST">
                            <img class="icone" id="btnEditarIndividuo" 
                            onclick="callEditarIndividuo('<?=$i['idIndividuos']?>')" src="assets/IMGs/icons/pencil.png" >                       
                        </form>
                    </td>
            <?php
=======
                        foreach($individuos as $i){
                            echo "<tr>";
                            echo "<td> <img class='selecaoPerfil' src='assets/IMGs/bancoImagens/".$i['imagemPerfil']."'> </td>";                   
                            echo "<td>".$i['alterego']."</td>";                   
                ?> 
                        <!-- form editar -->
                        <td>
                            <form action="PHP/gerarPDF.php">
                                <img  class="icone" id="btnEditarIndividuo" onclick="callEditarIndividuo()" src="assets/IMGs/icons/pencil.png" alt="">
                            </form>
                        </td>
                <?php
                        }
>>>>>>> ca790284c049dd2903f8516954a032a410cc25f7
                    }
                    ?>
                </tr>
        </tbody>
    </table>
    <br>
</div> 
</body>
<script src="assets/JS/jquery-3.6.0.min.js"></script>
<script src="assets/JS/script.js"></script>
</html>

