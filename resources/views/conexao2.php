<?php
$conexao= new PDO('mysql:host=127.0.0.1;dbname=laravel', "localhost", "123456");
$select = $conexao->prepare("SELECT * FROM book");
$select->execute();
$fetch= $select->fetchAll();



foreach($fetch as $book){
    echo 'Nome do produto: ' .$book['title'] .' &nbsp; Preço: R$ '.number_format($book['price'], 2, ",",".").'
          <a href ="meu-carrinho.php?add=meu-carrinho&id='.$book['id'].'">Adicionar ao Carrinho</a>
          <br/>';
}