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
    <title>Cadastro</title>
</head>
<body>
    <div class="box">
        <?php 
        if($msg == 'nome_indisponivel') echo '<p>Nome de usuário indisponível.</p>';
        if($msg == 'usuario_cadastrado') echo '<p>O usuário foi cadastrado.</p>';
        ?>
        <form action="cadastrar.php" method="post">
            <input id="nome" name="nome" type="text" placeholder="Digite aqui um nome">
            <input id="senha" name="senha" type="password" placeholder="Digite aqui uma senha">
            <input id="bt" type="submit" value="Cadastrar"> 
        </form>
    </div>
</body>
</html>
