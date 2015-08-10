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
				if (!isset($options['type'])) {
					$options['type'] = 1;
				}
				else {
					$selected['options']['type'][$options['type']] = ' selected="selected"';
				}
				?>
				<select class="type">
					<option value="1"<?php echo $selected['options']['type'][1]; ?>>Укладка плитки на кухне, 10 м²</option>
					<option value="2"<?php echo $selected['options']['type'][2]; ?>>3D пол в ванной, 10 м²</option>
					<option value="3"<?php echo $selected['options']['type'][3]; ?>>Ремонт всей квартиры</option>
					<option value="4"<?php echo $selected['options']['type'][4]; ?>>Офисное помещение, 900 м²</option>
					<option value="5"<?php echo $selected['options']['type'][5]; ?>>Теплый пол в гостинной, 10 м²</option>
				</select>
			</td>
		</tr>
	</table>
</div>

<div class="result">
	<?php if ($options['type'] == 1) { ?>
	<div class="services">
    <div class="task">
			<strong>Описание проекта:</strong> Укладка плитки на кухне в новой квартире. 10 м<sup>2</sup>
		</div>
		<table>
			<tr>
				<td>Подготовка поверхности</td>
				<td class="unit">10 м<sup>2</sup></td>
			</tr>
			<tr>
				<td>Устройство стяжки цементно-песчанной смесью до 5 см</td>
				<td class="unit">10 м<sup>2</sup></td>
			</tr>
			<tr>
				<td>Затирка плиточных швов</td>
				<td class="unit">10 м<sup>2</sup></td>
			</tr>
			<tr>
				<td>Мотаж плинтуса (пластик)</td>
				<td class="unit">14 п.м.</td>
			</tr>
			<tr>
				<td>Укладка плитки</td>
				<td class="unit">10 м<sup>2</sup></td>
			</tr>
		</table>
	</div>
	<div class="price">
		<div class="prefix">Мы сделали это всего за</div>
		<?php
		$value = 13600;
		?>
		<div class="value"><?php echo number_format($value, 0, ' ', ' '); ?></div>
		<div class="note">Вы можете расширить или сократить объем работ на свое усмотрение. Цена указана без учета материалов.</div>
	</div>    

	<?php } else if ($options['type'] == 2) { ?>
	<div class="services">
    <div class="task">
			<strong>Описание проекта:</strong> Подготовка поверхности для изготовления 3D полов в ванной 10 м<sup>2</sup>
		</div>
		<table>
			<tr>
				<td>Подготовка поверхности</td>
				<td class="unit">10 м<sup>2</sup></td>
			</tr>
			<tr>
				<td>Выравнивание пола самонивелирующей смесью до 3 см</td>
				<td class="unit">10 м<sup>2</sup></td>
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
	<?php } else if ($options['type'] == 3) { ?>
	<div class="services">
     <div class="task">
			<strong>Описание проекта:</strong> Клиентом была приобретена квартира в плочевном состоянии, старая 9-ти этажка, для проживания в ней. Ремонт не делался с момента постройки дома. Необходимо было сделать ее пригодную для проживания.	
		</div>
		<table>
            <tr>
            	<th colspan="2">Потолок</th>
            </tr>
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
				<td class="unit">45.2 м<sup>2</sup></td>
			</tr>
			<tr>
				<td>Устройство реечного потолка</td>
				<td class="unit">4 м<sup>2</sup></td>
			</tr>
            <tr>
            	<th colspan="2">Перегородки</th>
            </tr>
            <tr>
				<td>Демонтаж перегородок из легкого бетона (расширение дверного проема в маленькой комнате)</td>
				<td class="unit">0.66 м<sup>2</sup></td>
			</tr>
			<tr>
				<td>Устройство перегородок из пазогребневых гипсолитовых плит (667х500) (сужение дверного проема)</td>
				<td class="unit">2.5 м<sup>2</sup></td>
			</tr>
			<tr>
				<td>Усиление дверного проема металлическим профилем (перемычка над проемом)</td>
				<td class="unit">1 шт.</td>
			</tr>
			<tr>
				<td>Устройство смежной перегородки из пенобетонных блоков толщиной 600х250х50 мм (сан.узел)</td>
				<td class="unit">4.5 м<sup>2</sup></td>
			</tr>
			<tr>
				<td>Устройство фасадной перегородки в четверть кирпича с армированием (сан.узел)</td>
				<td class="unit">2.6 м<sup>2</sup></td>
			</tr>
              <tr>
            	<th colspan="2">Стены</th>
            </tr>
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
				<td class="unit">25 п.м.</td>
			</tr>
			<tr>
				<td>Установка штукатурных маяков</td>
				<td class="unit">10.5 м<sup>2</sup></td>
			</tr>
			<tr>
				<td>Штукатурка существующих стен штукатурной цементно-песчаной смесью по маякам толщиной до 20мм (сан.узел)</td>
				<td class="unit">10.5 м<sup>2</sup></td>
			</tr>
            <tr>
				<td>Штукатурка фасадной и смежной перегородок штукатурной цементно-песчаной смесью толщиной до 5мм (сан.узел)</td>
				<td class="unit">11.5 м<sup>2</sup></td>
			</tr>
            <tr>
				<td>Шпатлевка и шлифовка за 2 раза стен по штукатурке (комнаты, коридор)</td>
				<td class="unit">120 м<sup>2</sup></td>
			</tr>
            <tr>
				<td>Грунтовка стен за 2 раза</td>
				<td class="unit">171 м<sup>2</sup></td>
			</tr>
            <tr>
				<td>Оклеивание стен текстильными обоями на флизелиновой основе (комнаты, коридор)</td>
				<td class="unit">120 м<sup>2</sup></td>
			</tr>
            <tr>
				<td>Оклеивание стен виниловыми обоями на флизелиновой основе (кухня)</td>
				<td class="unit">20.5 м<sup>2</sup></td>
			</tr>
            <tr>
				<td>Оклеивание стен фотообоями (коридор)</td>
				<td class="unit">2.5 м<sup>2</sup></td>
			</tr>
            <tr>
				<td>Оклеивание стен фотообоями (кухня)</td>
				<td class="unit">4.5 м<sup>2</sup></td>
			</tr>
            <tr>
				<td>Облицовка стен керамической плиткой стандартного размера (сан.узел)</td>
				<td class="unit">26 м<sup>2</sup></td>
			</tr>
            
           
          
            <tr>
            	<th colspan="2">Пол</th>
            </tr>
            <tr>
				<td>Гидроизоляция пола смесью Водостоп</td>
				<td class="unit">49.2 м<sup>2</sup></td>
			</tr>
			<tr>
				<td>Устройство звукоизоляции в один слой из рулонного материала Шуманет</td>
				<td class="unit">49.2 м<sup>2</sup></td>
			</tr>
            <tr>
				<td>Укладка мелкозернистого керамзита толщиной 4 см с проливкой цементным молочком</td>
				<td class="unit">49.2 м<sup>2</sup></td>
			</tr>
            <tr>
				<td>Устройство маяков</td>
				<td class="unit">49.2 м<sup>2</sup></td>
			</tr>
            <tr>
				<td>Устройство цементной стяжки т.50 мм с армирующей сеткой</td>
				<td class="unit">49.2 м<sup>2</sup></td>
			</tr>
            <tr>
				<td>Устройство чистовой стяжки самовыравнивающей смесью под ламинат</td>
				<td class="unit">29.31 м<sup>2</sup></td>
			</tr>
            <tr>
				<td>Укладка рулонной подложки</td>
				<td class="unit">29.31 м<sup>2</sup></td>
			</tr>
            <tr>
				<td>Устройство ламинированного паркета (32 кл.)</td>
				<td class="unit">29.31 м<sup>2</sup></td>
			</tr>
            <tr>
				<td>Укладка напольной керамической плитки стандартного размера (сан.узел)</td>
				<td class="unit">4 м<sup>2</sup></td>
			</tr>
            <tr>
				<td>Укладка керамогранита (коридор, кухня)</td>
				<td class="unit">14 м<sup>2</sup></td>
			</tr>
            <tr>
				<td>Установка плинтуса пластикового</td>
				<td class="unit">48.4 п.м.</td>
			</tr>
            <tr>
            	<th colspan="2">Электромонтажные работы</th>
            </tr>
            <tr>
				<td>Укладка нагревательного элемента теплого пола</td>
				<td class="unit">5.5 м<sup>2</sup></td>
            </tr>
			<tr>
            	<th colspan="2">Сантехнические работы</th>
            </tr>
            <tr>
				<td>Демонтаж чугунных труб канализации</td>
				<td class="unit">1 п.м.</td>
			</tr>
            <tr>
				<td>Прокладка канализационных труб</td>
				<td class="unit">1 компл.</td>
			</tr>
            <tr>
				<td>Прокладка медных труб водоснабжения д.15 SANCO</td>
				<td class="unit">10 п.м.</td>
			</tr>
            <tr>
				<td>Установка соединительной и запорной арматуры</td>
				<td class="unit"></td>
			</tr>
            <tr>
				<td>Установка фильтров сетчатых (грубой очистки)</td>
				<td class="unit">1 шт.</td>
			</tr>
            <tr>
				<td>Установка гребенок</td>
				<td class="unit"></td>
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
            <tr>
				<th colspan="2">Разные работы</th>
			</tr>
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
	<div class="price">
		<div class="prefix">Мы сделали это всего за</div>
		<?php
		$value = 199345;
		?>
		<div class="value"><?php echo number_format($value, 0, ' ', ' '); ?></div>
		<div class="note">Вы можете расширить или сократить объем работ на свое усмотрение. Цена указана без учета материалов.</div>
	</div>	
	<?php } else if ($options['type'] == 4) { ?>
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
	<?php } else if ($options['type'] == 5) { ?>
	<div class="services">
		<div class="task">
			<strong>Описание проекта:</strong> Монтаж теплого пола 10 м<sup>2</sup>, в гостинной 21 м<sup>2</sup>. Остальная площадь занята мебелью. 
		</div>
		<table>
			<tr>
				<td>Подготовка поверхности</td>
				<td class="unit">21 м<sup>2</sup></td>
			</tr>
			<tr>
				<td>Монтаж нагревательных элементов с подключением</td>
				<td class="unit">10 м<sup>2</sup></td>
			</tr>
			<tr>
				<td>Прокладка силовой линии</td>
				<td class="unit">10 п. м.</td>
			</tr>
            <tr>
				<td>Укладка теплоотражающего материала</td>
				<td class="unit">10 м<sup>9</sup></td>
			</tr>
			<tr>
				<td>Укладка полиэтиленовой пленки</td>
				<td class="unit">10 м<sup>9</sup></td>
			</tr>
            <tr>
				<td>Настил ламината</td>
				<td class="unit">21 м<sup>9</sup></td>
			</tr>
            <tr>
				<td>Мотаж плинтуса (пластик)</td>
				<td class="unit">27 п. м.</td>
			</tr>
		</table>
	</div>
	<div class="price">
		<div class="prefix">Мы сделали это всего за</div>
		<?php
		$value = 22370;
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
				'project': 'floor3'
			});
		});
	});
</script>

<script type="text/javascript">
<?php require 'scripts/price.js'; ?>
</script>
