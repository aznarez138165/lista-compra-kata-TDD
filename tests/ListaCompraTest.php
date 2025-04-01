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

}