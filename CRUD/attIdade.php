<?php

include "../conexao.php";

$id_usuario = $_POST["id_usuario"];
$idade = $_POST["idade"];

$sql = "UPDATE tb_usuario SET idade = '$idade' WHERE id_usuario = $id_usuario";
$usuario = $conexao->prepare($sql);
$usuario->execute();
$conexao = NULL;

