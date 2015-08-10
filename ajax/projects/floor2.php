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
				if (!isset($options['type'])) {
					$options['type'] = 1;
				}
				else {
					$selected['options']['type'][$options['type']] = ' selected="selected"';
				}
				?>
				<select class="type">
					<option value="1"<?php echo $selected['options']['type'][1]; ?>>Наливной 3D пол, 10 м²</option>
					<option value="2"<?php echo $selected['options']['type'][2]; ?>>Укладка плитки на кухне, 10 м²</option>
					<option value="3"<?php echo $selected['options']['type'][3]; ?>>Эконом вариант для ванны, 8 м²</option>
					<option value="4"<?php echo $selected['options']['type'][4]; ?>>Теплый пол для кухни, 10 м²</option>
					<option value="5"<?php echo $selected['options']['type'][5]; ?>>Капитальный ремонт для кухни, 9 м²</option>
					<option value="6"<?php echo $selected['options']['type'][6]; ?>>Теплый пол в ванной, 4 м²</option>
				</select>
			</td>
		</tr>
	</table>
</div>

<div class="result">
	<?php if ($options['type'] == 1) { ?>
	<div class="services">
    <div class="task">
			<strong>Описание проекта:</strong> Подготовка поверхности для изготовления 3D полов в ванной 10 м<sup>2</sup>
		</div>
		<table>
			<tr>
				<td>Устройство стяжки цементно-песчанной смесью до 5 см</td>
				<td class="unit">10 м<sup>2</sup></td>
			</tr>
			<tr>
				<td>Выравнивание пола самонивелирующей смесью до 3 см</td>
				<td class="unit">10 м<sup>2</sup></td>
			</tr>
		</table>
	</div>
	<div class="price">
		<div class="prefix">Мы сделали это всего за</div>
		<?php
		$value = 35500;
		?>
		<div class="value"><?php echo number_format($value, 0, ' ', ' '); ?></div>
		<div class="note">Вы можете расширить или сократить объем работ на свое усмотрение. Цена указана без учета материалов.</div>
	</div>
	<?php } else if ($options['type'] == 2) { ?>
	<div class="services">
    <div class="task">
			<strong>Описание проекта:</strong> Укладка плитки на кухне в новой квартире. 10 м<sup>2</sup>
		</div>
		<table>
			<tr>
				<td>Подготовка поверхности</td>
				<td class="unit">10 м<sup>2</sup></td>
			</tr>
			<tr>
				<td>Устройство стяжки цементно-песчанной смесью до 5 см</td>
				<td class="unit">10 м<sup>2</sup></td>
			</tr>
			<tr>
				<td>Затирка плиточных швов</td>
				<td class="unit">10 м<sup>2</sup></td>
			</tr>
			<tr>
				<td>Мотаж плинтуса (пластик)</td>
				<td class="unit">14 п.м.</td>
			</tr>
			<tr>
				<td>Укладка плитки</td>
				<td class="unit">10 м<sup>2</sup></td>
			</tr>
		</table>
	</div>
	<div class="price">
		<div class="prefix">Мы сделали это всего за</div>
		<?php
		$value = 27720;
		?>
		<div class="value"><?php echo number_format($value, 0, ' ', ' '); ?></div>
		<div class="note">Вы можете расширить или сократить объем работ на свое усмотрение. Цена указана без учета материалов.</div>
	</div>
	<?php } else if ($options['type'] == 3) { ?>
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
		$value = 36640;
		?>
		<div class="value"><?php echo number_format($value, 0, ' ', ' '); ?></div>
		<div class="note">Вы можете расширить или сократить объем работ на свое усмотрение. Цена указана без учета материалов.</div>
	</div>
	<?php } else if ($options['type'] == 4) { ?>
	<div class="services">
		<div class="task">
			<strong>Описание проекта:</strong> Укладка теплых полов под плитку в кухне площадью 10 м<sup>2</sup>. 
		</div>
		<table>
			<tr>
				<td>Подготовка поверхности</td>
				<td class="unit">9 м<sup>2</sup></td>
			</tr>
			<tr>
				<td>Монтаж нагревательных элементов с подключением</td>
				<td class="unit">5 м<sup>2</sup></td>
			</tr>
			<tr>
				<td>Прокладка силовой линии</td>
				<td class="unit">10 м<sup>2</sup></td>
			</tr>
			<tr>
				<td>Укладка теплоотражающего материала</td>
				<td class="unit">5 м<sup>2</sup></td>
			</tr>
            <tr>
				<td>Уклаладка плитки</td>
				<td class="unit">9 м<sup>2</sup></td>
			</tr>
			<tr>
				<td>затирка плиточных швов</td>
				<td class="unit">9 м<sup>2</sup></td>
			</tr>
		</table>
	</div>
	<div class="price">
		<div class="prefix">Мы сделали это всего за</div>
		<?php
		$value = 32400;
		?>
		<div class="value"><?php echo number_format($value, 0, ' ', ' '); ?></div>
		<div class="note">Вы можете расширить или сократить объем работ на свое усмотрение. Цена указана без учета материалов.</div>
	</div>
	<?php } else if ($options['type'] == 5) { ?>
	<div class="services">
		<div class="task">
			<strong>Описание проекта:</strong> Капитальный ремонт кухни в новостройке, 9 м<sup>2</sup>.
		</div>
		<table>
        	<tr>
				<th colspan="2">Потолки</th>
			</tr>
			<tr>
				<td>Грунтовка потолка укрепляющем грунтом "бетоноконтакт"</td>
				<td class="unit">8.84 м<sup>2</sup></td>
			</tr>
			<tr>
				<td>Выравнивающая полимерцементная штукатурка</td>
				<td class="unit">8.84 м<sup>2</sup></td>
			</tr>
			<tr>
				<td>Шпаклевка потолка со шлифовкой</td>
				<td class="unit">8.84 м<sup>2</sup></td>
			</tr>
			<tr>
				<td>Грунтовка потолка укрепляющем грунтом под окраску</td>
				<td class="unit">8.84 м<sup>2</sup></td>
			</tr>
            <tr>
				<td>Окраска потолка водоэмульсионными красками</td>
				<td class="unit">8.84 м<sup>9</sup></td>
			</tr>
            <tr>
				<th colspan="2">Стены</th>
			</tr>
			<tr>
				<td>Грунтовка стен укрепляющем грунтом "бетоноконтакт"</td>
				<td class="unit">25 м<sup>2</sup></td>
			</tr>
			<tr>
				<td>Выравнивание стен сухой смесью типа "Родбанд"</td>
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
				<td class="unit">3 м<sup>9</sup></td>
			</tr>
            <tr>
				<th colspan="2">Полы</th>
			</tr>
			<tr>
				<td>Выравнивающая полимерцементная стяжка</td>
				<td class="unit">8.84 м<sup>2</sup></td>
			</tr>
			<tr>
				<td>Устройство пола из керамической плитки</td>
				<td class="unit">8.84 м<sup>2</sup></td>
			</tr>
			<tr>
				<td>Затирка швов по керамической плитке</td>
				<td class="unit">8.84 м<sup>2</sup></td>
			</tr>
			<tr>
				<td>Установка пластикового плинтуса</td>
				<td class="unit">12.05 м.п.</td>
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
		$value = 65255;
		?>
		<div class="value"><?php echo number_format($value, 0, ' ', ' '); ?></div>
		<div class="note">Вы можете расширить или сократить объем работ на свое усмотрение. Цена указана без учета материалов.</div>
	</div>
	
    <?php } else if ($options['type'] == 6) { ?>
	<div class="services">
     <div class="task">
			<strong>Описание проекта:</strong> Монтеж теплого пола 2 м<sup>2</sup>, в ванной комнате 4 м<sup>2</sup> на открытой поверхности.
		</div>
		<table>
			<tr>
				<td>Подготовка поверхности</td>
				<td class="unit">4 м<sup>2</sup></td>
			</tr>
			<tr>
				<td>Монтаж нагревательных элементов с подключением</td>
				<td class="unit">4 м<sup>2</sup></td>
			</tr>
			<tr>
				<td>Прокладка силовой линии</td>
				<td class="unit">10 п.м.</td>
			</tr>
			<tr>
				<td>Укладка теплоотражающего материала</td>
				<td class="unit">4 м<sup>2</sup></td>
			</tr>
			<tr>
				<td>Уклаладка плитки</td>
				<td class="unit">4 м<sup>2</sup></td>
			</tr>
		</table>
	</div>
	<div class="price">
		<div class="prefix">Мы сделали это всего за</div>
		<?php
		$value = 12209;
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
				'project': 'floor2'
			});
		});
	});
</script>

<script type="text/javascript">
<?php require 'scripts/price.js'; ?>
</script>
