<?php

namespace Raphael\Estrutural\Adapter;

interface IErpAdapter
{
	public function gerarToken(string $apiKey, string $usuario);
	public function enviarPedido(Pedido $pedido, string $token);
}
