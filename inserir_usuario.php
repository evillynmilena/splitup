<!DOCTYPE html>
<html lang='en' dir='ltr'>
<head>
<title>SplitUP</title>
<meta charset='UTF-8'>
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
    <div id='mensagem'><!--mensagens-->
      <section class='clear'>
        <article class='one_quarter'><p></p>
        </article>
        <article class='two_quarter'>
          <?php
            /*arquivo com funções de conexão*/
            require "func/bdfunc.php";;

            /*informações o formulário*/
            if (isset($_POST['salvar'])) {
              $form_nome = $_POST['nome'];
              $form_tipo = $_POST['tipo_user'];

              /*dropdown select*/
              if (!empty($form_tipo) && $form_tipo == 'Calouro') {
                $form_facul = $_POST['faculdade'];
                $form_email = $_POST['email'];
                $form_tel = $_POST['telefone'];
                if ($form_facul AND $form_email AND $form_tel)
                  $ok = TRUE;
              }

              else if (!empty($form_tipo) && $form_tipo == 'Morador') {
                $form_user = $_POST['usuario'];
                $form_pass = $_POST['senha'];
                if ($form_user AND $form_pass)
                  $ok = TRUE;
              }

              /* atributos 'NOT NULL' */
              if ( !empty($form_nome) && !empty($form_tipo) && !$ok){
              $_SESSION['log']="preenchimento campos";
              }

              else {
                $conexao = conecta();

                $cadeia1 = "INSERT INTO usuario(nome_user, tipo) VALUES( '$form_nome', '$form_tipo');";
                $insert = consulta($conexao, $cadeia1);
                if ($insert){
                  $_SESSION['log'] = "nenhum erro";
                }

                $cadeia2 = "SELECT MAX(id_user) FROM usuario;";
                $resultset = consulta($conexao, $cadeia2);
                $id = pg_result($resultset, 0, 0);

                switch ($form_tipo) {
                  case 'Calouro':
                    $cadeia3 = "INSERT INTO calouro(id_calouro, telefone, email, faculdade) VALUES($id, '$form_tel', '$form_email', '$form_facul');";
                    $insert = consulta($conexao, $cadeia3);
                    if (!$insert){
                      $_SESSION['log'] = "erroc";
                    }
                    break;

                  case 'Morador':
                    $cadeia4 = "INSERT INTO morador(id_morador, usuario, senha, admin) VALUES($id, '$form_user', '$form_pass', 'false');";
                    $insert = consulta($conexao, $cadeia4);
                    if (!$insert){
                      $_SESSION['log'] = "errom";
                    }
                    break;
                }
              }

              echo "<figure><ul class='clear'><li class='center'>";
              switch ($_SESSION['log']) { //switch de novo usuario no sistema
                case "preenchimento campos":
                  echo "<h6>NÃO FOI PREENCHIDO TODOS OS CAMPOS OBRIGATÓRIOS.</h6><br>";
                  break;
                case "erro":
                  echo "<h6>CADASTRO COM ERRO</h6><br>";
                  break;
                case "nenhum erro":
                  echo "<h6>CADASTRO REALIZADO COM SUCESSO!</h6><br>";
                  break;
              }
              echo "</li></ul></figure>";
            }
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
