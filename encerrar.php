<?php
//Inicia a sessão para habilitar o acesso à variável $_SESSION
session_start();

//Destrói a variável de sessão
session_destroy();
header('Location: login.php?msg=sessao_encerrada');
?>