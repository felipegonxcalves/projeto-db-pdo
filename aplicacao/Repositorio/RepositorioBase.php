<?php

namespace App\Repositorio;

abstract class RepositorioBase
{
    protected $conexao;

    public function __construct($conexao)
    {
        $this->conexao = $conexao;
    }

    protected function select($tabela)
    {
        $sql = "select * from {$tabela}";

        $resultado = $this->conexao->query($sql);

        return $resultado->fetchAll();
    }
}
