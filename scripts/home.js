$(document).ready(function(){
	
	$('#services div.category-wrapper').mouseenter(function(){
		var position = $(this).position();
		var services = $(this).html();
		$('#more').remove();
		$('<div id="more">' + services + '</div>').appendTo('body');
		$('#more').css({'top': position.top - 20 + 'px', 'left': position.left - 20 + 'px'});
		$('#more').mouseleave(function(){
			$(this).remove();
		});
	});
	
});