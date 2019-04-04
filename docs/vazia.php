<!DOCTYPE html>
<html lang='en' dir='ltr'>
<head>
<title>SplitUP</title>
<meta charset='UTF-8'>
<!--[if lt IE 9]><script src='scripts/html5shiv.js'></script><![endif]-->
</head>
<body>
  <div class="form-group"><!--NOME-->
    <label for="nome_user">Escolha o Morador<span class="asteriskField">*</span></label>
    <!--<select class="select form-control" id="nome_user" name="nome_user">-->
    <select id="nome_user" name="nome_user">
      <?php
        //prepara uma tabela. cabecalho primeiro
        $conexao = conecta();
        // executa uma busca por dados
        $saida = consulta($conexao, "SELECT nome_user, usuario, id_morador FROM usuario, morador WHERE id_user = id_morador AND tipo = 'Morador' ORDER BY nome_user;");
        $n = pg_num_rows($saida);

        for ($i=0; $i<$n; $i++){
          $nomei = pg_result($saida, $i, 0);
          $useri = pg_result($saida, $i, 1);
          $idmoi = pg_result($saida, $i, 2);

          echo "<option>$nomei,  ($useri)</option>";
        }
        desconecta($conexao);
      ?>
    </select>
    echo  $nomei . ", " . $useri;
  </div>
</body>
</html>
