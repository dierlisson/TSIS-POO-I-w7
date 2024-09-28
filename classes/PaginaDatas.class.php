<?php
//exibir as datas comemorativas e feriados de um determinado semestre
require_once('classes/Pagina.class.php');

class PaginaDatas extends Pagina
{
    private $datasComemorativas;

    public function __construct($datasComemorativas)
    {
        $this->datasComemorativas = $datasComemorativas;
        parent::__construct('Datas Comemorativas');
    }
    //metodo para lançar as datas como lista
    public function renderizarConteudo()
    {
        echo '<h1>Datas comemorativas do 2º Semestre de 2024</h1>';
        echo '<br>';
        echo '<hr>';
        echo '<ul>';
        foreach ($this->datasComemorativas as $item) {
            echo '<li>' . $item . '</li>';
        }
        echo '</ul>';
        echo '<hr>';
    }
}
