<?php

require_once "autoload/autoload.php";

use App\Repositorio\Curso;
use App\Uteis\Conexao;

$configDb = require 'config/db.php';
$conexao = new Conexao($configDb);

$cursoRepositorio = new Curso;

require_once "exibicao/principal.php";

