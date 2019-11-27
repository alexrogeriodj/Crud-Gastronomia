<?php
/**
 * Controller padrão do Cadastro de Produtos
 * Author: Alex Rogério
 * Date:   30/11/2019
 *//Cadastro de Produtos

namespace App\Controller;


class Cadastro de Produtos extends \Core\Classes\Controller
{
    public function index()
    {
        $this->Listar();
    }

    public function Listar()
    {
        $u = new \App\Model\Cadastro de Produtos;
        debug($u->get());   
    }


    public function Inserir()
    {
        $u = new \App\Model\Cadastro de Produtos;
        $u->Id  = "0001";
        $u->nome  = "Alex";
        $u->descricao = "alexrogeriodj@gmail.com";
        $u->quantidade = '3000';

        debug($u->insert(1));
    }

    public function Alterar()
    {
        $u = new \App\Model\Cadastro de Produtos();
        $u->Id  = "0001";
        $u->nome  = "Alex";
        $u->descricao = "Produto";
        $u->quantidade = '3000';
        debug($u->update(1));
    }

    public function Excluir()
    {
        $u = new \App\Model\Cadastro de Produtos();
        debug($u->delete(3));
    }
}