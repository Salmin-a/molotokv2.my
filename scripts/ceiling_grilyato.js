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
		var view = $('div.content div.calculator form select[name="view"]').val();			
		var artPrint = $('div.content div.calculator form input[name="art-print"]').val();
		var corners = $('div.content div.calculator form input[name="corners"]').val();
		var curves = $('div.content div.calculator form input[name="curves"]').val();
		var recessed_luminaire = $('div.content div.calculator form input[name="recessed_luminaire"]').val();
		var ventilation = $('div.content div.calculator form input[name="ventilation"]').val();
		var fire = $('div.content div.calculator form input[name="fire"]').val();	
		
		var cellsize = $('div.content div.calculator form select[name="cell_size"]').val();
		var color = $('div.content div.calculator form select[name="color"]').val();			
		
		

		if(view == 1){
			var html_cellsize = '<select name="cell_size" id="cell_size">\
						<option value="1">50х50</option>\
						<option value="2">60х60</option>\
						<option value="3">75х75</option>\
						<option value="4">86х86</option>\
						<option value="5">100х100</option>\
						<option value="6">120х120</option>\
						<option value="7">150х150</option>\
						<option value="8">200х200</option>\
						</select>';
						
			$('div.content div.calculator form td.cell_size').html(html_cellsize);			
			$('#cell_size [value='+ cellsize +']').attr("selected", "selected");
						
			var html_color = '<option value="1">белый матовый А902</option>\
			<option value="2">металлик А907 rus</option>\
			<option value="6">суперхром А741</option>\
			<option value="8">хром А740</option>\
			<option value="9">металлик мат.  А906</option>\
			<option value="10">золото А111</option>';
						
			$('div.content div.calculator form select[name="color"]').html(html_color);
			$('#color [value='+ color +']').attr("selected", "selected");
		}
		else if(view == 2){
			var html_cellsize = '<select name="cell_size" id="cell_size">\
						<option value="1">50х50</option>\
						<option value="2">60х60</option>\
						<option value="3">75х75</option>\
						<option value="4">86х86</option>\
						<option value="5">100х100</option>\
						<option value="6">120х120</option>\
						<option value="7">150х150</option>\
						<option value="8">200х200</option>\
						</select>';
						
			$('div.content div.calculator form td.cell_size').html(html_cellsize);
			$('#cell_size [value='+ cellsize +']').attr("selected", "selected");
						
			var html_color = '<option value="1">белый матовый А902</option>\
						<option value="2">металлик А907 rus</option>\
						<option value="3">белый матовый А910</option>\
						<option value="4">металлик А907</option>\
						<option value="5">суперзолото А102</option>\
						<option value="6">суперхром А741</option>\
						<option value="7">суперхром-люкс А742</option>\
						<option value="8">хром А740</option>\
						<option value="9">металлик мат.  А906</option>\
						<option value="10">золото А111</option>';
						
			$('div.content div.calculator form select[name="color"]').html(html_color);	
			$('#color [value='+ color +']').attr("selected", "selected");
					
		}
		else {
			var html_cellsize = '<select name="cell_size" id="cell_size">\
						<option value="3">75х75</option>\
						<option value="4">86х86</option>\
						<option value="5">100х100</option>\
						<option value="6">120х120</option>\
						<option value="7">150х150</option>\
						<option value="8">200х200</option>\
						</select>';
		  $('div.content div.calculator form td.cell_size').html(html_cellsize);		  
		  $('#cell_size [value='+ cellsize +']').attr("selected", "selected");
		  
		  var html_color = '<option value="1">белый матовый А902</option>\
						<option value="2">металлик А907 rus</option>\
						<option value="4">металлик А907</option>\
						<option value="6">суперхром А741</option>\
						<option value="7">суперхром-люкс А742</option>\
						<option value="8">хром А740</option>\
						<option value="10">золото А111</option>\
						<option value="11">белый матовый А902 RUS</option>\
						<option value="12">черный А911</option>';
		  $('div.content div.calculator form select[name="color"]').html(html_color);
		  $('#color [value='+ color +']').attr("selected", "selected");		  

		}
		
		var price_view_cell = 2063;
		if(view == 1){
				if(cellsize== 1){
					if(color==1)
						price_view_cell = 2063;
					else if(color==2)
						price_view_cell = 2538;					
					else if(color==6)
						price_view_cell = 3375;					
					else if(color==8)
						price_view_cell = 3312;
					else if(color==9)
						price_view_cell = 2570;
					else if(color==10)
						price_view_cell = 3312;
					
				}
				else if (cellsize== 2){
					if(color==1)
						price_view_cell = 1769;
					else if(color==2)
						price_view_cell = 2165;					
					else if(color==6)
						price_view_cell = 2873;					
					else if(color==8)
						price_view_cell = 2822;
					else if(color==9)
						price_view_cell = 2191;
					else if(color==10)
						price_view_cell = 2822;
				}
				else if (cellsize== 3){
					if(color==1)
						price_view_cell = 1476;
					else if(color==2)
						price_view_cell = 1793;					
					else if(color==6)
						price_view_cell = 2350;					
					else if(color==8)
						price_view_cell = 2330;
					else if(color==9)
						price_view_cell = 1814;
					else if(color==10)
						price_view_cell = 2330;
				}
				else if (cellsize== 4){
					if(color==1)
						price_view_cell = 1329;
					else if(color==2)
						price_view_cell = 1606;					
					else if(color==6)
						price_view_cell = 2114;					
					else if(color==8)
						price_view_cell = 2084;
					else if(color==9)
						price_view_cell = 1624;
					else if(color==10)
						price_view_cell = 2084;
				}
				else if (cellsize== 5){
					if(color==1)
						price_view_cell = 1182;
					else if(color==2)
						price_view_cell = 1419;					
					else if(color==6)
						price_view_cell = 1833;					
					else if(color==8)
						price_view_cell = 1837;
					else if(color==9)
						price_view_cell = 1435;
					else if(color==10)
						price_view_cell = 1837;
				}
				else if (cellsize== 6){
					if(color==1)
						price_view_cell = 1035;
					else if(color==2)
						price_view_cell = 1233;					
					else if(color==6)
						price_view_cell = 1610;					
					else if(color==8)
						price_view_cell = 1592;
					else if(color==9)
						price_view_cell = 1246;
					else if(color==10)
						price_view_cell = 1592;
				}
				else if (cellsize== 7){
					if(color==1)
						price_view_cell = 888;
					else if(color==2)
						price_view_cell = 1046;					
					else if(color==6)
						price_view_cell = 1357;					
					else if(color==8)
						price_view_cell = 1346;
					else if(color==9)
						price_view_cell = 1057;
					else if(color==10)
						price_view_cell = 1346;
				}
				else if (cellsize== 8){
					if(color==1)
						price_view_cell = 741;
					else if(color==2)
						price_view_cell = 859;					
					else if(color==6)
						price_view_cell = 1104;					
					else if(color==8)
						price_view_cell = 1100;
					else if(color==9)
						price_view_cell = 867;
					else if(color==10)
						price_view_cell = 1100;
				}			
		}
		
		
		else if(view == 2){
				if(cellsize== 1){
					if(color==1)
						price_view_cell = 1908;
					else if(color==2)
						price_view_cell = 2256;
					else if(color==3)
						price_view_cell = 2810;
					else if(color==4)
						price_view_cell = 3029;
					else if(color==5)
						price_view_cell = 5390;
					else if(color==6)
						price_view_cell = 2600;
					else if(color==7)
						price_view_cell = 4490;
					else if(color==8)
						price_view_cell = 2820;
					else if(color==9)
						price_view_cell = 3029;
					else if(color==10)
						price_view_cell = 2820;
					
				}
				else if (cellsize== 2){
					if(color==1)
						price_view_cell = 1640;
					else if(color==2)
						price_view_cell = 1930;
					else if(color==3)
						price_view_cell = 2393;
					else if(color==4)
						price_view_cell = 2574;
					else if(color==5)
						price_view_cell = 4541;
					else if(color==6)
						price_view_cell = 2217;
					else if(color==7)
						price_view_cell = 3792;
					else if(color==8)
						price_view_cell = 2400;
					else if(color==9)
						price_view_cell = 2574;
					else if(color==10)
						price_view_cell = 2400;
					
				}
				else if (cellsize== 3){
					if(color==1)
						price_view_cell = 1372;
					else if(color==2)
						price_view_cell = 11604;
					else if(color==3)
						price_view_cell = 1975;
					else if(color==4)
						price_view_cell = 2120;
					else if(color==5)
						price_view_cell = 3695;
					else if(color==6)
						price_view_cell = 1834;
					else if(color==7)
						price_view_cell = 3095;
					else if(color==8)
						price_view_cell = 1981;
					else if(color==9)
						price_view_cell = 2120;
					else if(color==10)
						price_view_cell = 1981;
					
				}
				else if (cellsize== 4){
					if(color==1)
						price_view_cell = 1238;
					else if(color==2)
						price_view_cell = 1441;
					else if(color==3)
						price_view_cell = 1766;
					else if(color==4)
						price_view_cell = 1892;
					else if(color==5)
						price_view_cell = 3270;
					else if(color==6)
						price_view_cell = 1642;
					else if(color==7)
						price_view_cell = 2745;
					else if(color==8)
						price_view_cell = 1770;
					else if(color==9)
						price_view_cell = 1892;
					else if(color==10)
						price_view_cell = 1770;
					
				}
				else if (cellsize== 5){
					if(color==1)
						price_view_cell = 1104;
					else if(color==2)
						price_view_cell = 1278;
					else if(color==3)
						price_view_cell = 1556;
					else if(color==4)
						price_view_cell = 1664;
					else if(color==5)
						price_view_cell = 2845;
					else if(color==6)
						price_view_cell = 1450;
					else if(color==7)
						price_view_cell = 2395;
					else if(color==8)
						price_view_cell = 1560;
					else if(color==9)
						price_view_cell = 1664;
					else if(color==10)
						price_view_cell = 1560;
				
				}
				else if (cellsize== 6){
					if(color==1)
						price_view_cell = 970;
					else if(color==2)
						price_view_cell = 1116;
					else if(color==3)
						price_view_cell = 1347;
					else if(color==4)
						price_view_cell = 1438;
					else if(color==5)
						price_view_cell = 2422;
					else if(color==6)
						price_view_cell = 1259;
					else if(color==7)
						price_view_cell = 2047;
					else if(color==8)
						price_view_cell = 1351;
					else if(color==9)
						price_view_cell = 1438;
					else if(color==10)
						price_view_cell = 1351;
					
				}
				else if (cellsize== 7){
					if(color==1)
						price_view_cell = 836;
					else if(color==2)
						price_view_cell = 952;
					else if(color==3)
						price_view_cell = 1138;
					else if(color==4)
						price_view_cell = 1210;
					else if(color==5)
						price_view_cell = 1997;
					else if(color==6)
						price_view_cell = 1067;
					else if(color==7)
						price_view_cell = 1697;
					else if(color==8)
						price_view_cell = 1140;
					else if(color==9)
						price_view_cell = 1210;
					else if(color==10)
						price_view_cell = 1140;
					
				}
				else if (cellsize== 8){
					if(color==1)
						price_view_cell = 702;
					else if(color==2)
						price_view_cell = 789;
					else if(color==3)
						price_view_cell = 928;
					else if(color==4)
						price_view_cell = 982;
					else if(color==5)
						price_view_cell = 1572;
					else if(color==6)
						price_view_cell = 875;
					else if(color==7)
						price_view_cell = 1348;
					else if(color==8)
						price_view_cell = 930;
					else if(color==9)
						price_view_cell = 982;
					else if(color==10)
						price_view_cell = 930;
				
				}
			
		}
		
		else if(view == 3){
				if (cellsize== 3){
					if(color==1)
						price_view_cell = 3158;
					else if(color==2)
						price_view_cell = 3198;					
					else if(color==4)
						price_view_cell = 3466;					
					else if(color==6)
						price_view_cell = 4667;
					else if(color==7)
						price_view_cell = 5077;
					else if(color==8)
						price_view_cell = 4787;					
					else if(color==12)
						price_view_cell = 3601;				
					else if(color==10)
						price_view_cell = 4787;				
					else if(color==11)
						price_view_cell = 2459;
				}
				else if (cellsize== 4){
					if(color==1)
						price_view_cell = 2800;
					else if(color==2)
						price_view_cell = 2835;					
					else if(color==4)
						price_view_cell = 3070;					
					else if(color==6)
						price_view_cell = 4120;
					else if(color==7)
						price_view_cell = 4479;
					else if(color==8)
						price_view_cell = 4225;					
					else if(color==12)
						price_view_cell = 3188;				
					else if(color==10)
						price_view_cell = 4225;				
					else if(color==11)
						price_view_cell = 2189;
				}
				else if (cellsize== 5){
					if(color==1)
						price_view_cell = 2442;
					else if(color==2)
						price_view_cell = 2472;					
					else if(color==4)
						price_view_cell = 2673;					
					else if(color==6)
						price_view_cell = 3574;
					else if(color==7)
						price_view_cell = 3881;
					else if(color==8)
						price_view_cell = 3664;					
					else if(color==12)
						price_view_cell = 2775;				
					else if(color==10)
						price_view_cell = 3664;				
					else if(color==11)
						price_view_cell = 1919;
				}
				else if (cellsize== 6){
					if(color==1)
						price_view_cell = 2087;
					else if(color==2)
						price_view_cell = 2112;					
					else if(color==4)
						price_view_cell = 2279;					
					else if(color==6)
						price_view_cell = 3030;
					else if(color==7)
						price_view_cell = 3287;
					else if(color==8)
						price_view_cell = 3105;					
					else if(color==12)
						price_view_cell = 2364;				
					else if(color==10)
						price_view_cell = 3105;				
					else if(color==11)
						price_view_cell = 1650;
				}
				else if (cellsize== 7){
					if(color==1)
						price_view_cell = 1729;
					else if(color==2)
						price_view_cell = 1749;					
					else if(color==4)
						price_view_cell = 1883;					
					else if(color==6)
						price_view_cell = 2482;
					else if(color==7)
						price_view_cell = 2689;
					else if(color==8)
						price_view_cell = 2543;					
					else if(color==12)
						price_view_cell = 1951;				
					else if(color==10)
						price_view_cell = 2543;				
					else if(color==11)
						price_view_cell = 1380;
				}
				else if (cellsize== 8){
					if(color==1)
						price_view_cell = 1371;
					else if(color==2)
						price_view_cell = 1386;					
					else if(color==4)
						price_view_cell = 1487;					
					else if(color==6)
						price_view_cell = 1937;
					else if(color==7)
						price_view_cell = 2091;
					else if(color==8)
						price_view_cell = 1982;					
					else if(color==12)
						price_view_cell = 1537;				
					else if(color==10)
						price_view_cell = 1982;				
					else if(color==11)
						price_view_cell = 1109;
				}			
		}
	
	
	
		if (area > 0) {
			total += area*price_view_cell;
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
		if (fire > 0) {
			total += fire * 240;
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