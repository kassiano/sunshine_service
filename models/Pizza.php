<?php

/**
 * Created by PhpStorm.
 * User: kassianoresende
 * Date: 16/08/16
 * Time: 14:21
 */
class Pizza
{

    public $sabor;
    public $ingredientes;
    public $imagem;


    public function __construct($sabor, $ingredientes, $imagem) {

        $this->sabor = $sabor;
        $this->ingredientes = $ingredientes;
        $this->imagem = $imagem;
    }

}