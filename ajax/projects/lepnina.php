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
					<option value="1"<?php echo $selected['options']['variant'][1]; ?>>Ремонт стен в комнате, окраска, 16 м²</option>
					<option value="2"<?php echo $selected['options']['variant'][2]; ?>>Ремонт стен в комнате, ГКЛ, 14 м²</option>
					<option value="3"<?php echo $selected['options']['variant'][3]; ?>>Капитальный ремонт 2-этажного коттеджа, 180 м²</option>	
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
	<?php } else if ($options['variant'] == 2) { ?>
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
	<?php } else if ($options['variant'] == 3) { ?>	
	<div class="services">
		<div class="task">
			<strong>Описание проекта:</strong> в двухэтажном кирпичном коттедже требовалось произвести капитальный ремонт.
		</div>
		<div class="group active">
			<div class="group-properties">
				<div class="group-name"><span>1 этаж</span></div>
				<div class="group-price"></div>
			</div>
			<table>
				<tr>
					<th colspan="2">Потолок</th>
				</tr>
				<tr>
					<td>Устройство реечного потолка</td>
					<td class="unit">40,23 м<sup>2</sup></td>
				</tr>
				<tr>
					<th colspan="2">Стены</th>
				</tr>
				<tr>
					<td>Сбивка штукатурки со стен(до 35%)</td>
					<td class="unit">120,6 м<sup>2</sup></td>
				</tr>
				<tr>
					<td>Разборка облицовки стен из керамической плитки</td>
					<td class="unit">2 м<sup>2</sup></td>
				</tr>
				<tr>
					<td>Устройство перегородок из керамзитобетонных блоков толщ. 100 мм. с армированием</td>
					<td class="unit">16,12 м<sup>2</sup></td>
				</tr>
				<tr>
					<td>Кладка стен из керамзитобетонных блоков толщ. 200 мм. с армированием</td>
					<td class="unit">56,95 м<sup>2</sup></td>
				</tr>
				<tr>
					<td>Грунтовка стен</td>
					<td class="unit">402,05 м<sup>2</sup></td>
				</tr>
				<tr>
					<td>Установка штукатурных маяков</td>
					<td class="unit">402,05 м<sup>2</sup></td>
				</tr>
				<tr>
					<td>Штукатурка стен гипсовыми составами</td>
					<td class="unit">402,05 м<sup>2</sup></td>
				</tr>
				<tr>
					<td>Грунтовка стен за 2 раза</td>
					<td class="unit">427,45 м<sup>2</sup></td>
				</tr>
				<tr>
					<td>Проклейка стен малярной сеткой &quot;строби&quot;</td>
					<td class="unit">427,45 м<sup>2</sup></td>
				</tr>
				<tr>
					<td>Шпатлевка и шлифовка за 2 раза стен по штукатурке</td>
					<td class="unit">402,05 м<sup>2</sup></td>
				</tr>
				<tr>
					<td>Шпатлевка и шлифовка за 2 раза стен по ГКЛ</td>
					<td class="unit">25,4 м<sup>2</sup></td>
				</tr>
				<tr>
					<td>Грунтовка стен за 1 раз бетон-контактом</td>
					<td class="unit">107,84 м<sup>2</sup></td>
				</tr>
				<tr>
					<td>Облицовка стен керамической плиткой стандартного размера</td>
					<td class="unit">107,84 м<sup>2</sup></td>
				</tr>
				<tr>
					<td>Затирка швов</td>
					<td class="unit">107,84 м<sup>2</sup></td>
				</tr>
				<tr>
					<td>Оклеивание стен флизелиновыми обоями под покраску</td>
					<td class="unit">321,61 м<sup>2</sup></td>
				</tr>
				<tr>
					<td>Окраска стен декоративной водоэмульсионной краской за 2 раза</td>
					<td class="unit">321,61 м<sup>2</sup></td>
				</tr>
				<tr>
					<th colspan="2">Проемы</th>
				</tr>
				<tr>
					<td>Усиление проема металлической перемычкой (уголок 75)</td>
					<td class="unit">25 п.м.</td>
				</tr>
				<tr>
					<th colspan="2">Дверь</th>
				</tr>
				<tr>
					<td>Установка межкомнатной двери в комплекте</td>
					<td class="unit">7 шт.</td>
				</tr>
				<tr>
					<td>Установка дверного добора (5м на дверь)</td>
					<td class="unit">7 компл.</td>
				</tr>
				<tr>
					<td>Врезка замков, петель, ручек</td>
					<td class="unit">7 компл.</td>
				</tr>
				<tr>
					<td>Установка дверных ограничителей</td>
					<td class="unit">7 шт.</td>
				</tr>
				<tr>
					<td>Установка наличников</td>
					<td class="unit">70 п.м.</td>
				</tr>
				<tr>
					<th colspan="2">Окна</th>
				</tr>
				<tr>
					<td>Установка подоконников из поликарбонатных материалов шир.до
						30см.</td>
					<td class="unit">10,2 п.м.</td>
				</tr>
				<tr>
					<td>Устройство откосов из ГКЛ</td>
					<td class="unit">34,3 п.м.</td>
				</tr>
				<tr>
					<td>Установка малярных уголков на откосы</td>
					<td class="unit">34,3 п.м.</td>
				</tr>
				<tr>
					<td>Грунтовка откосов за 3 раза</td>
					<td class="unit">34,3 п.м.</td>
				</tr>
				<tr>
					<td>Шпатлевка и шлифовка откосов</td>
					<td class="unit">34,3 п.м.</td>
				</tr>
				<tr>
					<td>Оклейка откосов стеклохолстом &quot;Оскар Лайт&quot;</td>
					<td class="unit">34,3 п.м.</td>
				</tr>
				<tr>
					<td>Финишная шпатлевка откосов</td>
					<td class="unit">34,3 п.м.</td>
				</tr>
				<tr>
					<td>Окраска откосов за 2 раза</td>
					<td class="unit">34,3 п.м.</td>
				</tr>
				<tr>
					<th colspan="2">Пол</th>
				</tr>
				<tr>
					<td>Демонтаж цементной стяжки толщ. до 40мм</td>
					<td class="unit">85,44 м<sup>2</sup></td>
				</tr>
				<tr>
					<td>Грунтовка пола</td>
					<td class="unit">163,2 м<sup>2</sup></td>
				</tr>
				<tr>
					<td>Установка маяков</td>
					<td class="unit">163,2 м<sup>2</sup></td>
				</tr>
				<tr>
					<td>Устройство цементной стяжки толщиной до 30 мм.</td>
					<td class="unit">163,2 м<sup>2</sup></td>
				</tr>
				<tr>
					<td>Укладка напольной керамической плитки стандартного размера</td>
					<td class="unit">163,2 м<sup>2</sup></td>
				</tr>
				<tr>
					<td>Затирка швов плитки</td>
					<td class="unit">163,2 м<sup>2</sup></td>
				</tr>
				<tr>
					<td>Установка плинтуса пластикового</td>
					<td class="unit">132,4 п.м.</td>
				</tr>
				<tr>
					<th colspan="2">Электромонтажные работы</th>
				</tr>
				<tr>
					<td>Отключение силового кабеля в щитке</td>
					<td class="unit">1 шт.</td>
				</tr>
				<tr>
					<td>Демонтаж электрощитка</td>
					<td class="unit">1 шт.</td>
				</tr>
				<tr>
					<td>Штробление борозд в стене под электропроводку до 30 мм.</td>
					<td class="unit">п.м.</td>
				</tr>
				<tr>
					<td>Заделка штроб в стенах до 30 мм.</td>
					<td class="unit">п.м.</td>
				</tr>
				<tr>
					<td>Прокладка силового кабеля</td>
					<td class="unit">п.м.</td>
				</tr>
				<tr>
					<td>Пробивка гнезда под подрозетники в стене</td>
					<td class="unit">22 шт.</td>
				</tr>
				<tr>
					<td>Установка подрозетника в стене</td>
					<td class="unit">22 шт.</td>
				</tr>
				<tr>
					<td>Установка розетки, выключателя, телефонной и интернет розеток в
						бетонных стенах с прокладкой кабеля (без стоимости розетки,
						выключателя)</td>
					<td class="unit">22 шт.</td>
				</tr>
				<tr>
					<td>Установка щита вводного силового IP-56 (800х600х250мм)</td>
					<td class="unit">1 шт.</td>
				</tr>
				<tr>
					<td>Коммутация силового щита</td>
					<td class="unit">1 шт.</td>
				</tr>
				<tr>
					<td>Установка точечных светильников</td>
					<td class="unit">22 шт.</td>
				</tr>
				<tr>
					<th colspan="2">Сантехнические работы</th>
				</tr>
				<tr>
					<td>Прокладка канализационных труб</td>
					<td class="unit">1 компл.</td>
				</tr>
				<tr>
					<td>Прокладка труб водоснабжения (пропилен)</td>
					<td class="unit">1 компл.</td>
				</tr>
				<tr>
					<td>Установка фильтров тонкой очистки</td>
					<td class="unit">шт.</td>
				</tr>
				<tr>
					<td>Установка гребенок</td>
					<td class="unit">шт.</td>
				</tr>
				<tr>
					<td>Устройство вывода для подключения посудомоечной машины</td>
					<td class="unit">шт.</td>
				</tr>
				<tr>
					<td>Устройство вывода для подключения стиральной машины</td>
					<td class="unit">шт.</td>
				</tr>
				<tr>
					<td>Устройство вывода для подключения кухонной мойки</td>
					<td class="unit">шт.</td>
				</tr>
				<tr>
					<td>Установка душевой кабины в сборе</td>
					<td class="unit">1 шт.</td>
				</tr>
				<tr>
					<td>Установка унитаза</td>
					<td class="unit">1 шт.</td>
				</tr>
				<tr>
					<td>Установка раковины с подстольем</td>
					<td class="unit">1 шт.</td>
				</tr>
				<tr>
					<td>Установка смесителей</td>
					<td class="unit">1 шт.</td>
				</tr>
				<tr>
					<td>Установка сантехнического лючка (скрытого)</td>
					<td class="unit">1 шт.</td>
				</tr>
				<tr>
					<td>Монтаж системы &quot;теплый пол&quot; водяной</td>
					<td class="unit">40,32 м<sup>2</sup></td>
				</tr>
				<tr>
					<td>Гидравлическое испытание системы отопления, водоснабжения</td>
					<td class="unit">40,32 п.м.</td>
				</tr>
				<tr>
					<td>Демонтаж и установка радиаторов</td>
					<td class="unit">шт.</td>
				</tr>
			</table>
		</div>
		<div class="group">
			<div class="group-properties">
				<div class="group-name"><span>2 этаж</span></div>
				<div class="group-price"></div>
			</div>
			<table>
				<tr>
					<th colspan="2">Потолок</th>
				</tr>
				<tr>
					<td>Грунтовка потолков</td>
					<td class="unit">121,54 м<sup>2</sup></td>
				</tr>
				<tr>
					<td>Проклейка швов ГКЛ сеткой</td>
					<td class="unit">218,8 п.м.</td>
				</tr>
				<tr>
					<td>Шпатлевка и шлифовка швов ГКЛ</td>
					<td class="unit">218,8 п.м.</td>
				</tr>
				<tr>
					<td>Проклейка потолка малярной сеткой &quot;строби&quot;</td>
					<td class="unit">121,54 м<sup>2</sup></td>
				</tr>
				<tr>
					<td>Грунтовка потолков за 2 раза</td>
					<td class="unit">121,54 м<sup>2</sup></td>
				</tr>
				<tr>
					<td>Шпатлёвка и шлифовка потолка по ГКЛ за 2 раза</td>
					<td class="unit">121,54 м<sup>2</sup></td>
				</tr>
				<tr>
					<td>Проклейка потолка стеклохолстом &quot;Оскар Лайт&quot;</td>
					<td class="unit">121,54 м<sup>2</sup></td>
				</tr>
				<tr>
					<td>Финишная шпатлевка потолка</td>
					<td class="unit">121,54 м<sup>2</sup></td>
				</tr>
				<tr>
					<td>Окраска потолка водоэмульсионной краской за 2 раза</td>
					<td class="unit">121,54 м<sup>2</sup></td>
				</tr>
				<tr>
					<td>Устройство реечного потолка</td>
					<td class="unit">13,76 м<sup>2</sup></td>
				</tr>
				<tr>
					<th colspan="2">Стены</th>
				</tr>
				<tr>
					<td>Сбивка штукатурки со стен(до 35%)</td>
					<td class="unit">39,4 м<sup>2</sup></td>
				</tr>
				<tr>
					<td>Устройство перегородок из керамзитобетонных блоков толщ.100 мм. с
						армированием</td>
					<td class="unit">15 м<sup>2</sup></td>
				</tr>
				<tr>
					<td>Кладка стен из керамзитобетонных блоков толщ.200 мм. с
						армированием</td>
					<td class="unit">56,7 м<sup>2</sup></td>
				</tr>
				<tr>
					<td>Грунтовка стен</td>
					<td class="unit">157,59 м<sup>2</sup></td>
				</tr>
				<tr>
					<td>Установка штукатурных маяков</td>
					<td class="unit">157,59 м<sup>2</sup></td>
				</tr>
				<tr>
					<td>Штукатурка стен гипсовыми составами</td>
					<td class="unit">157,59 м<sup>2</sup></td>
				</tr>
				<tr>
					<td>Грунтовка стен за 2 раза</td>
					<td class="unit">327,58 м<sup>2</sup></td>
				</tr>
				<tr>
					<td>Проклейка стен малярной сеткой &quot;строби&quot;</td>
					<td class="unit">327,58 м<sup>2</sup></td>
				</tr>
				<tr>
					<td>Шпатлевка и шлифовка за 2 раза стен по штукатурке</td>
					<td class="unit">157,59 м<sup>2</sup></td>
				</tr>
				<tr>
					<td>Шпатлевка и шлифовка за 2 раза стен по ГКЛ</td>
					<td class="unit">144,6 м<sup>2</sup></td>
				</tr>
				<tr>
					<td>Грунтовка стен за 1 раз бетон-контактом</td>
					<td class="unit">51,88 м<sup>2</sup></td>
				</tr>
				<tr>
					<td>Облицовка стен керамической плиткой стандартного размера</td>
					<td class="unit">51,88 м<sup>2</sup></td>
				</tr>
				<tr>
					<td>Затирка швов</td>
					<td class="unit">51,88 м<sup>2</sup></td>
				</tr>
				<tr>
					<td>Оклеивание стен флизелиновыми обоями под покраску</td>
					<td class="unit">275,5 м<sup>2</sup></td>
				</tr>
				<tr>
					<td>Окраска стен декоративной водоэмульсионной краской за 2 раза</td>
					<td class="unit">275,5 м<sup>2</sup></td>
				</tr>
				<tr>
					<th colspan="2">Проемы</th>
				</tr>
				<tr>
					<td>Усиление проема металлической перемычкой (уголок 75)</td>
					<td class="unit">14,8 п.м.</td>
				</tr>
				<tr>
					<th colspan="2">Дверь</th>
				</tr>
				<tr>
					<td>Установка межкомнатной двери в комплекте</td>
					<td class="unit">6 шт.</td>
				</tr>
				<tr>
					<td>Установка дверного добора (5м на дверь)</td>
					<td class="unit">6 компл.</td>
				</tr>
				<tr>
					<td>Врезка замков, петель, ручек</td>
					<td class="unit">6 компл.</td>
				</tr>
				<tr>
					<td>Установка дверных ограничителей</td>
					<td class="unit">6 шт.</td>
				</tr>
				<tr>
					<td>Установка наличников</td>
					<td class="unit">60 п.м.</td>
				</tr>
				<tr>
					<th colspan="2">Окна</th>
				</tr>
				<tr>
					<td>Установка подоконников из поликарбонатных материалов шир.до
						30см.</td>
					<td class="unit">9 п.м.</td>
				</tr>
				<tr>
					<td>Устройство откосов из ГКЛ</td>
					<td class="unit">28,5 п.м.</td>
				</tr>
				<tr>
					<td>Установка малярных уголков на откосы</td>
					<td class="unit">28,5 п.м.</td>
				</tr>
				<tr>
					<td>Грунтовка откосов за 3 раза</td>
					<td class="unit">28,5 п.м.</td>
				</tr>
				<tr>
					<td>Шпатлевка и шлифовка откосов</td>
					<td class="unit">28,5 п.м.</td>
				</tr>
				<tr>
					<td>Оклейка откосов стеклохолстом &quot;Оскар Лайт&quot;</td>
					<td class="unit">28,5 п.м.</td>
				</tr>
				<tr>
					<td>Финишная шпатлевка откосов</td>
					<td class="unit">28,5 п.м.</td>
				</tr>
				<tr>
					<td>Окраска откосов за 2 раза</td>
					<td class="unit">28,5 п.м.</td>
				</tr>
				<tr>
					<th colspan="2">Пол</th>
				</tr>
				<tr>
					<td>Устройство гидроизоляции пола из гидростеклоизола в два
						слоя</td>
					<td class="unit">15,4 м<sup>2</sup></td>
				</tr>
				<tr>
					<td>Устройство покрытия пола из ГВЛВ</td>
					<td class="unit">13,76 м<sup>2</sup></td>
				</tr>
				<tr>
					<td>Укладка напольной керамической плитки стандартного размера</td>
					<td class="unit">13,76 м<sup>2</sup></td>
				</tr>
				<tr>
					<td>Затирка швов плитки</td>
					<td class="unit">13,76 м<sup>2</sup></td>
				</tr>
				<tr>
					<td>Устройство оснований пола из фанеры(т.12,5мм)</td>
					<td class="unit">111,73 м<sup>2</sup></td>
				</tr>
				<tr>
					<td>Укладка подложки</td>
					<td class="unit">111,73 м<sup>2</sup></td>
				</tr>
				<tr>
					<td>Устройство ламинированного паркета (32-33 кл.)</td>
					<td class="unit">111,73 м<sup>2</sup></td>
				</tr>
				<tr>
					<td>Установка плинтуса пластикового</td>
					<td class="unit">102,3 п.м.</td>
				</tr>
				<tr>
					<th colspan="2">Электромонтажные работы</th>
				</tr>
				<tr>
					<td>Штробление борозд в стене под электропроводку до 30 мм.</td>
					<td class="unit">п.м.</td>
				</tr>
				<tr>
					<td>Заделка штроб в стенах до 30 мм.</td>
					<td class="unit">п.м.</td>
				</tr>
				<tr>
					<td>Пробивка гнезда под подрозетники в стене</td>
					<td class="unit">8 шт.</td>
				</tr>
				<tr>
					<td>Установка подрозетника в стене</td>
					<td class="unit">8 шт.</td>
				</tr>
				<tr>
					<td>Установка розетки, выключателя, телефонной и интернет розеток в
						бетонных стенах с прокладкой кабеля (без стоимости розетки,
						выключателя)</td>
					<td class="unit">8 шт.</td>
				</tr>
				<tr>
					<td>Установка точечных светильников</td>
					<td class="unit">10 шт.</td>
				</tr>
				<tr>
					<th colspan="2">Сантехнические работы</th>
				</tr>
				<tr>
					<td>Установка душевой кабины в сборе</td>
					<td class="unit">1 шт.</td>
				</tr>
				<tr>
					<td>Установка ванны с гидромассажем</td>
					<td class="unit">1 шт.</td>
				</tr>
				<tr>
					<td>Установка ванны чугунной</td>
					<td class="unit">1 шт.</td>
				</tr>
				<tr>
					<td>Установка унитаза</td>
					<td class="unit">2 шт.</td>
				</tr>
				<tr>
					<td>Установка раковины с подстольем</td>
					<td class="unit">3 шт.</td>
				</tr>
				<tr>
					<td>Установка смесителей</td>
					<td class="unit">3 шт.</td>
				</tr>
				<tr>
					<td>Установка сантехнического лючка (скрытого)</td>
					<td class="unit">2 шт.</td>
				</tr>
				<tr>
					<td>Демонтаж и установка радиаторов</td>
					<td class="unit">шт.</td>
				</tr>
			</table>
		</div>
		<div class="group">
			<div class="group-properties">
				<div class="group-name"><span>Общестроительные работы</span></div>
				<div class="group-price"></div>
			</div>
			<table>
				<tr>
					<th colspan="2">Козырек (балкон)</th>
				</tr>
				<tr>
					<td>Установка каркаса козырька и обрешетки из швеллера</td>
					<td class="unit">м.п.</td>
				</tr>
				<tr>
					<td>Устройство покрытия козырька из оцинкованного профнастила</td>
					<td class="unit">м<sup>2</sup>/td>
				</tr>
				<tr>
					<td>Установка ферм из профильной трубы</td>
					<td class="unit">м.п.</td>
				</tr>
				<tr>
					<td>Устройство сухой стяжки из плоского шифера</td>
					<td class="unit">м<sup>2</sup></td>
				</tr>
				<tr>
					<td>Устройство гидроизоляции кровли из 2 слоев гидростеклоизола</td>
					<td class="unit">м<sup>2</sup></td>
				</tr>
				<tr>
					<td>Облицовка козырька и колонн панелями</td>
					<td class="unit">м<sup>2</sup>/td>
				</tr>
				<tr>
					<td>Установка водосточных труб</td>
					<td class="unit">п.м.</td>
				</tr>
				<tr>
					<td>Установка декоративных угловых элементов</td>
					<td class="unit">п.м.</td>
				</tr>
				<tr>
					<th colspan="2">Надстройка</th>
				</tr>
				<tr>
					<td>Разработка земли под фундаменты вручную</td>
					<td class="unit">3,4 куб.м.</td>
				</tr>
				<tr>
					<td>Установка опалубки</td>
					<td class="unit">42 м<sup>2</sup></td>
				</tr>
				<tr>
					<td>Устройство ленточного фундамента и бетонного основания пола</td>
					<td class="unit">15 куб.м.</td>
				</tr>
				<tr>
					<th colspan="2">Лестница 1-2 этаж</th>
				</tr>
				<tr>
					<td>Монтаж каркаса и устройство лестничных маршей и площадок</td>
					<td class="unit">3 п.м.</td>
				</tr>
			</table>
		</div>
	</div>
	<div class="price">
		<div class="prefix">Мы сделали это всего за</div>
		<?php
		$value = 1783602;
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
				'project': 'lepnina'
			});
		});
	});
</script>

<script type="text/javascript">
<?php require 'scripts/price.js'; ?>
<?php require 'scripts/group.js'; ?>
</script>
