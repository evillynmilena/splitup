<html>

   <head>

   </head>

   <body>
      <?php
         require "func/bdfunc.php";

         //prepara uma tabela. cabecalho primeiro
         echo "<table class='result' border='1' cellpadding='4' align='center'>".
            "<tr class='titulo'>".
              "<th colspan='8'>Pessoas</th>".
            "</tr>".
            "<tr>".
              "<th>id_user</th>".
              "<th>nome_user</th>".
              "<th>tipo</th>".
              "<th>id_userCE</th>".
              "<th>usuario</th>".
              "<th>senha</th>".
            "</tr>";

         $conexao = conecta();

           // executa uma busca por dados
         $cadeia = "SELECT * FROM Usuario, Morador WHERE id_user = id_morador;";
         $resutset = consulta($conexao, "$cadeia");
         $nlinhas = pg_num_rows($resutset);

         for ($i=0; $i<$nlinhas; $i++){
           // recupera campos do resultado
                 $IdPK = pg_result($resutset, $i, 0);
                 $Nome = pg_result($resutset, $i, 1);
                 $Tipo = pg_result($resutset, $i, 2);
                 $IdCE = pg_result($resutset, $i, 3);
                 $User = pg_result($resutset, $i, 4);
                 $Pass = pg_result($resutset, $i, 5);

                 echo "<tr bgcolor='#ffffff'>".
                 "<th>$IdPK</th>".
                 "<th>$Nome</th>".
                 "<th>$Tipo</th>".
                 "<th>$IdCE</th>".
                 "<th>$User</th>".
                 "<th>$Pass</th>".
                 "</tr>";
         }

         echo "</table>";

         desconecta($conexao);
      ?>

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
