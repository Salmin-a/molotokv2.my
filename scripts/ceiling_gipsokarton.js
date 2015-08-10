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
		var perimeter = $('div.content div.calculator form input[name="perimeter"]').val();
		var construction = $('div.content div.calculator form select[name="construction"]').val();
		var gypsum = $('div.content div.calculator form select[name="gypsum"]').val();
		var corners = $('div.content div.calculator form input[name="corners"]').val();
		var curves = $('div.content div.calculator form input[name="curves"]').val();
		var lamp = $('div.content div.calculator form input[name="lamp"]').val();
		var chandelier = $('div.content div.calculator form input[name="chandelier"]').val();
		if (area > 0) {
			total += area * gypsum;
		}
		if (perimeter > 0) {
			total += perimeter * 200;
		}
		if (corners > 4) {
			total += (corners - 4) * 250;
		}
		if (curves > 0) {
			total += curves * 780;
		}
		if (lamp > 0) {
			total += lamp * 490;
		}
		if (chandelier > 0) {
			total += chandelier * 600;
		}
		if (construction > 0) {
			total += parseFloat(construction) * area;
		}
		if (area >= 16 && area <= 50) {
			total = total - (total * 0.1);
		} else if (area >= 51 && area <= 100) {
			total = total - (total * 0.2);
		} else if (area >= 101) {
			total = total - (total * 0.3);
		}
		total = Math.round(total * 1);
		increased = Math.round(total * 1.3);
		total = '<s><span></span>' + increased + '</s>' + total;
		total += ' руб.';
		$('div.content div.calculator span.total').html(total);
		$('div.content div.calculator .total s span').width($('div.content div.calculator .total s').width());
	}

});
