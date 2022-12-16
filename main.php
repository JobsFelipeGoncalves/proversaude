<?php

	include('url_response.php');

	$urlpatterns = array(

		// '/fale-conosco' => 'contatos.php',
		// '/servicos' => 'servicos.php',
		// '/a-integra' => 'a-integra.php',
		// '/?(?P<ads>\S+)' => 'index.php
		//aplicativo
		'/meu-prover-saude?(?P<ads>\S+)' => 'aplicativo.php',
		'/meu-prover-saude' => 'aplicativo.php',

		//ajuda
		'/ajuda?(?P<ads>\S+)' => 'ajuda.php',
		'/ajuda' => 'ajuda.php',

		//simulacao
		'/simular?(?P<ads>\S+)' => 'rede.php',
		'/simular' => 'rede.php',

		//simulacao
		'/falar-com-um-consultor?(?P<ads>\S+)' => 'consultor.php',
		'/falar-com-um-consultor' => 'consultor.php',

		//rede
		'/rede/medicos-e-clinicas?(?P<ads>\S+)' => 'rede.php',
		'/rede/medicos-e-clinicas' => 'rede.php',

		'/seja-um-credenciado?(?P<ads>\S+)' => 'credenciado.php',
		'/seja-um-credenciado' => 'credenciado.php',

		//institucional
		'/sobre/quem-somos#fale-conosco?(?P<ads>\S+)' => 'quem-somos.php',
		'/sobre/quem-somos#fale-conosco' => 'quem-somos.php',

		'/sobre/quem-somos#unidades-prover-saude?(?P<ads>\S+)' => 'quem-somos.php',
		'/sobre/quem-somos#unidades-prover-saude' => 'quem-somos.php',

		'/sobre/quem-somos?(?P<ads>\S+)' => 'quem-somos.php',
		'/sobre/quem-somos' => 'quem-somos.php',

		//comercial
		'/planos/pj/corporate-master?(?P<ads>\S+)' => 'mod-corporate-master.php',
		'planos/pj/corporate-master' => 'mod-quality.php',

		'/planos/pj/quality-corporate?(?P<ads>\S+)' => 'mod-quality-corporate.php',
		'planos/pj/quality-corporate' => 'mod-quality.php',

		'/planos/classico?(?P<ads>\S+)' => 'mod-classico.php',
		'planos/classico' => 'mod-classico.php',

		'/planos/quality?(?P<ads>\S+)' => 'mod-quality.php',
		'planos/quality' => 'mod-quality.php',

		//beneficios
		'/vantagens-e-beneficios?(?P<ads>\S+)' => 'vantagens-beneficios.php',
		'/vantagens-e-beneficios' => 'vantagens-beneficios.php',

		'/' => 'index.php',		
		'/404' => '404.php'

	);

	url_response($urlpatterns);
?>
