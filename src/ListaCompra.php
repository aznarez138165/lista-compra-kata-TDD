<?php

namespace Deg540\DockerPHPListaCompra;

class ListaCompra
{
    private array $products = [];
    private array $quantities = [];
    public function __construct()
    {
    }

    /**
     * @return string
     */
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

    /**
     * @param string $action
     * @return void
     */
    public function action(string $action): void
    {
        if (preg_match("/^añadir\s+([^\d]+)\s*(\d+)?$/", $action, $matches)) {
            $product = strtolower(trim($matches[1]));
            if (isset($matches[2])) {
                $quantity = intval(trim($matches[2]));
            } else {
                $quantity = 1;
            }
            $this->products[] = "{$product} x{$quantity}";
        } else if (preg_match("/^eliminar\s+([^\d]+)$/", $action, $matches)) {
            $product = strtolower(trim($matches[1]));

            if(array_search($product, $this->products) === false) {
                echo "el producto seleccionado no existe";
            }
        }
    }

    /**
     * @return string
     */
    public function getProducts(): string
    {
        return implode(', ', $this->products);
    }

}