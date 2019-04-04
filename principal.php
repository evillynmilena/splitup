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
        <tr>
          <td><img src='images/logo.jpeg' height='100'></td>
          <td>
            <h1><a href='principal.php'>Título</a></h1>
            <h2>Slogan</h2>
          </td>
        </tr>
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
    <!-- Slider -->
    <section id='slider' class='clear'>
      <figure><iframe src='https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d29764.689015746928!2d-47.8436149!3d-21.1688628!3m2!1i1024!2i768!4f13.1!5e0!3m2!1spt-BR!2sbr!4v1546030397044' width='630' height='300' frameborder='0' style='border:0' allowfullscreen></iframe>
        <figcaption>
          <h2>More próximo a Faculdade</h2>
          <p>Agora que você foi aprovado na faculdade, chegou a hora de escolher onde morar.
            Aqui você terá diversas opções de moradias em diferentes localizações. Encontre o melhor lugar para você!</p>
          <footer class='more'><a href='#'></a> </footer>
        </figcaption>
      </figure>
    </section>
    <!-- main content -->
    <div id='intro'>
      <section class='clear'>
        <article class='one_third'>
          <figure>
            <ul class='clear'>
              <li class='center'>
                <a href='republica.php'><img src='images/rep.png' width='260' height='260' alt=''></a>
                <h2 class='comment'>República</h2>
                <p class='comment'>Se você procura por uma casa onde terá companhia a qualquer momento, aqui é o seu lugar. Morar em República te dará a oportunidade de aprender a conviver com pessoas diferentes e a organizar tarefas conjuntas.</p>
              </li>
            </ul>
          </figure>
        </article>
        <article class='one_third'>
          <figure>
            <ul class='clear'>
              <li class='center'>
                <a href='apartamento.php'><img src='images/ap.png' width='260' height='260' alt=''></a>
                <h2 class='comment'>Apartamento</h2>
                <p class='comment'>Se você procura por um lugar mais tranquilo e reservado, apartamento é uma das opções. Morar em apê te proporcionará segurança e comodismo, sem perder a liberdade.  É onde você terá espaço mais individualizado, podendo agregar boas companhias.</p>
              </li>
            </ul>
          </figure>
        </article>
        <article class='one_third lastbox'>
          <figure>
            <ul class='clear'>
              <li class='center last'>
                <a href='pensionato.php'><img src='images/pensionato.png' width='260' height='260' alt=''></a>
                <h2 class='comment'>Pensinoato</h2>
                <p class='comment'>Para quem quer mais privacidade e espaço o pensionato pode ser o ideal, já que tem a possibilidade de quarto individual e as visitas são mais restritas. São lugares com mais regras mas que costumam ter a sua tranquilidade e benefícios, como não ter que se preocupar com a limpeza e organização. Alguns possuem até refeições.</p>
              </li>
            </ul>
          </figure>
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
