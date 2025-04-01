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

        $string = "";
        foreach ($this->products as $product) {
            $string .= $product;
        }

        return $string;
    }

    /**
     * @return bool
     */
    public function isEmpty(): bool
    {
        return empty($this->products);
    }

    public function action(string $action)
    {
        if ($action === "añadir pan") {
            $this->products[] = "pan x1";
        }
    }

}