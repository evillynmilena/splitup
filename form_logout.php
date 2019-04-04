<form action='usuario.php' method='post'>
  <fieldset>
    <input type='submit'  name='sair' id='sf_submit' value='sair'>
    <?php echo '<h3>'.$_SESSION['username'].'</h3>';?>
  </fieldset>
  <fieldset>
  </fieldset>
</form>
<div>
<nav id='nav'>
    <ul id='menu'>
      <li><a href='principal.php'>Home</a></li>
      <li><a href='#'>Adicionar</a>
        <ul>
          <li><a href='nova_rep.php'>Nova Republica</a></li>
          <li><a href='novo_ap.php'>Novo Apartamento</a></li>
          <li><a href='novo_pensio.php'>Novo Pensionato</a></li>
        </ul>
      </li>
<!--      <li><a href='#'>Editar</a>                                            -->
<!--        <ul>                                                                -->
<!--          <li><a href='edit_user.php'>Usuario</a></li>                      -->
<!--          <li><a href='edit_imovel.php'>Seu Imovel</a></li>                 -->
<!--          <li><a href='edit_mor_imovel.php'>Vincular Morador(a)</a></li>    -->
<!--        </ul>                                                               -->
<!--      </li>                                                                 -->
<!--      <li><a href='view_msg.php'>Ver Mensagens</a></li>                     -->
    </ul>
</nav>
</div>
