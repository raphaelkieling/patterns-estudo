<?php

require "vendor/autoload.php";

echo "Hello World Patterns";

// Singleton

$singleton = Raphael\Criacao\Singleton\LogsSingleton::obterInstance();
$singleton = Raphael\Criacao\Singleton\LogsSingleton::obterInstance();
$singleton = Raphael\Criacao\Singleton\LogsSingleton::obterInstance();
$singleton->gravarLog(['message'=>'all_done']);
$singleton->gravarLog(['message'=>'all_done_02']);


// Factory

$factoryMethodCarroTeslaFabrica = new Raphael\Criacao\FactoryMethod\TeslaFactory;

$factoryMethodCarroTeslaFabrica->criarCarro('modelo_x')->acelerar();
$factoryMethodCarroTeslaFabrica->criarCarro('modelo_s')->acelerar();
$factoryMethodCarroTeslaFabrica->criarCarro('modelo_x')->frear();

// Prototype

$compradores	=	[
	'Gabriel	Anhaia',
	'Anderson	Scherer',
	'Braian	Ottoni'
];

$livroPhp = new Raphael\Criacao\Prototype\LivroPhpPrototype;
$livroPhp->setTitulo('Padrões	de	Projeto	em	PHP	7.2');
$livros = [];

foreach ($compradores as $nomeComprador) {
	$livroComprador = clone $livroPhp;
	$livroComprador->setNomeTitular($nomeComprador);
	$livros[] = $livroComprador;
}

print_r($livros);


//Builder


$foguete = new Raphael\Criacao\Builder\FogueteProduct;
$foguete->setModelo('Test')
	->setNumeroLugares(5)
	->setNumeroMotores(2)
	->setLitrosCombustivel(500);

echo $foguete;


//Estruturais

// Adapter

$integracaoLegado = new Raphael\Estrutural\Adapter\IntegracaoErp;

$integracaoErpAdapter = new Raphael\Estrutural\Adapter\IntegracaoErpAdapter($integracaoLegado);

$token	=	$integracaoErpAdapter->gerarToken('123456',	'GABRIEL_ANHAIA');
$pedidoDeTeste	=	new	Raphael\Estrutural\Adapter\Pedido();
$pedidoDeTeste->addProduto('IPhone	X')
				->addProduto('Carregador	Sem	Fio	-	IPhone	X');

$pedidoEnviadoComSucesso = $integracaoErpAdapter->enviarPedido($pedidoDeTeste,	$token);

if ($pedidoEnviadoComSucesso) {
	echo 'Pedido envidado com	sucesso!';
}
