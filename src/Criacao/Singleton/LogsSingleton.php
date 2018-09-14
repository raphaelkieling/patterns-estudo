<?php

namespace Raphael\Criacao\Singleton;

class LogsSingleton
{
	protected static $instancia;

	private function __construct()
	{
		echo "<p>BUILDED</p>";
	}

	public static function obterInstance(): self 
	{
		if(empty(self::$instancia)){
			self::$instancia = new self();
		}

		echo "<p><b>Instanciado</b></p>";

		return self::$instancia;
	}

	public function gravarLog(array $dados)
	{
		$nomeArquivo = 'logs.txt';

		$logsAnteriores = [];

		if(filesize($nomeArquivo) > 0){
			$conteudoDoArquivo = file_get_contents($nomeArquivo);
			$logsAnteriores = json_decode($conteudoDoArquivo, true);
		}

		$logsAnteriores[] = $dados;

		$arquivo = fopen($nomeArquivo, 'w');

		fwrite($arquivo, json_encode($logsAnteriores));
		fclose($arquivo);
	}
}
