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
		var area = $('div.content div.calculator form input[name="area"]').val();
		var alignment = $('div.content div.calculator form select[name="alignment"]').val();
		var type = $('div.content div.calculator form select[name="type"]').val();
		var texture = $('div.content div.calculator form select[name="texture"]').val();
		var picture = $('div.content div.calculator form select[name="picture"]').val();
		
		if (alignment > 0) {
			total += alignment * area;
		}
		if (type > 0) {
			total += type * area;
		}
		if (texture > 0) {
			total += texture * area;
		}
		if (picture > 0) {
			total += picture * area;
		}
		
		
		increased = Math.round(total * 1.3);
		total = '<s><span></span>' + increased + '</s>' + total;
		total += ' руб.';
		$('div.content div.calculator span.total').html(total);
		$('div.content div.calculator .total s span').width($('div.content div.calculator .total s').width());
	}

});
