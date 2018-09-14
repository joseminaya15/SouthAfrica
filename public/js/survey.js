function ingresarEncuesta() {
    var usuario = $('#correReserva').val();
    if(usuario == null){
        msj('error', 'Ingrese un usuario');
        return;
    }
    $.ajax({
        data : {usuario : usuario},
        url  : 'Survey/ingresarEncuesta',
        type : 'POST'
    }).done(function(data){
        try{
            data = JSON.parse(data);
            if(data.error == 0){
                $("#ModalEncuesta").modal('hide');
                $('#correReserva').val("");
            }else {
                $('#correReserva').parent().addClass('is-invalid');
                toastr.remove();
                msj('error', data.msj);
                return;
            }
        }catch(err){
            msj('error',err.message);
        }
    });
}
function enviarEncuesta() {
    var preg1 = $('#pregunta1').find('.js-number').find('.js-select').attr('data-number');
    var preg2 = $('#pregunta2').find('.js-number').find('.js-select').attr('data-number');
    var preg3 = $('#pregunta3').find('.js-number').find('.js-select').attr('data-number');
    var preg4 = $('#pregunta4').find('.js-number').find('.js-select').attr('data-number');
    var preg5 = $('#pregunta5').find('.js-number').find('.js-select').attr('data-number');
    var preg6 = $('#pregunta6').find('.js-number').find('.js-select').attr('data-number');
    var preg7 = $('#pregunta7').find('.js-number').find('.js-select').attr('data-number');
    var preg8 = $('#pregunta8').find('.js-number').find('.js-select').attr('data-number');
    var preg9 = $('#pregunta9').find('.js-number').find('.js-select').attr('data-number');
    var preg10 = $('#pregunta10').find('.js-number').find('.js-select').attr('data-number');
    var preg11 = $('#pregunta11').find('.js-number').find('.js-select').attr('data-number');
    var preg12 = $('#pregunta12').find('.js-radio').find('.is-checked').find('input').val();
    var preg13 = $('#pregunta13').find('.js-radio').find('.is-checked').find('input').val();
    var preg14 = $('#pregunta14').find('.js-radio').find('.is-checked').find('input').val();
    var preg15 = $('#aspect').val();
    var preg16 = $('#destination').val();
    var preg17 = $('#comment').val();
    if(preg1 == undefined) {
        toastr.remove();
        msj('error', 'Responder la pregunta 1');
        return;
    }
    if(preg2 == undefined) {
        toastr.remove();
        msj('error', 'Responder la pregunta 2');
        return;
    }
    if(preg3 == undefined) {
        toastr.remove();
        msj('error', 'Responder la pregunta 3');
        return;
    }
    if(preg4 == undefined) {
        toastr.remove();
        msj('error', 'Responder la pregunta 4');
        return;
    }
    if(preg5 == undefined) {
        toastr.remove();
        msj('error', 'Responder la pregunta 5');
        return;
    }
    if(preg6 == undefined) {
        toastr.remove();
        msj('error', 'Responder la pregunta 6');
        return;
    }
    if(preg7 == undefined) {
        toastr.remove();
        msj('error', 'Responder la pregunta 7');
        return;
    }
    if(preg8 == undefined) {
        toastr.remove();
        msj('error', 'Responder la pregunta 8');
        return;
    }
    if(preg9 == undefined) {
        toastr.remove();
        msj('error', 'Responder la pregunta 9');
        return;
    }
    if(preg10 == undefined) {
        toastr.remove();
        msj('error', 'Responder la pregunta 10');
        return;
    }
    if(preg11 == undefined) {
        toastr.remove();
        msj('error', 'Responder la pregunta 11');
        return;
    }
    if(preg12 == undefined) {
        toastr.remove();
        msj('error', 'Responder la pregunta 12');
        return;
    }
    if(preg13 == undefined) {
        toastr.remove();
        msj('error', 'Responder la pregunta 13');
        return;
    }
    if(preg14 == undefined) {
        toastr.remove();
        msj('error', 'Responder la pregunta 14');
        return;
    }
    if(preg15 == '') {
        toastr.remove();
        msj('error', 'Responder la pregunta 15');
        return;
    }
    if(preg16 == '') {
        toastr.remove();
        msj('error', 'Responder la pregunta 16');
        return;
    }
    if(preg17 == '') {
        toastr.remove();
        msj('error', 'Responder la pregunta 17');
        return;
    }
    $.ajax({
        data : { preg1  : preg1,
                 preg2  : preg2,
                 preg3  : preg3,
                 preg4  : preg4,
                 preg5  : preg5,
                 preg6  : preg6,
                 preg7  : preg7,
                 preg8  : preg8,
                 preg9  : preg9,
                 preg10 : preg10,
                 preg11 : preg11,
                 preg12 : preg12,
                 preg13 : preg13,
                 preg14 : preg14,
                 preg15 : preg15,
                 preg16 : preg16,
                 preg17 : preg17 },
        url  : 'Survey/guardarEncuesta',
        type : 'POST'
    }).done(function(data){
        try{
            data = JSON.parse(data);
            if(data.error == 0){
            	$('#pregunta1').find('.js-number').find('.js-select').removeClass('js-select');
				$('#pregunta2').find('.js-number').find('.js-select').removeClass('js-select');
				$('#pregunta3').find('.js-number').find('.js-select').removeClass('js-select');
				$('#pregunta4').find('.js-number').find('.js-select').removeClass('js-select');
				$('#pregunta5').find('.js-number').find('.js-select').removeClass('js-select');
				$('#pregunta6').find('.js-number').find('.js-select').removeClass('js-select');
				$('#pregunta7').find('.js-number').find('.js-select').removeClass('js-select');
				$('#pregunta8').find('.js-number').find('.js-select').removeClass('js-select');
				$('#pregunta9').find('.js-number').find('.js-select').removeClass('js-select');
				$('#pregunta10').find('.js-number').find('.js-select').removeClass('js-select');
				$('#pregunta11').find('.js-number').find('.js-select').removeClass('js-select');
				$('#pregunta12').find('.js-radio').find('.is-checked').removeClass('is-checked');
				$('#pregunta13').find('.js-radio').find('.is-checked').removeClass('is-checked');
				$('#pregunta14').find('.js-radio').find('.is-checked').removeClass('is-checked');
				
				$('#aspect').val('');
				$('#destination').val('');
				$('#comment').val('');
            }else {
                toastr.remove();
                msj('error', data.msj);
                return;
            }
        }catch(err){
            toastr.remove();
            msj('error',err.message);
        }
    });
}
function savePoint(id){
	var buttonId = $('#'+id);
	buttonId.parents('.js-encuesta__contenido').find('.js-button--number').removeClass('js-select');
	buttonId.addClass('js-select');
}