<?php
require_once './Tabelas/Area.php';
require_once './Tabelas/Usuarios.php';
require_once './Tabelas/Tarefas.php';

$area = new OS\Tabelas\Area();
$usuario = new OS\Tabelas\Usuarios();
$tarefa = new OS\Tabelas\Tarefas();

$tarefa->setArea($area);

$tarefa->setUsuarioAtribuido($usuario);

$tarefa->setUsuarioCriado($usuario);

//$area->setNome('Manutencao');
//$usuario->Joselito = "joselito";
$usuario->setSenha('1234');
echo $usuario->getSenha();
