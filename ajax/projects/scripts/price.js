$(document).ready(function(){
	if($('div.project div.result div.price').length) {
		var price = $('div.project div.result div.price');
		var priceOffset = price.offset();
		var priceHeight = price.height();
		var addMargin = 30;
		$(window).scroll(function(){
			var result = $('div.project div.result');
			var resultHeight = result.height();
			if ($(window).scrollTop() > priceOffset.top) {
				var position = $(window).scrollTop() - priceOffset.top + priceHeight + addMargin;
				if (position < resultHeight) {
					price.stop().animate({
						marginTop: $(window).scrollTop() - priceOffset.top + addMargin
					});
				}
			}
			else {
				price.stop().animate({
					marginTop: 0
				});
			}
		});
	}
});