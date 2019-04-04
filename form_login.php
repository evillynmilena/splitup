
<head>
  <script src="scripts/FormLogin.js"></script>
</head>

<form name="FormLogin"action="usuario.php" method="post" onsubmit= "return validaFormLogin()">

  <table>
  <fieldset>
    <input type="text"     name="username"id="username"  value=""placeholder="Usuario">
    <input type="password" name="senha"   id="senha"     value=""placeholder="Senha" >
    <input type"button"  id="sf_submit" value="entrar" onclick="return validaFormLogin()">
  </fieldset>
  <fieldset>
    <input type="submit"  id="sf_submit" value="cadastrar">
    <h3>Sua rep ou ap tem vaga ?</h3>
  </fieldset>
</form>
<nav>
  <ul>
  </ul>
</nav>
