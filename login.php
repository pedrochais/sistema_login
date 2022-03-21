<?php
if(isset($_GET['msg'])){
    $msg = $_GET['msg'];
}else{
    $msg = '';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <div class="box">
        <?php 
        if($msg == 'erro_login') echo '<p>Usuário e/ou senha inválido(s).</p>';
        if($msg == 'erro_autenticacao') echo '<p>É necessário fazer login.</p>';
        if($msg == 'sessao_encerrada') echo '<p>Sessão encerrada.</p>';
        ?>
        <form action="validar.php" method="post">
            <input id="nome" name="nome" type="text" placeholder="Digite aqui um nome">
            <input id="senha" name="senha" type="password" placeholder="Digite aqui uma senha">
            <input id="bt" type="submit" value="Login">
        </form>
    </div>
</body>
</html>
