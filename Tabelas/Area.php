<?php

namespace OS\Tabelas;

class Area
{
    protected $id;
    
    protected $nome;
    
    public function getId()
    {
        return $this->id;
    }
    public function getNome($nome)
    {
        return $this->nome;
    }

}

