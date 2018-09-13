$(window).load(function() {
    $("#ModalEncuesta").modal('show');
});
function ingresar(){
	var usuario  = $('#usuario').val();
	var password = $('#password').val();
	if(usuario == null){
		msj('error', 'Ingrese un usuario');
		return;
	}
	if(password == null){
		msj('error', 'Ingrese un usuario');
		return;
	}
	$.ajax({
    data : {usuario : usuario,
            password : password},
		url  : 'login/ingresar',
		type : 'POST'
	}).done(function(data){
		try{
        data = JSON.parse(data);
        if(data.error == 0){
        	location.href = 'admin';
        	$('#usuario').val("");
        	$('#password').val("");
        }else {
  				$('#usuario').parent().addClass('is-invalid');
  				$('#password').parent().addClass('is-invalid');
          msj('error', data.msj);
        	return;
        }
      }catch(err){
        msj('error',err.message);
      }
	});
}
function cerrarCesion(){
	$.ajax({
		url  : 'admin/cerrarCesion',
		type : 'POST'
	}).done(function(data){
		try{
        data = JSON.parse(data);
        if(data.error == 0){
        	location.href = 'Login';
        }else {
        	return;
        }
      }catch(err){
        msj('error',err.message);
      }
	});
}
function verificarDatos(e){
	if(e.keyCode === 13){
		e.preventDefault();
		ingresar();
    }
}
function openModalPassport(id){
    var modal = $('#modalPasaporte');
    var id = id;
    var ruta = '';
    $.ajax({
      data : { id : id},
      url  : 'admin/muestraPasaporte',
      type : 'POST'
    }).done(function(data){
      data = JSON.parse(data);
      if(data.error == 0 ){
        if(data.imagen != "") {
          $('#imgDocumento').attr("src", data.imagen);
        } else {
          $('#imgDocumento').text("IMAGEN NO ENCONTRADA");
        }
        modal.modal('toggle');
      } else { return; }
    });
}
function openModalBlankPassport(id){
  var modal = $('#modalBlankPasaporte');
  var id = id;
  var ruta = '';
  $.ajax({
    data : { id : id},
    url  : 'admin/muestraBlankPasaporte',
    type : 'POST'
  }).done(function(data){
    data = JSON.parse(data);
    if(data.error == 0 ){
      if(data.imagen != "") {
        $('#imgBlankDocumento').attr("src", data.imagen);
      }else{
        $('#imgBlankDocumento').text("IMAGEN NO ENCONTRADA");
      }
      modal.modal('toggle');
    }else { return; }
  });
}
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
                msj('error', data.msj);
                return;
            }
        }catch(err){
            msj('error',err.message);
        }
    });
}
function enviarEncuesta() {
    var preg1 = $('#correReserva').val();
    var preg2 = $('#correReserva').val();
    var preg3 = $('#correReserva').val();
    var preg4 = $('#correReserva').val();
    var preg5 = $('#correReserva').val();
    var preg6 = $('#correReserva').val();
    var preg7 = $('#correReserva').val();
    var preg8 = $('#correReserva').val();
    var preg9 = $('#correReserva').val();
    var preg10 = $('#correReserva').val();
    var preg11 = $('#correReserva').val();
    var preg12 = $('#correReserva').val();
    var preg13 = $('#correReserva').val();
    var preg14 = $('#correReserva').val();
    var preg15 = $('#correReserva').val();
    var preg16 = $('#correReserva').val();
    var preg17 = $('#correReserva').val();
    if(usuario == null){
        msj('error', 'Ingrese un usuario');
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
                $("#ModalEncuesta").modal('hide');
                $('#correReserva').val("");
            }else {
                $('#correReserva').parent().addClass('is-invalid');
                msj('error', data.msj);
                return;
            }
        }catch(err){
            msj('error',err.message);
        }
    });
}