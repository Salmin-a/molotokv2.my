<?php

$options = $_POST['options'];

?>

<div class="categories">
	<table>
		<col width="25%" />
		<col width="25%" />
		<col width="25%" />
		<col width="25%" />
		<tr>
			<?php
			if (!isset($options['category'])) {
				$options['category'] = 1;
			}
			if ($options['category'] == 1) {
				$class['category'][1] = ' active';
			}
			else if ($options['category'] == 2) {
				$class['category'][2] = ' active';
			}
			else if ($options['category'] == 3) {
				$class['category'][3] = ' active';
			}
			else if ($options['category'] == 4) {
				$class['category'][4] = ' active';
			}
			?>
			<td category="1" class="flat<?php echo $class['category'][1]; ?>"><span>Квартира<br />в доме</span></td>
			<td category="2" class="office<?php echo $class['category'][2]; ?>"><span>Офис<br />компании</span></td>
			<td category="3" class="wood<?php echo $class['category'][3]; ?>"><span>Деревянный<br />дом</span></td>
			<td category="4" class="brick<?php echo $class['category'][4]; ?>"><span>Кирпичный<br />дом</span></td>
		</tr>
	</table>
</div>

<?php if ($options['category'] == 1) { ?>
<div class="options">
	<table width="100%">
		<col width="150" />
		<col width="" />
		<tr>
			<td>Объем работ:</td>
			<td>
				<?php
				if (!isset($options['effort'])) {
					$options['effort'] = 1;
				}
				if ($options['effort'] == 1) {
					$selected['options']['effort'][1] = ' selected="selected"';
				}
				else if ($options['effort'] == 2) {
					$selected['options']['effort'][2] = ' selected="selected"';
				}
				else if ($options['effort'] == 3) {
					$selected['options']['effort'][3] = ' selected="selected"';
				}
				?>
				<select class="effort">
					<option value="1"<?php echo $selected['options']['effort'][1]; ?>>Только розетки и проводка</option>
					<option value="2"<?php echo $selected['options']['effort'][2]; ?>>&laquo;Под ключ&raquo;: вариант 1</option>
					<option value="3"<?php echo $selected['options']['effort'][3]; ?>>&laquo;Под ключ&raquo;: вариант 2</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>Cтены:</td>
			<td>
				<?php
				if (!isset($options['walls'])) {
					$options['walls'] = 1;
				}
				if ($options['walls'] == 1) {
					$selected['options']['walls'][1] = ' selected="selected"';
				}
				else if ($options['walls'] == 2) {
					$selected['options']['walls'][2] = ' selected="selected"';
				}
				?>
				<select class="walls">
					<option value="1"<?php echo $selected['options']['walls'][1]; ?>>Кирпичные стены</option>
					<option value="2"<?php echo $selected['options']['walls'][2]; ?>>Бетонные стены</option>
				</select>
			</td>
		</tr>
		<?php if ($options['effort'] == 1) { ?>
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
				else if ($options['area'] == 3) {
					$selected['options']['area'][3] = ' selected="selected"';
				}
				else if ($options['area'] == 4) {
					$selected['options']['area'][4] = ' selected="selected"';
				}
				?>
				<select class="area">
					<option value="1"<?php echo $selected['options']['area'][1]; ?>>1-комнатная, 35 м²</option>
					<option value="2"<?php echo $selected['options']['area'][2]; ?>>2-комнатная, 45 м²</option>
					<option value="3"<?php echo $selected['options']['area'][3]; ?>>3-комнатная, 60 м²</option>
					<option value="4"<?php echo $selected['options']['area'][4]; ?>>4-комнатная, 75 м²</option>
				</select>
			</td>
		</tr>
		<?php } else if ($options['effort'] == 2 || $options['effort'] == 3) { ?>
		<tr>
			<td>Проводка:</td>
			<td>
				<?php
				if (!isset($options['wires'])) {
					$options['wires'] = 1;
				}
				if ($options['wires'] == 1) {
					$selected['options']['wires'][1] = ' selected="selected"';
				}
				else if ($options['wires'] == 2) {
					$selected['options']['wires'][2] = ' selected="selected"';
				}
				?>
				<select class="wires">
					<option value="1"<?php echo $selected['options']['wires'][1]; ?>>Скрытая проводка (в штробе, под стяжкой, за подвесным потолком) </option>
					<option value="2"<?php echo $selected['options']['wires'][2]; ?>>Накладная проводка (в кабель-канале)</option>
				</select>
			</td>
		</tr>
		<?php } ?>
	</table>
</div>
<div class="result">
	<?php if ($options['effort'] == 1 && $options['area'] == 1) { ?>
	<div class="services">
		В проект входит:
		<ul>
			<li>Установка розеток 220В&nbsp;&mdash; <em>12 шт.</em></li>
			<li>Монтаж выключателей&nbsp;&mdash; <em>4 шт.</em></li>
			<li>Подключение электрической плиты&nbsp;&mdash; <em>1 шт.</em></li>
			<li>Монтаж отдельной розетки для стиральной машины&nbsp;&mdash; <em>1 шт.</em></li>
			<li>Монтаж щитка (скрытой установки)&nbsp;&mdash; <em>12 модулей</em></li>
			<li>Установка автоматов&nbsp;&mdash; <em>4 шт.</em></li>
			<li>Установка УЗО&nbsp;&mdash; <em>2 шт.</em></li>
			<li>Работы в электрическом щитке на этаже&nbsp;&mdash; <em>1 шт.</em></li>
			<li>Демонтаж старой проводки&nbsp;&mdash; <em>1 шт.</em></li>
			<li>Монтаж новой проводки&nbsp;&mdash; <em>1 шт.</em></li>
		</ul>
	</div>
	<div class="price">
		<div class="prefix">Мы сделали это всего за</div>
		<?php
		$value = 36980;
		if ($options['walls'] == 2) {
			$value += 5000;
		}
		?>
		<div class="value"><?php echo number_format($value, 0, ' ', ' '); ?></div>
		<div class="postfix">Электроточек: 17</div>
		<div class="note">Вы можете расширить или сократить объем работ на свое усмотрение. Цена указана без учета материалов.</div>
	</div>
	<?php } else if ($options['effort'] == 1 && $options['area'] == 2) { ?>
	<div class="services">
		В проект входит:
		<ul>
			<li>Установка розеток 220В&nbsp;&mdash; <em>15 шт.</em></li>
			<li>Монтаж выключателей&nbsp;&mdash; <em>5 шт.</em></li>
			<li>Подключение электрической плиты&nbsp;&mdash; <em>1 шт.</em></li>
			<li>Монтаж отдельной розетки для стиральной машины&nbsp;&mdash; <em>1 шт.</em></li>
			<li>Монтаж щитка (скрытой установки)&nbsp;&mdash; <em>12 модулей</em></li>
			<li>Установка автоматов&nbsp;&mdash; <em>6 шт.</em></li>
			<li>Установка УЗО&nbsp;&mdash; <em>2 шт.</em></li>
			<li>Работы в электрическом щитке на этаже&nbsp;&mdash; <em>1 шт.</em></li>
			<li>Демонтаж старой проводки&nbsp;&mdash; <em>1 шт.</em></li>
			<li>Монтаж новой проводки&nbsp;&mdash; <em>1 шт.</em></li>
		</ul>
	</div>
	<div class="price">
		<div class="prefix">Мы сделали это всего за</div>
		<?php
		$value = 45680;
		if ($options['walls'] == 2) {
			$value += 5000;
		}
		?>
		<div class="value"><?php echo number_format($value, 0, ' ', ' '); ?></div>
		<div class="postfix">Электроточек: 23</div>
		<div class="note">Вы можете расширить или сократить объем работ на свое усмотрение. Цена указана без учета материалов.</div>
	</div>
	<?php } else if ($options['effort'] == 1 && $options['area'] == 3) { ?>
	<div class="services">
		В проект входит:
		<ul>
			<li>Установка розеток 220В&nbsp;&mdash; <em>18 шт.</em></li>
			<li>Монтаж выключателей&nbsp;&mdash; <em>6 шт.</em></li>
			<li>Подключение электрической плиты&nbsp;&mdash; <em>1 шт.</em></li>
			<li>Монтаж отдельной розетки для стиральной машины&nbsp;&mdash; <em>1 шт.</em></li>
			<li>Монтаж щитка (скрытой установки)&nbsp;&mdash; <em>12 модулей</em></li>
			<li>Установка автоматов&nbsp;&mdash; <em>8 шт.</em></li>
			<li>Установка УЗО&nbsp;&mdash; <em>3 шт.</em></li>
			<li>Работы в электрическом щитке на этаже&nbsp;&mdash; <em>1 шт.</em></li>
			<li>Демонтаж старой проводки&nbsp;&mdash; <em>1 шт.</em></li>
			<li>Монтаж новой проводки&nbsp;&mdash; <em>1 шт.</em></li>
		</ul>
	</div>
	<div class="price">
		<div class="prefix">Мы сделали это всего за</div>
		<?php
		$value = 81920;
		if ($options['walls'] == 2) {
			$value += 4000;
		}
		?>
		<div class="value"><?php echo number_format($value, 0, ' ', ' '); ?></div>
		<div class="postfix">Электроточек: 29</div>
		<div class="note">Вы можете расширить или сократить объем работ на свое усмотрение. Цена указана без учета материалов.</div>
	</div>
	<?php } else if ($options['effort'] == 1 && $options['area'] == 4) { ?>
	<div class="services">
		В проект входит:
		<ul>
			<li>Установка розеток 220В&nbsp;&mdash; <em>24 шт.</em></li>
			<li>Монтаж выключателей&nbsp;&mdash; <em>8 шт.</em></li>
			<li>Подключение электрической плиты&nbsp;&mdash; <em>1 шт.</em></li>
			<li>Монтаж отдельной розетки для стиральной машины&nbsp;&mdash; <em>1 шт.</em></li>
			<li>Монтаж щитка (скрытой установки)&nbsp;&mdash; <em>12 модулей</em></li>
			<li>Установка автоматов&nbsp;&mdash; <em>10 шт.</em></li>
			<li>Установка УЗО&nbsp;&mdash; <em>4 шт.</em></li>
			<li>Работы в электрическом щитке на этаже&nbsp;&mdash; <em>1 шт.</em></li>
			<li>Демонтаж старой проводки&nbsp;&mdash; <em>1 шт.</em></li>
			<li>Монтаж новой проводки&nbsp;&mdash; <em>1 шт.</em></li>
		</ul>
	</div>
	<div class="price">
		<div class="prefix">Мы сделали это всего за</div>
		<?php
		$value = 93160;
		if ($options['walls'] == 2) {
			$value += 8500;
		}
		?>
		<div class="value"><?php echo number_format($value, 0, ' ', ' '); ?></div>
		<div class="postfix">Электроточек: 31</div>
		<div class="note">Вы можете расширить или сократить объем работ на свое усмотрение. Цена указана без учета материалов.</div>
	</div>
	<?php } else if ($options['effort'] == 2) { ?>
	<div class="services">
		В проект входит:
		<ul>
			<li>Установка розеток 220В&nbsp;&mdash; <em>18 шт.</em></li>
			<li>Монтаж выключателей&nbsp;&mdash; <em>5 шт.</em></li>
			<li>Подключение электрической плиты&nbsp;&mdash; <em>1 шт.</em></li>
			<li>Монтаж отдельной розетки для стиральной машины&nbsp;&mdash; <em>1 шт.</em></li>
			<li>Монтаж щитка (скрытой установки)&nbsp;&mdash; <em>12 модулей</em></li>
			<li>Установка автоматов&nbsp;&mdash; <em>6 шт.</em></li>
			<li>Установка УЗО&nbsp;&mdash; <em>2 шт.</em></li>
			<li>Работы в электрическом щитке на этаже&nbsp;&mdash; <em>1 шт.</em></li>
		</ul>
	</div>
	<div class="price">
		<div class="prefix">Мы сделали это всего за</div>
		<?php
		if ($options['walls'] == 1 && $options['wires'] == 1) {
			$value = 47000;
		}
		else if ($options['walls'] == 1 && $options['wires'] == 2) {
			$value = 37000;
		}
		else if ($options['walls'] == 2 && $options['wires'] == 1) {
			$value = 53000;
		}
		else if ($options['walls'] == 2 && $options['wires'] == 2) {
			$value = 40000;
		}
		?>
		<div class="value"><?php echo number_format($value, 0, ' ', ' '); ?></div>
		<div class="note">Вы можете расширить или сократить объем работ на свое усмотрение. Цена указана без учета материалов.</div>
	</div>
	<?php } else if ($options['effort'] == 3) { ?>
	<div class="services">
		В проект входит:
		<ul>
			<li>Установка розеток 220В&nbsp;&mdash; <em>18 шт.</em></li>
			<li>Монтаж выключателей&nbsp;&mdash; <em>5 шт.</em></li>
			<li>Подключение электрической плиты&nbsp;&mdash; <em>1</em></li>
			<li>Монтаж отдельной розетки для стиральной машины&nbsp;&mdash; <em>1</em></li>
			<li>Монтаж отдельной розетки для кондиционер&nbsp;&mdash; <em>1</em></li>
			<li>Разводка TV-антенны по квартире (розетка TV &nbsp;&mdash; <em>3 шт.</em>; краб TV&nbsp;&mdash; <em>1 шт.</em>)</li>
			<li>Разводка телефонной линии, розетка TF&nbsp;&mdash; <em>1 шт.</em></li>
			<li>Разводка internet-линии, розетки Internet&nbsp;&mdash; <em>1 шт.</em></li>
			<li>Монтаж щитка (скрытой установки)&nbsp;&mdash; <em>12 модулей</em></li>
			<li>Установка автоматов&nbsp;&mdash; <em>7 шт.</em></li>
			<li>Установка УЗО&nbsp;&mdash; <em>2 шт.</em></li>
			<li>Работы в электрическом щитке на этаже&nbsp;&mdash; <em>1</em></li>
		</ul>
	</div>
	<div class="price">
		<div class="prefix">Мы сделали это всего за</div>
		<?php
		if ($options['walls'] == 1 && $options['wires'] == 1) {
			$value = 47000;
		}
		else if ($options['walls'] == 1 && $options['wires'] == 2) {
			$value = 32000;
		}
		else if ($options['walls'] == 2 && $options['wires'] == 1) {
			$value = 53000;
		}
		else if ($options['walls'] == 2 && $options['wires'] == 2) {
			$value = 35000;
		}
		?>
		<div class="value"><?php echo number_format($value, 0, ' ', ' '); ?></div>
		<div class="note">Вы можете расширить или сократить объем работ на свое усмотрение. Цена указана без учета материалов.</div>
	</div>
	<?php } ?>
</div>
<?php } else if ($options['category'] == 2) { ?>
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
				else if ($options['area'] == 3) {
					$selected['options']['area'][3] = ' selected="selected"';
				}
				?>
				<select class="area">
					<option value="1"<?php echo $selected['options']['area'][1]; ?>>30 м² (6 мест)</option>
					<option value="2"<?php echo $selected['options']['area'][2]; ?>>60 м² (20 мест)</option>
					<option value="3"<?php echo $selected['options']['area'][3]; ?>>100 м² (25 мест)</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>Cтены:</td>
			<td>
				<?php
				if (!isset($options['walls'])) {
					$options['walls'] = 1;
				}
				if ($options['walls'] == 1) {
					$selected['options']['walls'][1] = ' selected="selected"';
				}
				else if ($options['walls'] == 2) {
					$selected['options']['walls'][2] = ' selected="selected"';
				}
				?>
				<select class="walls">
					<option value="1"<?php echo $selected['options']['walls'][1]; ?>>Кирпичные стены</option>
					<option value="2"<?php echo $selected['options']['walls'][2]; ?>>Бетонные стены</option>
				</select>
			</td>
		</tr>
	</table>
</div>
<div class="result">
	<?php if ($options['area'] == 1) { ?>
	<div class="services">
		В проект входит:
		<ul>
			<li>Установка розеток 220В с заземлением&nbsp;&mdash; <em>50 шт.</em></li>
			<li>Монтаж выключателей&nbsp;&mdash; <em>2 шт.</em></li>
			<li>Разводка телефонной линии, розетка TF&nbsp;&mdash; <em>6 шт.</em></li>
			<li>Разводка ethernet-линии, розетки Internet&nbsp;&mdash; <em>6 шт.</em></li>
			<li>Монтаж щитка (скрытой установки)&nbsp;&mdash; <em>50 модулей</em></li>
			<li>Установка автоматов&nbsp;&mdash; <em>12 шт.</em></li>
			<li>Установка УЗО&nbsp;&mdash; <em>3 шт.</em></li>
			<li>Монтаж контура заземления&nbsp;&mdash; <em>1</em></li>
		</ul>
	</div>
	<div class="price">
		<div class="prefix">Мы сделали это всего за</div>
		<?php
		$value = 75000;
		if ($options['walls'] == 2) {
			$value += 20000;
		}
		?>
		<div class="value"><?php echo number_format($value, 0, ' ', ' '); ?></div>
		<div class="note">Вы можете расширить или сократить объем работ на свое усмотрение. Цена указана без учета материалов.</div>
	</div>
	<?php } else if ($options['area'] == 2) { ?>
	<div class="services">
		В проект входит:
		<ul>
			<li>Установка розеток 220В с заземлением&nbsp;&mdash; <em>100 шт.</em></li>
			<li>Монтаж выключателей&nbsp;&mdash; <em>3 шт.</em></li>
			<li>Разводка телефонной линии, розетка TF&nbsp;&mdash; <em>20 шт.</em></li>
			<li>Разводка ethernet-линии, розетки Internet&nbsp;&mdash; <em>20 шт.</em></li>
			<li>Монтаж щитка (скрытой установки)&nbsp;&mdash; <em>50 модулей</em></li>
			<li>Установка автоматов&nbsp;&mdash; <em>22 шт.</em></li>
			<li>Установка УЗО&nbsp;&mdash; <em>5 шт.</em></li>
			<li>Монтаж контура заземления&nbsp;&mdash; <em>1</em></li>
		</ul>
	</div>
	<div class="price">
		<div class="prefix">Мы сделали это всего за</div>
		<?php
		$value = 175000;
		if ($options['walls'] == 2) {
			$value += 20000;
		}
		?>
		<div class="value"><?php echo number_format($value, 0, ' ', ' '); ?></div>
		<div class="note">Вы можете расширить или сократить объем работ на свое усмотрение. Цена указана без учета материалов.</div>
	</div>
	<?php } else if ($options['area'] == 3) { ?>
	<div class="services">
		В проект входит:
		<ul>
			<li>Установка розеток 220В с заземлением&nbsp;&mdash; <em>150 шт.</em></li>
			<li>Монтаж выключателей&nbsp;&mdash; <em>4 шт.</em></li>
			<li>Разводка телефонной линии, розетка TF&nbsp;&mdash; <em>25 шт.</em></li>
			<li>Разводка ethernet-линии, розетки Internet&nbsp;&mdash; <em>25 шт.</em></li>
			<li>Монтаж щитка (скрытой установки)&nbsp;&mdash; <em>50 модулей</em></li>
			<li>Установка автоматов&nbsp;&mdash; <em>28 шт.</em></li>
			<li>Установка УЗО&nbsp;&mdash; <em>5 шт.</em></li>
			<li>Монтаж контура заземления&nbsp;&mdash; <em>1</em></li>
		</ul>
	</div>
	<div class="price">
		<div class="prefix">Мы сделали это всего за</div>
		<?php
		$value = 245000;
		if ($options['walls'] == 2) {
			$value += 20000;
		}
		?>
		<div class="value"><?php echo number_format($value, 0, ' ', ' '); ?></div>
		<div class="note">Вы можете расширить или сократить объем работ на свое усмотрение. Цена указана без учета материалов.</div>
	</div>
	<?php } ?>
</div>
<?php } else if ($options['category'] == 3) { ?>
<div class="options">
	<table width="100%">
		<col width="150" />
		<col width="" />
		<tr>
			<td>Объем работ:</td>
			<td>
				<?php
				if (!isset($options['effort'])) {
					$options['effort'] = 1;
				}
				if ($options['effort'] == 1) {
					$selected['options']['effort'][1] = ' selected="selected"';
				}
				else if ($options['effort'] == 2) {
					$selected['options']['effort'][2] = ' selected="selected"';
				}
				?>
				<select class="effort">
					<option value="1"<?php echo $selected['options']['effort'][1]; ?>>&laquo;Под ключ&raquo;: вариант 1</option>
					<option value="2"<?php echo $selected['options']['effort'][2]; ?>>&laquo;Под ключ&raquo;: вариант 2</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>Проводка:</td>
			<td>
				<?php
				if (!isset($options['wires'])) {
					$options['wires'] = 1;
				}
				if ($options['wires'] == 1) {
					$selected['options']['wires'][1] = ' selected="selected"';
				}
				else if ($options['wires'] == 2) {
					$selected['options']['wires'][2] = ' selected="selected"';
				}
				?>
				<select class="wires">
					<option value="1"<?php echo $selected['options']['wires'][1]; ?>>Скрытая проводка (в штробе, под стяжкой, за подвесным потолком) </option>
					<option value="2"<?php echo $selected['options']['wires'][2]; ?>>Накладная проводка (в кабель-канале)</option>
				</select>
			</td>
		</tr>
	</table>
</div>
<div class="result">
	<?php if ($options['effort'] == 1) { ?>
	<div class="services">
		В проект входит:
		<ul>
			<li>Установка розеток 220В с заземлением&nbsp;&mdash; <em>26 шт.</em></li>
			<li>Монтаж выключателей&nbsp;&mdash; <em>14 шт.</em></li>
			<li>Монтаж щитка (скрытой установки)&nbsp;&mdash; <em>24 модуля</em></li>
			<li>Установка автоматов&nbsp;&mdash; <em>12 шт.</em></li>
			<li>Установка УЗО&nbsp;&mdash; <em>3 шт.</em></li>
			<li>Монтаж контура заземления&nbsp;&mdash; <em>1шт.</em></li>
		</ul>
	</div>
	<div class="price">
		<div class="prefix">Мы сделали это всего за</div>
		<?php
		$value = 50000;
		if ($options['wires'] == 1) {
			$value = 125000;
		}
		?>
		<div class="value"><?php echo number_format($value, 0, ' ', ' '); ?></div>
		<div class="note">Вы можете расширить или сократить объем работ на свое усмотрение. Цена указана без учета материалов.</div>
	</div>
	<?php } else if ($options['effort'] == 2) { ?>
	<div class="services">
		В проект входит:
		<ul>
			<li>Установка розеток 220В с заземлением&nbsp;&mdash; <em>32 шт.</em></li>
			<li>Монтаж выключателей&nbsp;&mdash; <em>16 шт.</em></li>
			<li>Разводка TV антенны по квартире, розетка TV&nbsp;&mdash; <em>4 шт.</em></li>
			<li>Монтаж щитка (скрытой установки)&nbsp;&mdash; <em>36 модулей</em></li>
			<li>Установка счетчика&nbsp;&mdash; <em>1шт.</em></li>
			<li>Установка автоматов&nbsp;&mdash; <em>16 шт.</em></li>
			<li>Установка УЗО&nbsp;&mdash; <em>4 шт.</em></li>
			<li>Монтаж контура заземления&nbsp;&mdash; <em>1 шт.</em></li>
		</ul>
	</div>
	<div class="price">
		<div class="prefix">Мы сделали это всего за</div>
		<?php
		$value = 58000;
		if ($options['wires'] == 1) {
			$value = 153000;
		}
		?>
		<div class="value"><?php echo number_format($value, 0, ' ', ' '); ?></div>
		<div class="note">Вы можете расширить или сократить объем работ на свое усмотрение. Цена указана без учета материалов.</div>
	</div>
	<?php } ?>
</div>
<?php } else if ($options['category'] == 4) { ?>
<div class="options">
	<table width="100%">
		<col width="150" />
		<col width="" />
		<tr>
			<td>Объем работ:</td>
			<td>
				<?php
				if (!isset($options['effort'])) {
					$options['effort'] = 1;
				}
				if ($options['effort'] == 1) {
					$selected['options']['effort'][1] = ' selected="selected"';
				}
				else if ($options['effort'] == 2) {
					$selected['options']['effort'][2] = ' selected="selected"';
				}
				?>
				<select class="effort">
					<option value="1"<?php echo $selected['options']['effort'][1]; ?>>&laquo;Под ключ&raquo;: вариант 1</option>
					<option value="2"<?php echo $selected['options']['effort'][2]; ?>>&laquo;Под ключ&raquo;: вариант 2</option>
				</select>
			</td>
		</tr>
	</table>
</div>
<div class="result">
	<?php if ($options['effort'] == 1) { ?>
	<div class="services">
		В проект входит:
		<ul>
			<li>Установка розеток 220В с заземлением&nbsp;&mdash; <em>60 шт.</em></li>
			<li>Монтаж выключателей&nbsp;&mdash; <em>24 шт.</em></li>
			<li>Разводка TV-антенны по квартире, розетка TV&nbsp;&mdash; <em>6 шт.</em></li>
			<li>Разводка телефонной линии, розетка TF&nbsp;&mdash; <em>2 шт.</em></li>
			<li>Разводка internet-линии, розетки Internet&nbsp;&mdash; <em>3 шт.</em></li>
			<li>Монтаж щитка (скрытой установки)&nbsp;&mdash; <em>54 модуля</em></li>
			<li>Установка автоматов&nbsp;&mdash; <em>22 шт.</em></li>
			<li>Установка УЗО&nbsp;&mdash; <em>4 шт.</em></li>
			<li>Монтаж контура заземления&nbsp;&mdash; <em>1 шт.</em></li>
		</ul>
	</div>
	<div class="price">
		<div class="prefix">Мы сделали это всего за</div>
		<?php $value = 165000; ?>
		<div class="value"><?php echo number_format($value, 0, ' ', ' '); ?></div>
		<div class="note">Вы можете расширить или сократить объем работ на свое усмотрение. Цена указана без учета материалов.</div>
	</div>
	<?php } else if ($options['effort'] == 2) { ?>
	<div class="services">
		В проект входит:
		<ul>
			<li>Установка розеток 220В с заземлением&nbsp;&mdash; <em>70 шт.</em></li>
			<li>Монтаж выключателей&nbsp;&mdash; <em>30 шт.</em></li>
			<li>Разводка TV-антенны по квартире, розетка TV&nbsp;&mdash; <em>8 шт.</em></li>
			<li>Разводка телефонной линии, розетка TF&nbsp;&mdash; <em>3 шт.</em></li>
			<li>Разводка internet-линии, розетки Internet&nbsp;&mdash; <em>4 шт.</em></li>
			<li>Монтаж щитка (скрытой установки)&nbsp;&mdash; <em>54 модуля</em></li>
			<li>Установка автоматов&nbsp;&mdash; <em>30 шт.</em></li>
			<li>Установка УЗО&nbsp;&mdash; <em>6 шт.</em></li>
			<li>Монтаж контура заземления&nbsp;&mdash; <em>1 шт.</em></li>
		</ul>
	</div>
	<div class="price">
		<div class="prefix">Мы сделали это всего за</div>
		<?php $value = 188000; ?>
		<div class="value"><?php echo number_format($value, 0, ' ', ' '); ?></div>
		<div class="note">Вы можете расширить или сократить объем работ на свое усмотрение. Цена указана без учета материалов.</div>
	</div>
	<?php } ?>
</div>
<?php } ?>

<script type="text/javascript">
	$(document).ready(function(){
		$('div.content div.project div.categories td').click(function(){
			var category = $(this).attr('category');
			var options = {};
			options['category'] = category;
			$('div.content div.project').load('/ajax/projects.php',{
				'options': options,
				'project': 'electrization'
			});
		});
		$('div.content div.project div.options select').change(function(){
			var options = {};
			options['category'] = <?php echo $options['category']; ?>;
			$('div.content div.project div.options select').each(function(index){
				var name = $(this).attr('class');
				var val = $(this).val();
				options[name] = val;
			});
			$('div.content div.project').load('/ajax/projects.php',{
				'options': options,
				'project': 'electrization'
			});
		});
	});
</script>
