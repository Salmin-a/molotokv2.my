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
		var texture = $('div.content div.calculator form select[name="texture"]').val();
		var artPrint = $('div.content div.calculator form input[name="art-print"]').val();
		var corners = $('div.content div.calculator form input[name="corners"]').val();
		var curves = $('div.content div.calculator form input[name="curves"]').val();
		var recessed_luminaire = $('div.content div.calculator form input[name="recessed_luminaire"]').val();
		var ventilation = $('div.content div.calculator form input[name="ventilation"]').val();
		var fire_alarms = $('div.content div.calculator form input[name="fire_alarms"]').val();
		
		if (area > 0) {
			total += area * texture;
		}
		if(area >= 16 && area <= 50) {
			total = total - (total * 0.1 );
		}
		else if(area >= 51 && area <= 100){
			total = total - (total * 0.4 );
		}
		else if(area >= 101){
			total = total - (total * 0.5 );
		}
		if (perimeter > 0) {
			total += perimeter * 200;
		}
		if (corners > 4) {
			total += (corners - 4) * 250;
		}
		if (curves > 0) {
			total += curves * 590;
		}
		if (recessed_luminaire > 0) {
			total += recessed_luminaire * 490;
		}		
		if (ventilation > 0) {
			total += ventilation * 250;
		}
		if (fire_alarms > 0) {
			total += fire_alarms * 240;
		}
		total = Math.round(total * 1);
		increased = Math.round(total * 1.3).toString();
		increased = increased.substring(0, increased.length - 1) + '0';
		total = '<s><span></span>' + increased + '</s>' + total;
		total += ' руб.';
		$('div.content div.calculator span.total').html(total);
		$('div.content div.calculator .total s span').width($('div.content div.calculator .total s').width());
	}

}); 