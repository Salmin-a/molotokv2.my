<?php

$options = $_POST['options'];

?>

<div class="options">
	<table width="100%">
		<col width="150" />
		<col width="" />
		<tr>
			<td>Вариант:</td>
			<td>
				<?php
				if (!isset($options['variant'])) {
					$options['variant'] = 1;
				}
				if ($options['variant'] == 1) {
					$selected['options']['variant'][1] = ' selected="selected"';
				}
				else if ($options['variant'] == 2) {
					$selected['options']['variant'][2] = ' selected="selected"';
				}
				else if ($options['variant'] == 3) {
					$selected['options']['variant'][3] = ' selected="selected"';
				}	
				else if ($options['variant'] == 4) {
					$selected['options']['variant'][4] = ' selected="selected"';
				}							
				?>
				<select class="variant">
					<option value="1"<?php echo $selected['options']['variant'][1]; ?>>Эконом-ремонт туалета, 1,4 м²</option>
					<option value="2"<?php echo $selected['options']['variant'][2]; ?>>Капитальный ремонт кухни в новостройке, 9 м²</option>
					<option value="3"<?php echo $selected['options']['variant'][3]; ?>>Эконом-ремонт ванной, 1,7 x 1,7 м</option>
					<option value="4"<?php echo $selected['options']['variant'][4]; ?>>Евроремонт ванной</option>
				</select>
			</td>
		</tr>
	</table>
</div>

<div class="result">
	<?php if ($options['variant'] == 1) { ?>
	<div class="services">
		<table>
			<tr>
				<td>Укладка платки фартук на уровне 1,6 метра</td>
				<td class="unit">6,5 м<sup>2</sup></td>
			</tr>
			<tr>
				<td>Укладка плитки на пол</td>
				<td class="unit">1,4 м<sup>2</sup></td>
			</tr>
			<tr>
				<td>Окраска стен водоимульсионной краской/ или оклейка обоями</td>
				<td class="unit">4 м<sup>2</sup></td>
			</tr>
			<tr>
				<td>Окраска потолка водоимульсионной краской / или оклейка обоями</td>
				<td class="unit">1,4 м<sup>2</sup></td>
			</tr>
			<tr>
				<td>Профилактика соеденений труб, кранов, канализации</td>
				<td class="unit">1 шт.</td>
			</tr>
		</table>
	</div>
	<div class="price">
		<div class="prefix">Мы сделали это всего за</div>
		<?php
		$value = 6932;
		?>
		<div class="value"><?php echo number_format($value, 0, ' ', ' '); ?></div>
		<div class="note">Вы можете расширить или сократить объем работ на свое усмотрение. Цена указана без учета материалов.</div>
	</div>
	<?php } else if ($options['variant'] == 2) { ?>
	<div class="services">
		<table>
			<tr>
				<th colspan="2">Стены</th>
			</tr>
			<tr>
				<td>Грунтовка стен укрепляющем грунтом &laquo;бетоноконтакт&raquo;</td>
				<td class="unit">25 м<sup>2</sup></td>
			</tr>
			<tr>
				<td>Выравнивание стен сухой смесью типа &laquo;Родбанд&raquo;</td>
				<td class="unit">25 м<sup>2</sup></td>
			</tr>
			<tr>
				<td>Оклейка обоев улучшенного качества</td>
				<td class="unit">23 м<sup>2</sup></td>
			</tr>
			<tr>
				<td>Облицовка фартука керамической плиткой</td>
				<td class="unit">3 м<sup>2</sup></td>
			</tr>
			<tr>
				<td>Затирка швов по керамической плитке</td>
				<td class="unit">3 м<sup>2</sup></td>
			</tr>
			<tr>
				<th colspan="2">Полы</th>
			</tr>
			<tr>
				<td>Выравнивающая полимерцементная стяжка</td>
				<td class="unit">8,84 м<sup>2</sup></td>
			</tr>
			<tr>
				<td>Устройство пола из керамической плитки</td>
				<td class="unit">8,84 м<sup>2</sup></td>
			</tr>
			<tr>
				<td>Затирка швов по керамической плитке</td>
				<td class="unit">8,84 м<sup>2</sup></td>
			</tr>
			<tr>
				<td>Установка пластикового плинтуса</td>
				<td class="unit">12,05 м.п.</td>
			</tr>
			<tr>
				<th colspan="2">Электрика</th>
			</tr>
			<tr>
				<td>Установка розеток (на готовое место)</td>
				<td class="unit">5 шт.</td>
			</tr>
			<tr>
				<td>Прокладка кабеля в штробе</td>
				<td class="unit">5 шт.</td>
			</tr>
			<tr>
				<td>Монтаж розетки под электроплиту на готовое установочное место</td>
				<td class="unit">1 шт.</td>
			</tr>
		</table>
	</div>
	<div class="price">
		<div class="prefix">Мы сделали это всего за</div>
		<?php
		$value = 25255;
		?>
		<div class="value"><?php echo number_format($value, 0, ' ', ' '); ?></div>
		<div class="note">Вы можете расширить или сократить объем работ на свое усмотрение. Цена указана без учета материалов.</div>
	</div>
	<?php } else if ($options['variant'] == 3) { ?>
	<div class="services">
		<div class="task">
			<strong>Описание проекта:</strong> заказчику перед сдачей квартиры было необходимо с минимальными вложениями освежить ванную комнату.
		</div>
		<table>
			<tr>
				<td>Укладка платки фартук над ванной</td>
				<td class="unit">4 м<sup>2</sup></td>
			</tr>
			<tr>
				<td>Укладка плитки на пол</td>
				<td class="unit">4 м<sup>2</sup></td>
			</tr>
			<tr>
				<td>Окраска стен водоимульсионной краской</td>
				<td class="unit">8 м<sup>2</sup></td>
			</tr>
			<tr>
				<td>Окраска потолка водоимульсионной краской</td>
				<td class="unit">4 м<sup>2</sup></td>
			</tr>
			<tr>
				<td>Профилактика соеденений труб, кранов, канатизации</td>
				<td class="unit">1 шт.</td>
			</tr>
		</table>
	</div>
	<div class="price">
		<div class="prefix">Мы сделали это всего за</div>
		<?php
		$value = 6640;
		?>
		<div class="value"><?php echo number_format($value, 0, ' ', ' '); ?></div>
		<div class="note">Вы можете расширить или сократить объем работ на свое усмотрение. Цена указана без учета материалов.</div>
	</div>		
	<?php } else if ($options['variant'] == 4) { ?>		
	<div class="services">
		<div class="task">
			<strong>Описание проекта:</strong> получили квартиру в новостройке с муниципальным ремонтом. Заказчик хотел привести ванну в полный порядок.
		</div>
		<table>
			<tr>
				<td>Укладка плитки на подготовленную поверхность</td>
				<td class="unit">23,87 м<sup>2</sup></td>
			</tr>
			<tr>
				<td>Укладка бордюра</td>
				<td class="unit">9 м.п.</td>
			</tr>
			<tr>
				<td>Выравнивание поверхности</td>
				<td class="unit">23,87 м<sup>2</sup></td>
			</tr>
			<tr>
				<td>Порожки из плитки возле дверей</td>
				<td class="unit">2 шт.</td>
			</tr>
			<tr>
				<td>Закладка ванной (экран)</td>
				<td class="unit">1 шт.</td>
			</tr>
			<tr>
				<td>Фигурный вырез плитки</td>
				<td class="unit">4 шт.</td>
			</tr>
			<tr>
				<th colspan="2">Сантехнические работы</th>
			</tr>
			<tr>
				<td>Разводка труб г/в и х/в с замуровкой</td>
				<td class="unit">2 точки</td>
			</tr>
			<tr>
				<td>Работа с канализационными трубами</td>
				<td class="unit">2 точки</td>
			</tr>
			<tr>
				<td>Сборка байпаса для полотенцесушителя</td>
				<td class="unit">1 шт.</td>
			</tr>
			<tr>
				<td>Установка смесителей</td>
				<td class="unit">2 шт.</td>
			</tr>
			<tr>
				<td>Установка мойдодыра с зеркалом и светильником</td>
				<td class="unit">1 шт.</td>
			</tr>
			<tr>
				<td>Установка ванной с обмуровкой</td>
				<td class="unit">1 шт.</td>
			</tr>
			<tr>
				<td>Установка стиральной машины</td>
				<td class="unit">1 шт.</td>
			</tr>
			<tr>
				<th colspan="2">Плотницкие работы</th>
			</tr>
			<tr>
				<td>Установка дверей</td>
				<td class="unit">1 шт.</td>
			</tr>
			<tr>
				<td>Потолок с электрикой</td>
				<td class="unit">1 шт.</td>
			</tr>
			<tr>
				<td>Розетка в ванной</td>
				<td class="unit">1 шт.</td>
			</tr>
		</table>
	</div>
	<div class="price">
		<div class="prefix">Мы сделали это всего за</div>
		<?php
		$value = 53000;
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
				'project': 'plitka'
			});
		});
	});
</script>

<script type="text/javascript">
<?php require 'scripts/price.js'; ?>
<?php require 'scripts/group.js'; ?>
</script>
