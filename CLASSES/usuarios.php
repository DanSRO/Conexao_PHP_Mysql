<?php

class Usuario
{
    private $pdo;
    public $msErro; 
    public function conectar($nome, $host, $usuario, $senha)
    {
        global $pdo;
        try
        {
            $pdo = new PDO("mysql:dbname = pessoa; host=locahost","root", "");
        }
        catch(PDOException $e)
        {
            $msErro = $e->getMessage();
        }
    }
    public function cadastrar($nome, $telefone, $email, $senha)
    {
        global $pdo;
        //verificar se o email já está cadastrado
        $sql = $pdo->prepare("SELECT id FROM pessoa WHERE email = :e");
        $sql->bindValue(":e", $email);
        $sql->execute();
        if($sql->rowCount()>0)
        {
            return false; //já está cadastrada
        }
        else
        {   
            // caso não, cadastrar
            $sql = $pdo->prepare("INSERT INTO pessoa(nome, telefone, email, senha) VALUES (:n, :t, :e, :s)");
            $sql->bindValue(":e", $nome);
            $sql->bindValue(":e", $telefone);
            $sql->bindValue(":e", $email);
            $sql->bindValue(":e", md5($senha));
            $sql->execute();
            return true;
        }
    }
    public function logar($email, $senha)
    {
        global $pdo;
        //verificar se o email e senha estão cadastrados, se sim ...
        $sql = $pdo->prepare("SELECT id FROM pessoa WHERE email = :e AND senha = :s");
        $sql->bindValue(":e", $email);
        $sql->bindValue(":s", md5($senha));
        $sql->execute();
        if($sql->rowCount()>0)
        {
            // entrar no sistema(sessão)
            $dado = $sql->fetch();
            session_start();
            $_SESSION['id'] = $dado['id'];
            return true; //logado com sucesso
        }
        else
        {
            return false; // não foi possivel logar
        }
    }
}

?>