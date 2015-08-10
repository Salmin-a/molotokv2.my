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
						1 => 'Электрика в квартире, 50 м²', 
						2 => 'Электрика в комнате, 18 м²',
						3 => 'Разводка ТВ, телефона, Интернет в коттедже, 120 м², скрытая проводка',
						4 => 'Разводка ТВ, телефона, Интернет в 3-комнатной квартире, 95 м², скрытая проводка',
						5 => 'Косметический ремонт туалета, 1,4 м²',
						6 => 'Евроремонт ванной',
						7 => 'Разводка труб в ванной 4 м² закрытым способом',   
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
			$value = 48430;
		}
		else if ($_POST['options']['walls'] == 2) {
			$value = 63530;
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
			$value = 57380;
		}
		else if ($_POST['options']['walls'] == 2) {
			$value = 73680;
		}
		?>
		<div class="value"><?php echo number_format($value, 0, ' ', ' '); ?></div>
		<div class="note">Вы можете расширить или сократить объем работ на свое усмотрение. Цена указана без учета материалов.</div>
	</div>
	<?php } ?>
	
	<?php } else if ($_POST['options']['object'] == 2) { ?>
		
	<div class="services">
		<div class="task">
			<strong>Описание проекта:</strong> Замена старой проводки в комнате после короткого замыкания, 18 м<sup>2</sup>
		</div>
		<table>
			<tr>
				<td>Демонтаж точки электрической (розетка, выключатель)</td>
				<td class="unit">3 точки</td>
			</tr>
			<tr>
				<td>Демонтаж распаечной коробки</td>
				<td class="unit">1 точки</td>
			</tr>
			<tr>
				<td>Демонтаж электропроводки скрытой</td>
				<td class="unit">11 м.п.</td>
			</tr>
			<tr>
				<td>Изготовление (штробление) отверстия под точку электрическую</td>
				<td class="unit">6 точек</td>
			</tr>
			<tr>
				<td>Штробление стены под электропроводку</td>
				<td class="unit">5 м.п.</td>
			</tr>
			<tr>
				<td>Монтаж подрозетника (стакана) с заделкой гипсом</td>
				<td class="unit">6 точек</td>
			</tr>
			<tr>
				<td>Установка точки электрической (розетка, выключатель) на готовое установочное место</td>
				<td class="unit">5 точек</td>
			</tr>
			<tr>
				<td>Монтаж коробки распаянной</td>
				<td class="unit">1 точка</td>
			</tr>
			<tr>
				<td>Установка  люстры (с подключением, без сборки до 3 кг, свыше 3 кг. +30%)</td>
				<td class="unit">1 шт.</td>
			</tr>
			<tr>
				<td>Монтаж крюка</td>
				<td class="unit">1 шт.</td>
			</tr>
		</table>
	</div>
	<div class="price">
		<div class="prefix">Мы сделали это всего за</div>
		<?php
		$value = 15680;
		?>
		<div class="value"><?php echo number_format($value, 0, ' ', ' '); ?></div>
		<div class="note">Вы можете расширить или сократить объем работ на свое усмотрение. Цена указана без учета материалов.</div>
	</div>	
	<?php } else if ($_POST['options']['object'] == 3) { ?>
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
	<?php } else if ($_POST['options']['object'] == 4) { ?>	
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
		$value = 65684;
		?>
		<div class="value"><?php echo number_format($value, 0, ' ', ' '); ?></div>
		<div class="note">Вы можете расширить или сократить объем работ на свое усмотрение. Цена указана без учета материалов.</div>
	</div>
	<?php } else if ($_POST['options']['object'] == 5) { ?>	
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
		$value = 26232;
		?>
		<div class="value"><?php echo number_format($value, 0, ' ', ' '); ?></div>
		<div class="note">Вы можете расширить или сократить объем работ на свое усмотрение. Цена указана без учета материалов.</div>
	</div>		
	<?php } else if ($_POST['options']['object'] == 6) { ?>
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
		$value = 83000;
		?>
		<div class="value"><?php echo number_format($value, 0, ' ', ' '); ?></div>
		<div class="note">Вы можете расширить или сократить объем работ на свое усмотрение. Цена указана без учета материалов.</div>
	</div>			
	<?php } else if ($_POST['options']['object'] == 7) { ?>	
	<div class="services">
		<table>
			<tr>
				<td>Разводка труб водоснабжения из полипропилена (до 3-х метров): двойная точка (ГВ, ХВ)</td>
				<td class="unit">2 точки</td>
			</tr>
			<tr>
				<td>Разводка труб канализации (диаметром до 50 мм)</td>
				<td class="unit">6 м.п.</td>
			</tr>
			<tr>
				<td>Установка прибора учета (счетчика) воды</td>
				<td class="unit">2 шт.</td>
			</tr>
			<tr>
				<td>Установка крана шарового (диаметром до ¾)</td>
				<td class="unit">3 шт.</td>
			</tr>
			<tr>
				<td>Установка коллектора (гребенки)</td>
				<td class="unit">1 шт.</td>
			</tr>
			<tr>
				<td>Штробление стен под трубы водоснабжения</td>
				<td class="unit">6 м.п.</td>
			</tr>
			<tr>
				<td>Штробление стен под трубы сантехнические (канализационные)</td>
				<td class="unit">6 м.п.</td>
			</tr>
		</table>
	</div>
	<div class="price">
		<div class="prefix">Мы сделали это всего за</div>
		<?php $value = 27480; ?>
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
				'project': '<?php echo basename(__FILE__, '.php'); ?>'
			});
		});
	});
</script>
