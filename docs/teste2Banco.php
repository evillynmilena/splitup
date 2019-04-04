<html>

  <head>

  </head>

  <body>
    <form class="" action="index.html" method="post">
      <select align='center'>
        <option >   </option>

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
    </form>
  </body>
</html>
