<?php
        include_once("class/Produto.class.php");
 
        //Criando e Instanciando o objeto
        $oProduto               = new Produto;
        //Atribuindo valores ao objeto
        $oProduto->codigo_barra = $_POST["codigo_barra"];
        $oProduto->produto      = $_POST["produto"];
        //chamando a funcao que faz o insert
        $oProduto->setProduto();
        echo "Produto ". $_POST["produto"] . " cadastrado com sucesso!";


<!--?php
 include_once(" produto.class.php");

="" criando="" e="" instanciando="" o="" objeto
="" $oproduto="new" produto;
="" atribuindo="" valores="" ao="" $oproduto->codigo_barra="$_POST["codigo_barra"];
" $oproduto->produto="$_POST["produto"];
" chamando="" a="" funcao="" que="" faz="" insert
="" $oproduto->setproduto();
="" echo="" "produto="" ".="" $_post["produto"]="" .="" "="" cadastrado="" com="" sucesso!";
?>
"="" v:shapes="_x0000_s1052"-->