<!DOCTYPE html>
<html lang='en' dir='ltr'>
<head>
<title>SplitUP</title>
<meta charset='UTF-8'>
<script src="scripts/jquery.min.js"></script>
<script src="scripts/conditional.js"></script>
<script src="scripts/FormLogin.js"></script>
<link rel="stylesheet" href="styles/bootstrap-iso.css" />
<link rel='stylesheet' href='styles/layout.css' type='text/css'>
</head>
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
      if ($_SESSION['logado']=TRUE && isset($_POST['sair'])) {
        $_SESSION['logado']=FALSE;
        $_SESSION['categoria']="";
        header("Location: principal.php");
        exit();
      }

      $_SESSION['log']="";

      if (isset($_POST['entrar'])) {//if entrar
        require "func/bdfunc.php";

      	$form_username = $_POST['username'];
      	$form_senha= $_POST['senha'];

      	// tratar atributos "NOT NULL"
      	if (!( $form_username AND $form_senha)){
          $_SESSION['logado']=FALSE;
          $_SESSION['log']="preenchimento campos";
      	}else {

        	$conexao = conecta();
          //Usuario   id_user         nome_user   tipo
          //Calouro   id_calouroCE    telefone    email     faculdade
          //Morador   id_moradorCE    usuario     senha     admin       id_imovel

          $cadeia = "
            SELECT Morador.senha, Morador.admin
            FROM Usuario, Morador
            WHERE usuario = '$form_username'
            AND Usuario.id_user = Morador.id_morador;
          ";

        	// executa uma busca por dados
        	$resultset = consulta($conexao, $cadeia);
        	$nlinhas = pg_num_rows($resultset);

        	if ($nlinhas == 0) {//if fill form
        		desconecta($conexao);
            $_SESSION['log']="usuario ausente";
            $_SESSION['logado']=FALSE;

        	}else {
            // recupera campos do resutset, linha, coluna
          	$bd_senha = pg_result($resultset, 0, 0);
            $_SESSION['admin'] = pg_result($resultset, 0, 1);

            if ($form_senha == $bd_senha) {
              $_SESSION['username'] = $form_username;
              $_SESSION['log'] = "nenhum erro";
              $_SESSION['logado'] = TRUE;
            }
            else {
              $_SESSION['log'] = "erro login";
              $_SESSION['logado'] = FALSE;
            }

          	desconecta($conexao);
          }//fim if 0 linhas
        }//fim if fill form
      }//fim entrar

        switch ($_SESSION['log']) {
          case "":
          case "preenchimento campos":
          case "usuario ausente":
          case "erro login":
            include 'form_login.php';
            break;
          case "nenhum erro":
            header("Location: principal.php");
            break;
        }
    ?>
  </header>
</div>
<!-- content -->
<div class='wrapper row2'>
  <div id='container' class='clear'>
    <!-- main content -->
    <div id='formulario'><!--formulario cadastrar usuario ou mensagens de login-->
      <section class='clear'>
        <article class='one_quarter'><p></p>
        </article>
        <article class='two_quarter'>

         <?php
            if (isset($_POST['cadastrar'])) {//if cadastrar
              include 'form_usuario.php';
            }/*
            else {
              echo "<figure><ul class='clear'><li class='center'>";
              switch ($_SESSION['log']) { //switch de logind dos usuarios
                case "preenchimento campos":
                  echo "<h6>PREENCHA TODOS OS CAMPOS OBRIGATÓRIOS.</h6><br>";
                  break;
                case "usuario ausente":
                  echo "<h6>VOCÊ NÃO POSSUI UM CADASTRO.</h6><br>";
                  break;

                case "erro login":
                  echo "<h6>NOME DE USUARIO OU SENHA INCORRETOS.</h6><br>";
                  break;
              }
              echo "</li></ul></figure>";
            }*/
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
