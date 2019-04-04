<!DOCTYPE html>
<html lang='en' dir='ltr'>
<head>
<title>SplitUP</title>
<meta charset='UTF-8'>
<link rel='stylesheet' href='styles/layout.css' type='text/css'>
<</head>
<body>
<div class='wrapper row1'>
	<header id='header' class='clear'>
		<div id='hgroup'>
			<table>
				<td><img src='images/logo.jpeg' height='100'></td>
				<td>
					<h1><a href='principal.php'>Título</a></h1>
					<h2>Slogan</h2>
				</td>
			</table>
		</div>
		<?php session_start();
			if( empty($_SESSION['logado']) || $_SESSION['logado']==FALSE){
				include 'form_login.php';
			}
			else{
				include 'form_logout.php';
			}
		?>
	</header>
</div>
<div class='wrapper row2'>
	<div id='container' class='clear'>
		<!-- main content -->
		<div id='mensagem'>
			<section class='clear'>
				<article class='one_quarter'><p></p>
				</article>
				<article class='two_quarter'>
					<?php
						/*informações o formulário*/
						if (isset($_POST['salvar'])) {
							$form_nome = $_POST['nome'];
							$form_faculdade = $_POST['faculdade'];
							$form_genero = $_POST['genero'];
							$form_complemento = $_POST['complemento'];
							$form_nro_moradores = $_POST['nro_moradores'];
							$form_rua = $_POST['rua'];
							$form_nro = $_POST['nro'];
							$form_bairro = $_POST['bairro'];
							$form_aluguel = $_POST['aluguel'];
							$form_nome_resp = $_POST['nome_resp'];
							$form_curso_resp = $_POST['curso_resp'];
							$form_email_resp = $_POST['email_resp'];
							$form_album = $_POST['album'];
							$form_descricao = $_POST['descricao'];

							$form_tipo = "Republica";
						}
						/* atributos 'NOT NULL' */
						if (!(
							$form_nome AND
							$form_genero AND
							$form_nro_moradores AND
							$form_rua AND
							$form_nro AND
							$form_bairro AND
							$form_aluguel AND
							$form_nome_resp AND
							$form_curso_resp AND
							$form_email_resp AND
							$form_descricao AND
							$form_tipo)
							){$_SESSION['log']="preenchimento campos";}

						else {
							/*arquivo com funções de conexão*/
							require "func/bdfunc.php";
							$conexao = conecta();

							$u = $_SESSION['username'];
							$cadeia3 = "SELECT id_morador, id_imovel FROM morador WHERE usuario = '$u'; ";

							$resultset1 = consulta($conexao, $cadeia3);
							$id_mor = pg_result($resultset1, 0, 0);
							$vinculo = pg_result($resultset1, 0, 1);

							if ($vinculo == 0) {
								$cadeia1 = "INSERT INTO imovel(rua,	numero,	bairro,	tipo,	nome_resp,	curso_resp,	email_resp,	complemento,	num_moradores,	genero,	val_medio_aluguel,	descricao_local,	link_album) VALUES('$form_rua',$form_nro,'$form_bairro','$form_tipo','$form_nome_resp','$form_curso_resp','$form_email_resp','$form_complemento', $form_nro_moradores,'$form_genero', $form_aluguel,'$form_descricao','$form_album'); ";
								$insert = consulta($conexao, $cadeia1);
								if (!$insert){
									$_SESSION['log'] = "erro";
								}
								else {/*nao repetido*/
									$_SESSION['log'] = "nenhum erro";


									$cadeia4 = "SELECT id_imovel FROM imovel WHERE rua = '$form_rua' AND numero = $form_nro AND bairro = '$form_bairro'; ";

									/*mudando usuario para admin*/
									$resultset2 = consulta($conexao, $cadeia4);
									$id_rep = pg_result($resultset2, 0, 0);

									$cadeia5 = "UPDATE morador SET admin = TRUE, id_imovel = $id_rep WHERE id_morador = $id_mor;";
									$cadeia6 = "UPDATE imovel SET id_mor_admin = $id_mor WHERE id_imovel = $id_rep; ";
									$cadeia7 = "INSERT INTO republica VALUES($id_rep,'$form_nome'); ";
									$cadeia8 = "INSERT INTO facul_rep VALUES($id_rep,'$form_faculdade'); ";

									$insert1 = consulta($conexao, $cadeia7);
									$insert2 = consulta($conexao, $cadeia8);
									$update1 = consulta($conexao, $cadeia5);
									$update2 = consulta($conexao, $cadeia6);
									if ($update1 && $update2) {
										$_SESSION['log'] = "nenhum erro";
									}
									else {
										$_SESSION['log'] = "erro";
									}
								}// cadastro nao repetido
							}//vinculo = 0
						}//NOT NULL preenchido
						echo "<figure><ul class='clear'><li class='center'>";
						switch ($_SESSION['log']) {
							case "preenchimento campos":
								echo "<h6>NÃO FOI PREENCHIDO TODOS OS CAMPOS OBRIGATÓRIOS.</h6><br>";
								break;
							case "cadastro repetido":
								echo "<h6>ESTE ENDEREÇO JÁ ESTÁ CADASTRADO.</h6><br>";
								break;
							case "nenhum erro":
								echo "<h6>CADASTRO REALIZADO COM SUCESSO.</h6><br>";
								break;
							case "erro":
								echo "<h6>OCORREU UM ERRO DURANTE O CADASTRO.</h6><br>";
								break;
							case "ja tem imovel":
								echo "<h6>VOCÊ JA POSSUI UM IMÓVEL CADASTRADO.</h6><br>";
								break;
						}
						echo "</li></ul></figure>";

					?>
				</article>
				<article class='one_quarter lastbox'><p></p>
				</article>
			</section>
		</div>
		<!-- ################################################################################## -->
		<!-- ################################################################################## -->
		<!-- ################################################################################## -->
		<!-- ################################################################################## -->
		<!-- / content body -->
	</div>
</div>
<!-- Footer -->
<div class='wrapper row3'>
	<footer id='footer' class='clear'>
		<p class='fl_left'>Copyright &copy; 2018 - All Rights Reserved - <a href='https://www.facebook.com/paaflorio'>Paola Florio</a> e <a href='https://www.facebook.com/fuba3822'>Leonardo do Nascimento</a></p>
		<p class='fl_right'>Template by <a target='_blank' href='https://www.os-templates.com/' title='Free Website Templates'>OS Templates</a></p>
	</footer>
</div>
</body>
</html>
