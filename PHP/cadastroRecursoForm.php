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
    <link rel="stylesheet" href="../assets/CSS/templatePrincipal.css">
    <title>Cadastro de Individuos</title>
</head>
<body>
    <div class="form">
        <form action="" method="post">
            <table>
                <tbody>
                <th colspan=2>
                    Cadastro de arsenal
                </th>
                <tr>
                    <td>
                        <label for="">Nome do Recurso</label>
                    </td>
                    <td>
                        <input type="text" name="nomeRecurso" id="nomeRecurso">
                    </td>
                    <tr>
                        <td>
                            <label for="">Descrição</label>
                        </td>
                        <td>
                            <textarea name="descricaoRecurso" id="descricaoRecurso"  rows="5"></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="">Quantidade</label>
                        </td>
                        <td>
                            <input type="number" name="qtd" id="qtd" maxlength="20">
                        </td>
                    </tr>
                </tr>
                </tbody>
            </table>
            <div id="btnForm">
                <button type="reset">Limpar</button>
                <button type="submit">Cadastrar</button>
            </div>
        </form>
    </div>
    <div class="consultas">

    </div>
</body>
<script src="../assets/JS/jquery-3.6.0.min.js"></script>
<script src="../assets/JS/script.js"></script>
</html>