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

    <title>Editar Cadastro de Individuos</title>
</head>
<body>
        <?php
            require_once("../conexaoBanco.php");
            $idIndividuos=$_GET['id'];

            $comando="SELECT * FROM individuos WHERE idIndividuos=".$idIndividuos;

            //echo $comando;

            $resultado=mysqli_query($conexao, $comando);
            $i=mysqli_fetch_assoc($resultado);
        ?>
    <div class="form">
        <form  id="cadastrarIndividuo" action="PHP/individuosPHP/editarIndividuo.php" method="post" enctype="multipart/form-data">
            <table>
                <tbody>
                <input type="hidden" value="<?=$i['idIndividuos']?>"
                name="idIndividuos"> 
                <th colspan=2>Editar</th>
                <tr>
                    <td>
                        <label for="alterego">Alterego</label>
                    </td>
                    <td>
                        <input type="text" name="alterego" id="alterego" value="<?=$i['alterego']?>">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="">Nome</label>
                    </td>
                    <td>
                        <input type="text" name="nome" id="nome" value="<?=$i['nome']?>">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="">Afiliação</label>
                    </td>
                    <td>
                        <input type="text" name="afiliacao" id="afiliacao" value="<?=$i['afiliacao']?>">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="">Habilidades</label>
                    </td>
                    <td>
                        <input type="text" name="habilidades" id="" value="<?=$i['habilidades']?>">
                    </td>
                </tr>
                <<tr>
                    <td>
                        <label for="">Moralidade</label>
                    </td>
                    <td id="moralidade">
                        <?php
                        
                        if($i['moralidade'] == '1'){
                          echo 
                          '<input type="radio" name="moralidade" checked value="1" id="moralidade">Herói
                           <input type="radio" name="moralidade" value="2" id="moralidade">Vilão';
                        }else{
                            echo 
                            '<input type="radio" name="moralidade" value="1" id="moralidade">Herói
                             <input type="radio" name="moralidade" checked value="2" id="moralidade">Vilão';
                        }

                        ?>
                       
                    </td>
                </tr>
                <tr>
                    <td rowspan=2>
                        <label for="">Imagens</label>
                    </td>
                    <td>
                        <label for="">Perfil</label>
                        <input type="file" name="imgPerfil" id="imgPerfil">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="">Corpo</label>
                        <input type="file" name="imgCorpo" id="imgCorpo">
                    </td>
                </tr>
                </tbody>
            </table>
            <br><br>
            <div id="btnForm">
                <button type="reset">Limpar</button>
                <button type="submit">Salvar</button>
            </div>
        </form>
    </div>
</body>
<script src="../assets/JS/jquery-3.6.0.min.js"></script>
<script src="../assets/JS/script.js"></script>
</html>