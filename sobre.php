<?php
require_once './Pagina.class.php';

//criar uma instância da classe Página;
$paginaSobre = new Pagina('Sobre nossa empresa');

$paginaSobre->renderizarCabecalho();

echo '<h1> Sobre nossa empresa</h1>';
echo '<p> Teste de página, asdasdasdasdasdasd asd asd asd asd';

$paginaSobre->renderizarRodape();


?>