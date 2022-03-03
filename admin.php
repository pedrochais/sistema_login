<?php 
require_once('conexao.php');
session_start();
//Verificar autenticação do usuário
if(!isset($_SESSION['autenticacao']) || $_SESSION['autenticacao'] == false){
    header('Location: login.php?msg=erro_autenticacao');
}
$usuario_atual = $_SESSION['usuario'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banco de dados</title>
    <style>
        body {
            align-items: center;
            display: flex;
            flex-direction: column;
        }

        .container {
            display: flex;
            flex-wrap: wrap;
            flex-direction: row;
            align-content: space-between;
            align-items: flex-start;
            justify-content: center;
            margin: auto;
        }

        .box {
            margin: 10px;
            padding: 20px;
            border: 2px grey solid;
        }

        a{
            border: 1px solid red;
            padding: 10px;
        }
    </style>
</head>

<body>
    <p>Usuário atual: <?= $usuario_atual ?></p>
    <a href="encerrar.php">Encerrar sessão</a>
    <hr/>
    <div class="container">
        <?php
        try {
            //Código SQL
            $query = "
                SELECT * FROM conta
            ";

            //Executando código SQL para solicitar os dados
            $result = $conexao->query($query);

            //Guardando dados numa variável
            $dados = $result->fetchAll();

            if (count($dados) > 0) {

                foreach ($dados as $pessoa) {
                    echo '<div class="box">';
                    echo "<p>Nome: $pessoa[0]</p>";
                    echo "<p>Senha: $pessoa[1]</p>";
                    echo '</div>';
                }
            } else {
                echo 'Sem registros.';
            }
        } catch (PDOException $exception) {
            echo 'Erro: ' . $exception->getMessage();
        }
        ?>
    </div>

</body>

</html>