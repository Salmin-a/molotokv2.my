$(document).ready(function() {
	/* Под кофеёк и код аккуратнее. */
	texture_width = $('div.content').width();
	texture_limit = Math.round(texture_width / 50) - 1;

	$('.texture .expand').each(function(i) {
		if ($('.texture div[texture_cat=' + $(this).attr('texture_cat') + '] img').length <= texture_limit) {
			$(this).hide();
		}

	});

	$('.texture .expand').click(function() {
		var texture_selector = $('.texture div[texture_cat=' + $(this).attr('texture_cat') + ']');

		if (texture_selector.attr('active') == 'true') {
			texture_selector.css('overflow-y', 'hidden');
			texture_selector.css('max-height', '70px');
			texture_selector.attr('active', 'false');
			$(this).text('все фактуры');
		} else {
			texture_selector.css('overflow-y', 'auto');
			texture_selector.css('max-height', 'none');
			texture_selector.attr('active', 'true');
			$(this).text('свернуть');
		}
	});
	
	$('.texture_vertical .expand').each(function(i) {
		if ($('.texture_vertical div[texture_cat=' + $(this).attr('texture_cat') + '] img').length <= texture_limit) {
			$(this).hide();
		}

	});

	$('.texture_vertical .expand').click(function() {
		var texture_selector = $('.texture_vertical div[texture_cat=' + $(this).attr('texture_cat') + ']');

		if (texture_selector.attr('active') == 'true') {
			texture_selector.css('overflow-y', 'hidden');
			texture_selector.css('max-height', '50px');
			texture_selector.attr('active', 'false');
			$(this).text('все фактуры');
		} else {
			texture_selector.css('overflow-y', 'auto');
			texture_selector.css('max-height', 'none');
			texture_selector.attr('active', 'true');
			$(this).text('свернуть');
		}
	});
	
	$('.texture_horizontal .expand').each(function(i) {
		if ($('.texture_horizontal div[texture_cat=' + $(this).attr('texture_cat') + '] img').length <= texture_limit) {
			$(this).hide();
		}

	});

	$('.texture_horizontal .expand').click(function() {
		var texture_selector = $('.texture_horizontal div[texture_cat=' + $(this).attr('texture_cat') + ']');

		if (texture_selector.attr('active') == 'true') {
			texture_selector.css('overflow-y', 'hidden');
			texture_selector.css('max-height', '50px');
			texture_selector.attr('active', 'false');
			$(this).text('все фактуры');
		} else {
			texture_selector.css('overflow-y', 'auto');
			texture_selector.css('max-height', 'none');
			texture_selector.attr('active', 'true');
			$(this).text('свернуть');
		}
	});
});
