//Copyright 2015 Pareto Software, LLC, released under an MIT license: http://opensource.org/licenses/MIT
$( document ).ready(function() {
		var imovel_value=false;
		//Inputs that determine what fields to show
		var tipo_user = $('#user_form select[name=tipo_user]');
		var tipo_imovel =$('#user_form select[name=tipo_imovel]');

		//Wrappers for all fields
		var calouro = $('#user_form #div_calouro');
		var morador = $('#user_form #div_morador');
		var rep = $('#user_form #div_rep');
		var ap = $('#user_form #div_ap');
		var pensionato = $('#user_form #div_pensionato');
		var all=calouro.add(morador).add(rep).add(ap).add(pensionato);

		tipo_user.change(function(){
			var value=this.value;
			all.addClass('hidden'); //hide everything and reveal as needed

			if (value == 'Calouro') {
				calouro.removeClass('hidden');
			}
			else if (value == 'Morador') {
				morador.removeClass('hidden');
				if (imovel_value == 'Republica') {rep.removeClass('hidden');}
				else if (imovel_value == 'Apartamento') {ap.removeClass('hidden');}
				else if (imovel_value == 'Pensionato') {pensionato.removeClass('hidden');}
			}
		});

		tipo_imovel.change(function(){
			all.addClass('hidden');
			morador.removeClass('hidden');
			imovel_value=this.value;
			if (imovel_value == 'Republica') {rep.removeClass('hidden');}
			else if (imovel_value == 'Apartamento') {ap.removeClass('hidden');}
			else if (imovel_value == 'Pensionato') {pensionato.removeClass('hidden');}

		});
});
