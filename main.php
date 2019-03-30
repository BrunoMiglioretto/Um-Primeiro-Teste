<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Main</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>

        <div class="topo">
            <h1>Administrar usuários</h1>
        </div>
        <hr>
        <div class="corpo">
            <div class="campos">
                <div class="campo">
                    <p>Nome</p>
                    <input type="text" id="nome">
                </div>
                <div class="campo">
                    <p>Idade</p>
                    <input type="text" id="idade">
                </div>
            </div>
            <input type="button" id="addUsuario" value="Cadastrar">
        </div>
        <hr>
        <div class="tabela">
            <table border=1 cellspacing=0 style="border:0.5px solid lightgrey">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Idade</th>
                        <th>Excluir</th>
                    </tr>
                </thead>
                <tbody>

                </tbody>
            </table>
        </div>

        <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
		<script type="text/javascript">
			
            $(document).ready(function(){
                att();
            });
            
// ------------------- Adicionar Usuario ------------------- //
            $('#addUsuario').click(function(){
                nome = document.getElementById("nome");
                idade = document.getElementById("idade");

                $.post("CRUD/addUsuario.php",{
                    nome : nome.value, idade : idade.value
                },function(){
                    att();
                    nome.value = "";
                    idade.value = "";
                });
			});

// ------------------- Exclui Usuario ------------------- //
            function excluirUsuario(id_usuario){
                $.post("CRUD/excluirUsuario.php",{
                    id_usuario : id_usuario
                },function(){
                    att();
                });
            }

// ------------------- Atualiza Nome Usuario ------------------- //
            function attNome(id_usuario){
                nome = $("#nome" + id_usuario).val();
                $.post("CRUD/attNome.php",{
                    id_usuario : id_usuario, nome : nome
                },function(){
                    att();
                });
            }

// ------------------- Atualiza Idade Usuario ------------------- //

            function attIdade(id_usuario){
                idade = $("#idade" + id_usuario).val();
                $.post("CRUD/attIdade.php",{
                    id_usuario : id_usuario, idade : idade
                },function(){
                    att();
                });
            }

// ------------------- Atualiza Tabela ------------------- //
            function att(){
                $.ajax({
					url: 'attTabela.php',
					success: function(data) {
						$('.tabela table tbody').html(data);
					},
					beforeSend: function(){
					},
					complete: function(){
					}
				});
            }

		</script>
    </body>
</html>