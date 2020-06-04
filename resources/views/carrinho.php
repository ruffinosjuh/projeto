<?php
    session_start();
    if(!isset($_SESSION['itens']))
    {
        $_SESSION['itens'] = array();
    }

    if(isset($_GET['add']) && $_GET['add'] == "meu-carrinho")
    {
      //Adiciona ao carrinho
      $idProduto = $_GET['id'];
      if(!isset($_SESSION['itens'][$idProduto]))
      {
          $_SESSION['itens'][$idProduto] = 1;
      }else{
          $_SESSION['itens'][$idProduto] += 1;
      }
    }
    
    if(count($_SESSION['itens']) == 0)
      {
        echo 'Carrinho Vazio<br><a href="index.php">Adicionar itens</a>';
      }else{
        $_SESSION['dados'] = array();

        $conexao= new PDO('mysql:host=127.0.0.1;dbname=laravel', "localhost", "123456");
        foreach($_SESSION['itens'] as $idProduto => $quantidade)
        {
        $select = $conexao->prepare("SELECT * FROM book WHERE id=?");
        $select->bindParam(1, $idProduto);
        $select->execute();
        $produtos = $select->fetchAll();
        $total = $quantidade * $produtos[0] ["price"];
        echo 
            'Nome: '.$produtos[0] ["title"]. '<br/>
            Preço: '.number_format($produtos[0] ["price"], 2,",",".").'<br/>
            Quantidade: '.$quantidade.'<br/>
            Total: ' .number_format($total, 2,",",".").'<br/>
            <a href="remover.php?remover=meu-carrinho&id='.$idProduto.'">Remover</a><hr/>';
        
            array_push($_SESSION['dados'], array('id_produto'=>$idProduto, 
            'quantidade'=>$quantidade, 'preco'=>$produtos[0]['price'],
            'total' => $total));
          }

        echo '<a href= "finalizar.php"> Finalizar Pedido</a>';
      }

?>