$(document).ready(function() {
	calculate();
	$('div.content div.calculator form input').keyup(function() {
		this.value = this.value.replace(/[^0-9\.,]/g, '');
		this.value = this.value.replace(/[,]/, '.');
	});
	$('div.content div.calculator form').change(function() {
		calculate();
	});
	$('div.content div.calculator form').keyup(function() {
		calculate();
	});
	function calculate() {
		var total = 0;
		var increased = 0;

		var type = 1325;
		var width = $('div.content div.calculator form input[name="width"]').val();
		var height = $('div.content div.calculator form input[name="height"]').val();
		var count = $('div.content div.calculator form input[name="count"]').val();
		
		if (width > 0 && height > 0 && count > 0) {
			width = width / 100;
			height = height / 100;
			total +=type* width * height * count;
		}
		else{
			total = 0;
		}
		
		
		increased = Math.round(total * 1.3).toString();
		increased = increased.substring(0, increased.length - 1) + '0';
		total = '<s><span></span>' + increased + '</s>' + total;
		total += ' руб.';
		$('div.content div.calculator span.total').html(total);
		$('div.content div.calculator .total s span').width($('div.content div.calculator .total s').width());
	}

}); 