<?php

include "../conexao.php";

$id_usuario = $_POST["id_usuario"];

$sql = "DELETE FROM tb_usuario WHERE id_usuario = $id_usuario";
$usuario = $conexao->prepare($sql);
$usuario->execute();
$conexao = NULL;
