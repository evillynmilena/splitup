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
    <div id='formulario'>
      <section class='clear'>

        <article class='left_wide'>
          <p></p>
        </article>

        <article class='center_wide'>
          <?php
            /*primeira vez*/
            if($_SESSION['categoria'] != "Republica"){
              $_SESSION['categoria'] = "Republica";
              header("Location: aviso_admin.php");
            }
            /*apos o aviso*/
            else if($_SESSION['categoria'] == "Republica"){
              include 'form_nova_rep.php';
            }
          ?>
        </article>

        <article class='right_wide'>
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
