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

    <div id='banner'>
      <section class='clear'>
        <article class='left_wide'><p></p>
        </article>
        <article class='center_wide'>
          <?php
            /*MOSTRAR PARA P ADMIN O SEU IMÓVEL*/
            include 'table_endereco.php';
          ?>
        </article>
        <article class='right_wide lastbox'><p></p>
        </article>
      </section>
    </div>

    <div id='formulario'>
      <section class='clear'>
        <article class='one_quarter'><p></p>
        </article>
        <article class='two_quarter lastbox'>
          <?php

              /*moradores atuais do imovel*/
              include 'form_vinculo.php';

              /*criar lista com nomes adicionados*/
              /*botão de remover*/


              /*criar botão finalizar*/

          ?>

        </article>
        <article class='one_quarter'><p></p>
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
