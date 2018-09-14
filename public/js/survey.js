function savePoint(id){
	var buttonId = $('#'+id);
	buttonId.parents('.js-encuesta__contenido').find('.js-button--number').removeClass('js-select');
	buttonId.addClass('js-select');
}