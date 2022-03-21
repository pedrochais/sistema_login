<?php
//Fazendo conexão com o banco de dados
require_once('conexao.php');
//Iniciar sessão 
session_start();

//Capturando valores dos inputs
$nome = $_POST['nome'];
$senha = $_POST['senha'];

//Preparando instrução
$query = "
        SELECT nome, senha FROM conta
    ";

//Realizando consulta no banco de dados
$statement = $conexao->query($query);
$dados = $statement->fetchAll();

//Verificando se o usuário existe no banco de dados
$usuario_encontrado = false;
for($i = 0; $i < count($dados); $i++){
    if($nome == $dados[$i]['nome']){
        if($senha == $dados[$i]['senha']){
            $usuario_encontrado = true;
        }
    }
}

//Realizando autenticação
if ($usuario_encontrado) {
    $_SESSION['autenticacao'] = true;
    $_SESSION['usuario'] = $nome;
    header('Location: admin.php');
} else {
    $_SESSION['autenticacao'] = false;
    header('Location: login.php?msg=erro_login');
}
