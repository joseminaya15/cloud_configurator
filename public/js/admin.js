var valor = 0;
function getDetails(valor){
	valor = valor;
	$.ajax({
		data : {valor : valor},
		url  : 'Admin/details',
		type : 'POST'
	}).done(function(data){
		data = JSON.parse(data);
		if(data.error == 0) {
			$('#table').css('display', 'none');
			$('#details').css('display', 'block');
			$('#tbBody').html(data.htmlTabla);
		} else {
			msj('error', 'Se presentó un error');
		}
	});
}

function returnTable(){
	$('#table').css('display', 'block');
	$('#details').css('display', 'none');
	valor = 0;
}