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
					<option value="1"<?php echo $selected['options']['variant'][1]; ?>>Ремонт стен в комнате, обои, 13 м²</option>
					<option value="2"<?php echo $selected['options']['variant'][2]; ?>>Ремонт стен в комнате, окраска, 16 м²</option>
					<option value="3"<?php echo $selected['options']['variant'][3]; ?>>Ремонт стен в комнате, ГКЛ, 14 м²</option>
					<option value="4"<?php echo $selected['options']['variant'][4]; ?>>Ремонт стен в комнате, жидкая венецианская штукатурка, 20 м²</option>
					<option value="5"<?php echo $selected['options']['variant'][5]; ?>>Косметический ремонт комнаты, 17 м²</option>
					<option value="6"<?php echo $selected['options']['variant'][6]; ?>>Ремонт 2-комнатной квартиры, 46 м²</option>
					<option value="7"<?php echo $selected['options']['variant'][7]; ?>>Ремонт офиса, 45 м²</option>
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
				<td class="unit">12,3 м<sup>2</sup></td>
			</tr>
			<tr>
				<td>Грунтовка стен за 1 раз</td>
				<td class="unit">12,3 м<sup>2</sup></td>
			</tr>
			<tr>
				<td>Шпаклевка стен в 2 слоя</td>
				<td class="unit">12,3 м<sup>2</sup></td>
			</tr>
			<tr>
				<td>Шлифовка стен (1 раз)</td>
				<td class="unit">12,3 м<sup>2</sup></td>
			</tr>
			<tr>
				<td>Оклеивание стен флизелиновыми обоями</td>
				<td class="unit">12,3 м<sup>2</sup></td>
			</tr>
		</table>
	</div>
	<div class="price">
		<div class="prefix">Мы сделали это всего за</div>
		<?php
		$value = 6765;
		?>
		<div class="value"><?php echo number_format($value, 0, ' ', ' '); ?></div>
		<div class="note">Вы можете расширить или сократить объем работ на свое усмотрение. Цена указана без учета материалов.</div>
	</div>
	<?php } else if ($options['variant'] == 2) { ?>
	<div class="services">
		<table>
			<tr>
				<td>Зачистка стен от старых обоев</td>
				<td class="unit">15,65 м<sup>2</sup></td>
			</tr>
			<tr>
				<td>Грунтовка стен за 1 раз</td>
				<td class="unit">15,65 м<sup>2</sup></td>
			</tr>
			<tr>
				<td>Шпаклевка стен в 2 слоя под окраску</td>
				<td class="unit">15,65 м<sup>2</sup></td>
			</tr>
			<tr>
				<td>Шлифовка стен (1 раз)</td>
				<td class="unit">15,65 м<sup>2</sup></td>
			</tr>
			<tr>
				<td>Окраска стен водоэмульсионной краской</td>
				<td class="unit">15,65 м<sup>2</sup></td>
			</tr>
		</table>
	</div>
	<div class="price">
		<div class="prefix">Мы сделали это всего за</div>
		<?php
		$value = 8607;
		?>
		<div class="value"><?php echo number_format($value, 0, ' ', ' '); ?></div>
		<div class="note">Вы можете расширить или сократить объем работ на свое усмотрение. Цена указана без учета материалов.</div>
	</div>
	<?php } else if ($options['variant'] == 3) { ?>
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
	<?php } else if ($options['variant'] == 4) { ?>
	<div class="services">
		<table>
			<tr>
				<td>Зачистка стен от старых обоев</td>
				<td class="unit">19,25 м<sup>2</sup></td>
			</tr>
			<tr>
				<td>Грунтовка стен за 1 раз</td>
				<td class="unit">19,25 м<sup>2</sup></td>
			</tr>
			<tr>
				<td>Шпаклевка стен в 1 слоя</td>
				<td class="unit">19,25 м<sup>2</sup></td>
			</tr>
			<tr>
				<td>Шлифовка стен (1 раз)</td>
				<td class="unit">19,25 м<sup>2</sup></td>
			</tr>
			<tr>
				<td>Грунтовка стен за 1 раз</td>
				<td class="unit">19,25 м<sup>2</sup></td>
			</tr>
			<tr>
				<td>Нанесение декоративной венецианской щтукатурки</td>
				<td class="unit">19,25 м<sup>2</sup></td>
			</tr>
			<tr>
				<td>Окраска стен водоэмульсионной краской</td>
				<td class="unit">19,25 м<sup>2</sup></td>
			</tr>
		</table>
	</div>
	<div class="price">
		<div class="prefix">Мы сделали это всего за</div>
		<?php
		$value = 35420;
		?>
		<div class="value"><?php echo number_format($value, 0, ' ', ' '); ?></div>
		<div class="note">Вы можете расширить или сократить объем работ на свое усмотрение. Цена указана без учета материалов.</div>
	</div>
	<?php } else if ($options['variant'] == 5) { ?>
	<div class="services">
		<div class="task">
			<strong>Описание проекта:</strong> в виду отсутвия средств на проведение ремонта всей квартиры, заказчик решил проводить ремонт поэтапно. Начали ремонт с одной комнаты.
		</div>
		<table>
			<tr>
				<th colspan="2">Потолок</th>
			</tr>
			<tr>
				<td>Грунтовка потолков за 1 раз</td>
				<td class="unit">16,69 м<sup>2</sup></td>
			</tr>
			<tr>
				<td>Окраска потолка водоэмульсионной краской за 2 раза</td>
				<td class="unit">16,69 м<sup>2</sup></td>
			</tr>
			<tr>
				<th colspan="2">Стены</th>
			</tr>
			<tr>
				<td>Зачистка стен от старых обоев</td>
				<td class="unit">37,96 м<sup>2</sup></td>
			</tr>
			<tr>
				<td>Грунтовка стен за 1 раз</td>
				<td class="unit">36,07 м<sup>2</sup></td>
			</tr>
			<tr>
				<td>Оклеивание стен флизелиновыми обоями</td>
				<td class="unit">33,37 м<sup>2</sup></td>
			</tr>
			<tr>
				<th colspan="2">Пол</th>
			</tr>
			<tr>
				<td>Демонтаж плинтусов</td>
				<td class="unit">14,46 п.м.</td>
			</tr>
			<tr>
				<td>Демонтаж линолеума</td>
				<td class="unit">16,69 м<sup>2</sup></td>
			</tr>
			<tr>
				<td>Грунтовка пола</td>
				<td class="unit">16,69 м<sup>2</sup></td>
			</tr>
			<tr>
				<td>Устройство маяков</td>
				<td class="unit">16,69 м<sup>2</sup></td>
			</tr>
			<tr>
				<td>Устройство чистовой стяжки самовыравнивающей смесью под ламинат (толщ. 10 мм.)</td>
				<td class="unit">16,69 м<sup>2</sup></td>
			</tr>
			<tr>
				<td>Укладка подложки</td>
				<td class="unit">16,69 м<sup>2</sup></td>
			</tr>
			<tr>
				<td>Устройство ламинированного паркета (32 кл.)</td>
				<td class="unit">16,69 м<sup>2</sup></td>
			</tr>
			<tr>
				<td>Установка плинтуса пластикового</td>
				<td class="unit">22,18 п.м.</td>
			</tr>
		</table>
	</div>
	<div class="price">
		<div class="prefix">Мы сделали это всего за</div>
		<?php $value = 26679; ?>
		<div class="value"><?php echo number_format($value, 0, ' ', ' '); ?></div>
		<div class="note">Вы можете расширить или сократить объем работ на свое усмотрение. Цена указана без учета материалов.</div>
	</div>
	<?php } else if ($options['variant'] == 6) { ?>
	<div class="services">
		<div class="group active">
			<div class="group-properties">
				<div class="group-name"><span>Кухня</span></div>
				<div class="group-price">18 798 руб.</div>
			</div>
			<table>
				<tr>
					<th colspan="2">Пол</th>
				</tr>
				<tr>
					<td>Демонтаж плинтусов</td>
					<td class="unit">8,92 п.м.</td>
				</tr>
				<tr>
					<td>Демонтаж плитки ПВХ</td>
					<td class="unit">6,01 м<sup>2</sup></td>
				</tr>
				<tr>
					<td>Грунтовка пола</td>
					<td class="unit">6,01 м<sup>2</sup></td>
				</tr>
				<tr>
					<td>Устройство маяков</td>
					<td class="unit">6,01 м<sup>2</sup></td>
				</tr>
				<tr>
					<td>Устройство чистовой стяжки самовыравнивающей смесью под ламинат (толщ.10 мм.)</td>
					<td class="unit">6,01 м<sup>2</sup></td>
				</tr>
				<tr>
					<td>Укладка плитки на пол</td>
					<td class="unit">6,01 м<sup>2</sup></td>
				</tr>
				<tr>
					<td>Затирка швов</td>
					<td class="unit">6,01 м<sup>2</sup></td>
				</tr>
				<tr>
					<th colspan="2">Стены</th>
				</tr>
				<tr>
					<td>Зачистка стен от старых обоев</td>
					<td class="unit">19,54 м<sup>2</sup></td>
				</tr>
				<tr>
					<td>Грунтовка стен за 1 раз</td>
					<td class="unit">19,54 м<sup>2</sup></td>
				</tr>
				<tr>
					<td>Оклеивание стен флизелиновыми обоями</td>
					<td class="unit">16,54 м<sup>2</sup></td>
				</tr>
				<tr>
					<td>Укладка плитки (фартук)</td>
					<td class="unit">3,2 м<sup>2</sup></td>
				</tr>
				<tr>
					<th colspan="2">Дверь</th>
				</tr>
				<tr>
					<td>Демонтаж межкомнатных дверных блоков</td>
					<td class="unit">1 шт.</td>
				</tr>
				<tr>
					<td>Демонтаж наличников</td>
					<td class="unit">10 п.м.</td>
				</tr>
				<tr>
					<td>Установка межкомнатной двери в комплекте</td>
					<td class="unit">1 шт.</td>
				</tr>
				<tr>
					<td>Врезка ручки–защелки</td>
					<td class="unit">1 компл.</td>
				</tr>
				<tr>
					<td>Установка наличников</td>
					<td class="unit">10 п.м.</td>
				</tr>
			</table>
		</div>
		<div class="group">
			<div class="group-properties">
				<div class="group-name"><span>Санузел</span></div>
				<div class="group-price">7 040 руб.</div>
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
		<div class="group">
			<div class="group-properties">
				<div class="group-name"><span>Комната №1</span></div>
				<div class="group-price">18 069 руб.</div>
			</div>
			<table>
				<tr>
					<th colspan="2">Потолок</th>
				</tr>
				<tr>
					<td>Грунтовка потолков за 1 раз</td>
					<td class="unit">10,21 м<sup>2</sup></td>
				</tr>
				<tr>
					<td>Окраска потолка водоэмульсионной краской за 2 раза</td>
					<td class="unit">10,21 м<sup>2</sup></td>
				</tr>
				<tr>
					<th colspan="2">Стены</th>
				</tr>
				<tr>
					<td>Зачистка стен от старых обоев</td>
					<td class="unit">30,37 м<sup>2</sup></td>
				</tr>
				<tr>
					<td>Грунтовка стен за 1 раз</td>
					<td class="unit">28,48 м<sup>2</sup></td>
				</tr>
				<tr>
					<td>Оклеивание стен флизелиновыми обоями</td>
					<td class="unit">28,48 м<sup>2</sup></td>
				</tr>
				<tr>
					<th colspan="2">Пол</th>
				</tr>
				<tr>
					<td>Демонтаж плинтусов</td>
					<td class="unit">11,68 п.м.</td>
				</tr>
				<tr>
					<td>Демонтаж линолеума</td>
					<td class="unit">10,21 м<sup>2</sup></td>
				</tr>
				<tr>
					<td>Грунтовка пола</td>
					<td class="unit">10,21 м<sup>2</sup></td>
				</tr>
				<tr>
					<td>Устройство маяков</td>
					<td class="unit">10,21 м<sup>2</sup></td>
				</tr>
				<tr>
					<td>Устройство чистовой стяжки самовыравнивающей смесью под ламинат (толщ. 10 мм.)</td>
					<td class="unit">10,21 м<sup>2</sup></td>
				</tr>
				<tr>
					<td>Укладка подложки</td>
					<td class="unit">10,21 м<sup>2</sup></td>
				</tr>
				<tr>
					<td>Устройство ламинированного паркета (32 кл.)</td>
					<td class="unit">10,21 м<sup>2</sup></td>
				</tr>
				<tr>
					<td>Установка плинтуса пластикового</td>
					<td class="unit">10,78 п.м.</td>
				</tr>
			</table>
		</div>
		<div class="group">
			<div class="group-properties">
				<div class="group-name"><span>Комната №2</span></div>
				<div class="group-price">26 679 руб.</div>
			</div>
			<table>
				<tr>
					<th colspan="2">Потолок</th>
				</tr>
				<tr>
					<td>Грунтовка потолков за 1 раз</td>
					<td class="unit">16,69 м<sup>2</sup></td>
				</tr>
				<tr>
			
					<td>Окраска потолка водоэмульсионной краской за 2 раза</td>
					<td class="unit">16,69 м<sup>2</sup></td>
				</tr>
				<tr>
					<th colspan="2">Стены</th>
				</tr>
				<tr>
					<td>Зачистка стен от старых обоев</td>
					<td class="unit">37,96 м<sup>2</sup></td>
				</tr>
				<tr>
					<td>Грунтовка стен за 1 раз</td>
					<td class="unit">36,07 м<sup>2</sup></td>
				</tr>
				<tr>
					<td>Оклеивание стен флизелиновыми обоями (комната)</td>
					<td class="unit">33,37 м<sup>2</sup></td>
				</tr>
				<tr>
					<th colspan="2">Пол</th>
				</tr>
				<tr>
					<td>Демонтаж плинтусов</td>
					<td class="unit">14,46 п.м.</td>
				</tr>
				<tr>
					<td>Демонтаж линолеума</td>
					<td class="unit">16,69 м<sup>2</sup></td>
				</tr>
				<tr>
					<td>Грунтовка пола</td>
					<td class="unit">16,69 м<sup>2</sup></td>
				</tr>
				<tr>
					<td>Устройство маяков</td>
					<td class="unit">16,69 м<sup>2</sup></td>
				</tr>
				<tr>
					<td>Устройство чистовой стяжки самовыравнивающей смесью под ламинат (толщ.10 мм.)</td>
					<td class="unit">16,69 м<sup>2</sup></td>
				</tr>
				<tr>
					<td>Укладка подложки</td>
					<td class="unit">16,69 м<sup>2</sup></td>
				</tr>
				<tr>
					<td>Устройство ламинированного паркета (32 кл.)</td>
					<td class="unit">16,69 м<sup>2</sup></td>
				</tr>
				<tr>
					<td>Установка плинтуса пластикового</td>
					<td class="unit">22,18 п.м.</td>
				</tr>
			</table>
		</div>
		<div class="group">
			<div class="group-properties">
				<div class="group-name"><span>Прихожая</span></div>
				<div class="group-price">20 914 руб.</div>
			</div>
			<table>
				<tr>
					<th colspan="2">Потолок</th>
				</tr>
				<tr>
					<td>Грунтовка потолков за 1 раз</td>
					<td class="unit">6,46 м<sup>2</sup></td>
				</tr>
				<tr>
					<td>Окраска потолка водоэмульсионной краской за 2 раза</td>
					<td class="unit">6,46 м<sup>2</sup></td>
				</tr>
				<tr>
					<th colspan="2">Стены</th>
				</tr>
				<tr>
					<td>Зачистка стен от старых обоев</td>
					<td class="unit">31,19 м<sup>2</sup></td>
				</tr>
				<tr>
					<td>Грунтовка стен за 1 раз</td>
					<td class="unit">29,29 м<sup>2</sup></td>
				</tr>
				<tr>
					<td>Оклеивание стен обоями под покраску</td>
					<td class="unit">29,29 м<sup>2</sup></td>
				</tr>
				<tr>
					<td>Окраска обоев водоэмульсионной краской за 2 раза</td>
					<td class="unit">29,29 м<sup>2</sup></td>
				</tr>
				<tr>
					<th colspan="2">Пол</th>
				</tr>
				<tr>
					<td>Демонтаж плинтусов</td>
					<td class="unit">10,78 п.м.</td>
				</tr>
				<tr>
					<td>Демонтаж линолеума</td>
					<td class="unit">6,46 м<sup>2</sup></td>
				</tr>
				<tr>
					<td>Грунтовка пола</td>
					<td class="unit">6,46 м<sup>2</sup></td>
				</tr>
				<tr>
					<td>Устройство маяков</td>
					<td class="unit">6,46 м<sup>2</sup></td>
				</tr>
				<tr>
					<td>Устройство чистовой стяжки самовыравнивающей смесью под ламинат (толщ.10 мм.)</td>
					<td class="unit">6,46 м<sup>2</sup></td>
				</tr>
				<tr>
					<td>Укладка подложки</td>
					<td class="unit">6,46 м<sup>2</sup></td>
				</tr>
				<tr>
					<td>Устройство ламинированного паркета (32 кл.)</td>
					<td class="unit">6,46 м<sup>2</sup></td>
				</tr>
				<tr>
					<td>Установка плинтуса пластикового</td>
					<td class="unit">9,88 п.м.</td>
				</tr>
			</table>
		</div>
		<div class="group">
			<div class="group-properties">
				<div class="group-name"><span>Монтаж электрики</span></div>
				<div class="group-price">4 150 руб.</div>
			</div>
			<table>
				<tr>
					<td>Замена точки электрической (розетка, выключатель)</td>
					<td class="unit">9 шт.</td>
				</tr>
				<tr>
					<td>Установка розетки, выключателя, телефонной и интернет розеток в бетонных стенах с пробивкой гнезда под подрозетник (расценка за 1 шт без стоимости розетки, выключателя)</td>
					<td class="unit">2 шт.</td>
				</tr>
			</table>
		</div>
		<div class="group">
			<div class="group-properties">
				<div class="group-name"><span>Разное</span></div>
				<div class="group-price">6 550 руб.</div>
			</div>
			<table>
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
					<td class="unit">1 тн.</td>
				</tr>
			</table>
		</div>
	</div>
	<div class="price">
		<div class="prefix">Мы сделали это всего за</div>
		<?php $value = 102202; ?>
		<div class="value"><?php echo number_format($value, 0, ' ', ' '); ?></div>
		<div class="note">Вы можете расширить или сократить объем работ на свое усмотрение. Цена указана без учета материалов.</div>
	</div>
	<?php } else if ($options['variant'] == 7) { ?>
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
				'project': 'chernovaya'
			});
		});
	});
</script>

<script type="text/javascript">
<?php require 'scripts/price.js'; ?>
<?php require 'scripts/group.js'; ?>
</script>
