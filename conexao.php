<?php
/* inicio da conexão com o BD*/
$servidor = 'localhost';
$bd = 'bd_filmes';
$usuario = 'root';
$senha = '';
$id = $_GET['id'] ?? 0;

$conexao = mysqli_connect($servidor, $usuario, $senha, $bd);

if (!$conexao) {
    die("deu ruim" . mysqli_connect_error());
}

/* fim da conexao */
?>