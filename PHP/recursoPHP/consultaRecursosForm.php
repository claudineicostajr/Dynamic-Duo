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
        <?php if(isset($_GET['retorno'])==true && $_GET['retorno']==0){ ?>
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <span>Recurso irá ser usado em alguma missao, não pode ser excluido!</span>
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
        <?php }else if(isset($_GET['retorno'])==true && $_GET['retorno']==1){ ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <span>Recurso cadastrado com sucesso!</span>
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
        <?php }else if(isset($_GET['retorno'])==true && $_GET['retorno']==2){ ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <span>Recurso exluído com sucesso!</span>
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
        <?php }else if(isset($_GET['retorno'])==true && $_GET['retorno']==3){ ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <span>Falha ao excluir!</span>
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
        <?php } ?>
        
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
                    Ação
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
                <form action="excluirRecurso.php" method="POST" class="formAcao">
					<input type="hidden" name="idRecurso" value="<?=$r['idRecurso']?>">
					<button type="submit" class="botaoAcao">
						<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
						<path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z"/>
						</svg>
					</button>				
				</form>
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
