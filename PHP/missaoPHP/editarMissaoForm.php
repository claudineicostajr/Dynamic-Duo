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
    <title>Editar Requisitos da Missão</title>
</head>
<body>
        <?php
            require_once("../conexaoBanco.php");
            $idMissao=$_GET['id'];

            $comando="SELECT * FROM missoes WHERE idMissao=".$idMissao;

            //echo $comando;

            $resultado=mysqli_query($conexao, $comando);
            $m=mysqli_fetch_assoc($resultado);
        ?>
    <div class="form">
    <form id="cadastrarMissao" action="PHP/individuosPHP/editarIndividuo.php" method="post">
        <table>
            <tbody>
            <input type="hidden" value="<?=$m['idMissao']?>"
                name="idMissao"> 
                <th colspan=2>Editar Requisitos da Missão</th>
                <tr>
                    <td>
                        <label for="">Nome da Missão</label>
                    </td>
                    <td>
                        <input type="text" name="nomeMissao" id="nomeMissao" value="<?=$m['nome']?>">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="">Descrição</label>
                    </td>
                    <td>
                        <textarea name="descricaoMissao" id="descricaoMissao" rows="5" value="<?=$m['descricao']?>"></textarea>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="">Data da missão</label>
                    </td>
                    <td>
                        <input type="date" name="dataMissao" id="" value="<?=$m['data']?>">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="">Local(CEP)</label>
                    </td>
                    <td>
                        <input type="text" name="cep" id="cep" value="<?=$m['local']?>">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="">Heroi</label>
                    </td>
                    <td>
                        <select name="selecaoHerois" id="selecaoAgentes">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="">Vilao</label>
                    </td>
                    <td>
                        <select name="selecaoInimigo" id="selecaoAgentes">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="">Recursos</label>
                    </td>
                    <td>
                        <input type="checkbox" name="selecaoRecursos" id="selecaoRecursos" value="<?=$m['local']?>" >
                        <input type="checkbox" name="selecaoRecursos" id="selecaoRecursos" value="<?=$m['local']?>">
                        <input type="checkbox" name="selecaoRecursos" id="selecaoRecursos" value="<?=$m['local']?>">
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