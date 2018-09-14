<?php

namespace Raphael\Estrutural\Adapter;

class Pedido
{
	public $numeroPedido;
	public $valorTotal;
	public $produtos;
	
	public function	addProduto(string	$produto)
	{
		$this->produtos[]	=	$produto;
		return $this;
	}
}