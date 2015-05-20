<?php

namespace OS\Tabelas;

class Tarefas 
{
    protected $id;
    protected $usuario_id_criado;
    protected $usuario_id_atribuido;
    protected $area_id;
    protected $datacriacao;
    protected $observacao;
    protected $descricao;
    protected $status;
    protected $prioridade;
    protected $prazo;
    
    public function setArea(\OS\Tabelas\Area $objArea)
    {
        $this->area_id = $objArea->getId();
    }
     public function setUsuarioAtribuido(\OS\Tabelas\Usuarios $objUsuario)
    {
        $this->usuario_id_atribuido = $objUsuario;
    }
     public function setUsuarioCriado(\OS\Tabelas\Usuarios $objUsuario)
    {
        $this->usuario_id_criado = $objUsuario;
    }
    public function setDataCriacao(\DateTime $data)
    {
        $this->datacriacao = $data;
    }
    public function setDescricao($valor)
    {
        $this->descricao = $valor;
    }
    public function setObservacao($valor)
    {
        $this->observacao = $valor;
    }
    public function setStatus($valor)
    {
        $this->status = $valor;
    }
    public function setPrioridade($valor)
    {
        $this->prioridade = $valor;
    }
    public function setPrazo($valor)
    {
        $this->prazo = $valor;
    }
    public function getPrazo()
    {
        return $this->prazo;
    }
    public function getId()
    {
        return $this->id;
    }
    public function getPrioridade()
    {
        return $this->prioridade;
    }
    public function getArea()
    {
        return $this->area_id;
    }
    public function getStatus()
    {
        return $this->status;
    }
    public function getDescricao()
    {
        return $this->descricao;
    }
    public function getObservacao()
    {
        return $this->descricao;
    }
    public function getDatacriacao()
    {
        return $this->datacriacao;
    }
    public function getUsuariocriado()
    {
        return $this->usuario_id_criado;
    }
    public function getUsuarioAtribuido()
    {
        return $this->usuario_id_atribuido;
    }
    
         
}
