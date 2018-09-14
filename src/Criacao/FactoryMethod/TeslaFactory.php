<?php

namespace Raphael\Criacao\FactoryMethod;

use Raphael\Criacao\FactoryMethod\Product\{
	CarroProduct, TeslaModeloS, TeslaModeloX
};

class TeslaFactory implements CarroFactory
{
	public function criarCarro(string $modeloCarro): CarroProduct
	{
		if($modeloCarro == 'modelo_x'){
			return new TeslaModeloX();
		}elseif($modeloCarro == 'modelo_s'){
			return new TeslaModeloS();
		}else{
			throw new Exception("Modelo de carro não existe no sistema {$modeloCarro}");
		}
	}
}