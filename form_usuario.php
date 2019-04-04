<div id="conditional">
	<form id="user_form" method='post' action='inserir_usuario.php'>
		<table cellspacing='10'>
				<tr><!--NOME-->
					<td>
						<div class="form-group ">
							<label for="nome">
								Nome
								<span class="asteriskField">*</span>
							</label>
							<div>
								<input id="nome" name="nome" type="text"/>
							</div>
						</div>

						<div class="form-group">
							<label for="tipo_user">
								Tipo
								<span class="asteriskField">*</span>
							</label>
							<div>
								<select class="select form-control" id="tipo_user" name="tipo_user">
									<option value=""></option>
									<option value="Calouro">Calouro</option>
									<option value="Morador">Morador</option>
								</select>
							</div>
						</div>

						<div id="div_calouro" class="form-group hidden">
							<label class="control-label col-sm-2" for="faculdade">
								Faculdade
							</label>
							<div>
								<input id="faculdade" name="faculdade" type="text"/>
							</div>
							<label for="email">
								Email
								<span class="asteriskField">*</span>
							</label>
							<div>
								<input id="email" name="email" type="text"/>
							</div>
							<label class="control-label col-sm-2" for="telefone">
								Telefone
							</label>
							<div>
								<input id="telefone" name="telefone" type="text"/>
							</div>
						</div>

						<div id="div_morador" class="form-group hidden">
							<label for="usuario">
								Usuario
								<span class="asteriskField">*</span>
							</label>
							<div>
								<input id="usuario" name="usuario" type="text"/>
							</div>
							<label for="senha">
								Senha
								<span class="asteriskField">*</span>
							</label>
							<div>
								<input id="senha" name="senha" type="text"/>
							</div>
						</div>
					</td>
				</tr>
				<tr>
					<td align='center'>
						<div class="form-group">
							<div class=" col-sm-offset-2">
								<input type='submit' id='sf_submit' value='salvar' name='salvar'>
							</div>
						</div>
					</td>
				</tr>
		</table>
	</form>
</div>
