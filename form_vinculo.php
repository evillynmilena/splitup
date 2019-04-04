<div id="conditional">
	<form id="vinculo_form" method='post' action='#'>
      <table class="wide" cellspacing='10' border="0">
				<tr>
					<td>
						<div class="form-group"><!--INFO USER PARA VINCULO-->
							<label for="tipo_user">Escolha o Morador<span class="asteriskField">*</span></label>
							<select class="select form-control" id="nome_user" name="nome_user">
								<option value=""></option>
								<?php
									//prepara uma tabela. cabecalho primeiro
									require "func/bdfunc.php";
									$conexao = conecta();
									// executa uma busca por dados
									$saida = consulta($conexao, "SELECT nome_user, usuario, id_morador FROM usuario, morador WHERE id_user = id_morador AND tipo = 'Morador' ORDER BY nome_user;");
									$n = pg_num_rows($saida);

									for ($i=0; $i<$n; $i++){
										$nomei = pg_result($saida, $i, 0);
										$useri = pg_result($saida, $i, 1);
										$idmoi = pg_result($saida, $i, 2);

										echo "<option value='$idmoi'>$nomei,  ($useri)</option>";
									}
									desconecta($conexao);
								?>
							</select>
						</div>
					</td>
        </tr>
        <tr>
          <td>
            <div class="form-group">
              <input type='submit' id='sf_submit' value='adicionar' name='adicionar'>
            </div>
          </td>
        </tr>

      </table>
  </form>
</div>
