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

       return $this->getProducts();

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
        } else if ($action === "añadir pan 2") {
            $this->products[] = "pan x2";
        }
    }

    /**
     * @return string
     */
    public function getProducts(): string
    {
        return implode(',', $this->products);
    }

}