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
<!-- content -->
<div class='wrapper row2'>
  <div id='container' class='clear'>
    <!-- main content -->
    <div id='banner'>
      <section class='clear'>

        <article class='left_wide'>
          <p></p>
        </article>

        <article class='center_wide'>
          <ul>

          <?php
          require "func/bdfunc.php";

          $conexao = conecta();

          // executa uma busca por dados
          $cadeia = "SELECT * FROM Imovel AS I, Pensionato AS P
          WHERE I.id_imovel = P.id_imovel;";
          $resultset = consulta($conexao, $cadeia);
          $nlinhas = pg_num_rows($resultset);

          for ($i=0; $i<$nlinhas; $i++){
            // recupera campos do resultado
            $restricao = pg_result($resultset, $i, 16);
            $genero = pg_result($resultset, $i, 10);
            $complemento = pg_result($resultset, $i, 8);
            $nro_moradores = pg_result($resultset, $i, 9);
            $rua = pg_result($resultset, $i, 1);
            $nro = pg_result($resultset, $i, 2);
            $bairro = pg_result($resultset, $i, 3);
            $aluguel = pg_result($resultset, $i, 11);
            $nome_resp = pg_result($resultset, $i, 5);
            $email_resp = pg_result($resultset, $i, 7);
            $album = pg_result($resultset, $i, 13);
            $descricao = pg_result($resultset, $i, 12);

            /*escrever tabela*/
            echo
            "<li>".
              "<table border='0'>".
                "<tr>".
                  "<td class='one dark'>".
                    "<b>Nome:  </b>".
                  "</td>".
                  "<td class='ten light' colspan='8'>".
                    "<div class='upperinline'>".$restricao."</div>".
                  "</td>".
                "</tr>".
                "<tr>".
                  "<td class='dark'>".
                    "<b>Genero:</b>".
                  "</td>".
                  "<td class='five light' colspan='2'>".
                    "<div class='upperinline'>".$genero."</div>".
                  "</td>".
                  "<td class='three dark'>".
                    "<b>Logradouro:</b>".
                  "</td>".
                  "<td class='three light' colspan='2'>".
                    "<div class='upperinline'>".$complemento."</div>".
                  "</td>".
                  "<td class='dark' colspan='2'>".
                    "<b>Moradores:</b>".
                  "</td>".
                  "<td class='two light'>".
                    "<div class='upperinline'>".$nro_moradores."</div>".
                  "</td>".
                "</tr>".
                "<tr>".
                  "<td class='dark'>".
                    "<b>Rua:</b>".
                  "</td>".
                  "<td class='nine light' colspan='6'>".
                    "<div class='upperinline'>".$rua."</div>".
                  "</td>".
                  "<td class='one dark'>".
                    "<b>Nº:  </b>".
                  "</td>".
                  "<td class='one light'>".
                    "<div class='upperinline'>".$nro."</div>".
                  "</td>".
                "</tr>".
                "<tr>".
                  "<td class='dark'>".
                    "<b>Bairro:</b>".
                  "</td>".
                  "<td class='six light' colspan='3'>".
                    "<div class='upperinline'>".$bairro."</div>".
                  "</td>".
                  "<td class='dark' colspan='2'>".
                    "<b>Aluguel médio:</b>".
                  "</td>".
                  "<td class='three light' colspan='3'>".
                    "<div class='upperinline'>R$".$aluguel."</div>".
                  "</td>".
                "</tr>".
              "</table>".
              "<table border='0'>".
                "<tr>".
                  "<td class='one dark'>".
                    "<b>Responsavel:</b>".
                  "</td>".
                  "<td class='light' colspan='3'>".
                    "<div class='upperinline'>".$nome_resp."</div>".
                  "</td>".
                "</tr>".
                "<tr>".
                  "<td class='one dark'>".
                    "<b>Email:</b>".
                  "</td>".
                  "<td class='five light' colspan='4'>".
                    "<div class='upperinline'>".$email_resp."</div>".
                  "</td>".
                  "<td class='dark'>".
                    "<b>Fotos:  </b>".
                  "</td>".
                  "<td class='four light' colspan='3'>".
                    "<div class='upperinline'>".
                    "<a href=".$album.">Album</a>".
                    "</div>".
                  "</td>".
                "</tr>".
                "<tr></tr>".
                "<tr>".
                  "<td class='twelve light' colspan='9'>".
                  "<p class='messenge'>".$descricao."</p>".
                  "</td>".
                "</tr>".
              "</table>".
            "</li>";

          }
          ?>
          </ul>
        </article>

        <article class='right_wide lastbox'>
          <p></p>
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
