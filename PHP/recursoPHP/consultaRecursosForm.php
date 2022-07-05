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
    <title>Consulta de recursos</title>
</head>
<body>
    <form action="#" method="GET">
        <div id="pesquisaRecursos">
            <input type="text" name="pesquisa" id="pesquisaRecursosInput" placeholder="Busca por recurso">
            <button id="btnPesquisarRecursos" type="submit">Pesquisar</button>
        </div>
    </form>
    
<div id="tabelaResultadosRecursos">
    <table border="1" id="tabelaRecursos">
        <tbody>
            <tr>
                <td>
                    Nome
                </td>
                <td>
                    Descrição do recurso
                </td>
                <td>
                    Excluir
                </td>
            </tr>
            
            <?php
                require_once("../conexaoBanco.php");
                $comando="SELECT * FROM recursos";

                if(isset($_GET['pesquisa']) && $_GET['pesquisa']!=""){
                    $pesquisa=$_GET['pesquisa'];
                    $comando.= " WHERE nome like '".$pesquisa."%' OR descricao LIKE '".$pesquisa."%'";
                }
                //echo $comando;
                $resultado=mysqli_query($conexao,$comando);
                $recursos=array();
                $linhas=mysqli_num_rows($resultado);
                
                if($linhas==0){
                    echo "<tr><td colspan='3'>Nenhum recurso encontrado!</td></tr>";
                }else{		

                while($r = mysqli_fetch_assoc($resultado)){
                    array_push($recursos, $r);
                }

                foreach($recursos as $r){
                    echo "<tr>";
                    echo "<td>".$r['nome']."</td>";
                    echo "<td>".$r['descricao']."</td>";
            ?> 
                <td>
                <!-- formulário de exclusão ediçao -->
                </td>
                </tr>

            <?php
                }	
            }		
            ?>              
            
                
         
        </tbody>
    </div> 
    </table>
    <br>
</div>

</body>
<script src="../assets/JS/jquery-3.6.0.min.js"></script>
<script src="../assets/JS/script.js"></script>
</html>
