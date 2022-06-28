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
    <link rel="stylesheet" href="../assets/CSS/normalize.css/normalize.css">
    <link rel="shortcut icon" href="../assets/IMGs/icons/favicon-logo.png" type="image/x-icon">
    <title>Consulta de missões</title>
</head>
<body>
<div id="pesquisaMissao">
    <input type="text" name="pesquisaMissaoInput" id="pesquisaMissaoInput" placeholder="Busca por missão">
    <button id="btnPesquisarMissao" type="submit">Pesquisar</button>
</div>
<div id="tabelaResultadosMissao">
    <table id="tabelaMissao">
        <tbody>
            <tr>
                <td colspan='4'>
                    Nome da Missão
                </td>
            </tr>
            <tr>
                <td>
                    Salvar reféns do Dr Doom -
                </td>
                <td>
                    PDF
                </td>
                <td >
                    Editar
                </td>
                <td>
                    <div id="statusMissaoRadio">
                        <input type="radio" name="statusMissao" id="statusMissao">Pendente
                        <input type="radio" name="statusMissao" id="statusMissao">Concluído
                    </div>
                </td>
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