<?php
// classes/Pagina.class.php
class Pagina
{
    protected $titulo; //mudou de private para protected para ser acessada por classe filha.

    public function __construct($titulo)
    {
        $this->titulo = $titulo;
    }
    public function renderizarCabecalho()
    {
        echo '<!DOCTYPE html>';
        echo '<html>';
        echo '<head>';
        echo '<meta charset="utf-8">';
        echo '<title>' . $this->titulo . '</title>';
        //add css, js ou etc.
        echo '</head>';
        echo '<body>';
    }
    public function renderizarRodape()
    {
        //add info de rodapé

        echo '</body>';
        echo '</html>';
    }

    public function renderizarConteudo()
    {
        // este metodo será implementado nas classes de páginas específicas
    }
    public function renderizarPagina(){
        $this->renderizarCabecalho();
        $this->renderizarConteudo();
        $this->renderizarRodape();
    }
}
?>