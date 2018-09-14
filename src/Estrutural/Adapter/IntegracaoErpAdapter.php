<?php

namespace Raphael\Estrutural\Adapter;

class IntegracaoErpAdapter implements IErpAdapter
{
	private $integracaoErp;

	public function __construct(IntegracaoErp $integracaoErp)
	{
		$this->integracaoErp = $integracaoErp;
	}

	public function gerarToken(string $apiKey, string $usuario)
	{
		return $this->integracaoErp->token($apiKey);
	}

	public function enviarPedido(Pedido $pedido, string $token)
	{
		$pedidoConvertidoArray = [
			'valor_total'=> $pedido->valorTotal,
			'codigo'=>$pedido->getNumeroPedido
		];

		foreach ($pedido->produtos as $produto) {
			$pedidoConvertidoArray['produtos'][] = $produto;
		}

		return $this->integracaoErp->pedido($pedidoConvertidoArray, $token);
	}
	
}