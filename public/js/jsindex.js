function sendInformation(){
	//Business
	var check_invi 			 = null;
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
	//Itinerary
	var acknowledgement 	 = $('#acknowledgement').val();
	var restrictions 		 = $('#restrictions').val();
	var checkindate 		 = $('#checkindate').val();
	var checkoutdate 		 = $('#checkoutdate').val();
	var need 				 = $('#need').val();
	var departureorigin 	 = $('#departureorigin').val();
	var departuredestination = /*$('#departuredestination').val()*/'aa';//quitado
	var departuredate 		 = $('#departuredate').val();
	var departuretime 		 = $('#departuretime').val();
	var returnorigin 		 = $('#returnorigin').val();
	var returndestination 	 = /*$('#returndestination').val()*/'aa';
	var returndate 			 = $('#returndate').val();
	var returntime 			 = $('#returntime').val();
	var preference1 		 = $('#preference1').val();
	var rewards1 			 = $('#rewards1').val();
	var preference2 		 = $('#preference2').val();
	var rewards2 			 = $('#rewards2').val();
	var preference3 		 = $('#preference3').val();
	var rewards3 			 = $('#rewards3').val();
	var confirmation 		 = /*$('#confirmation').val()*/'aa';//quitado
	var modifidate 			 = /*$('#modifidate').val()*/'aa';//quitado
	var cancellationdate 	 = /*$('#cancellationdate').val()*/'aa';//quitado
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
	//Itinerary
	if(acknowledgement == null || acknowledgement == '') {
		msj('error', 'Name acknowledgement must be completed');
		return;
	}
	if(restrictions == null || restrictions == '') {
		msj('error', 'Dietary restrictions must be completed');
		return;
	}
	if(checkindate == null || checkindate == '') {
		msj('error', 'Check-in must be completed');
		return;
	}
	if(checkoutdate == null || checkoutdate == '') {
		msj('error', 'Check-out must be completed');
		return;
	}
	if(need == null || need == '') {
		msj('error', 'Special needs must be completed');
		return;
	}
	if(departureorigin == null || departureorigin == '') {
		msj('error', 'Departure flight origin must be completed');
		return;
	}
	// if(departuredestination == null) {
	// 	msj('error', 'Departure flight destination must be completed');
	// 	return;
	// }
	if(departuredate == null || departuredate == '') {
		msj('error', 'Departure date must be completed');
		return;
	}
	if(departuretime == null || departuretime == '') {
		msj('error', 'Departure time must be completed');
		return;
	}
	if(returnorigin == null || returnorigin == '') {
		msj('error', 'Return flight origin must be completed');
		return;
	}
	// if(returndestination == null) {
	// 	msj('error', 'Return flight destination must be completed');
	// 	return;
	// }
	if(returndate == null || returndate == '') {
		msj('error', 'Return date must be completed');
		return;
	}
	if(returntime == null || returntime == '') {
		msj('error', 'Return time must be completed');
		return;
	}

	//CONTINUA AQUI
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
				nacionalidad	: nationality,
				ciudadReferen	: residence,
				flgInvitacion	: check_invi,
				asientoPrefere	: seating,
				tallaPolo		: shirt,
				//
				reconocimiento	: acknowledgement,
				restriccionDieta: restrictions,
				checkInDate 	: checkindate,
				checkOutDate 	: checkoutdate,
				necesidadEspe	: need,
				origenPartida	: departureorigin,
				destinoPartida	: departuredestination,
				diaVueloOrigen	: departuredate,
				HoraVueloOrigen	: departuretime,
				origenRetorno	: returnorigin,
				destinoRetorno	: returndestination,
				diaVueloRetorno	: returndate,
				HoraVueloRetorno: returntime,
				aerolinea1		: preference1,
				codigoAero1		: rewards1,
				aerolinea2		: preference2,
				codigoAero2		: rewards2,
				aerolinea3		: preference3,
				codigoAero3		: rewards3,
				confirmacion	: confirmation,
				ultimoDiaModifica: modifidate,
				ultimoDiaCancela: cancellationdate,
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
				$('.js-input').find('input').val('');
				$('.js-select').find('select').val('0');
				$('.js-select').find('select').selectpicker('refresh');
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
var $win = $(window);
$win.scroll(function () {
	if ($win.scrollTop() > 45) {
		$("nav").addClass("navbarcolor");
	} else {
		$("nav").removeClass("navbarcolor");
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