<?php

include "../conexao.php";

$id_usuario = $_POST["id_usuario"];
$nome = $_POST["nome"];

$sql = "UPDATE tb_usuario SET nome = '$nome' WHERE id_usuario = $id_usuario";
$usuario = $conexao->prepare($sql);
$usuario->execute();
$conexao = NULL;
