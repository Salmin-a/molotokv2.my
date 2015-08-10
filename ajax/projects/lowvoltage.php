<?php

$options = $_POST['options'];

?>

<div class="options">
	<table width="100%">
		<col width="150" />
		<col width="" />
		<tr>
			<td>Объект:</td>
			<td>
				<?php
				if (!isset($options['object'])) {
					$options['object'] = 1;
				}
				else {
					$selected['options']['object'][$options['object']] = ' selected="selected"';
				}
				?>
				<select class="object">
					<option value="1"<?php echo $selected['options']['object'][1]; ?>>3-комнатная квартира, новостройка, 95 м²</option>
					<option value="2"<?php echo $selected['options']['object'][2]; ?>>Офис, 10 рабочих мест, 39,56 м²</option>
					<option value="3"<?php echo $selected['options']['object'][3]; ?>>Склад, 895 м²</option>
					<option value="4"<?php echo $selected['options']['object'][4]; ?>>Коттедж, 120 м²</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>Способ:</td>
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
					<option value="1"<?php echo $selected['options']['variant'][1]; ?>>Открытая проводка</option>
					<option value="2"<?php echo $selected['options']['variant'][2]; ?>>Скрытая проводка</option>
				</select>
			</td>
		</tr>
	</table>
</div>

<div class="result">
	<?php if ($options['object'] == 1) { ?>
	<?php if ($options['variant'] == 1) { ?>
	<div class="services">
		<table>
			<tr>
				<td>Монтеж электроточки (разводка TV антенны по квартире, розетка TV)</td>
				<td class="unit">4 шт.</td>
			</tr>
			<tr>
				<td>Монтеж электроточки (разводка телефонной линии, розетка TF)</td>
				<td class="unit">3 шт.</td>
			</tr>
			<tr>
				<td>Монтеж электроточки (разводка internet линии, розетки Internet)</td>
				<td class="unit">4 шт.</td>
			</tr>
			<tr>
				<td>Установка видео-домофона</td>
				<td class="unit">1 шт.</td>
			</tr>
			<tr>
				<td>Штробление кабель-каналов</td>
				<td class="unit">46 м.п.</td>
			</tr>
		</table>
	</div>
	<div class="price">
		<div class="prefix">Мы сделали это всего за</div>
		<?php
		$value = 55684;
		?>
		<div class="value"><?php echo number_format($value, 0, ' ', ' '); ?></div>
		<div class="note">Вы можете расширить или сократить объем работ на свое усмотрение. Цена указана без учета материалов.</div>
	</div>
	<?php } else if ($options['variant'] == 2) { ?>
	<div class="services">
		<table>
			<tr>
				<td>Разводка TV антенны по квартире, розетка TV</td>
				<td class="unit">4 шт.</td>
			</tr>
			<tr>
				<td>Разводка телефонной линии, розетка TF</td>
				<td class="unit">3 шт.</td>
			</tr>
			<tr>
				<td>Разводка internet линии, розетки Internet</td>
				<td class="unit">4 шт.</td>
			</tr>
			<tr>
				<td>Установка видео-домофона</td>
				<td class="unit">1 шт.</td>
			</tr>
			<tr>
				<td>Прокладка кабель-каналов</td>
				<td class="unit">46 м.п.</td>
			</tr>
		</table>
	</div>
	<div class="price">
		<div class="prefix">Мы сделали это всего за</div>
		<?php
		$value = 33245;
		?>
		<div class="value"><?php echo number_format($value, 0, ' ', ' '); ?></div>
		<div class="note">Вы можете расширить или сократить объем работ на свое усмотрение. Цена указана без учета материалов.</div>
	</div>
	<?php } ?>
	<?php } else if ($options['object'] == 2) { ?>
	<?php if ($options['variant'] == 1) { ?>
	<div class="services">
		<table>
			<tr>
				<td>Разводка TV антенны, розетка TV</td>
				<td class="unit">4 шт.</td>
			</tr>
			<tr>
				<td>Разводка телефонной линии, розетка TF</td>
				<td class="unit">3 шт.</td>
			</tr>
			<tr>
				<td>Разводка internet линии, розетки Internet</td>
				<td class="unit">10 шт.</td>
			</tr>
			<tr>
				<td>Установка и подключение камер видеонаблюдения</td>
				<td class="unit">2 шт.</td>
			</tr>
			<tr>
				<td>Разводка пожарно-охранной сигнализации</td>
				<td class="unit">8 шт.</td>
			</tr>
			<tr>
				<td>Установка видео-домофона</td>
				<td class="unit">1 шт.</td>
			</tr>
			<tr>
				<td>Прокладка кабель-каналов</td>
				<td class="unit">45 м.п.</td>
			</tr>
		</table>
	</div>
	<div class="price">
		<div class="prefix">Мы сделали это всего за</div>
		<?php
		$value = 57780;
		?>
		<div class="value"><?php echo number_format($value, 0, ' ', ' '); ?></div>
		<div class="note">Вы можете расширить или сократить объем работ на свое усмотрение. Цена указана без учета материалов.</div>
	</div>
	<?php } else if ($options['variant'] == 2) { ?>
	<div class="services">
		<table>
			<tr>
				<td>Разводка TV антенны, розетка TV</td>
				<td class="unit">4 шт.</td>
			</tr>
			<tr>
				<td>Разводка телефонной линии, розетка TF</td>
				<td class="unit">3 шт.</td>
			</tr>
			<tr>
				<td>Разводка internet линии, розетки Internet</td>
				<td class="unit">10 шт.</td>
			</tr>
			<tr>
				<td>Установка и подключение камер видеонаблюдения</td>
				<td class="unit">2 шт.</td>
			</tr>
			<tr>
				<td>Разводка пожарно-охранной сигнализации</td>
				<td class="unit">8 шт.</td>
			</tr>
			<tr>
				<td>Установка видео-домофона</td>
				<td class="unit">1 шт.</td>
			</tr>
			<tr>
				<td>Штробление кабель-каналов</td>
				<td class="unit">45 м.п.</td>
			</tr>
		</table>
	</div>
	<div class="price">
		<div class="prefix">Мы сделали это всего за</div>
		<?php
		$value = 71560;
		?>
		<div class="value"><?php echo number_format($value, 0, ' ', ' '); ?></div>
		<div class="note">Вы можете расширить или сократить объем работ на свое усмотрение. Цена указана без учета материалов.</div>
	</div>
	<?php } ?>
	<?php } else if ($options['object'] == 3) { ?>
	<?php if ($options['variant'] == 1) { ?>
	<div class="services">
		<table>
			<tr>
				<td>Разводка телефонной линии, розетка TF</td>
				<td class="unit">3 шт.</td>
			</tr>
			<tr>
				<td>Разводка internet линии, розетки Internet</td>
				<td class="unit">10 шт.</td>
			</tr>
			<tr>
				<td>Установка и подключение камер видеонаблюдения</td>
				<td class="unit">15 шт.</td>
			</tr>
			<tr>
				<td>Разводка пожарно-охранной сигнализации</td>
				<td class="unit">20 шт.</td>
			</tr>
			<tr>
				<td>Прокладка кабель-каналов</td>
				<td class="unit">286 м.п.</td>
			</tr>
		</table>
	</div>
	<div class="price">
		<div class="prefix">Мы сделали это всего за</div>
		<?php
		$value = 214760;
		?>
		<div class="value"><?php echo number_format($value, 0, ' ', ' '); ?></div>
		<div class="note">Вы можете расширить или сократить объем работ на свое усмотрение. Цена указана без учета материалов.</div>
	</div>
	<?php } else if ($options['variant'] == 2) { ?>
	<div class="services">
		<table>
			<tr>
				<td>Разводка телефонной линии, розетка TF</td>
				<td class="unit">3 шт.</td>
			</tr>
			<tr>
				<td>Разводка internet линии, розетки Internet</td>
				<td class="unit">10 шт.</td>
			</tr>
			<tr>
				<td>Установка и подключение камер видеонаблюдения</td>
				<td class="unit">15 шт.</td>
			</tr>
			<tr>
				<td>Разводка пожарно-охранной сигнализации</td>
				<td class="unit">20 шт.</td>
			</tr>
			<tr>
				<td>Штробление кабель-каналов</td>
				<td class="unit">286 м.п.</td>
			</tr>
		</table>
	</div>
	<div class="price">
		<div class="prefix">Мы сделали это всего за</div>
		<?php
		$value = 387900;
		?>
		<div class="value"><?php echo number_format($value, 0, ' ', ' '); ?></div>
		<div class="note">Вы можете расширить или сократить объем работ на свое усмотрение. Цена указана без учета материалов.</div>
	</div>
	<?php } ?>
	<?php } else if ($options['object'] == 4) { ?>
	<?php if ($options['variant'] == 1) { ?>
	<div class="services">
		<table>
			<tr>
				<td>Разводка TV антенны, розетка TV</td>
				<td class="unit">5 шт.</td>
			</tr>
			<tr>
				<td>Разводка телефонной линии, розетка TF</td>
				<td class="unit">4 шт.</td>
			</tr>
			<tr>
				<td>Разводка internet линии, розетки Internet</td>
				<td class="unit">5 шт.</td>
			</tr>
			<tr>
				<td>Установка и подключение камер видеонаблюдения</td>
				<td class="unit">4 шт.</td>
			</tr>
			<tr>
				<td>Разводка пожарно-охранной сигнализации</td>
				<td class="unit">10 шт.</td>
			</tr>
			<tr>
				<td>Установка видео-домофона</td>
				<td class="unit">1 шт.</td>
			</tr>
			<tr>
				<td>Прокладка кабель-каналов</td>
				<td class="unit">135 м.п.</td>
			</tr>
		</table>
	</div>
	<div class="price">
		<div class="prefix">Мы сделали это всего за</div>
		<?php
		$value = 88670;
		?>
		<div class="value"><?php echo number_format($value, 0, ' ', ' '); ?></div>
		<div class="note">Вы можете расширить или сократить объем работ на свое усмотрение. Цена указана без учета материалов.</div>
	</div>
	<?php } else if ($options['variant'] == 2) { ?>
	<div class="services">
		<table>
			<tr>
				<td>Разводка TV антенны, розетка TV</td>
				<td class="unit">5 шт.</td>
			</tr>
			<tr>
				<td>Разводка телефонной линии, розетка TF</td>
				<td class="unit">4 шт.</td>
			</tr>
			<tr>
				<td>Разводка internet линии, розетки Internet</td>
				<td class="unit">5 шт.</td>
			</tr>
			<tr>
				<td>Установка и подключение камер видеонаблюдения</td>
				<td class="unit">4 шт.</td>
			</tr>
			<tr>
				<td>Разводка пожарно-охранной сигнализации</td>
				<td class="unit">10 шт.</td>
			</tr>
			<tr>
				<td>Установка видео-домофона</td>
				<td class="unit">1 шт.</td>
			</tr>
			<tr>
				<td>Штробление кабель-каналов</td>
				<td class="unit">135 м.п.</td>
			</tr>
		</table>
	</div>
	<div class="price">
		<div class="prefix">Мы сделали это всего за</div>
		<?php
		$value = 134780;
		?>
		<div class="value"><?php echo number_format($value, 0, ' ', ' '); ?></div>
		<div class="note">Вы можете расширить или сократить объем работ на свое усмотрение. Цена указана без учета материалов.</div>
	</div>
	<?php } ?>
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
				'project': 'lowvoltage'
			});
		});
	});
</script>

<script type="text/javascript">
<?php require 'scripts/price.js'; ?>
</script>
