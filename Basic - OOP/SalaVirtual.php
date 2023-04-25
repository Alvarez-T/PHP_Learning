<?php
class SalaVirtual
{
    private $numeroSala;
    private $integrantes;

    public function __construct($numeroSala)
    {
        $this->numeroSala = $numeroSala;
        $this->integrantes = [];
    }

    public function addIntegrante(Pessoa $pessoa)
    {
        $this->integrantes[] = $pessoa; 
        echo "Novo integrante \"" . $pessoa->getNick() .  "\" adicionado na sala " . $this->numeroSala . '<br>';
    }

    public function getIntegrantes()
    {
        echo 'Integrantes da sala número: ' . $this->numeroSala . "<br>";
        foreach ($this->integrantes as $pessoa)
        {
            echo "Nome: \"" . $pessoa->getNick() . "\" Idade: " . $pessoa->getIdade() . "<br>";
        }
    }
}
?>