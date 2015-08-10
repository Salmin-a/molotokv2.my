<?php

$options = $_POST['options'];

?>

<div class="options">
	<table width="100%">
		<col width="150" />
		<col width="" />
		<tr>
			<td>Тип:</td>
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
					<option value="1"<?php echo $selected['options']['type'][1]; ?>>Монтаж полотенцесушителя</option>
					<option value="2"<?php echo $selected['options']['type'][2]; ?>>Разводка труб</option>
					<option value="3"<?php echo $selected['options']['type'][3]; ?>>Установка счетчиков учета воды</option>
					<option value="4"<?php echo $selected['options']['type'][4]; ?>>Замена батарей отопления</option>
				</select>
			</td>
		</tr>
		<?php if ($options['type'] == 1) { ?>
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
					<option value="1"<?php echo $selected['options']['variant'][1]; ?>>Накидная гайка</option>
					<option value="2"<?php echo $selected['options']['variant'][2]; ?>>Внешняя резьба</option>
				</select>
			</td>
		</tr>
		<?php } else if ($options['type'] == 2) { ?>
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
					<option value="1"<?php echo $selected['options']['variant'][1]; ?>>Открытым способом</option>
					<option value="2"<?php echo $selected['options']['variant'][2]; ?>>Закрытым способом</option>
				</select>
			</td>
		</tr>
		<?php } ?>
	</table>
</div>

<div class="result">
	<?php if ($options['type'] == 1) { ?>
	<?php if ($options['variant'] == 1) { ?>
	<div class="services">
		<table>
			<tr>
				<td>Работы по установке</td>
				<td class="unit"></td>
			</tr>
			<tr>
				<td>Кран шаровый</td>
				<td class="unit">2 шт.</td>
			</tr>
			<tr>
				<td>Трубы</td>
				<td class="unit"></td>
			</tr>
			<tr>
				<td>Фитинги</td>
				<td class="unit"></td>
			</tr>
			<tr>
				<td>Расходные материалы</td>
				<td class="unit"></td>
			</tr>
		</table>
	</div>
	<div class="price">
		<div class="prefix">Мы сделали это всего за</div>
		<?php
		$value = 5500;
		?>
		<div class="value"><?php echo number_format($value, 0, ' ', ' '); ?></div>
		<div class="note">Вы можете расширить или сократить объем работ на свое усмотрение. Цена указана без учета материалов.</div>
	</div>
	<?php } else if ($options['variant'] == 2) { ?>
	<div class="services">
		<table>
			<tr>
				<td>Работы по установке</td>
				<td class="unit"></td>
			</tr>
			<tr>
				<td>Кран шаровый</td>
				<td class="unit">2 шт.</td>
			</tr>
			<tr>
				<td>Муфта* 1-¾</td>
				<td class="unit">2 шт.</td>
			</tr>
			<tr>
				<td>Трубы</td>
				<td class="unit"></td>
			</tr>
			<tr>
				<td>Фитинги</td>
				<td class="unit"></td>
			</tr>
			<tr>
				<td>Расходные материалы</td>
				<td class="unit"></td>
			</tr>
		</table>
	</div>
	<div class="price">
		<div class="prefix">Мы сделали это всего за</div>
		<?php
		$value = 6000;
		?>
		<div class="value"><?php echo number_format($value, 0, ' ', ' '); ?></div>
		<div class="note">Вы можете расширить или сократить объем работ на свое усмотрение. Цена указана без учета материалов.</div>
	</div>
	<?php } ?>
	<?php } else if ($options['type'] == 2) { ?>
	<?php if ($options['variant'] == 1) { ?>
	<div class="services">
		<table>
			<tr>
				<td>Разводка труб водоснабжения из полипропилена (до 3-х метров): двойная точка (ГВ, ХВ)</td>
				<td class="unit">2 точки</td>
			</tr>
			<tr>
				<td>Разводка труб канализации (диаметром до 50 мм)</td>
				<td class="unit">6 м.п.</td>
			</tr>
			<tr>
				<td>Установка прибора учета (счетчика) воды</td>
				<td class="unit">2 шт.</td>
			</tr>
			<tr>
				<td>Установка крана шарового (диаметром до ¾)</td>
				<td class="unit">3 шт.</td>
			</tr>
			<tr>
				<td>Установка коллектора (гребенки)</td>
				<td class="unit">1 шт.</td>
			</tr>
		</table>
	</div>
	<div class="price">
		<div class="prefix">Мы сделали это всего за</div>
		<?php
		$value = 14520;
		?>
		<div class="value"><?php echo number_format($value, 0, ' ', ' '); ?></div>
		<div class="note">Вы можете расширить или сократить объем работ на свое усмотрение. Цена указана без учета материалов.</div>
	</div>
	<?php } else if ($options['variant'] == 2) { ?>
	<div class="services">
		<table>
			<tr>
				<td>Разводка труб водоснабжения из полипропилена (до 3-х метров): двойная точка (ГВ, ХВ)</td>
				<td class="unit">2 точки</td>
			</tr>
			<tr>
				<td>Разводка труб канализации (диаметром до 50 мм)</td>
				<td class="unit">6 м.п.</td>
			</tr>
			<tr>
				<td>Установка прибора учета (счетчика) воды</td>
				<td class="unit">2 шт.</td>
			</tr>
			<tr>
				<td>Установка крана шарового (диаметром до ¾)</td>
				<td class="unit">3 шт.</td>
			</tr>
			<tr>
				<td>Установка коллектора (гребенки)</td>
				<td class="unit">1 шт.</td>
			</tr>
			<tr>
				<td>Штробление стен под трубы водоснабжения</td>
				<td class="unit">6 м.п.</td>
			</tr>
			<tr>
				<td>Штробление стен под трубы сантехнические (канализационные)</td>
				<td class="unit">6 м.п.</td>
			</tr>
		</table>
	</div>
	<div class="price">
		<div class="prefix">Мы сделали это всего за</div>
		<?php
		$value = 27480;
		?>
		<div class="value"><?php echo number_format($value, 0, ' ', ' '); ?></div>
		<div class="note">Вы можете расширить или сократить объем работ на свое усмотрение. Цена указана без учета материалов.</div>
	</div>
	<?php } ?>
	<?php } else if ($options['type'] == 3) { ?>
	<div class="services">
		<table>
			<tr>
				<td>Установка прибора учета (счетчика) воды</td>
				<td class="unit">2 шт.</td>
			</tr>
			<tr>
				<td>Установка крана шарового (диаметром до ¾)</td>
				<td class="unit">2 шт.</td>
			</tr>
		</table>
	</div>
	<div class="price">
		<div class="prefix">Мы сделали это всего за</div>
		<?php
		$value = 3820;
		?>
		<div class="value"><?php echo number_format($value, 0, ' ', ' '); ?></div>
		<div class="note">Вы можете расширить или сократить объем работ на свое усмотрение. Цена указана без учета материалов.</div>
	</div>
	<?php } else if ($options['type'] == 4) { ?>
	<div class="services">
		<table>
			<tr>
				<td>Демонтаж радиатора отопления (без выноса)</td>
				<td class="unit">3 шт.</td>
			</tr>
			<tr>
				<td>Установка радиатора отопления до 7 секций (батареи) с 2-мя шаровыми кранами</td>
				<td class="unit">3 шт.</td>
			</tr>
		</table>
	</div>
	<div class="price">
		<div class="prefix">Мы сделали это всего за</div>
		<?php
		$value = 9330;
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
				'project': 'sanitary'
			});
		});
	});
</script>

<script type="text/javascript">
<?php require 'scripts/price.js'; ?>
</script>
