<?php
class PaginaCV extends Pagina{
    private $nome;
    private $email;
    private $experiencia;
    private $educacao;

    public function __construct($nome, $email, $experiencia, $educacao){
        $this->nome = $nome;
        $this->email = $email;
        $this->experiencia = $experiencia;
        $this->educacao = $educacao;
        parent::__construct('Currículo de '.$nome);
    }
    public function renderizarConteudo(){
        echo '<h1>Currículo de '.$this->nome.'</h1>';
        echo '<p>E-mail: '.$this->email.'</p>';
        echo '<h2>Experiência Proficcional</h2>';
        echo '<ul>';
        echo '<li>'.$this->experiencia.'</li>';
        echo '</ul>';

        echo '<h2>Educação</h2>';
        echo '<ul>';
        echo '<li>'.$this->educacao.'</li>';
        echo '</ul>';
        
    }
}
?>