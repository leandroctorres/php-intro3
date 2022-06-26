<?php
/**
 * User: Leandro
 * Date: 08/06/2022
 */

include ('servicos/servicoMensagemSessao.php');
include ('servicos/servicoValidacao.php');
include ('servicos/servicoCategoriaCompetidor.php');

$nome = $_POST['nome'];
$idade = $_POST['idade'];

defineCategoriaCompetidor($nome, $idade);

header('location: index.php');
