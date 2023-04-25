<?php
class Pessoa
{
    private $nickname;
    private $idade;

    public function __construct($nick, $idade)
    {
        $this->nickname = $nick;
        $this->idade = $idade;
    }

    public function getNick()
    {
        return $this->nickname;
    }

    public function getIdade()
    {
        return $this->idade;
    }
    
}
?>