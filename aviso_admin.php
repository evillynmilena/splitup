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
    <div id='mensagem'>
      <section class='clear'>

        <article class='one_quarter'>
          <p></p>
        </article>

        <article class='two_quarter'>
          <figure>
            <ul class='clear'>
              <li class='center'>
                <h5>Apartir do momento que você adiciona um novo endereço no nosso sitema, você se torna <b>administrador</b>.</h5><br>
                <?php if ($_SESSION['admin']): ?>
                  <h5>Essa fução permite que você adicione outros(as) moradores(as) deste endreço para que eles(as) possam ter acesso a leitura do menu de mensagens.</h5><br>
                <?php endif; ?>
                <h5>Só é possivel ter <b>um</b> administrador por endereço, e pode ser passado para outro morador.</h5>
                <?php
                  switch ($_SESSION['categoria']) {
                    case 'Republica':
                      echo "<form action='nova_rep.php' method='post'>";
                      break;
                    case 'Apartamento':
                      echo "<form action='novo_ap.php' method='post'>";
                      break;
                    case 'Pensionato':
                      echo "<form action='novo_pensio.php' method='post'>";
                      break;
                  }
                   echo "<input type='hidden' name='categoria' value=".$_SESSION['categoria']."><br>";?>
                  <button class="button" type="submit" name="aviso" value="true">Continuar</button>
                </form>
              </li>
            </ul>
          </figure>
        </article>

        <article class='one_quarter'>
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
