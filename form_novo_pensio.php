<div id="conditional">
	<form id="pensio_form" method='post' action='inserir_pensio.php'>
		<table>
			<tbody>
				<tr><!--primeira linha-->
					<td colspan="3">
						<div class="form-group ">
							<label for="restricao">
								Restricao do local
							</label>
							<div><!--NOME-->
								<input id="restricao" name="restricao" type="text" size="40" maxlength="100">
							</div>
						</div>
					</td>
					<td colspan="2">
					</td>
				</tr>
				<tr><!--segunda linha-->
					<td>
						<div class="form-group ">
							<label>Genero
								<span class="asteriskField">*</span>
							</label>
							<div><!--GENERO-->
								<select class="select form-control" id="genero" name="genero">
									<option value="">
									</option>
									<option value="Feminina">
										Feminina
									</option>
									<option value="Masculina">
										Masculina
									</option>
									<option value="Mista">
										Mista
									</option>
								</select>
							</div>
						</div>
					</td>
					<td colspan="2" class="tab">
						<div class="form-group ">
							<label>Complemento
								<span class="asteriskField">*</span>
							</label>
							<div><!--COMPLEMENTO-->
								<input id="complemento" name="complemento" type="text" size="15" maxlength="15">
							</div>
						</div>
					</td>
					<td colspan="1">
						<div class="form-group ">
							<label>Nº de Moradores
								<span class="asteriskField">*</span>
							</label>
							<div><!--NUMERO MORADORES-->
								<select class="select form-control" id="nro_moradores" name="nro_moradores">
									<option value=""></option>
									<?php
										for ($n=1; $n <= 30; $n++) echo "<option value=".$n.">".$n."</option>";
									?>
								</select>
							</div>
						</div>
					</td>
				</tr>
				<tr><!--terceira linha-->
					<td colspan="3">
						<div class="form-group ">
							<label>Rua
								<span class="asteriskField">*</span>
							</label>
							<div><!--RUA-->
								<input id="rua" name="rua" type="text" size="40" maxlength="40">
							</div>
						</div>
					</td>
					<td class="tab">
						<div class="form-group ">
							<label>Nº
								<span class="asteriskField">*</span>
							</label>
							<div><!--NUMERO CASA-->
								<input id="nro" name="nro" type="text" size="5" maxlength="5">
							</div>
						</div>
					</td>
				</tr>
				<tr><!--quarta linha-->
					<td colspan="3">
						<div class="form-group ">
							<label>Bairro
								<span class="asteriskField">*</span>
							</label>
							<div><!--BAIRRO-->
								<input id="bairro" name="bairro" type="text" size="30" maxlength="30">
							</div>
						</div>
					</td>
					<td>
						<div class="form-group ">
							<label>Valor do Aluguel
								<span class="asteriskField">*</span>
							</label>
							<div><!--ALUGUEL-->
								<input id="aluguel" name="aluguel" type="text" size="8" maxlength="8">
							</div>
						</div>
					</td>
				</tr>
				<tr><!--quinta linha-->
					<td colspan="2">
						<div class="form-group ">
							<label>Nome do Responsavel
								<span class="asteriskField">*</span>
							</label>
							<div><!--NOME RESPONSAVEL-->
								<input id="nome_resp" name="nome_resp" type="text" size="20" maxlength="20">
							</div>
						</div>
					</td>
					<td colspan="2">
						<div class="form-group ">
							<label>Curso do Responsavel
								<span class="asteriskField">*</span>
							</label>
							<div><!--CURSO RESPONSAVEL-->
								<input id="curso_resp" name="curso_resp" type="text" size="20" maxlength="20">
							</div>
						</div>
					</td>
				</tr>
				<tr><!--sexta linha-->
					<td colspan="3">
						<div class="form-group ">
							<label>Email do Responsavel
								<span class="asteriskField">*</span>
							</label>
							<div><!--EMAIL RESPONSAVEL-->
								<input id="email_resp" name="email_resp" type="text" size="30" maxlength="30">
							</div>
						</div>
					</td>
				</tr>
				<tr><!--setima linha-->
					<td colspan="4">
						<div class="form-group ">
							<label>Link de algum Album de Fotos
							</label>
							<div><!--ALBUMM DE FOTOS-->
								<input id="album" name="album" type="text" size="40" maxlength="40">
							</div>
						</div>
					</td>
				</tr>
				<tr><!--oitava linha-->
					<td colspan="4">
						<div class="form-group ">
							<label>Descricao do local
								<span class="asteriskField">*</span><br>
							</label>
							<div><!--DESCRICAO DA REP-->
								<textarea class="form-control" id="descricao" name="descricao" cols="55" rows="6"></textarea>
							</div>
						</div>
					</td>
				</tr>
				<tr><!--SUBMIT-->
					<td align='center' colspan="4">
						<div class="form-group">
	            <input type='submit' id='sf_submit' value='salvar' name='salvar'>
	          </div>
	        </td>
	      </tr>
			</tbody>
    </table>
  </form>
</div>
