
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
    <input type="text" name="pesquisarIndividuosInput" id="pesquisarIndividuosInput" placeholder="Busca por indivíduos">
    <button id="btnPesquisarIndividuos" type="submit">Pesquisar</button>
</div>
<div id="tabelaResultadosIndividuos">
    <table id="tabelaIndividuos">
        <tbody>
             <tr>
                <td rowspan="2">  
                    <img class="selecaoPerfil" onclick="callPerfil(this.src)" width="80" height="80" src="assets/IMGs/bancoImagens/perfil2022.07.05-02.39.39.jpg" alt="">
                </td>
                <td>
                    Alterego
                </td>
   
                <td>
                    Editar
                </td>
            </tr>
            <tr>
                <td>
                    Ultron
                </td>
                <td>
                    <img class="icone" id="btnEditarIndividuo" onclick="callEditarIndividuo()" src="assets/IMGs/icons/pencil.png" alt="">
                </td>
            </tr>
            <tr>
                <td rowspan="2">  
                    <img class="selecaoPerfil" onclick="callPerfil(this.src)" width="80" height="80" src="assets/IMGs/bancoImagens/perfil2022.06.29-02.49.30.jpg" alt="">
                </td>
                <td>
                    Alterego
                </td>
   
                <td>
                    Editar
                </td>
            </tr>
            <tr>
                <td>
                    Hulk
                </td>
                <td>
                    <img class="icone" id="btnEditarIndividuo" onclick="callEditarIndividuo()" src="assets/IMGs/icons/pencil.png" alt="">
                </td>
            </tr>
   
            <?php
            /*
				require_once("../conexaoBanco.php");
				$comando="SELECT c.*, t.alterego FROM individuos";

				if(isset($_GET['pesquisa']) && $_GET['pesquisa']!=""){
					$comando.=" WHERE c.alterego LIKE '".$_GET['pesquisa']."%' OR c.local LIKE '".$_GET['pesquisa']."%' OR t.alterego LIKE '".$_GET['pesquisa']."%'";
				}
				//echo $comando;
				$resultado=mysqli_query($conexao,$comando);
				$individuos=array();
				$linhas=mysqli_num_rows($resultado);
				
				if($linhas==0){
					echo "<tr><td colspan='12'>Nenhum compromisso encontrado!</td></tr>";
				}else{		

				while($c = mysqli_fetch_assoc($resultado)){
					array_push($individuos, $c);
				}

				foreach($individuos as $c){
                    echo "<td>".$c['imagemPerfil']."</td>";
					echo "<td>".$c['alterego']."</td>";
					echo "<td>".$c['nome']."</td>";
					echo "<td>".$c['afiliacao']."</td>";
					echo "<td>".$c['habilidades']."</td>";
					echo "<td>".$c['moralidade']."</td>";					
					echo "<td> Santa Catarina</td>";
					echo "<td>".$c['numero']."</td>";
                    
						} //fechamwnto do foreach
					} //fechamento do else
                    
                    */				
			?>
        </tbody>
    </table>
    <br>
</div> 
</body>
<script src="assets/JS/jquery-3.6.0.min.js"></script>
<script src="assets/JS/script.js"></script>
</html>

