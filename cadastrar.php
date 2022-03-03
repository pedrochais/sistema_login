<?php
require_once('conexao.php');

//Capturando valores dos inputs
$nome = $_POST['nome'];
$senha = $_POST['senha'];

//Instrução SQL
$query = "
SELECT nome FROM conta
";

//Executando instrução
$retorno = $conexao->query($query);
$dados = $retorno->fetchAll();

//Laço para verificar se o nome escolhido está disponível
$nome_indisponivel = false;
for($i = 0; $i < count($dados); $i++){
    if($nome == $dados[$i]['nome']){
        $nome_indisponivel = true;
    }
}

if($nome_indisponivel){
    header('Location: cadastro.php?msg=nome_indisponivel');
}else{
    $query = "
        INSERT INTO conta (nome, senha) values ('$nome', '$senha');
    ";
    $conexao->exec($query);
    header('Location: cadastro.php?msg=usuario_cadastrado');
}
?>