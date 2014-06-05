// $(document).ready(function(){

	function get_tab(){

	}

	$(document).on('click', '#add', function(){
		//определение активной вкладки
		// var active = $('.showscale');
		var id = $('div.showscale').attr('id');
		//
		if(id == 'tabs-1'|| id == undefined)
			var pop_up = $('#pop_up_shedule');
		else if(id == 'tabs-2')
			var pop_up = $('#pop_up_tasks');
		else if(id == 'tabs-3')
			var pop_up = $('#pop_up_group');


		pop_up.css('left', ($(window).width()-pop_up.width())/2+ 'px');
		pop_up.css('top', ($(window).height()-pop_up.height())/2+ 'px');
		pop_up.show();
	});

	$(document).on('click', '#delete', function(){
		var active = document.getElementsByClassName('showscale');
		var id = $('div.showscale').attr('id');
		var pop_up=$('#pop_up_confirm');

		var id = $('div.showscale').attr('id');

		if(id == 'tabs-1'|| id == undefined)
			$("#table_elm").val('shedule');
		else if(id == 'tabs-2')
			$("#table_elm").val('tasks');
		else if(id == 'tabs-3')
			$("#table_elm").val('students');

		pop_up.css('left', ($(window).width()-pop_up.width())/2+ 'px');
		pop_up.css('top', ($(window).height()-pop_up.height())/2+ 'px');
		// pop_up.show();
		pop_up.fadeTo("slow",0.8); 
	});

	function close_pop_up(){
		$(".pop_up").hide();
	}
// });
