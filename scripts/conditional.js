//Copyright 2015 Pareto Software, LLC, released under an MIT license: http://opensource.org/licenses/MIT
$( document ).ready(function() {
		var imovel_value=false;
		//Inputs that determine what fields to show
		var tipo_user = $('#user_form select[name=tipo_user]');

		//Wrappers for all fields
		var calouro = $('#user_form #div_calouro');
		var morador = $('#user_form #div_morador');
		var all=calouro.add(morador);

		tipo_user.change(function(){
			var value=this.value;
			all.addClass('hidden'); //hide everything and reveal as needed

			if (value == 'Calouro') {
				calouro.removeClass('hidden');
			}
			else if (value == 'Morador') {
				morador.removeClass('hidden');
			}
		});
});
