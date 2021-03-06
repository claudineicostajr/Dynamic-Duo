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
    <title>Cadastro de Individuos</title>
</head>
<body>
    <div class="form">
        <form  id="cadastrarIndividuo" action="PHP/individuosPHP/cadastroIndividuo.php" method="post" enctype="multipart/form-data">
            <table>
                <tbody>
                <th colspan=2>Cadastro de indivíduo</th>
                <tr>
                    <td>
                        <label for="">Alterego</label>
                    </td>
                    <td>
                        <input type="text" name="alterego" id="alterego">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="">Nome</label>
                    </td>
                    <td>
                        <input type="text" name="nome" id="nome">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="">Afiliação</label>
                    </td>
                    <td>
                        <input type="text" name="afiliacao" id="afiliacao">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="">Habilidades</label>
                    </td>
                    <td>
                        <input type="text" name="habilidades" id="habilidades">
                    </td>
                </tr>
                
                <tr>
                    <td>
                        <label for="">Moralidade</label>
                    </td>
                    <td id="moralidade">
                        <input type="radio" value="1" name="moralidade" id="moralidade">Herói
                        <input type="radio"  value="2" name="moralidade" id="moralidade">Vilão
                    </td>
                </tr>
                <tr>
                    <td rowspan=2>
                        <label for="">Imagens</label>
                    </td>
                    <td>
                        <label for="">Perfil</label>
                        <input type="file" name="imgPerfil" id="imgPerfil" value="">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="">Corpo</label>
                        <input type="file" name="imgCorpo" id="imgCorpo" value="">
                    </td>
                </tr>

                </tbody>
            </table>
            <br><br>
            <div id="btnForm">
                <button type="reset">Limpar</button>
                <button type="submit">Cadastrar</button>
            </div>
        </form>
    </div>
</body>
<script src="../assets/JS/jquery-3.6.0.min.js"></script>
<script src="../assets/JS/script.js"></script>
</html>