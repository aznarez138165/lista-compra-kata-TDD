<?php

namespace Deg540\DockerPHPListaCompra;

class ListaCompra
{
    private array $products = [];
    public function __construct()
    {
    }

    public function getProductsString()
    {
        if (empty($this->products)) {
            return "";
        }
    }

}