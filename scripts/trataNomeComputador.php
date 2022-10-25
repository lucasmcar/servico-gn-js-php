<?php

require_once('../conexao/Conexao.php');

$nome = filter_input(INPUT_POST, 'nome');




Conexao::getInstance();
$db = new Conexao();

if($nome != ''){

    $db->insertNome($nome); 
    header('location: ../index.php');
} else {
    header('location: ../index.php');
}