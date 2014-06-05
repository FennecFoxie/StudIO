$(document).on('click', 'tr', function() {
	$('tr').removeClass('highlighted');
	$(this).toggleClass('highlighted');

	$('#id_elm').val($(this).children('td:first').html());
	// $('.is_storage').val();
	$('#id_elm_shed').val($(this).children('td').children('input:first').val());

});


