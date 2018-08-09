function sendInformation(){
	//Business
	var check_invi 			 = null;
	var check_travel         = null;
	var firstname 			 = $('#firstname').val();
	var middlename 			 = $('#middlename').val();
	var lastname 			 = $('#lastname').val();
	var company 			 = $('#company').val();
	var job 				 = $('#job').val();
	var mobile 				 = $('#mobile').val();
	var email 				 = $('#email').val();
	var city 				 = $('#city').val();
	var country 			 = $('#country').val();
	//Personal
	var passport 			 = $('#passport').val();
	var issuedate 			 = $('#issuedate').val();
	var expiredate 			 = $('#expiredate').val();
	var issuecountry 		 = $('#issuecountry').val();
	var gender 				 = $('#gender').val();
	var birthdate 			 = $('#birthdate').val();
	var address 			 = $('#address').val();
	var state 			     = $('#state').val();
	var zipcode 			 = $('#zipcode').val();
	var option3 			 = $('#option-3').is(':checked');
	var option4				 = $('#option-4').is(':checked');
	if(option3 == true){
		check_travel = 1;
	}else if(option4 == true) {
		check_travel = 0;
	}
	var nationality 		 = $('#nationality').val();
	var residence 			 = $('#residence').val();
	var option1 			 = $('#option-1').is(':checked');
	var option2				 = $('#option-2').is(':checked');
	if(option1 == true){
		check_invi = 1;
	}else if(option2 == true) {
		check_invi = 0;
	}
	var seating 			 = $('#seating').val();
	var shirt 				 = $('#shirt').val();
	var photoPassport        = $('#fotopassport').val();
	var photoBlankPassport   = $('#fotoblankpassport').val();
	var page                 = $('#page').val();
	var photo                = $('#archivo')[0].files[0]; 
	var blankphoto           = $('#blank')[0].files[0]; 
	//Emergency Contact
	var contact 			 = $('#contact').val();
	var phone 				 = $('#phone').val();
	var relationship 		 = $('#relationship').val();
	var specifications 		 = $('#specifications').val();
	//Business
	if(firstname == null || firstname == '') {
		msj('error', 'First name must be completed');
		return;
	}
	if(middlename == null || middlename == '') {
		msj('error', 'Middle name must be completed');
		return;
	}
	if(lastname == null || lastname == '') {
		msj('error', 'Last name must be completed');
		return;
	}
	if(company == null || company == '') {
		msj('error', 'Company must be completed');
		return;
	}
	if(job == null || job == '') {
		msj('error', 'Job title must be completed');
		return;
	}
	if(mobile == null || mobile == '') {
		msj('error', 'Mobile phone number must be completed');
		return;
	}
	if(email == null || email == '') {
		msj('error', 'Email must be completed');
		return;
	}
	if(!validateEmail(email)){
		msj('error', 'The email format is incorrect');
		return;
	}
	if(city == null || city == '') {
		msj('error', 'City must be completed');
		return;
	}
	if(country == null || country == '') {
		msj('error', 'Country must be completed');
		return;
	}
	//Personal
	if(passport == null || passport == '') {
		msj('error', 'Passport number must be completed');
		return;
	}
	if(issuedate == null || issuedate == '') {
		msj('error', 'Issue date must be completed');
		return;
	}
	if(expiredate == null || expiredate == '') {
		msj('error', 'Expire date must be completed');
		return;
	}
	if(issuecountry == null || issuecountry == '') {
		msj('error', 'Issue country must be completed');
		return;
	}
	if(gender == null || gender == '') {
		msj('error', 'Gender must be completed');
		return;
	}
	if(birthdate == null || birthdate == '') {
		msj('error', 'Date of birth must be completed');
		return;
	}
	if(address == null || address == '') {
		msj('error', 'Address must be completed');
		return;
	}
	if(state == null || state == '') {
		msj('error', 'State must be completed');
		return;
	}
	if(zipcode == null || zipcode == '') {
		msj('error', 'Zip Code must be completed');
		return;
	}
	if(check_travel == null) {
		msj('error', 'Travel Insurance must be completed');
		return;
	}
	if(nationality == null || nationality == '') {
		msj('error', 'Nacionality must be completed');
		return;
	}
	if(residence == null || residence == '') {
		msj('error', 'Residence must be completed');
		return;
	}
	//poner
	if(check_invi == null) {
		msj('error', 'Invitation must be completed');
		return;
	}
	if(seating == null || seating == '') {
		msj('error', 'Seating must be completed');
		return;
	}
	if(shirt == null || shirt == '') {
		msj('error', 'T-shirt must be completed');
		return;
	}
	if(photoPassport == null || photoPassport == '') {
		msj('error', 'Image Passport must be completed');
		return;
	}
	// if(!validateNotPdf(photoPassport)){
	// 	msj('error', 'Image Passport only svg, jpg, jpeg and png');
	// 	return;
	// }
	if(photoBlankPassport == null || photoBlankPassport == '') {
		msj('error', 'Image of two blank page Passport must be completed');
		return;
	}
	// if(!validateNotPdf(photoBlankPassport)){
	// 	msj('error', 'Image of two blank page Passport only svg, jpg, jpeg and png');
	// 	return;
	// }
	if(page == null || page == '') {
		msj('error', 'Pages must be completed');
		return;
	}
	if(photo['size'] > 2048000){
		msj('error', 'Image Passport must be less than 2MB');
		return;
	}
	if(blankphoto['size'] > 2048000){
		msj('error', 'Image of two blank page Passport must be less than 2MB');
		return;
	}
	if(photo == undefined){
		msj('error', 'Select an image');
		return;
	}
	if(blankphoto == undefined){
		msj('error', 'Select an image');
		return;
	}
	if(!validateNumber(page)){
		msj('error', 'Only numbers');
		return;
	}
	//Contacto emergencia
	if(contact == null || contact == '') {
		msj('error', 'Contact name must be completed');
		return;
	}
	if(phone == null || phone == '') {
		msj('error', 'Contact phone number must be completed');
		return;
	}
	if(relationship == null || relationship == '') {
		msj('error', 'relationship must be completed');
		return;
	}
	$.ajax({
		data : {primerNombre	: firstname,
				segundoNombre	: middlename,
				apellidos		: lastname,
				empresa			: company,
				cargo			: job,
				telefono 		: mobile,
				correo			: email,
				ciudad 			: city,
				pais 			: country,
				//
				nuPasaporte		: passport,
				fechaEmision	: issuedate,
				fechaExpiro		: expiredate,
				paisEmisor		: issuecountry,
				genero			: gender,
				fechaCumple		: birthdate,
				direccion    	: address,
				estado      	: state,
				codigoEstado 	: zipcode,
				flgSeguro   	: check_travel,
				nacionalidad	: nationality,
				ciudadReferen	: residence,
				flgInvitacion	: check_invi,
				asientoPrefere	: seating,
				tallaPolo		: shirt,
				foto            : photoPassport,
				blank           : photoBlankPassport,
				page            : page,
				//
				nombreContacto	: contact,
				telefonoContac	: phone,
				relacion		: relationship,
				especificacion	: specifications },
		url  : 'home/register',
		type : 'POST'
	}).done(function(data){
		try {
			data = JSON.parse(data);
			if(data.error == 0){
				guardarPhoto();
				guardarBlankPhoto();
				$('.js-input').find('input').val('');
				$('.js-input').find('select').val('0');
				$('.js-input').find('select').selectpicker('refresh');
				$('#confirmation').addClass('aparecer');
				// msj('success', 'Register Completed');
        	}else{
        		return;
        	}
		} catch (err) {
			msj('error', err.message);
		}
	});
}
function soloLetras(e){
    key 	   	   = e.keyCode || e.which;
    tecla 	   	   = String.fromCharCode(key).toLowerCase();
    letras     	   = " áéíóúabcdefghijklmnñopqrstuvwxyz";
    especiales 	   = "8-37-39-46";
    tecla_especial = false
    for(var i in especiales){
         if(key == especiales[i]){
             tecla_especial = true;
             break;
         }
     }
     if(letras.indexOf(tecla)==-1 && !tecla_especial){
         return false;
     }
 }
 function valida(e){
    tecla = (document.all) ? e.keyCode : e.which;
    if (tecla==8){
        return true;
    }
    patron 		=/[0-9]/;
    tecla_final = String.fromCharCode(tecla);
    return patron.test(tecla_final);
}
function validateEmail(email){
    var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email);
}
function validateNumber(number){
    var re = /^\d+$/;
    return re.test(number);
}
// function validateNotPdf(pdf){
//     var re = /.+(?=.pdf|.PDF)/;
//     return re.test(pdf);
// }
var $win = $(window);
$win.scroll(function () {
	if ($win.scrollTop() > 45) {
		$(".js-header").addClass("navbarcolor");
	} else {
		$(".js-header").removeClass("navbarcolor");
	}
});
$('a.link[href^="#"]').click(function(e) {
 	var target = $(this).attr('href');
 	var strip = target.slice(1);
 	var anchor = $("section[id='" + strip + "']");
 	e.preventDefault();
 	y = (anchor.offset() || {
 		"top" : NaN
 	}).top;
 	$('html, body').animate({
 		scrollTop : (y - 40)
 	}, 'slow');
});
function subirPasaporte(){
	$("#archivo").trigger("click");
}
function subirBlankPasaporte(){
	$("#blank").trigger("click");
}
$("#archivo").change(function(e) {
	var files = e.target.files;
    var archivo = files[0].name;
    var nuevo = archivo.split(".");
    var contador = nuevo.length;
    if (nuevo[contador-1] == 'svg' || nuevo[contador-1] == 'jpeg' || nuevo[contador-1] == 'jpg' || nuevo[contador-1] == 'png') {
	    archivo = archivo.replace(/\s/g,"_");
		$('#fotopassport').val(archivo);
    } else {
		msj('error', 'Image Passport only svg, jpg, jpeg and png');
		return;
    }
});
$("#blank").change(function(e) {
	var files = e.target.files;
    var archivo = files[0].name;
    var nuevo = archivo.split(".");
    var contador = nuevo.length;
    if (nuevo[contador-1] == 'svg' || nuevo[contador-1] == 'jpeg' || nuevo[contador-1] == 'jpg' || nuevo[contador-1] == 'png') {
	    archivo = archivo.replace(/\s/g,"_");
		$('#fotoblankpassport').val(archivo);
    } else {
		msj('error', 'Image of two blank page Passport only svg, jpg, jpeg and png');
		return;
    }
});
function guardarPhoto(){
	var datos = new FormData();
	var photo = $('#archivo')[0].files[0];
	if(photo['size'] > 2048000){
		return;
	}
	if(photo == undefined){
		return;
	}
    datos.append('archivo',$('#archivo')[0].files[0]);
     $.ajax({
        type     	:"post",
        dataType 	:"json",
        url		    :"home/subirPassport",
        contentType :false,
        data 		:datos,
        processData :false,
      }).done(function(respuesta){
      	if(respuesta.error == 0) {
      		/*modal('ModalQuestion');
      		setTimeout(function() {
				modal('modalDetalles');
				$('#bodyPuntaje').html(respuesta.html);
        		$('#puntajeGeneral').html(respuesta.puntosGeneral);
        		$('#bodyUltimaCotizacion').html(respuesta.bodyCotizaciones);
        		$('#bodyCanales').html(respuesta.bodyCanales);
        		//limpiarCampos();
			}, 250);*/
      	} else {
        	msj('error', respuesta.mensaje);
      	}
    });
}
function guardarBlankPhoto(){
	var datos = new FormData();
	var photo = $('#blank')[0].files[0];
	if(photo['size'] > 2048000){
		return;
	}
	if(photo == undefined){
		return;
	}
    datos.append('blank',$('#blank')[0].files[0]);
     $.ajax({
        type     	:"post",
        dataType 	:"json",
        url		    :"home/subirBlankPassport",
        contentType :false,
        data 		:datos,
        processData :false,
      }).done(function(respuesta){
      	if(respuesta.error == 0) {
      		/*modal('ModalQuestion');
      		setTimeout(function() {
				modal('modalDetalles');
				$('#bodyPuntaje').html(respuesta.html);
        		$('#puntajeGeneral').html(respuesta.puntosGeneral);
        		$('#bodyUltimaCotizacion').html(respuesta.bodyCotizaciones);
        		$('#bodyCanales').html(respuesta.bodyCanales);
        		//limpiarCampos();
			}, 250);*/
      	} else {
        	msj('error', respuesta.mensaje);
      	}
    });
}
$('#principal .owl-carousel').owlCarousel({
	lazyLoad : true,
	animateOut: 'fadeOut',
	animateIn: 'fadeIn',
	responsive : {
		0 : {
			items : 1
		}
	},
	navigation : false,
	nav : false,
	loop : true,
	autoplay : true,
	mouseDrag: false,
	autoplayTimeout : 5000
});
