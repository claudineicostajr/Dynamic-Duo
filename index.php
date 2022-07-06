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
    <link rel="stylesheet" href="assets/CSS/normalize.css/normalize.css">
    <link rel="shortcut icon" href="assets/IMGs/icons/favicon-logo.png" type="image/x-icon">
    <link rel="stylesheet" href="assets/CSS/templatePrincipal.css">
    <link rel="stylesheet" href="assets/CSS/templateCadastro.css">
    <link rel="stylesheet" href="assets/CSS/templateConsulta.css">

    <title>Página de Gerenciamento</title>
</head>
<body>

    <?php
        if(isset($_GET['retorno'])==true){
            $retorno=$_GET['retorno'];
            if($retorno=='1'){
                echo "<script>
                alert ('Impossivel realizar exclusão, pois ha missoes vinculadas!');
                </script>";
            }else if($retorno=='2'){
                echo "<script>
                alert ('Recurso excluido com sucesso!');
                </script>";
            }else if($retorno=='3'){
                echo "<script>
                alert ('Exclusao do recurso falhou!');
                </script>";
            }else if($retorno=='4'){
                echo "<script>
                alert ('Recurso cadastrado com sucesso!');
                </script>";
            }else if($retorno=='5'){
                echo "<script>
                alert ('Cadastro do recurso falhou!');
                </script>";
            }else if($retorno=='6'){
                echo "<script>
                alert ('Individuo cadastrado com sucesso!');
                </script>";
            }else if($retorno=='7'){
                echo "<script>
                alert ('Cadastro do individuo falhou!');
                </script>";
            }else if($retorno=='8'){
                echo "<script>
                alert ('Missão cadastrada com sucesso!');
                </script>";
            }else if($retorno=='9'){
                echo "<script>
                alert ('Cadastro da missão falhou!');
                </script>";
            }else{
                echo "<script>
                alert ('Exclusao do recurso falhou!');
                </script>";
            }
        }
    ?>

    <nav>
        <figure>
            <img id="logo" src="assets/IMGs/imgRepositorio/logo-shield.png" alt="">
        </figure>
        <ul id="logout">
            <li>  <a href="PHP/efetuarLogout.php">Logout</a> </li>
           
        </ul>
    </nav>
    <main id="conteudo">
        <aside>
            <ul id="gerenciador">
                <div>
                    <h3 id="labelInviduos">
                        Indivíduos
                    </h3>
                        <div id="subMenuIndividuo">
                            <li id="btnCadastrarInviduo" onclick="callCadastroIndividuo()">
                                Cadastro
                            </li>
                            <li id="btnConsultarInviduo" onclick="callConsultaIndividuo()">
                                Consulta
                            </li>
                        </div>
                </div>
                <div>
                    <h3 id="labelMissao">
                        Missões
                    </h3>
                        <div id="subMenuMissao">
                            <li id="btnCadastrarMissao" onclick="callCadastroMissao()">
                                Cadastro
                            </li>
                            <li id="btnConsultarMissao" onclick="callConsultaMissao()">
                                Consulta
                            </li>
                        </div>
                </div>
                <div>
                    <h3 id="labelRecursos">
                        Recursos
                    </h3>
                        <div id="subMenuRecursos">
                            <li id="btnCadastrarRecursos" onclick="callCadastroRecurso()">
                                Cadastro
                            </li>
                            <li id="btnConsultarRecursos" onclick="callConsultaRecurso()">
                                Consulta
                            </li>
                        </div>
                </div>
            </ul>
        </aside>
        <div id="ladoEsquerdo">
            <section id="individuo" class="menu"></section>
            <section id="editarIndividuo" class="menu"></section>
            <section id="missao" class="menu"></section>
            <section id="editarMissao" class="menu"></section>
            <section id="recursos" class="menu"></section>
            <section id="editarRecurso" class="menu"></section>
        </div>
        <div id="middle"></div>
        <div id="ladoDireito">
            <!-- <div id="ladoDireitoImg">
                <figure>
                    <img id="corpo" src="assets/IMGs/imgRepositorio/green-goblin.png" alt="">
                </figure>
            </div> -->
            <!-- <section id="edicoes"></section> -->
        </div>
    </main>
</body>
<script src="assets/JS/jquery-3.6.0.min.js"></script>
<script src="assets/JS/script.js"></script>
</html>

