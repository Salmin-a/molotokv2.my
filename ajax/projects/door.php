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
				if (!isset($options['area'])) {
					$options['area'] = 1;
				}
				if ($options['area'] == 1) {
					$selected['options']['area'][1] = ' selected="selected"';
				} else if ($options['area'] == 2) {
					$selected['options']['area'][2] = ' selected="selected"';
				} else if ($options['area'] == 3) {
					$selected['options']['area'][3] = ' selected="selected"';
				} else if ($options['area'] == 4) {
					$selected['options']['area'][4] = ' selected="selected"';
				} else if ($options['area'] == 5) {
					$selected['options']['area'][5] = ' selected="selected"';
				}
				?>
				<select class="area">
					<option value="1"<?php echo $selected['options']['area'][1]; ?>>Ремонт офиса, 900 м²</option>
					<option value="2"<?php echo $selected['options']['area'][2]; ?>>Евроремонт ванной</option>
					<option value="3"<?php echo $selected['options']['area'][3]; ?>>Косметический ремонт туалета, 1,4 м²</option>
					<option value="4"<?php echo $selected['options']['area'][4]; ?>>Ремонт 2-комнатной квартиры, 46 м²</option>
					<option value="5"<?php echo $selected['options']['area'][5]; ?>>Ремонт 1-комнатной квартиры, 24 м²</option>
				</select>
			</td>
		</tr>
	</table>
</div>

<div class="result">
	<?php if ($options['area'] == 1) { ?>
	<div class="services">
		<div class="task">
			<strong>Описание проекта:</strong> в офисном помещении 900 м<sup>2</sup> требовалось произвести ремонт потолка, пола, стен и выполнить другие смежные работы.
		</div>
		<table>
			<tr>
				<td>Снятие плиток &laquo;Акмигран&raquo; с потолка и стен</td>
				<td class="unit">308,5 м<sup>2</sup></td>
			</tr>
			<tr>
				<td>Снятие облицовки стен из панелей ДСП</td>
				<td class="unit">1470,6 м<sup>2</sup></td>
			</tr>
			<tr>
				<td>Снятие межкомнатных дверных блоков</td>
				<td class="unit">33 шт.</td>
			</tr>
			<tr>
				<td>Снятие наличников</td>
				<td class="unit">330 п. м.</td>
			</tr>
			<tr>
				<td>Снятие штучного паркета</td>
				<td class="unit">875,7 м<sup>2</sup></td>
			</tr>
			<tr>
				<td>Устройство подвесных потолков из плит &laquo;Армстронг&raquo;</td>
				<td class="unit">1012,8 м<sup>2</sup></td>
			</tr>
			<tr>
				<td>Облицовка стен ГКЛ в 1 слой без утеплителя по металлокаркасу</td>
				<td class="unit">2239,4 м<sup>2</sup></td>
			</tr>
			<tr>
				<td>Проклейка швов ГКЛ армирующей сеткой</td>
				<td class="unit">6137 м. п.</td>
			</tr>
			<tr>
				<td>Шпатлевка и шлифовка швов по ГКЛ</td>
				<td class="unit">6137 м. п.</td>
			</tr>
			<tr>
				<td>Грунтовка стен и дверных откосов</td>
				<td class="unit">2619,9 м<sup>2</sup></td>
			</tr>
			<tr>
				<td>Окраска стен и дверных откосов водоэмульсионной краской за 2 раза</td>
				<td class="unit">2619,9 м<sup>2</sup></td>
			</tr>
			<tr>
				<td>Оклеивание стен и дверных откосов стеклообоями</td>
				<td class="unit">2619,9 м<sup>2</sup></td>
			</tr>
			<tr>
				<td>Установка штукатурных уголков на откосы</td>
				<td class="unit">48,2 м. п.</td>
			</tr>
			<tr>
				<td>Установка межкомнатной двери</td>
				<td class="unit">33 шт.</td>
			</tr>
			<tr>
				<td>Врезка замков, петель, ручек</td>
				<td class="unit">33 компл.</td>
			</tr>
			<tr>
				<td>Установка дверных ограничителей</td>
				<td class="unit">33 шт.</td>
			</tr>
			<tr>
				<td>Установка наличников</td>
				<td class="unit">330 п. м.</td>
			</tr>
			<tr>
				<td>Устройство дверных откосов из ГКЛ</td>
				<td class="unit">165 п. м.</td>
			</tr>
			<tr>
				<td>Установка штукатурных уголков на откосы</td>
				<td class="unit">165 п. м.</td>
			</tr>
			<tr>
				<td>Шпатлевка откосов по сетке</td>
				<td class="unit">165 п. м.</td>
			</tr>
			<tr>
				<td>Грунтовка дверных откосов</td>
				<td class="unit">165 п. м.</td>
			</tr>
			<tr>
				<td>Окраска откосов</td>
				<td class="unit">165 п. м.</td>
			</tr>
			<tr>
				<td>Установка штукатурных уголков на откосы</td>
				<td class="unit">199,8 п. м.</td>
			</tr>
			<tr>
				<td>Устройство откосов из ГКЛ</td>
				<td class="unit">199,8 п. м.</td>
			</tr>
			<tr>
				<td>Грунтовка откосов</td>
				<td class="unit">199,8 п. м.</td>
			</tr>
			<tr>
				<td>Шпатлевание откосов по сетке</td>
				<td class="unit">199,8 п. м.</td>
			</tr>
			<tr>
				<td>Окраска откосов</td>
				<td class="unit">199,8 п. м.</td>
			</tr>
			<tr>
				<td>Грунтовка пола под керамогранит</td>
				<td class="unit">289,1 м<sup>2</sup></td>
			</tr>
			<tr>
				<td>Грунтовка деревянного пола огнебиозащитным составом &laquo;Сенеж огниво&raquo;</td>
				<td class="unit">875,7 м<sup>2</sup></td>
			</tr>
			<tr>
				<td>Устройство цементной стяжки толщиной 50 мм.</td>
				<td class="unit">289,1 м<sup>2</sup></td>
			</tr>
			<tr>
				<td>Устройство маяков</td>
				<td class="unit">289,1 м<sup>2</sup></td>
			</tr>
			<tr>
				<td>Укладка фанеры по деревянному полу</td>
				<td class="unit">875,7 м<sup>2</sup></td>
			</tr>
			<tr>
				<td>Укладка подложки</td>
				<td class="unit">723,8 м<sup>2</sup></td>
			</tr>
			<tr>
				<td>Устройство ламинированного паркета</td>
				<td class="unit">723,8 м<sup>2</sup></td>
			</tr>
			<tr>
				<td>Установка плинтуса пластикового</td>
				<td class="unit">563,7 п. м.</td>
			</tr>
			<tr>
				<td>Установка порожков переходных</td>
				<td class="unit">35 п. м.</td>
			</tr>
			<tr>
				<td>Укладка керамогранита</td>
				<td class="unit">289,1 м<sup>2</sup></td>
			</tr>
			<tr>
				<td>Устройство плинтусов из керамогранита</td>
				<td class="unit">153,1 п. м.</td>
			</tr>
			<tr>
				<td>Устройство насечки по бетонному основанию пола</td>
				<td class="unit">137 м<sup>2</sup></td>
			</tr>
			<tr>
				<td>Сборка, разборка подмостей</td>
				<td class="unit">80 м<sup>2</sup></td>
			</tr>
			<tr>
				<td>Вывоз мусора</td>
				<td class="unit">6 конт.</td>
			</tr>
		</table>
	</div>
	<div class="price">
		<div class="prefix">Мы сделали это всего за</div>
		<?php
		$value = 467589;
		?>
		<div class="value"><?php echo number_format($value, 0, ' ', ' '); ?></div>
		<div class="note">Вы можете расширить или сократить объем работ на свое усмотрение. Цена указана без учета материалов.</div>
	</div>
	<?php } else if ($options['area'] == 2) { ?>
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
	<?php } else if ($options['area'] == 3) { ?>
	<div class="services">
		<table>
			<tr>
				<td>Укладка плитки на подготовленную поверхность</td>
				<td class="unit">1,4 м<sup>2</sup></td>
			</tr>
			<tr>
				<td>Укладка бордюра</td>
				<td class="unit">4 м.п.</td>
			</tr>
			<tr>
				<td>Выравнивание поверхности</td>
				<td class="unit">13,6 м<sup>2</sup></td>
			</tr>
			<tr>
				<td>Порожки из плитки возле дверей</td>
				<td class="unit">1 шт.</td>
			</tr>
			<tr>
				<td>Фигурный вырез плитки</td>
				<td class="unit">2 шт.</td>
			</tr>
			<tr>
				<td>Установка дверей</td>
				<td class="unit">1 шт.</td>
			</tr>
			<tr>
				<td>Окраска потолка водоимульсионной краской / или оклейка обоями</td>
				<td class="unit">1,4 м<sup>2</sup></td>
			</tr>
			<tr>
				<td>Сантехкороб (шкаф) в туалете с сантехлючком</td>
				<td class="unit">1 шт.</td>
			</tr>
			<tr>
				<td>Установка унитаза</td>
				<td class="unit">1 шт.</td>
			</tr>
		</table>
	</div>
	<div class="price">
		<div class="prefix">Мы сделали это всего за</div>
		<?php
		$value = 17232;
		?>
		<div class="value"><?php echo number_format($value, 0, ' ', ' '); ?></div>
		<div class="note">Вы можете расширить или сократить объем работ на свое усмотрение. Цена указана без учета материалов.</div>
	</div>
	<?php } else if ($options['area'] == 4) { ?>
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
	<?php } else if ($options['area'] == 5) { ?>	
	<div class="services">
		<div class="group active">
			<div class="group-properties">
				<div class="group-name"><span>Кухня</span></div>
				<div class="group-price">17 371 руб.</div>
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
					<td>Укладка подложки</td>
					<td class="unit">6,01 м<sup>2</sup></td>
				</tr>
				<tr>
					<td>Устройство ламинированного паркета (32 кл.)</td>
					<td class="unit">6,01 м<sup>2</sup></td>
				</tr>
				<tr>
					<td>Установка плинтуса пластикового</td>
					<td class="unit">8,92 п.м.</td>
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
			</table>
		</div>
		<div class="group">
			<div class="group-properties">
				<div class="group-name"><span>Комната</span></div>
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
					<td>Стены</td>
					<td class="unit"></td>
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
		<?php $value = 75665; ?>
		<div class="value"><?php echo number_format($value, 0, ' ', ' '); ?></div>
		<div class="note">Вы можете расширить или сократить объем работ на свое усмотрение. Цена указана без учета материалов.</div>
	</div>
	<?php } ?>	
	
</div>

<script type="text/javascript">
	$(document).ready(function() {
		$('div.content div.project div.options select').change(function() {
			var options = {};
			$('div.content div.project div.options select').each(function(index) {
				var name = $(this).attr('class');
				var val = $(this).val();
				options[name] = val;
			});
			$('div.content div.project').load('/ajax/projects.php', {
				'options' : options,
				'project' : 'door'
			});
		});
	}); 
</script>

<script type="text/javascript"><?php
	require 'scripts/group.js';
 ?><?php
	require 'scripts/price.js';
 ?></script>
