$(document).ready(function() {
	
	$('.nyroModal').nyroModal({});
	
	$('#services .category').hover(
		function(){
			$(this).addClass('active');
			var subservices = $(this).find('.services');
			subservices.css({'min-width' : $(this).outerWidth() + 'px'});
			subservices.show();
		}, function(){
			$(this).removeClass('active');
			var subservices = $(this).find('.services');
			subservices.hide();
		}
	);
	
	if($('#content .projects .project').length > 1) {
		var max_projects = 2;
		if($('#content .projects .project').length > max_projects) {
			var projects = $('#content .projects .project').slice(max_projects).hide();
			$('#content .projects').append($('<div class="more"><span>▼</span> Показать еще проект</div>'));
			$('#content .projects .more').click(function(){
				$('#content .projects .project:hidden:first').fadeIn(600);
				if($('#content .projects .project:hidden').length == 0) {
					$(this).hide();
				}
			});
		}
	}
	
	if($('input.text, textarea.text').length > 1) {
		$('input.text, textarea.text').focus(function(){
			if($(this).val() == $(this).attr('title')) {
				$(this).val('');
			}
		});
		$('input.text, textarea.text').blur(function(){
			if($(this).val() == '') {
				$(this).val($(this).attr('title'));
			}
		});
	}
	
});  