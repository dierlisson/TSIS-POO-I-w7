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
        echo '<hr>';
        echo '<h2>Experiência Proficcional</h2>';
        echo '<ul>';
        foreach($this->experiencia as $item){
            echo '<li>'.$item.'</li>';
        }
        echo '</ul>';
        echo '<hr>';
        echo '<h2>Educação</h2>';
        echo '<ul>';
        foreach($this->educacao as $item){
            echo '<li>'.$item.'</li>';
        }
        echo '</ul>';
        
    }
}
?>