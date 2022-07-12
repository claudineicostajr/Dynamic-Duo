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
    <title>Consulta de missões</title>
</head>
<body>
<div id="pesquisaMissao">
    <input type="text" name="pesquisa" id="pesquisaMissaoInput" placeholder="Busca por missão">
    <button id="btnPesquisarMissao" type="submit">Pesquisar</button>
</div>
<div id="tabelaResultadosMissao">
    <table id="tabelaMissao">
        <tbody>
            <tr>
                <td>
                    Nome da Missão
                </td>
                <td>
                    Relatório
                </td>
                <td>
                    Editar
                </td>
                <td>
                    Status
                </td>
            </tr>

            <?php
                require_once("../conexaoBanco.php");
                $comando="SELECT * FROM missoes";

                if(isset($_GET['pesquisa']) && $_GET['pesquisa']!=""){
                    $pesquisa=$_GET['pesquisa'];
                    $comando.= " WHERE m.nome LIKE '".$_GET[pesquisa]."%'";

                }
                //echo $comando;
                $resultado=mysqli_query($conexao,$comando);
                $missoes=array();
                $linhas=mysqli_num_rows($resultado);
                
                if($linhas==0){
                    echo "<tr><td colspan='3'>Nenhuma missão encontrado!</td></tr>";
                }else{		

                    while($m = mysqli_fetch_assoc($resultado)){
                        array_push($missoes, $m);
                    }

                    foreach($missoes as $m){
                        echo "<tr>";
                        echo "<td>".$m['nome']."</td>";
                   
            ?> 

            <tr>                
                <td>
                    <img class="icone" action="PHP/gerarPDF.php" src="assets/IMGs/icons/pdf_icon.png" alt="">
                </td>
                <td >
                    <form action="PHP/individuosPHP/editarIndividuo.php">
                        <img class="icone" id="btnEditarMissao" onclick="callEditarMissao('<?=$m['idMissao']?>')" src="assets/IMGs/icons/pencil.png" >
                    </form>
                </td>
                <td>
                    <div id="statusMissaoRadio">
                        <input type="radio" name="statusMissao" id="statusMissao">Pendente
                        <input type="radio" name="statusMissao" id="statusMissao">Concluído
                    </div>
                </td>
                <?php
                    }
                }
                ?>
               
            </tr>
           
            
        </tbody>
    </div> 
    </table>
    <br>
</div>

</body>
<script src="../assets/JS/jquery-3.6.0.min.js"></script>
<script src="../assets/JS/script.js"></script>
</html>