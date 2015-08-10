<?php

$options = $_POST['options'];

?>

<div class="options">
	<table width="100%">
		<col width="150" />
		<col width="" />
		<tr>
			<td>Площадь:</td>
			<td>
				<?php
				if (!isset($options['area'])) {
					$options['area'] = 1;
				}
				if ($options['area'] == 1) {
					$selected['options']['area'][1] = ' selected="selected"';
				}
				else if ($options['area'] == 2) {
					$selected['options']['area'][2] = ' selected="selected"';
				}
				?>
				<select class="area">
					<option value="1"<?php echo $selected['options']['area'][1]; ?>>900 м²</option>
					<option value="2"<?php echo $selected['options']['area'][2]; ?>>45 м²</option>
				</select>
			</td>
		</tr>
	</table>
</div>

<div class="result">
	<?php if ($options['area'] == 1) { ?>
	<div class="services">
		<div class="task">
			<strong>Описание проекта:</strong> в офисном помещении 900 м<sup>2</sup> требовалось произвести ремонт потолка, пола, стен и выполнить другие смежные работы.
		</div>
		<table>
			<tr>
				<td>Снятие плиток &laquo;Акмигран&raquo; с потолка и стен</td>
				<td class="unit">308,5 м<sup>2</sup></td>
			</tr>
			<tr>
				<td>Снятие облицовки стен из панелей ДСП</td>
				<td class="unit">1470,6 м<sup>2</sup></td>
			</tr>
			<tr>
				<td>Снятие межкомнатных дверных блоков</td>
				<td class="unit">33 шт.</td>
			</tr>
			<tr>
				<td>Снятие наличников</td>
				<td class="unit">330 п. м.</td>
			</tr>
			<tr>
				<td>Снятие штучного паркета</td>
				<td class="unit">875,7 м<sup>2</sup></td>
			</tr>
			<tr>
				<td>Устройство подвесных потолков из плит &laquo;Армстронг&raquo;</td>
				<td class="unit">1012,8 м<sup>2</sup></td>
			</tr>
			<tr>
				<td>Облицовка стен ГКЛ в 1 слой без утеплителя по металлокаркасу</td>
				<td class="unit">2239,4 м<sup>2</sup></td>
			</tr>
			<tr>
				<td>Проклейка швов ГКЛ армирующей сеткой</td>
				<td class="unit">6137 м. п.</td>
			</tr>
			<tr>
				<td>Шпатлевка и шлифовка швов по ГКЛ</td>
				<td class="unit">6137 м. п.</td>
			</tr>
			<tr>
				<td>Грунтовка стен и дверных откосов</td>
				<td class="unit">2619,9 м<sup>2</sup></td>
			</tr>
			<tr>
				<td>Окраска стен и дверных откосов водоэмульсионной краской за 2 раза</td>
				<td class="unit">2619,9 м<sup>2</sup></td>
			</tr>
			<tr>
				<td>Оклеивание стен и дверных откосов стеклообоями</td>
				<td class="unit">2619,9 м<sup>2</sup></td>
			</tr>
			<tr>
				<td>Установка штукатурных уголков на откосы</td>
				<td class="unit">48,2 м. п.</td>
			</tr>
			<tr>
				<td>Установка межкомнатной двери</td>
				<td class="unit">33 шт.</td>
			</tr>
			<tr>
				<td>Врезка замков, петель, ручек</td>
				<td class="unit">33 компл.</td>
			</tr>
			<tr>
				<td>Установка дверных ограничителей</td>
				<td class="unit">33 шт.</td>
			</tr>
			<tr>
				<td>Установка наличников</td>
				<td class="unit">330 п. м.</td>
			</tr>
			<tr>
				<td>Устройство дверных откосов из ГКЛ</td>
				<td class="unit">165 п. м.</td>
			</tr>
			<tr>
				<td>Установка штукатурных уголков на откосы</td>
				<td class="unit">165 п. м.</td>
			</tr>
			<tr>
				<td>Шпатлевка откосов по сетке</td>
				<td class="unit">165 п. м.</td>
			</tr>
			<tr>
				<td>Грунтовка дверных откосов</td>
				<td class="unit">165 п. м.</td>
			</tr>
			<tr>
				<td>Окраска откосов</td>
				<td class="unit">165 п. м.</td>
			</tr>
			<tr>
				<td>Установка штукатурных уголков на откосы</td>
				<td class="unit">199,8 п. м.</td>
			</tr>
			<tr>
				<td>Устройство откосов из ГКЛ</td>
				<td class="unit">199,8 п. м.</td>
			</tr>
			<tr>
				<td>Грунтовка откосов</td>
				<td class="unit">199,8 п. м.</td>
			</tr>
			<tr>
				<td>Шпатлевание откосов по сетке</td>
				<td class="unit">199,8 п. м.</td>
			</tr>
			<tr>
				<td>Окраска откосов</td>
				<td class="unit">199,8 п. м.</td>
			</tr>
			<tr>
				<td>Грунтовка пола под керамогранит</td>
				<td class="unit">289,1 м<sup>2</sup></td>
			</tr>
			<tr>
				<td>Грунтовка деревянного пола огнебиозащитным составом &laquo;Сенеж огниво&raquo;</td>
				<td class="unit">875,7 м<sup>2</sup></td>
			</tr>
			<tr>
				<td>Устройство цементной стяжки толщиной 50 мм.</td>
				<td class="unit">289,1 м<sup>2</sup></td>
			</tr>
			<tr>
				<td>Устройство маяков</td>
				<td class="unit">289,1 м<sup>2</sup></td>
			</tr>
			<tr>
				<td>Укладка фанеры по деревянному полу</td>
				<td class="unit">875,7 м<sup>2</sup></td>
			</tr>
			<tr>
				<td>Укладка подложки</td>
				<td class="unit">723,8 м<sup>2</sup></td>
			</tr>
			<tr>
				<td>Устройство ламинированного паркета</td>
				<td class="unit">723,8 м<sup>2</sup></td>
			</tr>
			<tr>
				<td>Установка плинтуса пластикового</td>
				<td class="unit">563,7 п. м.</td>
			</tr>
			<tr>
				<td>Установка порожков переходных</td>
				<td class="unit">35 п. м.</td>
			</tr>
			<tr>
				<td>Укладка керамогранита</td>
				<td class="unit">289,1 м<sup>2</sup></td>
			</tr>
			<tr>
				<td>Устройство плинтусов из керамогранита</td>
				<td class="unit">153,1 п. м.</td>
			</tr>
			<tr>
				<td>Устройство насечки по бетонному основанию пола</td>
				<td class="unit">137 м<sup>2</sup></td>
			</tr>
			<tr>
				<td>Сборка, разборка подмостей</td>
				<td class="unit">80 м<sup>2</sup></td>
			</tr>
			<tr>
				<td>Вывоз мусора</td>
				<td class="unit">6 конт.</td>
			</tr>
		</table>
	</div>
	<div class="price">
		<div class="prefix">Мы сделали это всего за</div>
		<?php
		$value = 2467589;
		?>
		<div class="value"><?php echo number_format($value, 0, ' ', ' '); ?></div>
		<div class="note">Вы можете расширить или сократить объем работ на свое усмотрение. Цена указана без учета материалов.</div>
	</div>
	<?php } else if ($options['area'] == 2) { ?>
	<div class="services">
		
		<div class="task">
			<strong>Описание проекта:</strong> Заказчик снял новый офис и ему потребовалось произвести косметический ремонт помещения 45 м<sup>2</sup>.
		</div>
		<table>
			<tr>
				<th colspan="2">Потолок</th>
			</tr>
			<tr>
				<td>Демонтаж подвесных потолков &laquo;Армстронг&raquo;</td>
				<td class="unit">27,6 м<sup>2</sup></td>
			</tr>
			<tr>
				<td>Устройство подвесных потолков типа &laquo;Армстронг&raquo;</td>
				<td class="unit">27,6 м<sup>2</sup></td>
			</tr>
			<tr>
				<th colspan="2">Стены</th>
			</tr>
			<tr>
				<td>Устройство перегородки из ГКЛ двухсторонней в два слоя на металлическом каркасе с изоляцией</td>
				<td class="unit">60,5 м<sup>2</sup></td>
			</tr>
			<tr>
				<td>Установка малярных (алюминиевых) уголков на откосы</td>
				<td class="unit">32 п.м.</td>
			</tr>
			<tr>
				<td>Проклейка швов ГКЛ армирующей сеткой</td>
				<td class="unit">108,9 п.м.</td>
			</tr>
			<tr>
				<td>Шпатлевка и шлифовка швов по ГКЛ</td>
				<td class="unit">108,9 п.м.</td>
			</tr>
			<tr>
				<td>Грунтовка стен за 2 раза</td>
				<td class="unit">121 м<sup>2</sup></td>
			</tr>
			<tr>
				<td>Оклеивание стен стеклообоями</td>
				<td class="unit">121 м<sup>2</sup></td>
			</tr>
			<tr>
				<td>Окраска стен расколерованной водоэмульсионной краской за 2 раза</td>
				<td class="unit">121 м<sup>2</sup></td>
			</tr>
			<tr>
				<th colspan="2">Электромонтажные работы</th>
			</tr>
			<tr>
				<td>Прокладка кабельканала</td>
				<td class="unit">116 п.м.</td>
			</tr>
			<tr>
				<td>Установка подрозетника в ГКЛ</td>
				<td class="unit">20 шт.</td>
			</tr>
			<tr>
				<td>Установка распаечной коробки c коммутацией</td>
				<td class="unit">10 шт.</td>
			</tr>
			<tr>
				<td>Прокладка эл. провода сеч. 3х1,5 мм<sup>2</sup> в гофрорукаве</td>
				<td class="unit">45 п.м.</td>
			</tr>
			<tr>
				<td>Прокладка эл. провода сеч. 3х2,5 мм<sup>2</sup> в гофрорукаве</td>
				<td class="unit">25 п.м.</td>
			</tr>
			<tr>
				<th colspan="2">Разные работы</th>
			</tr>
			<tr>
				<td>Защита поверхностей полиэтиленовой пленкой</td>
				<td class="unit">70 м<sup>2</sup></td>
			</tr>
			<tr>
				<td>Вынос мусора и погрузка в контейнер</td>
				<td class="unit">1 тн.</td>
			</tr>
			<tr>
				<td>Вывоз мусора</td>
				<td class="unit">1 конт.</td>
			</tr>
			<tr>
				<td>Разгрузка и подъем материала</td>
				<td class="unit">1,9 тн.</td>
			</tr>
		</table>
	</div>
	<div class="price">
		<div class="prefix">Мы сделали это всего за</div>
		<?php
		$value = 102295;
		?>
		<div class="value"><?php echo number_format($value, 0, ' ', ' '); ?></div>
		<div class="note">Вы можете расширить или сократить объем работ на свое усмотрение. Цена указана без учета материалов.</div>
	</div>
	<?php } ?>
</div>

<script type="text/javascript">
	$(document).ready(function(){
		$('div.content div.project div.options select').change(function(){
			var options = {};
			$('div.content div.project div.options select').each(function(index){
				var name = $(this).attr('class');
				var val = $(this).val();
				options[name] = val;
			});
			$('div.content div.project').load('/ajax/projects.php',{
				'options': options,
				'project': 'office'
			});
		});
	});
</script>

<script type="text/javascript">
<?php require 'scripts/price.js'; ?>
</script>
