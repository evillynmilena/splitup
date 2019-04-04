<head>
<script language="javascript" type="text/javascript">
function ValidaRep(){
  var nome = rep_form.nome.value;
	var faculdade = rep_form.faculdade.value;
	var genero = rep_form.genero.value;
	var moradores = rep_form.nro_moradores.value;
	var rua = rep_form.rua.value;
	var numero = rep_form.num.value;
	var bairro = rep_form.bairro.value;
	var aluguel = rep_form.aluguel.value;
	var reponsavel = rep_form.nome_resp.value;
	var curso = rep_form.curso_resp.value;
	var email = rep_form.email_resp.value;
	var descricao = rep_form.descricao.value;

  if (nome =="" || nome == null){
    alert("Preencha o campo Nome.");
    rep_form.nome.focus();
    return false;
  }

	if (faculdade =="" || faculadade == null){
		alert("Preencha o campo Faculdade.");
		rep_form.faculadade.focus();
		return false;
	}

	if (document.getElementById("genero").selectedIndex == ""){
		alert("Escolha um genero.");
		rep_form.genero.focus();
		return false;
	}

	if (moradores =="" || moradores == null){
		alert("Insira o numero de moradores.");
		rep_form.nro_moradores.focus();
		return false;
	}

	if (rua =="" || rua == null){
		alert("Insira o nome da rua.");
		rep_form.rua.focus();
		return false;
	}

	if (numero =="" || numero == null){
		alert("Insira o numero da casa.");
		rep_form.num.focus();
		return false;
	}

	if (bairro =="" || bairro == null){
		alert("Insira o nome do bairro.");
		rep_form.bairro.focus();
		return false;
	}

	if (aluguel =="" || aluguel == null){
		alert("Insira o valor do aluguel.");
		rep_form.aluguel.focus();
		return false;
	}

	if (responsavel =="" || responsavel == null){
		alert("Insira o nome do responsavel.");
		rep_form.nome_resp.focus();
		return false;
	}

	if (curso =="" || curso == null){
		alert("insira o curso do responsavel.");
		rep_form.curso_resp.focus();
		return false;
	}

	if (email.indexOf("@") == -1 || email.indexOf(".") == -1 || email == "" || email == null) {
    alert("Por favor, indique um e-mail válido.");
    rep_form.email_resp.focus();
    return false;
  }

	if (descricao =="" || descricao == null){
		alert("Escreva uma breve descriçao da casa.");
		rep_form.descricao.focus();
		return false;
	}
}

</script>
</head>
 <center>
 <h1> cadastro de nova Republica </h1>
<div id="conditional">
	<form id="rep_form" method="post" action='#' onsubmit="return ValidaRep()">
		<table>
			<tr><!--primeira linha-->
				<td colspan="2">
					<div class="form-group "><!--NOME-->
						<label> Nome: <span class="asteriskField">*</span>   </label>
						<input id="nome" name="nome" type="text" size="21" maxlength="20">
					</div>
				</td>
				<td colspan="2">
					<div class="form-group"><!--FACULDADE-->
						<label>Faculdade: </label>
						<input id="faculdade" name="faculdade" type="text" size="20" maxlength="20">
					</div>
				</td>
			</tr> <br>

			<tr><!--segunda linha-->
				<td>
					<div class="form-group"><!--GENERO-->
						<label>Genero:*</span></label>
						<select class="submit" id="genero" name="genero">
							<option value=""> </option>
							<option value="Feminina">Feminina</option>
							<option value="Masculina">Masculina</option>
							<option value="Mista">Mista</option>
						</select>
					</div>
				</td>
				<td colspan="2" class="tab">
					<div class="form-group"><!--COMPLEMENTO-->
						<label>Complemento: </label>
						<input id="complemento" name="complemento" type="text" size="15" maxlength="15">
					</div>
				</td>
				<td colspan="1">
					<div class="form-group "><!--NUMERO MORADORES-->
						<label>Nº de Moradores: <span class="asteriskField">*</span></label>
						<input type="text" id="nro_moradores" name="nro_moradores">
						</select>
					</div>
				</td>
			</tr> <br>

			<tr><!--terceira linha-->
				<td colspan="3">
					<div class="form-group "><!--RUA-->
						<label>Rua: <span class="asteriskField">*</span></label>
						<input id="rua" name="rua" type="text" size="40" maxlength="40">
					</div>
				</td>
				<td>
					<div class="form-group "><!--NUMERO CASA-->
						<label>Nº: <span class="asteriskField">*</span></label>
						<input id="num" name="num" type="text" size="7" maxlength="5">
					</div>
				</td>
			</tr> <br>

			<tr><!--quarta linha-->
				<td colspan="3">
					<div class="form-group "><!--BAIRRO-->
						<label>Bairro: <span class="asteriskField">*</span></label>
						<input id="bairro" name="bairro" type="text" size="37" maxlength="30">
					</div>
				</td>
				<td>
					<div class="form-group"><!--ALUGUEL-->
						<label>Valor do Aluguel: <span class="asteriskField">*</span></label>
						<input id="aluguel" name="aluguel" type="text" size="8" maxlength="8" placeholder="000,00">
					</div>
				</td>
			</tr> <br>

			<tr><!--quinta linha-->
				<td colspan="2">
					<div class="form-group "><!--NOME RESPONSAVEL-->
						<label>Nome do Responsavel: <span class="asteriskField">*</span></label>
						<input id="nome_resp" name="nome_resp" type="text" size="20" maxlength="20">
					</div>
				</td>
				<td colspan="2">
					<div class="form-group"><!--CURSO RESPONSAVEL-->
						<label>Curso do Responsavel: <span class="asteriskField">*</span></label>
						<input id="curso_resp" name="curso_resp" type="text" size="20" maxlength="20">
					</div>
				</td>
			</tr> <br>

			<tr><!--sexta linha-->
				<td colspan="3">
					<div class="form-group "><!--EMAIL RESPONSAVEL-->
						<label>Email do Responsavel: <span class="asteriskField">*</span></label>
						<input id="email_resp" name="email_resp" type="text" size="30" maxlength="30">
					</div>
				</td>
			</tr> <br>

			<tr><!--setima linha-->
				<td colspan="4">
					<div class="form-group "><!--ALBUMM DE FOTOS-->
						<label>Link de algum Album de Fotos: </label>
						<input id="album" name="album" type="text" size="40" maxlength="40">
					</div>
				</td>
			</tr> <br>

			<tr><!--oitava linha-->
				<td colspan="4">
					<div class="form-group "><!--DESCRICAO DA REP-->
						<label>Descricao do local: <span class="asteriskField">*</span><br></label>
						<textarea class="form-control" id="descricao" name="descricao" cols="55" rows="6"></textarea>
					</div>
				</td>
			</tr> <br>

			<tr><!--SUBMIT-->
				<td align='center' colspan="4">
					<div class="form-group">
            <input type='submit' id='sf_submit' value='salvar' name='salvar' onclick="return ValidaRep()">
          </div>
        </td>
      </tr>
    </table>
  </form>
</div>
