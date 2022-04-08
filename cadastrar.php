<?php
require_once 'CLASSES/usuarios.php';
$u = new Usuario;
?>

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
    <div id="corpo-form-cad">
        <h1>Cadastrar</h1>
        <form action="conecta.php" method="POST">
            <input type="text" name="nome" placeholder="Nome Completo" maxlength="30">
            <input type="text" name="telefone" placeholder="Telefone" maxlength="11">
            <input type="email" name="email" placeholder="Usuário" maxlength="20">
            <input type="password" name="senha" placeholder="Senha" maxlength="15">
            <input type="password" name="confSenha" placeholder="Confirmar senha" maxlength="15">
            <input type="submit" value="Cadastrar">
        </form>
    </div>
<?php
//verificar se clicou no botão
if(isset($_POST['nome']))
{
    $nome = addslashes($_POST['nome']);
    $telefone = addslashes($_POST['telefone']);
    $email = addslashes($_POST['email']);
    $senha = addslashes($_POST['senha']);
    $confirmaSenha = addslashes($_POST['confSenha']);
    //verificar se está preenchido
    if(!empty($nome)&&!empty($telefone)&&!empty($email)&&!empty($senha)&&!empty($confirmaSenha))
    {
        $u->conectar("teste", "localhost", "root", "");
        if($u->msErro == "")//se não der erro, ok!
        {
            if($senha==$confirmaSenha)
            {
               if($u->cadastrar($nome, $telefone, $email, $senha))
               {
                   ?>
                   <div id="msg-sucesso">
                   Cadastrado com sucesso. Acesse para entrar!
                   </div>
                   <?php
               }
               else
               {
                   ?>
                   <div class="msg-erro">
                   Email já cadastrado!
                   </div>
                   <?php
               }
            }
            else
            {
                ?>
                <div class="msg-erro">
                Senhas não correspondem!
                </div>
                <?php                
            }
        }
        else
        {
            ?>
            <div>
            <?php echo "Erro: ".$u->msErro;?>
            </div>
            <?php
        }
    }
    else
    {
        ?>
        <div class="msg-erro">
        Preencha todos os campos!
        </div>
        <?php
    }
}
?>
</body>
</html>