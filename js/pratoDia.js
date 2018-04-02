$(document).ready(function() {
	
	//Leitura do arquivo JSON
	$.getJSON('js/pratoDia.json', function(myData) {
		

		// Variáveis de datas para preencher o prato do dia
		var dt = new Date();
		var dia = dt.getDate();
		var mes = dt.getMonth() + 1;
		var dtcompleta = dia + '/' + mes;

		for(var i = 0; i < myData.prato_do_dia.length; i++) {
			var data = myData.prato_do_dia[i]['data'];
			var prato = myData.prato_do_dia[i]['prato'];

			// Verifica a data de hoje e adiciona o prato do dia
			if(dtcompleta == data) {
				$('#especial-dia').html(data + ' - ' + prato);
				return false;
			}
			else {
				$('#especial-dia').html('Consulte pelo telefone (11) 5589-6073');
			}
			

		}
	});
});