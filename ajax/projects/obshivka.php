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
					<option value="1"<?php echo $selected['options']['variant'][1]; ?>>Ремонт стен в комнате, ГКЛ, 14 м²</option>
					<option value="2"<?php echo $selected['options']['variant'][2]; ?>>Ремонт офиса, 45 м²</option>
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
				<td>Зачистка стен от старых обоев</td>
				<td class="unit">13,45 м<sup>2</sup></td>
			</tr>
			<tr>
				<td>Монтаж каркаса (металического)</td>
				<td class="unit">13,45 м<sup>2</sup></td>
			</tr>
			<tr>
				<td>Монтаж ГКЛ по готовому каркасу</td>
				<td class="unit">13,45 м<sup>2</sup></td>
			</tr>
			<tr>
				<td>Проклейка серпянкой</td>
				<td class="unit">13,45 м<sup>2</sup></td>
			</tr>
			<tr>
				<td>Грунтовка стен за 1 раз</td>
				<td class="unit">13,45 м<sup>2</sup></td>
			</tr>
			<tr>
				<td>Шпаклевка стен в 2 слоя под окраску</td>
				<td class="unit">13,45 м<sup>2</sup></td>
			</tr>
			<tr>
				<td>Шлифовка стен (1 раз)</td>
				<td class="unit">13,45 м<sup>2</sup></td>
			</tr>
			<tr>
				<td>Окраска стен водоэмульсионной краской</td>
				<td class="unit">13,45 м<sup>2</sup></td>
			</tr>
		</table>
	</div>
	<div class="price">
		<div class="prefix">Мы сделали это всего за</div>
		<?php
		$value = 15968;
		?>
		<div class="value"><?php echo number_format($value, 0, ' ', ' '); ?></div>
		<div class="note">Вы можете расширить или сократить объем работ на свое усмотрение. Цена указана без учета материалов.</div>
	</div>
	<?php } else if ($options['variant'] == 2) { ?>
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
				'project': 'obshivka'
			});
		});
	});
</script>

<script type="text/javascript">
<?php require 'scripts/price.js'; ?>
<?php require 'scripts/group.js'; ?>
</script>
