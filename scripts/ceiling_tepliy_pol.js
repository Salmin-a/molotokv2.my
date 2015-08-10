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
		var pokritie = $('div.content div.calculator form select[name="pokritie"]').val();
		var area_tepliy = $('div.content div.calculator form input[name="area_tepliy"]').val();
		var vud = $('div.content div.calculator form select[name="vud"]').val();		
		var plintus = $('div.content div.calculator form input[name="plintus"]:checked').val();		
		
		if (area > 0) {
			total += area * pokritie;
		}
		if (area_tepliy > 0){
			if(area_tepliy < 5){
				total += area_tepliy *	vud;
			}
			else if(area_tepliy >= 5 && area_tepliy < 20){
				if(	vud == 2500)
					vud = 2000;
				if(	vud == 1750)
					vud = 1350;
				if(	vud == 5000)
					vud = 3700;
				if(	vud == 3500)
					vud = 3000;
				if(	vud == 4500)
					vud = 3700;
				total += area_tepliy *	vud;
			}
			else if(area_tepliy >= 50){
				if(	vud == 2500)
					vud = 1700;
				if(	vud == 1750)
					vud = 1150;
				if(	vud == 5000)
					vud = 3200;
				if(	vud == 3500)
					vud = 2700;
				if(	vud == 4500)
					vud = 2900;
				total += area_tepliy *	vud;
			}
		}
		
		if (perimeter > 0 && plintus) {
			total += perimeter * plintus;
		}
		
		if(area > 0)
			total+= 220*area;
			
		if(area_tepliy > 0)
			total+= 450*area_tepliy;
		
		
		
		
		increased = Math.round(total * 1.3).toString();
		increased = increased.substring(0, increased.length - 1) + '0';
		total = '<s><span></span>' + increased + '</s>' + total;
		total += ' руб.';
		$('div.content div.calculator span.total').html(total);
		$('div.content div.calculator .total s span').width($('div.content div.calculator .total s').width());
	}

}); 