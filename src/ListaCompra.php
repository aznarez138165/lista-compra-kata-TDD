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
        if ($this->isEmpty()) {
            return "";
        }
    }

    /**
     * @return bool
     */
    public function isEmpty(): bool
    {
        return empty($this->products);
    }

}