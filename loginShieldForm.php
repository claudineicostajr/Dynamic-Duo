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
    <link rel="stylesheet" href="assets/CSS/templateLogin.css">
    <title>Página de Login</title>
</head>
<body>

    <main id="conteudo">
        <form id="formLogin" action="PHP/autenticacao.php" method="post">
            <h3>Login</h3>
            <div id="loginTopo">
                <div id="divInput">
                    <input type="text" name="nomeUsuario" id="loginUser" placeholder="Usuário">
                    <input type="password" name="senha" id="senhaUser" placeholder="Senha">
                </div>
            </div>
            <div id="btnAcesso">
                <img id="iconVerSenha" src="assets/IMGs/icons/hide_invisible_private_icon.png" alt="">
                <button type="submit">Entrar</button>
            </div>
        </form>
    </main>
</body>
<script src="assets/JS/jquery-3.6.0.min.js"></script>
<script src="assets/JS/script.js"></script>
</html>

