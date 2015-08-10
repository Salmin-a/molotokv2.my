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
				else {
					$selected['options']['variant'][$options['variant']] = ' selected="selected"';
				}
				?>
				<select class="variant">
					<option value="1"<?php echo $selected['options']['variant'][1]; ?>>В комнате, окраска, 14 м²</option>
					<option value="2"<?php echo $selected['options']['variant'][2]; ?>>В комнате, обои, 12 м²</option>
					<option value="3"<?php echo $selected['options']['variant'][3]; ?>>В комнате, навесной реечный, 15 м²</option>
					<option value="4"<?php echo $selected['options']['variant'][4]; ?>>В комнате, ГКЛ, 15 м²</option>
					<option value="5"<?php echo $selected['options']['variant'][5]; ?>>В офисе, типа &laquo;Армстронг&raquo;, 40 м²</option>
					<option value="6"<?php echo $selected['options']['variant'][6]; ?>>В комнате, ГКЛ, двухуровневый, 18 м²</option>
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
				<td>Подготовка поверхности (зачистка от старой краски, обоев)</td>
				<td class="unit">13,98 м<sup>2</sup></td>
			</tr>
			<tr>
				<td>Демонтаж люстры</td>
				<td class="unit">1 шт.</td>
			</tr>
			<tr>
				<td>Шпаклевка потолка в 2 слоя</td>
				<td class="unit">13,98 м<sup>2</sup></td>
			</tr>
			<tr>
				<td>Шлифовка потолка (1 раз)</td>
				<td class="unit">13,98 м<sup>2</sup></td>
			</tr>
			<tr>
				<td>Грунтовка потолков за 1 раз</td>
				<td class="unit">13,98 м<sup>2</sup></td>
			</tr>
			<tr>
				<td>Окраска потолка водоэмульсионной краской за 2 раза</td>
				<td class="unit">13,98 м<sup>2</sup></td>
			</tr>
			<tr>
				<td>Установка люстры</td>
				<td class="unit">1 шт.</td>
			</tr>
		</table>
	</div>
	<div class="price">
		<div class="prefix">Мы сделали это всего за</div>
		<?php
		$value = 9098;
		?>
		<div class="value"><?php echo number_format($value, 0, ' ', ' '); ?></div>
		<div class="note">Вы можете расширить или сократить объем работ на свое усмотрение. Цена указана без учета материалов.</div>
	</div>
	<?php } else if ($options['variant'] == 2) { ?>
	<div class="services">
		<table>
			<tr>
				<td>Подготовка поверхности (зачистка от старой краски, обоев)</td>
				<td class="unit">11,25 м<sup>2</sup></td>
			</tr>
			<tr>
				<td>Демонтаж люстры</td>
				<td class="unit">1 шт.</td>
			</tr>
			<tr>
				<td>Шпаклевка потолка в 2 слоя  под окраску</td>
				<td class="unit">11,25 м<sup>2</sup></td>
			</tr>
			<tr>
				<td>Шлифовка потолка (1раз)</td>
				<td class="unit">11,25 м<sup>2</sup></td>
			</tr>
			<tr>
				<td>Грунтовка потолков за 1 раз</td>
				<td class="unit">11,25 м<sup>2</sup></td>
			</tr>
			<tr>
				<td>Оклейка бумажными обоями без подгонки рисунка</td>
				<td class="unit">11,25 м<sup>2</sup></td>
			</tr>
			<tr>
				<td>Установка люстры</td>
				<td class="unit">1 шт.</td>
			</tr>
		</table>
	</div>
	<div class="price">
		<div class="prefix">Мы сделали это всего за</div>
		<?php
		$value = 7065;
		?>
		<div class="value"><?php echo number_format($value, 0, ' ', ' '); ?></div>
		<div class="note">Вы можете расширить или сократить объем работ на свое усмотрение. Цена указана без учета материалов.</div>
	</div>
	<?php } else if ($options['variant'] == 3) { ?>
	<div class="services">
		<table>
			<tr>
				<td>Демонтаж люстры</td>
				<td class="unit">1 шт.</td>
			</tr>
			<tr>
				<td>Монтаж каркаса (металического)</td>
				<td class="unit">14,87 м<sup>2</sup></td>
			</tr>
			<tr>
				<td>Монтаж подвисного потолка (реечного)</td>
				<td class="unit">14,87 м<sup>2</sup></td>
			</tr>
			<tr>
				<td>Монтаж светильников</td>
				<td class="unit">6 шт.</td>
			</tr>
			<tr>
				<td>Прокладка проводки в гофре открытая</td>
				<td class="unit">10 п.м.</td>
			</tr>
			<tr>
				<td>Вырез отверстий под светильник</td>
				<td class="unit">6 шт.</td>
			</tr>
		</table>
	</div>
	<div class="price">
		<div class="prefix">Мы сделали это всего за</div>
		<?php
		$value = 17714;
		?>
		<div class="value"><?php echo number_format($value, 0, ' ', ' '); ?></div>
		<div class="note">Вы можете расширить или сократить объем работ на свое усмотрение. Цена указана без учета материалов.</div>
	</div>
	<?php } else if ($options['variant'] == 4) { ?>
	<div class="services">
		<table>
			<tr>
				<td>Демонтаж люстры</td>
				<td class="unit">1 шт.</td>
			</tr>
			<tr>
				<td>Монтаж каркаса (металического)</td>
				<td class="unit">14,87 м<sup>2</sup></td>
			</tr>
			<tr>
				<td>Монтаж ГКЛ по готовому каркасу</td>
				<td class="unit">14,87 м<sup>2</sup></td>
			</tr>
			<tr>
				<td>Проклейка серпянкой</td>
				<td class="unit">17,86 м.п.</td>
			</tr>
			<tr>
				<td>Монтаж светильников</td>
				<td class="unit">6 шт.</td>
			</tr>
			<tr>
				<td>Прокладка проводки в гофре открытая</td>
				<td class="unit">10 п.м.</td>
			</tr>
			<tr>
				<td>Вырез отверстий под светильник</td>
				<td class="unit">6 шт.</td>
			</tr>
			<tr>
				<td>Шпаклевка потолка в 2 слоя</td>
				<td class="unit">14,87 м<sup>2</sup></td>
			</tr>
			<tr>
				<td>Шлифовка потолка (1 раз)</td>
				<td class="unit">14,87 м<sup>2</sup></td>
			</tr>
			<tr>
				<td>Грунтовка потолков за 1 раз</td>
				<td class="unit">14,87 м<sup>2</sup></td>
			</tr>
			<tr>
				<td>Окраска потолка водоэмульсионной краской за 2 раза</td>
				<td class="unit">14,87 м<sup>2</sup></td>
			</tr>
		</table>
	</div>
	<div class="price">
		<div class="prefix">Мы сделали это всего за</div>
		<?php
		$value = 14950;
		?>
		<div class="value"><?php echo number_format($value, 0, ' ', ' '); ?></div>
		<div class="note">Вы можете расширить или сократить объем работ на свое усмотрение. Цена указана без учета материалов.</div>
	</div>
	<?php } else if ($options['variant'] == 5) { ?>
	<div class="services">
		<table>
			<tr>
				<td>Демонтаж светильников</td>
				<td class="unit">6 шт.</td>
			</tr>
			<tr>
				<td>Демонтаж старого потолка</td>
				<td class="unit">39,98 м<sup>2</sup></td>
			</tr>
			<tr>
				<td>Монтаж подвесного потолка типа &laquo;Армстронг&raquo;</td>
				<td class="unit">39,98 м<sup>2</sup></td>
			</tr>
			<tr>
				<td>Монтаж светильников дневного света в потолок типа &laquo;Армстронг&raquo;</td>
				<td class="unit">6 шт.</td>
			</tr>
			<tr>
				<td>Прокладка проводки в гофре открытая</td>
				<td class="unit">18 п.м.</td>
			</tr>
			<tr>
				<td>Вынос мусора</td>
				<td class="unit">8 мешоков</td>
			</tr>
		</table>
	</div>
	<div class="price">
		<div class="prefix">Мы сделали это всего за</div>
		<?php
		$value = 32807;
		?>
		<div class="value"><?php echo number_format($value, 0, ' ', ' '); ?></div>
		<div class="note">Вы можете расширить или сократить объем работ на свое усмотрение. Цена указана без учета материалов.</div>
	</div>
	<?php } else if ($options['variant'] == 6) { ?>
	<div class="services">
		<table>
			<tr>
				<td>Демонтаж люстры</td>
				<td class="unit">1 шт.</td>
			</tr>
			<tr>
				<td>Изготовление многоуровневого пололка из ГКЛ</td>
				<td class="unit">14,26 м<sup>2</sup></td>
			</tr>
			<tr>
				<td>Перепад высот на потолке, откосы, ниши из гипсокартона</td>
				<td class="unit">6,87 м.п.</td>
			</tr>
			<tr>
				<td>Криволинейный элемент дизайна потолка</td>
				<td class="unit">9,45 м.п.</td>
			</tr>
			<tr>
				<td>Проклейка серпянкой</td>
				<td class="unit">24,65 м.п.</td>
			</tr>
			<tr>
				<td>Монтаж светильников</td>
				<td class="unit">6 шт.</td>
			</tr>
			<tr>
				<td>Прокладка проводки в гофре открытая</td>
				<td class="unit">10 п.м.</td>
			</tr>
			<tr>
				<td>Вырез отверстий под светильник</td>
				<td class="unit">6 шт.</td>
			</tr>
			<tr>
				<td>Шлифовка потолка (1 раз)</td>
				<td class="unit">17,98 м<sup>2</sup></td>
			</tr>
			<tr>
				<td>Грунтовка потолков за 1 раз</td>
				<td class="unit">17,98 м<sup>2</sup></td>
			</tr>
			<tr>
				<td>Окраска потолка водоэмульсионной краской за 2 раза</td>
				<td class="unit">17,98 м<sup>2</sup></td>
			</tr>
		</table>
	</div>
	<div class="price">
		<div class="prefix">Мы сделали это всего за</div>
		<?php
		$value = 36351;
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
				'project': 'ceiling'
			});
		});
	});
</script>

<script type="text/javascript">
<?php require 'scripts/price.js'; ?>
</script>
