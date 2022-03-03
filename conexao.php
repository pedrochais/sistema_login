<?php
    $dsn = 'mysql:host=localhost;dbname=db_site';
    $username = 'root';
    $password = '';

    try{
        //Conexão realizada através de uma instância do PDO
        $conexao = new PDO($dsn, $username, $password); 
    }catch(PDOException $exception){
        echo 'Erro: '.$exception->getMessage(); 
    }

    //PDO('data source name(drive de conexão)', 'nome do db', 'senha do db')
?>