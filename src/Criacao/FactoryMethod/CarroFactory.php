<?php


namespace Raphael\Criacao\FactoryMethod;

use Raphael\Criacao\FactoryMethod\Product\CarroProduct;

interface CarroFactory
{
	public function criarCarro(string $modelCarro): CarroProduct;
}