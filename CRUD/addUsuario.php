<?php

include "../conexao.php";

$nome = $_POST["nome"];
$idade = $_POST["idade"];

$sql = "INSERT INTO tb_usuario SET nome = '$nome', idade = $idade";
$usuario = $conexao->prepare($sql);
$usuario->execute();

$conexao = NULL;
