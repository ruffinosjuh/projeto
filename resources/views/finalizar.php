<?php
        session_start(); 

        foreach($_SESSION['dados'] as $produtos){
            $conexao = new PDO('mysql:host=127.0.0.1;dbname=laravel', "localhost", "123456");
            $insert = $conexao->prepare("INSERT INTO pedidos () VALUES(NULL, ?,?,?,?)");
            $insert->bindParam (1,$produtos['id_produto']);
            $insert->bindParam (2, $produtos['quantidade']);
            $insert->bindParam (3,$produtos['preco']);
            $insert->bindParam (4,$produtos['total']);
            $insert->execute();
        }
