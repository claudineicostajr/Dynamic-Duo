executor php

<?php
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
					echo "<tr><td colspan='12'>Nenhum resultado encontrado!</td></tr>";
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
			?>
            ?php 
						} //fechamwnto do foreach
					} //fechamento do else
				?>