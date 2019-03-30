<?php

include "conexao.php";

$sql = "select * from tb_usuario";
$usuarios = $conexao->prepare($sql);
$usuarios->execute();


foreach($usuarios as $carrega)
{
    echo "
        <tr>
            <td><input onblur='attNome(".$carrega['id_usuario'].")' id='nome".$carrega["id_usuario"]."' value='".$carrega["nome"]."'></td>
            <td><input class='idade' onblur='attIdade(".$carrega['id_usuario'].")' id='idade".$carrega["id_usuario"]."' value='".$carrega["idade"]."'></td>
            <td class='excluir'><button class='btnExcluir' onclick='excluirUsuario(".$carrega["id_usuario"].")'>X</button></td>
        </tr>";
}


