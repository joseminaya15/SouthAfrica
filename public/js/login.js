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