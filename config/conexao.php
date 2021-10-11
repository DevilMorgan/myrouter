<?php
$host = 'localhost';
$usuario = 'root';
$senha = '';
$banco = 'myrouter';

$bd = new mysqli($host,$usuario,$senha,$banco) or die("Não é Possivel Conecta ao Banco de Dados");
$dbremessa = new mysqli($host,$usuario,$senha,$banco) or die("Não é Possivel Conecta ao Banco de Dados");


?>