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
					<option value="1"<?php echo $selected['options']['type'][1]; ?>>Кухня в новостройке, 9 м²</option>
					<option value="2"<?php echo $selected['options']['type'][2]; ?>>Ремонт 1-ой комнаты</option>
                    <option value="3"<?php echo $selected['options']['type'][3]; ?>>Косметический ремонт кухни и комнаты</option>
					<option value="4"<?php echo $selected['options']['type'][4]; ?>>Пол в спальне, 16 м²</option>
				</select>
			</td>
		</tr>
	</table>
</div>

<div class="result">
	<?php if ($options['type'] == 1) { ?>
	<div class="services">
		<div class="task">
			<strong>Описание проекта:</strong> Капитальный ремонт кухни в новостройке, 9 м<sup>2</sup>.
		</div>
		<table>
        	<tr>
				<th colspan="2">Потолки</th>
			</tr>
			<tr>
				<td>Грунтовка потолка укрепляющем грунтом "бетоноконтакт"</td>
				<td class="unit">8.84 м<sup>2</sup></td>
			</tr>
			<tr>
				<td>Выравнивающая полимерцементная штукатурка</td>
				<td class="unit">8.84 м<sup>2</sup></td>
			</tr>
			<tr>
				<td>Шпаклевка потолка со шлифовкой</td>
				<td class="unit">8.84 м<sup>2</sup></td>
			</tr>
			<tr>
				<td>Грунтовка потолка укрепляющем грунтом под окраску</td>
				<td class="unit">8.84 м<sup>2</sup></td>
			</tr>
            <tr>
				<td>Окраска потолка водоэмульсионными красками</td>
				<td class="unit">8.84 м<sup>9</sup></td>
			</tr>
            <tr>
				<th colspan="2">Стены</th>
			</tr>
			<tr>
				<td>Грунтовка стен укрепляющем грунтом "бетоноконтакт"</td>
				<td class="unit">25 м<sup>2</sup></td>
			</tr>
			<tr>
				<td>Выравнивание стен сухой смесью типа "Родбанд"</td>
				<td class="unit">25 м<sup>2</sup></td>
			</tr>
			<tr>
				<td>Оклейка обоев улучшенного качества</td>
				<td class="unit">23 м<sup>2</sup></td>
			</tr>
			<tr>
				<td>Облицовка фартука керамической плиткой</td>
				<td class="unit">3 м<sup>2</sup></td>
			</tr>
            <tr>
				<td>Затирка швов по керамической плитке</td>
				<td class="unit">3 м<sup>9</sup></td>
			</tr>
            <tr>
				<th colspan="2">Полы</th>
			</tr>
			<tr>
				<td>Выравнивающая полимерцементная стяжка</td>
				<td class="unit">8.84 м<sup>2</sup></td>
			</tr>
			<tr>
				<td>Устройство пола из керамической плитки</td>
				<td class="unit">8.84 м<sup>2</sup></td>
			</tr>
			<tr>
				<td>Затирка швов по керамической плитке</td>
				<td class="unit">8.84 м<sup>2</sup></td>
			</tr>
			<tr>
				<td>Установка пластикового плинтуса</td>
				<td class="unit">12.05 м.п.</td>
			</tr>
           	 <tr>
				<th colspan="2">Электрика</th>
			</tr>
			<tr>
				<td>Установка розеток (на готовое место)</td>
				<td class="unit">5 шт.</td>
			</tr>
			<tr>
				<td>Прокладка кабеля в штробе</td>
				<td class="unit">5 шт.</td>
			</tr>
			<tr>
				<td>Монтаж розетки под электроплиту на готовое установочное место</td>
				<td class="unit">1 шт.</td>
			</tr>
			
           
		</table>
	</div>
	<div class="price">
		<div class="prefix">Мы сделали это всего за</div>
		<?php
		$value = 25255;
		?>
		<div class="value"><?php echo number_format($value, 0, ' ', ' '); ?></div>
		<div class="note">Вы можете расширить или сократить объем работ на свое усмотрение. Цена указана без учета материалов.</div>
	</div>
    <?php } else if ($options['type'] == 2) { ?>
    <div class="services">
		<div class="task">
			<strong>Описание проекта:</strong> В виду отсутвия средств на проведение ремонта сразу всей квартиры заказчик решил проводить ремонт по этапно. Начали ремонт с одной комнаты.
		</div>
		<table>
			<tr>
            	<th colspan="2">Потолок</th>
            </tr>
            <tr>
				<td>Грунтовка потолков за 1 раз</td>
				<td class="unit">16.69 м<sup>2</sup></td>
			</tr>
           <tr>
				<td>Окраска потолка водоэмульсионной краской за 2 раза</td>
				<td class="unit">16.69 м<sup>2</sup></td>
			</tr>
            <tr>
            	<th colspan="2">Стены</th>
            </tr>
            <tr>
				<td>Зачистка стен от старых обоев</td>
				<td class="unit">37.96 м<sup>2</sup></td>
			</tr>
            <tr>
				<td>Грунтовка стен за 1 раз</td>
				<td class="unit">36.07 м<sup>2</sup></td>
			</tr>
            <tr>
				<td>Оклеивание стен флизелиновыми обоями (комната)</td>
				<td class="unit">33.37 м<sup>2</sup></td>
			</tr>
            <tr>
				<th colspan="2">Пол</th>
			</tr>
            <tr>
				<td>Демонтаж плинтусов</td>
				<td class="unit">14.46 м. п.</td>
			</tr>
             <tr>
				<td>Демонтаж линолеума</td>
				<td class="unit">16.69 м<sup>2</sup></td>
			</tr>
             <tr>
				<td>Грунтовка пола</td>
				<td class="unit">16.69 м<sup>2</sup></td>
			</tr>
             <tr>
				<td>Устройство маяков</td>
				<td class="unit">16.69 м<sup>2</sup></td>
			</tr>
             <tr>
				<td>Устройство чистовой стяжки самовыравнивающей смесью под ламинат (толщ.10 мм.)</td>
				<td class="unit">16.69 м<sup>2</sup></td>
			</tr>
             <tr>
				<td>Укладка подложки</td>
				<td class="unit">16.69 м<sup>2</sup></td>
			</tr>
             <tr>
				<td>Устройство ламинированного паркета (32 кл.)</td>
				<td class="unit">16.69 м<sup>2</sup></td>
			</tr>
             <tr>
				<td>Установка плинтуса пластикового</td>
				<td class="unit">22.18 м. п.</td>
			</tr>
			
		</table>
	</div>
	<div class="price">
		<div class="prefix">Мы сделали это всего за</div>
		<?php
		$value = 26679;
		?>
		<div class="value"><?php echo number_format($value, 0, ' ', ' '); ?></div>
		<div class="note">Вы можете расширить или сократить объем работ на свое усмотрение. Цена указана без учета материалов.</div>
	</div>
    <?php } else if ($options['type'] == 3) { ?>
    <div class="services">
		<div class="task">
			<strong>Описание проекта:</strong> Однокомнатная картира, давно не делали ремонт, требовалось произвести косметический ремонт в комнатах, а в кухне и прихожей помимо косметического ремонта требовались выровнить пол для укладки ламината.
		</div>
		<table>
        	<tr>
            	<th colspan="2"><strong>Кухня</strong></th>
            </tr>
            <tr>
            	<th colspan="2">Пол</th>
            </tr>
			<tr>
				<td>Демонтаж плинтусов</td>
				<td class="unit">8.92 м. п.</td>
			</tr>
           <tr>
				<td>Демонтаж плитки ПВХ</td>
				<td class="unit">6.01 м<sup>2</sup></td>
			</tr>
            <tr>
				<td>Грунтовка пола</td>
				<td class="unit">6.01 м<sup>2</sup></td>
			</tr>
            <tr>
				<td>Устройство маяков</td>
				<td class="unit">6.01 м<sup>2</sup></td>
			</tr>
            <tr>
				<td>Устройство чистовой стяжки самовыравнивающей смесью под ламинат (толщ.10 мм.)</td>
				<td class="unit">6.01 м<sup>2</sup></td>
			</tr>
            <tr>
				<td>Укладка подложки</td>
				<td class="unit">6.01 м<sup>2</sup></td>
			</tr>
            <tr>
				<td>Устройство ламинированного паркета (32 кл.)</td>
				<td class="unit">6.01 м<sup>2</sup></td>
			</tr>
            <tr>
				<td>Установка плинтуса пластикового	п.м.</td>
				<td class="unit">8.92 м. п.</td>
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
				<td class="unit">10 м. п.</td>
			</tr>
            <tr>
				<td>Установка межкомнатной двери в комплекте</td>
				<td class="unit">1 шт.</td>
			</tr>
            <tr>
				<td>Врезка РУЧКИ – защелки</td>
				<td class="unit">1 компл.</td>
			</tr>
            <tr>
				<td>Установка наличников</td>
				<td class="unit">10 м. п.</td>
			</tr>
            
            
            
            <tr>
            	<th colspan="2">Стены</th>
            </tr>
            <tr>
				<td>Зачистка стен от старых обоев</td>
				<td class="unit">19.54 м<sup>2</sup></td>
			</tr>
           <tr>
				<td>Грунтовка стен за 1 раз</td>
				<td class="unit">19.54 м<sup>2</sup></td>
			</tr>
            <tr>
				<td>Оклеивание стен флизелиновыми обоями</td>
				<td class="unit">16.54 м<sup>2</sup></td>
			</tr>
            <tr>
				<td>Укладка плитки (фартук)</td>
				<td class="unit">3.2 м<sup>2</sup></td>
			</tr>
            
            
            
           
            		
           
             <tr>
            	<th colspan="2"><strong>Комната</strong></th>
            </tr>
             <tr>
            	<th colspan="2">Потолок</th>
            </tr>
            <tr>
				<td>Грунтовка потолков за 1 раз</td>
				<td class="unit">16.69 м<sup>2</sup></td>
			</tr>
           <tr>
				<td>Окраска потолка водоэмульсионной краской за 2 раза</td>
				<td class="unit">16.69 м<sup>2</sup></td>
			</tr>
            
            
            
            		
            
            <tr>
            	<th colspan="2">Стены</th>
            </tr>
            <tr>
				<td>Зачистка стен от старых обоев</td>
				<td class="unit">37.96 м<sup>2</sup></td>
			</tr>
           <tr>
				<td>Грунтовка стен за 1 раз</td>
				<td class="unit">36.07 м<sup>2</sup></td>
			</tr>
            <tr>
				<td>Оклеивание стен флизелиновыми обоями (комната)</td>
				<td class="unit">33.37 м<sup>2</sup></td>
			</tr>
            
            
            
            <tr>
            	<th colspan="2">Пол</th>
            </tr>
            <tr>
				<td>Демонтаж плинтусов</td>
				<td class="unit">14.46 м. п.</td>
			</tr>
           <tr>
				<td>Демонтаж линолеума</td>
				<td class="unit">16.69 м<sup>2</sup></td>
			</tr>
            <tr>
				<td>Грунтовка пола</td>
				<td class="unit">16.69 м<sup>2</sup></td>
			</tr>
            <tr>
				<td>Устройство маяков</td>
				<td class="unit">16.69 м<sup>2</sup></td>
			</tr>
            <tr>
				<td>Устройство чистовой стяжки самовыравнивающей смесью под ламинат (толщ.10 мм.)</td>
				<td class="unit">16.69 м<sup>2</sup></td>
			</tr>
            <tr>
				<td>Укладка подложки</td>
				<td class="unit">16.69 м<sup>2</sup></td>
			</tr>
            <tr>
				<td>Устройство ламинированного паркета (32 кл.)</td>
				<td class="unit">16.69 м<sup>2</sup></td>
			</tr>
             <tr>
				<td>Установка плинтуса пластикового</td>
				<td class="unit">22.18 м. п.</td>
			</tr>
			
            
           
            
            <tr>
            	<th colspan="2"><strong>Прихожая</strong></th>
            </tr>
            <tr>
            	<th colspan="2">Потолок</th>
            </tr>
            <tr>
				<td>Грунтовка потолков за 1 раз</td>
				<td class="unit">6.46 м<sup>2</sup></td>
			</tr>
           <tr>
				<td>Окраска потолка водоэмульсионной краской за 2 раза</td>
				<td class="unit">6.46 м<sup>2</sup></td>
			</tr>
           
           
            
            <tr>
            	<th colspan="2">Стены</th>
            </tr>
            <tr>
				<td>Зачистка стен от старых обоев</td>
				<td class="unit">31.19 м<sup>2</sup></td>
			</tr>
           <tr>
				<td>Грунтовка стен за 1 раз</td>
				<td class="unit">29.29 м<sup>2</sup></td>
			</tr>
            <tr>
				<td>Оклеивание стен обоями под покраску</td>
				<td class="unit">29.29 м<sup>2</sup></td>
			</tr>
            <tr>
				<td>Окраска обоев водоэмульсионной краской за 2 раза</td>
				<td class="unit">29.29 м<sup>2</sup></td>
			</tr>
            
            
            		
            
            
            <tr>
            	<th colspan="2">Пол</th>
            </tr>
            <tr>
				<td>Демонтаж плинтусов</td>
				<td class="unit">10.78 м. п.</td>
			</tr>
           <tr>
				<td>Демонтаж линолеума</td>
				<td class="unit">6.46 м<sup>2</sup></td>
			</tr>
            <tr>
				<td>Грунтовка пола</td>
				<td class="unit">6.46 м<sup>2</sup></td>
			</tr>
            <tr>
				<td>Устройство маяков</td>
				<td class="unit">6.46 м<sup>2</sup></td>
			</tr>
            <tr>
				<td>Устройство чистовой стяжки самовыравнивающей смесью под ламинат (толщ.10 мм.)</td>
				<td class="unit">6.46 м<sup>2</sup></td>
			</tr>
            <tr>
				<td>Укладка подложки</td>
				<td class="unit">6.46 м<sup>2</sup></td>
			</tr>
            <tr>
				<td>Устройство ламинированного паркета (32 кл.)</td>
				<td class="unit">6.46 м<sup>2</sup></td>
			</tr>
             <tr>
				<td>Установка плинтуса пластикового</td>
				<td class="unit">9.88 м. п.</td>
			</tr>    
            <tr>
            	<th colspan="2">Электромонтажные работы	</th>
            </tr>
            <tr>
				<td>Замена ТОЧКИ электрической (розетка, выключатель)</td>
				<td class="unit">9 шт.</td>
			</tr>
           <tr>
				<td>Установка розетки, выключателя, телефонной и интернет розеток в бетонных стенах с пробивкой гнезда под подрозетник (расценка за 1 шт без стоимости розетки, выключателя)</td>
				<td class="unit">2 шт.</td>
			</tr>
            
            
            
            <tr>
            	<th colspan="2">Разные работы</th>
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
				<td class="unit">1 тн.</td>
			</tr>
		</table>
	</div>
	<div class="price">
		<div class="prefix">Мы сделали это всего за</div>
		<?php
		$value = 75665;
		?>
		<div class="value"><?php echo number_format($value, 0, ' ', ' '); ?></div>
		<div class="note">Вы можете расширить или сократить объем работ на свое усмотрение. Цена указана без учета материалов.</div>
	</div>
    <?php } else if ($options['type'] == 4) { ?>
	<div class="services">
		<div class="task">
			<strong>Описание проекта:</strong> Пол в спальне новостройки 16 м<sup>2</sup>
		</div>
		<table>
			<tr>
				<td>Подготовка поверхности</td>
				<td class="unit">16 м<sup>2</sup></td>
			</tr>
           <tr>
				<td>Устройство самониверующейся смесью до 5 см</td>
				<td class="unit">16 м<sup>2</sup></td>
			</tr>
            <tr>
				<td>Монтаж плинтуса</td>
				<td class="unit">21 м. п.</td>
			</tr>
            <tr>
				<td>Замкового плавающего пробкового напольного покрытия</td>
				<td class="unit">16 м<sup>2</sup></td>
			</tr>
           
			
		</table>
	</div>
	<div class="price">
		<div class="prefix">Мы сделали это всего за</div>
		<?php
		$value = 16206;
		?>
		<div class="value"><?php echo number_format($value, 0, ' ', ' '); ?></div>
		<div class="note">Вы можете расширить или сократить объем работ на свое усмотрение. Цена указана без учета материалов.</div>
	</div>    
	<?php } ?>
</div>

<script type="text/javascript">
	$(document).ready(function(){
		$('#content div.project div.options select').change(function(){
			var options = {};
			$('#content div.project div.options select').each(function(index){
				var name = $(this).attr('class');
				var val = $(this).val();
				options[name] = val;
			});
			$('#content div.project').load('/ajax/projects.php',{
				'options': options,
				'project': 'plintus'
			});
		});
	});
</script>

<script type="text/javascript">
<?php require 'scripts/price.js'; ?>
</script>
