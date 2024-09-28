<?php
require_once('classes/Pagina.class.php');
require_once('classes/PaginaDatas.class.php');

$datasComemorativas = [
    '07 de Setembro - Independência do Brasil',
    '21 de Setembro - Emancipação Política do Município de São Mateus',
    '12 de Outubro - Dia de Nossa Senhora Aparecida',
    '28 de Outubro - Dia do Servidor Público',
    '02 de Novembro - Finados',
    '15 de Novembro - Proclamação da República',
    '20 de Novembro - Dia Nacional de Zumbi e da Consciência Negra',
    '12 de Dezembro - Termino de Período Letivo',
    '25 de Dezembro - Natal'
];
//instanciando a página e enviando o array para ser renderizado
$paginaDatas = new PaginaDatas($datasComemorativas);
$paginaDatas->renderizarPagina();

?>