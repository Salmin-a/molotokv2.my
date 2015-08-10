<?php

$post = $_POST['options'];

function printOptions($name, $options, $post) {
	$output = '';
	$output .= '<select class="' . $name . '">';
	if (!isset($post[$name])) {
		$post[$name] = 0;
	}
	$selected['options'][$name][$post[$name]] = ' selected="selected"';
	foreach ($options as $key => $option) {
		$output .= '<option value="' . $key . '"' . $selected['options'][$name][$key] . '>' . $option . '</option>';
	}
	$output .= '</select>';
	return $output;
}

?>

<div class="options">
	<table width="100%">
		<col width="150" />
		<col width="" />
		<tr>
			<td>Площадь:</td>
			<td>
				<?php
				$options = array(
					'1-комнатная квартира, 35 м²',
					'2-комнатная квартира, 45 м²',
					'3-комнатная квартира, 60 м²',
					'4-комнатная квартира, 75 м²',
				);
				echo printOptions('area', $options, $post);
				?>
			</td>
		</tr>
		<tr>
			<td>Стены:</td>
			<td>
				<?php
				$options = array(
					'Кирпичные стены',
					'Бетонные стены',
				);
				echo printOptions('walls', $options, $post);
				?>
			</td>
		</tr>
	</table>
</div>

<div class="result">
	<?php if ($post['area'] == 0) { ?>
	<div class="services">
		<div class="task">
			<strong>Описание проекта:</strong> типовой проект замены старой аллюминевой проводки на медную
		</div>
		<table>
			<tr>
				<td>Установка розеток 220В</td>
				<td class="unit">12 шт.</td>
			</tr>
			<tr>
				<td>Монтаж выключателей</td>
				<td class="unit">4 шт.</td>
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
				<td class="unit">4 шт.</td>
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
				<td>Демонтаж старой проводки</td>
				<td class="unit">1 шт.</td>
			</tr>
			<tr>
				<td>Монтаж новой проводки</td>
				<td class="unit">1 шт.</td>
			</tr>
		</table>
	</div>
	<div class="price">
		<div class="prefix">Мы сделали это всего за</div>
		<?php
		if ($post['walls'] == 0) {
			$value = 21980;
		}
		else if ($post['walls'] == 1) {
			$value = 26980;
		}
		?>
		<div class="value"><?php echo number_format($value, 0, ' ', ' '); ?></div>
		<div class="note">Вы можете расширить или сократить объем работ на свое усмотрение. Цена указана без учета материалов.</div>
	</div>
	<?php } else if ($post['area'] == 1) { ?>
	<div class="services">
		<div class="task">
			<strong>Описание проекта:</strong> типовой проект замены старой аллюминевой проводки на медную
		</div>
		<table>
			<tr>
				<td>Установка розеток 220В</td>
				<td class="unit">15 шт.</td>
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
				<td>Демонтаж старой проводки</td>
				<td class="unit">1 шт.</td>
			</tr>
			<tr>
				<td>Монтаж новой проводки</td>
				<td class="unit">1 шт.</td>
			</tr>
		</table>
	</div>
	<div class="price">
		<div class="prefix">Мы сделали это всего за</div>
		<?php
		if ($post['walls'] == 0) {
			$value = 25680;
		}
		else if ($post['walls'] == 1) {
			$value = 30680;
		}
		?>
		<div class="value"><?php echo number_format($value, 0, ' ', ' '); ?></div>
		<div class="note">Вы можете расширить или сократить объем работ на свое усмотрение. Цена указана без учета материалов.</div>
	</div>
	<?php } else if ($post['area'] == 2) { ?>
	<div class="services">
		<div class="task">
			<strong>Описание проекта:</strong> типовой проект замены старой аллюминевой проводки на медную
		</div>
		<table>
			<tr>
				<td>Установка розеток 220В</td>
				<td class="unit">18 шт.</td>
			</tr>
			<tr>
				<td>Монтаж выключателей</td>
				<td class="unit">6 шт.</td>
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
				<td class="unit">8 шт.</td>
			</tr>
			<tr>
				<td>Установка УЗО</td>
				<td class="unit">3 шт.</td>
			</tr>
			<tr>
				<td>Работы в электрическом щитке на этаже</td>
				<td class="unit">1 шт.</td>
			</tr>
			<tr>
				<td>Демонтаж старой проводки</td>
				<td class="unit">1 шт.</td>
			</tr>
			<tr>
				<td>Монтаж новой проводки</td>
				<td class="unit">1 шт.</td>
			</tr>
		</table>
	</div>
	<div class="price">
		<div class="prefix">Мы сделали это всего за</div>
		<?php
		if ($post['walls'] == 0) {
			$value = 35920;
		}
		else if ($post['walls'] == 1) {
			$value = 37160;
		}
		?>
		<div class="value"><?php echo number_format($value, 0, ' ', ' '); ?></div>
		<div class="note">Вы можете расширить или сократить объем работ на свое усмотрение. Цена указана без учета материалов.</div>
	</div>
	<?php } else if ($post['area'] == 3) { ?>
	<div class="services">
		<div class="task">
			<strong>Описание проекта:</strong> типовой проект замены старой аллюминевой проводки на медную
		</div>
		<table>
			<tr>
				<td>Установка розеток 220В</td>
				<td class="unit">24 шт.</td>
			</tr>
			<tr>
				<td>Монтаж выключателей</td>
				<td class="unit">8 шт.</td>
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
				<td class="unit">10 шт.</td>
			</tr>
			<tr>
				<td>Установка УЗО</td>
				<td class="unit">4 шт.</td>
			</tr>
			<tr>
				<td>Работы в электрическом щитке на этаже</td>
				<td class="unit">1 шт.</td>
			</tr>
			<tr>
				<td>Демонтаж старой проводки</td>
				<td class="unit">1 шт.</td>
			</tr>
			<tr>
				<td>Монтаж новой проводки</td>
				<td class="unit">1 шт.</td>
			</tr>
		</table>
	</div>
	<div class="price">
		<div class="prefix">Мы сделали это всего за</div>
		<?php
		if ($post['walls'] == 0) {
			$value = 37160;
		}
		else if ($post['walls'] == 1) {
			$value = 45660;
		}
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
				'project': 'electrization2'
			});
		});
	});
</script>
