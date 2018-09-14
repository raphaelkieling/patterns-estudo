<?php

namespace Raphael\Estrutural\Adapter;

class IntegracaoErp
{
	public function token($apiKey)
	{
		return 'TOKEN_GERADO_VIA_API';
	}

	public function pedido($pedido,$apiKey)
	{
		return true;
	}
}