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
		var substrate = $('div.content div.calculator form select[name="substrate"]').val();
		var collection = $('div.content div.calculator form select[name="collection"]').val();
		var plintus = $('div.content div.calculator form input[name="plintus"]').val();
		var angle = $('div.content div.calculator form input[name="angle"]').val();
		
		if (area > 0 && area < 10) {
			total += area * 420;
		}
		else if(area >= 10 && area < 20)
		{
			total += area * 420;
		}
		else if(area >= 20 && area < 100)
		{
			total += area *420;
		}
		else if(area >= 100)
		{
			total += area * 420;
		}
		if (collection > 0) {
			total += collection * area;
		}
		
		if(alignment == 750)
		{
			total+=area * alignment;
		}
		else{
			  if (area > 0 && area < 5) {
				  if(alignment == 400)
					  total += alignment * area;
				  else if(alignment == 450)
					  total+=alignment * area;
			  }
			  else if(area >= 5 && area < 15) {
				  if(alignment == 400)
					  total+=(alignment-100) * area;
				  else if(alignment==450)
					  total+=(alignment-100) * area;
			  }
			  else if(area >= 15) {
				  if(alignment==400)
					  total+=(alignment-200) * area;
				  else if(alignment==450)
					  total+=(alignment-200) * area;
			  }
		}
		
		if(substrate>0){
			total+=substrate*area;	
		}
		
		if(plintus > 0){
			total+=plintus * 150;
		}
		if(angle > 0){
			total+=angle * 250;
		}
		

		increased = Math.round(total * 1.3);
		total = '<s><span></span>' + increased + '</s>' + total;
		total += ' руб.';
		$('div.content div.calculator span.total').html(total);
		$('div.content div.calculator .total s span').width($('div.content div.calculator .total s').width());
	}

});
