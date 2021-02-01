<?php

namespace App\uteis;

class Conexao extends \PDO
{
    public function __construct(array $dados)
    {
        $dns = \vsprintf('%:host=%s;dbname=%s', $dados);

        parent::__construct($dns, $dados['usuario'], $dados['senha']);
    }
}
