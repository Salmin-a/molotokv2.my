<?php

function printOptions($name, $options) {
	$output = '';
	$output .= '<select class="' . $name . '">';
	if (!isset($_POST['options'][$name])) {
		$_POST['options'][$name] = 1;
	}
	$selected['options'][$name][$_POST['options'][$name]] = ' selected="selected"';
	foreach ($options as $key => $option) {
		$output .= '<option value="' . $key . '"' . $selected['options'][$name][$key] . '>' . $option . '</option>';
	}
	$output .= '</select>';
	echo $output;
}

?>

<div class="options">
	<table width="100%">
		<col width="150" />
		<col width="" />
		<tr>
			<td>Объект:</td>
			<td>
				<?php
				printOptions(
					'object', 
					array(
						1 => 'Квартира, 50 м²', 
						2 => 'Деревянный дом, 150 м²', 
						3 => 'Кирпичный (каменный) дом, 300 м²'
					)
				);
				?>
			</td>
		</tr>
		<?php if ($_POST['options']['object'] == 1) { ?>
		<tr>
			<td>Вариант:</td>
			<td>
				<?php
				printOptions(
					'variant', 
					array(
						1 => 'Электрическая сеть', 
						2 => 'Электрическая сеть, слаботочные линии'
					)
				);
				?>
			</td>
		</tr>
		<tr>
			<td>Стены:</td>
			<td>
				<?php
				printOptions(
					'walls', 
					array(
						1 => 'Кирпичные стены', 
						2 => 'Бетонные стены'
					)
				);
				?>
			</td>
		</tr>
		<?php } else if ($_POST['options']['object'] == 2) { ?>
		<tr>
			<td>Вариант:</td>
			<td>
				<?php
				printOptions(
					'variant', 
					array(
						1 => '40 электроточек', 
						2 => '48 электроточек, слаботочные линии'
					)
				);
				?>
			</td>
		</tr>
		<tr>
			<td>Проводка:</td>
			<td>
				<?php
				printOptions(
					'wires', 
					array(
						1 => 'Накладная', 
						2 => 'Скрытая'
					)
				);
				?>
			</td>
		</tr>
		<?php } else if ($_POST['options']['object'] == 3) { ?>
		<tr>
			<td>Вариант:</td>
			<td>
				<?php
				printOptions(
					'variant', 
					array(
						1 => '84 электроточки, слаботочные линии, скрытая проводка', 
						2 => '100 электроточек, слаботочные линии, скрытая проводка'
					)
				);
				?>
			</td>
		</tr>
		<?php } ?>
	</table>
</div>

<div class="result">
	<?php if ($_POST['options']['object'] == 1) { ?>
	<?php if ($_POST['options']['variant'] == 1) { ?>
	<div class="services">
		<div class="task">
			<strong>Описание проекта:</strong> варианты предложенных смет для клиента с квартирой 50 м<sup>2</sup>
		</div>
		<table>
			<tr>
				<td>Установка розеток 220В</td>
				<td class="unit">18 шт.</td>
			</tr>
			<tr>
				<td>Монтаж выключателей</td>
				<td class="unit">5 шт.</td>
			</tr>
			<tr>
				<td>Подключение электрической плиты</td>
				<td class="unit">1 шт.</td>
			</tr>
			<tr>
				<td>Монтаж отдельной розетки для стиральной машины</td>
				<td class="unit">1 шт.</td>
			</tr>
			<tr>
				<td>Монтаж щитка (скрытой установки) 12 модулей</td>
				<td class="unit">1 шт.</td>
			</tr>
			<tr>
				<td>Установка автоматов</td>
				<td class="unit">6 шт.</td>
			</tr>
			<tr>
				<td>Установка УЗО</td>
				<td class="unit">2 шт.</td>
			</tr>
			<tr>
				<td>Работы в электрическом щитке на этаже</td>
				<td class="unit">1 шт.</td>
			</tr>
			<tr>
				<td>Штробление стен и потолков под электропроводку</td>
				<td class="unit">1 шт.</td>
			</tr>
			<tr>
				<td>Установка люстры простой на крюк</td>
				<td class="unit">3 шт.</td>
			</tr>
			<tr>
				<td>Монтаж коробки распаячной</td>
				<td class="unit">4 шт.</td>
			</tr>
			<tr>
				<td>Изготовление (шитробление) отверстия под точку электрическую</td>
				<td class="unit">19 шт.</td>
			</tr>
		</table>
	</div>
	<div class="price">
		<div class="prefix">Мы сделали это всего за</div>
		<?php
		if ($_POST['options']['walls'] == 1) {
			$value = 38430;
		}
		else if ($_POST['options']['walls'] == 2) {
			$value = 43530;
		}
		?>
		<div class="value"><?php echo number_format($value, 0, ' ', ' '); ?></div>
		<div class="note">Вы можете расширить или сократить объем работ на свое усмотрение. Цена указана без учета материалов.</div>
	</div>
	<?php } else if ($_POST['options']['variant'] == 2) { ?>
	<div class="services">
		<div class="task">
			<strong>Описание проекта:</strong> варианты предложенных смет для клиента с квартирой 50 м<sup>2</sup>
		</div>
		<table>
			<tr>
				<td>Установка розеток 220В</td>
				<td class="unit">18 шт.</td>
			</tr>
			<tr>
				<td>Монтаж выключателей</td>
				<td class="unit">5 шт.</td>
			</tr>
			<tr>
				<td>Подключение электрической плиты</td>
				<td class="unit">1 шт.</td>
			</tr>
			<tr>
				<td>Монтаж отдельной розетки для стиральной машины</td>
				<td class="unit">1 шт.</td>
			</tr>
			<tr>
				<td>Монтаж отдельной розетки для кондиционера</td>
				<td class="unit">1 шт.</td>
			</tr>
			<tr>
				<td>Разводка TV антенны по квартире, розетка TV &mdash; 3 шт. Краб TV &mdash; 1 шт.</td>
				<td class="unit">3 шт.</td>
			</tr>
			<tr>
				<td>Разводка телефонной линии, розетка TF &mdash; 1 шт.</td>
				<td class="unit">1 шт.</td>
			</tr>
			<tr>
				<td>Разводка internet линии. Розетки Internet</td>
				<td class="unit">1 шт.</td>
			</tr>
			<tr>
				<td>Монтаж щитка (скрытой установки) 12 модулей</td>
				<td class="unit">1 шт.</td>
			</tr>
			<tr>
				<td>Установка автоматов</td>
				<td class="unit">7 шт.</td>
			</tr>
			<tr>
				<td>Установка УЗО</td>
				<td class="unit">2 шт.</td>
			</tr>
			<tr>
				<td>Работы в электрическом щитке на этаже</td>
				<td class="unit">1 шт.</td>
			</tr>
			<tr>
				<td>Штробление стен и потолков под электропроводку</td>
				<td class="unit">1 шт.</td>
			</tr>
			<tr>
				<td>Установка люстры простой на крюк</td>
				<td class="unit">3 шт.</td>
			</tr>
			<tr>
				<td>Монтаж коробки распаячной</td>
				<td class="unit">4 шт.</td>
			</tr>
			<tr>
				<td>Изготовление (шитробление) отверстия под точку электрическую</td>
				<td class="unit">23 шт.</td>
			</tr>
		</table>
	</div>
	<div class="price">
		<div class="prefix">Мы сделали это всего за</div>
		<?php
		if ($_POST['options']['walls'] == 1) {
			$value = 47380;
		}
		else if ($_POST['options']['walls'] == 2) {
			$value = 53680;
		}
		?>
		<div class="value"><?php echo number_format($value, 0, ' ', ' '); ?></div>
		<div class="note">Вы можете расширить или сократить объем работ на свое усмотрение. Цена указана без учета материалов.</div>
	</div>
	<?php } ?>
	<?php } else if ($_POST['options']['object'] == 2) { ?>
	<?php if ($_POST['options']['variant'] == 1) { ?>
	<div class="services">
		<div class="task">
			<strong>Описание проекта:</strong> возможные варианты по проведению электромонтажных работ в частном доме.
		</div>
		<table>
			<tr>
				<td>Установка розеток 220В с заземлением</td>
				<td class="unit">26 шт.</td>
			</tr>
			<tr>
				<td>Монтаж выключателей</td>
				<td class="unit">14 шт.</td>
			</tr>
			<tr>
				<td>Монтаж щитка (скрытой установки)</td>
				<td class="unit">24 модуля</td>
			</tr>
			<tr>
				<td>Установка автоматов</td>
				<td class="unit">12 шт.</td>
			</tr>
			<tr>
				<td>Установка УЗО</td>
				<td class="unit">3 шт.</td>
			</tr>
			<tr>
				<td>Монтаж контура заземления</td>
				<td class="unit">1 шт.</td>
			</tr>
		</table>
	</div>
	<div class="price">
		<div class="prefix">Мы сделали это всего за</div>
		<?php
		if ($_POST['options']['wires'] == 1) {
			$value = 50000;
		}
		else if ($_POST['options']['wires'] == 2) {
			$value = 125000;
		}
		?>
		<div class="value"><?php echo number_format($value, 0, ' ', ' '); ?></div>
		<div class="note">Вы можете расширить или сократить объем работ на свое усмотрение. Цена указана без учета материалов.</div>
	</div>
	<?php } else if ($_POST['options']['variant'] == 2) { ?>
	<div class="services">
		<div class="task">
			<strong>Описание проекта:</strong> возможные варианты по проведению электромонтажных работ в частном доме.
		</div>
		<table>
			<tr>
				<td>Установка розеток 220В с заземлением</td>
				<td class="unit">32 шт.</td>
			</tr>
			<tr>
				<td>Монтаж выключателей</td>
				<td class="unit">16 шт.</td>
			</tr>
			<tr>
				<td>Разводка TV антенны, розетка TV</td>
				<td class="unit">4 шт.</td>
			</tr>
			<tr>
				<td>Монтаж щитка (скрытой установки)</td>
				<td class="unit">36 модулей</td>
			</tr>
			<tr>
				<td>Установка счетчика</td>
				<td class="unit">1 шт.</td>
			</tr>
			<tr>
				<td>Установка автоматов</td>
				<td class="unit">16 шт.</td>
			</tr>
			<tr>
				<td>Установка УЗО</td>
				<td class="unit">4 шт.</td>
			</tr>
			<tr>
				<td>Монтаж контура заземления</td>
				<td class="unit">1 шт.</td>
			</tr>
		</table>
	</div>
	<div class="price">
		<div class="prefix">Мы сделали это всего за</div>
		<?php
		if ($_POST['options']['wires'] == 1) {
			$value = 58000;
		}
		else if ($_POST['options']['wires'] == 2) {
			$value = 153000;
		}
		?>
		<div class="value"><?php echo number_format($value, 0, ' ', ' '); ?></div>
		<div class="note">Вы можете расширить или сократить объем работ на свое усмотрение. Цена указана без учета материалов.</div>
	</div>
	<?php } ?>
	<?php } else if ($_POST['options']['object'] == 3) { ?>
	<?php if ($_POST['options']['variant'] == 1) { ?>
	<div class="services">
		<div class="task">
			<strong>Описание проекта:</strong> возможные варианты по проведению электромонтажных работ в частном доме.
		</div>
		<table>
			<tr>
				<td>Установка розеток 220В с заземлением</td>
				<td class="unit">60 шт.</td>
			</tr>
			<tr>
				<td>Монтаж выключателей</td>
				<td class="unit">24 шт.</td>
			</tr>
			<tr>
				<td>Разводка TV антенны, розетка TV</td>
				<td class="unit">6 шт.</td>
			</tr>
			<tr>
				<td>Разводка телефонной линии, розетка TF</td>
				<td class="unit">2 шт.</td>
			</tr>
			<tr>
				<td>Разводка internet линии. Розетки Internet</td>
				<td class="unit">3 шт.</td>
			</tr>
			<tr>
				<td>Монтаж щитка (скрытой установки)</td>
				<td class="unit">54 модуля</td>
			</tr>
			<tr>
				<td>Установка автоматов</td>
				<td class="unit">22 шт.</td>
			</tr>
			<tr>
				<td>Установка УЗО</td>
				<td class="unit">4 шт.</td>
			</tr>
			<tr>
				<td>Монтаж контура заземления</td>
				<td class="unit">1 шт.</td>
			</tr>
		</table>
	</div>
	<div class="price">
		<div class="prefix">Мы сделали это всего за</div>
		<?php
		$value = 165000;
		?>
		<div class="value"><?php echo number_format($value, 0, ' ', ' '); ?></div>
		<div class="note">Вы можете расширить или сократить объем работ на свое усмотрение. Цена указана без учета материалов.</div>
	</div>
	<?php } else if ($_POST['options']['variant'] == 2) { ?>
	<div class="services">
		<div class="task">
			<strong>Описание проекта:</strong> возможные варианты по проведению электромонтажных работ в частном доме.
		</div>
		<table>
			<tr>
				<td>Установка розеток 220В с заземлением</td>
				<td class="unit">70 шт.</td>
			</tr>
			<tr>
				<td>Монтаж выключателей</td>
				<td class="unit">30 шт.</td>
			</tr>
			<tr>
				<td>Разводка TV антенны, розетка TV</td>
				<td class="unit">8 шт.</td>
			</tr>
			<tr>
				<td>Разводка телефонной линии, розетка TF</td>
				<td class="unit">3 шт.</td>
			</tr>
			<tr>
				<td>Разводка internet линии. Розетки Internet</td>
				<td class="unit">4 шт.</td>
			</tr>
			<tr>
				<td>Монтаж щитка (скрытой установки)</td>
				<td class="unit">54 модуля</td>
			</tr>
			<tr>
				<td>Установка автоматов</td>
				<td class="unit">30 шт.</td>
			</tr>
			<tr>
				<td>Установка УЗО</td>
				<td class="unit">6 шт.</td>
			</tr>
			<tr>
				<td>Монтаж контура заземления</td>
				<td class="unit">1 шт.</td>
			</tr>
		</table>
	</div>
	<div class="price">
		<div class="prefix">Мы сделали это всего за</div>
		<?php
		$value = 188000;
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
				'project': '<?php echo basename(__FILE__, '.php'); ?>'
			});
		});
	});
</script>
