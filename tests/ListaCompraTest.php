<?php

namespace Deg540\DockerPHPListaCompra\Test;

use Deg540\DockerPHPListaCompra\ListaCompra;
use PHPUnit\Framework\TestCase;

final class ListaCompraTest extends TestCase
{
    private ListaCompra $listaCompra;

    protected function setUp(): void
    {
        parent::setUp();

        $this->listaCompra = new ListaCompra();
    }

    /**
     * @test
     */
    public function givenEmptyListReturnsEmptyString(): void
    {
        $this->assertEquals("",$this->listaCompra->getProductsString());
    }

    /**
     * @test
     */
    public function givenAddProductWithNoQuantityReturnsProductsStringWithProductAdded(): void
    {
        $this->listaCompra->action("añadir pan");
        $this->assertEquals("pan x1",$this->listaCompra->getProductsString());
    }

    /**
     * @test
     */
    public function givenAddProductWithQuantityReturnsProductsStringWithProductAdded(): void
    {
        $this->listaCompra->action("añadir pan 2");
        $this->assertEquals("pan x2",$this->listaCompra->getProductsString());
    }

    /**
     * @test
     */
    public function givenAddProductWithCapitalLetterReturnsProductsStringWithProductAdded(): void
    {
        $this->listaCompra->action("añadir Pan 2");
        $this->assertEquals("pan x2",$this->listaCompra->getProductsString());
    }

    /**
     * @test
     */
    public function givenAddTwoProductsReturnsProductsStringWithProductsAdded(): void
    {
        $this->listaCompra->action("añadir Pan 2");
        $this->listaCompra->action("añadir leche");
        $this->assertEquals("pan x2, leche x1",$this->listaCompra->getProductsString());
    }

    /**
     * @test
     */
    public function givenDeleteInvalidProductReturnsMessage(): void
    {
        $this->listaCompra->action("eliminar pan");
        $this->assertEquals("El producto seleccionado no existe",$this->listaCompra->getProductsString());
    }
}