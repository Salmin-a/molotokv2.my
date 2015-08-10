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
					<option value="2"<?php echo $selected['options']['variant'][2]; ?>>Косметический ремонт комнаты, 17 м²</option>
					<option value="3"<?php echo $selected['options']['variant'][3]; ?>>Капитальный ремонт, 2-комнатная квартира, 54 м²</option>
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
		$value = 19765;
		?>
		<div class="value"><?php echo number_format($value, 0, ' ', ' '); ?></div>
		<div class="note">Вы можете расширить или сократить объем работ на свое усмотрение. Цена указана без учета материалов.</div>
	</div>
	<?php } else if ($options['variant'] == 2) { ?>
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
		<?php $value = 56679; ?>
		<div class="value"><?php echo number_format($value, 0, ' ', ' '); ?></div>
		<div class="note">Вы можете расширить или сократить объем работ на свое усмотрение. Цена указана без учета материалов.</div>
	</div>
	<?php } else if ($options['variant'] == 3) { ?>
	<div class="services">
		<div class="task">
			<strong>Описание проекта:</strong> клиентом была приобретена квартира в плачевном состоянии, старая 9-этажка. Ремонт не делался с момента постройки дома. Необходимо было сделать квартиру пригодной для комфортного проживания.
		</div>
		<div class="group active">
			<div class="group-properties">
				<div class="group-name"><span>Потолок</span></div>
				<div class="group-price"></div>
			</div>
			<table>
				<tr>
					<td>Расшивка, заделка рустов (кухня)</td>
					<td class="unit">3 п.м.</td>
				</tr>
				<tr>
					<td>Выравнивание потолка гипсовыми составами</td>
					<td class="unit">3 м<sup>2</sup></td>
				</tr>
				<tr>
					<td>Обеспыливание потолков за 1 раз</td>
					<td class="unit">45,2 м<sup>2</sup></td>
				</tr>
				<tr>
					<td>Устройство реечного потолка</td>
					<td class="unit">4 м<sup>2</sup></td>
				</tr>
			</table>
		</div>
		<div class="group">
			<div class="group-properties">
				<div class="group-name"><span>Перегородки</span></div>
				<div class="group-price"></div>
			</div>
			<table>
				<tr>
					<td>Демонтаж перегородок из легкого бетона (расширение дверного
						проема в маленькой комнате)</td>
					<td class="unit">0,66 м<sup>2</sup></td>
				</tr>
				<tr>
					<td>Устройство перегородок из пазогребневых гипсолитовых плит
						(667х500) (сужение дверного проема)</td>
					<td class="unit">2,5 м<sup>2</sup></td>
				</tr>
				<tr>
					<td>Усиление дверного проема металлическим профилем (перемычка
						над проемом)</td>
					<td class="unit">1 шт.</td>
				</tr>
				<tr>
					<td>Устройство смежной перегородки из пенобетонных блоков
						толщиной 600х250х50 мм (сан.узел)</td>
					<td class="unit">4,5 м<sup>2</sup></td>
				</tr>
				<tr>
					<td>Устройство фасадной перегородки в четверть кирпича с
						армированием (сан.узел)</td>
					<td class="unit">2,6 м<sup>2</sup></td>
				</tr>
			</table>
		</div>
		<div class="group">
			<div class="group-properties">
				<div class="group-name"><span>Стены</span></div>
				<div class="group-price"></div>
			</div>
			<table>
				<tr>
					<td>Очистка стен от бетоноконтакта (кухня)</td>
					<td class="unit">25 м<sup>2</sup></td>
				</tr>
				<tr>
					<td>Сбивка штукатурки из-под плитки со стен (кухня)</td>
					<td class="unit">2 м<sup>2</sup></td>
				</tr>
				<tr>
					<td>Выравнивание стен гипсовыми составами (кухня)</td>
					<td class="unit">25 м<sup>2</sup></td>
				</tr>
				<tr>
					<td>Установка штукатурных маяков</td>
					<td class="unit">10,5 м<sup>2</sup></td>
				</tr>
				<tr>
					<td>Штукатурка существующих стен штукатурной цементно-песчаной
						смесью по маякам толщиной до 20мм (сан.узел)</td>
					<td class="unit">10,5 м<sup>2</sup></td>
				</tr>
				<tr>
					<td>Штукатурка фасадной и смежной перегородок штукатурной
						цементно-песчаной смесью толщиной до 5мм (сан.узел)</td>
					<td class="unit">11,5 м<sup>2</sup></td>
				</tr>
				<tr>
					<td>Шпатлевка и шлифовка за 2 раза стен по штукатурке (комнаты,
						коридор)</td>
					<td class="unit">120 м<sup>2</sup></td>
				</tr>
				<tr>
					<td>Грунтовка стен за 2 раза</td>
					<td class="unit">171 м<sup>2</sup></td>
				</tr>
				<tr>
					<td>Оклеивание стен текстильными обоями на флизелиновой основе
						(комнаты, коридор)</td>
					<td class="unit">120 м<sup>2</sup></td>
				</tr>
				<tr>
					<td>Оклеивание стен виниловыми обоями на флизелиновой основе
						(кухня)</td>
					<td class="unit">20,5 м<sup>2</sup></td>
				</tr>
				<tr>
					<td>Оклеивание стен фотообоями (коридор)</td>
					<td class="unit">2,5 м<sup>2</sup></td>
				</tr>
				<tr>
					<td>Оклеивание стен фотообоями (кухня)</td>
					<td class="unit">4,5 м<sup>2</sup></td>
				</tr>
				<tr>
					<td>Облицовка стен керамической плиткой стандартного размера
						(сан.узел)</td>
					<td class="unit">26 м<sup>2</sup></td>
				</tr>
			</table>
		</div>
		<div class="group">
			<div class="group-properties">
				<div class="group-name"><span>Пол</span></div>
				<div class="group-price"></div>
			</div>
			<table>
				<tr>
					<td>Гидроизоляция пола смесью Водостоп</td>
					<td class="unit">49,2 м<sup>2</sup></td>
				</tr>
				<tr>
					<td>Устройство звукоизоляции в один слой из рулонного материала
						Шуманет</td>
					<td class="unit">49,2 м<sup>2</sup></td>
				</tr>
				<tr>
					<td>Укладка мелкозернистого керамзита толщиной 4 см с проливкой
						цементным молочком</td>
					<td class="unit">49,2 м<sup>2</sup></td>
				</tr>
				<tr>
					<td>Устройство маяков</td>
					<td class="unit">49,2 м<sup>2</sup></td>
				</tr>
				<tr>
					<td>Устройство цементной стяжки т.50 мм с армирующей сеткой</td>
					<td class="unit">49,2 м<sup>2</sup></td>
				</tr>
				<tr>
					<td>Устройство чистовой стяжки самовыравнивающей смесью под
						ламинат (т. 5 мм.)</td>
					<td class="unit">29,31 м<sup>2</sup></td>
				</tr>
				<tr>
					<td>Укладка рулонной подложки</td>
					<td class="unit">29,31 м<sup>2</sup></td>
				</tr>
				<tr>
					<td>Устройство ламинированного паркета (32 кл.)</td>
					<td class="unit">29,31 м<sup>2</sup></td>
				</tr>
				<tr>
					<td>Укладка напольной керамической плитки стандартного размера
						(сан.узел)</td>
					<td class="unit">4 м<sup>2</sup></td>
				</tr>
				<tr>
					<td>Укладка керамогранита (коридор, кухня)</td>
					<td class="unit">14 м<sup>2</sup></td>
				</tr>
				<tr>
					<td>Установка плинтуса пластикового</td>
					<td class="unit">48,4 п.м.</td>
				</tr>
			</table>
		</div>
		<div class="group">
			<div class="group-properties">
				<div class="group-name"><span>Электромонтажные работы</span></div>
				<div class="group-price"></div>
			</div>
			<table>
				<tr>
					<td>Укладка нагревательного элемента теплого пола</td>
					<td class="unit">5,5 м<sup>2</sup></td>
				</tr>
			</table>
		</div>
		<div class="group">
			<div class="group-properties">
				<div class="group-name"><span>Сантехнические работы</span></div>
				<div class="group-price"></div>
			</div>
			<table>
				<tr>
					<td>Демонтаж чугунных труб канализации</td>
					<td class="unit">1 п.м.</td>
				</tr>
				<tr>
					<td>Прокладка канализационных труб</td>
					<td class="unit">1 компл.</td>
				</tr>
				<tr>
					<td>Прокладка медных труб водоснабжения д. 15 SANCO</td>
					<td class="unit">10 п.м.</td>
				</tr>
				<tr>
					<td>Установка соединительной и запорной арматуры</td>
					<td class="unit"> шт.</td>
				</tr>
				<tr>
					<td>Установка фильтров сетчатых (грубой очистки)</td>
					<td class="unit">1 шт.</td>
				</tr>
				<tr>
					<td>Установка гребенок</td>
					<td class="unit">1 шт.</td>
				</tr>
				<tr>
					<td>Установка раковины на кронштейнах</td>
					<td class="unit">1 шт.</td>
				</tr>
				<tr>
					<td>Установка смесителей</td>
					<td class="unit">2 шт.</td>
				</tr>
				<tr>
					<td>Установка ванны чугунной</td>
					<td class="unit">1 шт.</td>
				</tr>
				<tr>
					<td>Устройство вывода для подключения стиральной машины</td>
					<td class="unit">1 шт.</td>
				</tr>
				<tr>
					<td>Устройство вывода для подключения кухонной мойки</td>
					<td class="unit">1 шт.</td>
				</tr>
			</table>
		</div>
		<div class="group">
			<div class="group-properties">
				<div class="group-name"><span>Разные работы</span></div>
				<div class="group-price"></div>
			</div>
			<table>
				<tr>
					<td>Вынос мусора и погрузка в контейнер</td>
					<td class="unit">1 тн.</td>
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
		<?php
		$value = 279345;
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
				'project': 'oboi'
			});
		});
	});
</script>

<script type="text/javascript">
<?php require 'scripts/price.js'; ?>
<?php require 'scripts/group.js'; ?>
</script>
