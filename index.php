<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div id="corpo-form">
        <h1>Entrar</h1>
        <form action="conecta.php" method="POST">
            <input type="email" name="email" placeholder="Usuário">
            <input type="password" name="senha" placeholder="Senha">
            <input type="submit" value="ACESSAR">
            <a href="cadastrar.php"><b>Ainda não é inscrito?</b><strong>Cadastre-se</strong></a>
        </form>
    </div>
</body>
</html>