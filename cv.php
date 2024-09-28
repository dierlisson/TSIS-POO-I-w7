<?php
require_once('classes/Pagina.class.php');
require_once('classes/PaginaCV.class.php');

$experiencia = ['Desenvolvedor Web','Cientista de Dados','Repositor de Prateleira'];
$educacao = ['Tecnólogo em Sistemas para Internet','Mestrado em Informática'];

$curriculo = new PaginaCV('João de Oliveira', 'joao@teste.com', $experiencia, $educacao);
$curriculo->renderizarPagina();

?>