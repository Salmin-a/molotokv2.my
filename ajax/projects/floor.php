<?php

$options = $_POST['options'];

?>

<div class="options">
	<table width="100%">
		<col width="150" />
		<col width="" />
		<tr>
			<td>Тип:</td>
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
					<option value="1"<?php echo $selected['options']['type'][1]; ?>>Плитка, 10 м²</option>
					<option value="2"<?php echo $selected['options']['type'][2]; ?>>Ламинат, 18 м²</option>
					<option value="3"<?php echo $selected['options']['type'][3]; ?>>Линолеум / ковролин, 8 м²</option>
					<option value="4"<?php echo $selected['options']['type'][4]; ?>>Паркетная доска, 24 м²</option>
					<option value="5"<?php echo $selected['options']['type'][5]; ?>>Паркет, 20 м²</option>
					<option value="6"<?php echo $selected['options']['type'][6]; ?>>Клеевое пробковое покрытие, 15 м²</option>
					<option value="7"<?php echo $selected['options']['type'][7]; ?>>Замковое плавающее пробковое покрытие, 16 м²</option>
					<option value="8"<?php echo $selected['options']['type'][8]; ?>>Наливной пол, 10 м²</option>
					<option value="9"<?php echo $selected['options']['type'][9]; ?>>Теплый пол, 10 м²</option>
				</select>
			</td>
		</tr>
		<?php if ($options['type'] == 9) { ?>
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
					<option value="1"<?php echo $selected['options']['variant'][1]; ?>>Под ковролин или линолеум</option>
					<option value="2"<?php echo $selected['options']['variant'][2]; ?>>Под плитку</option>
					<option value="3"<?php echo $selected['options']['variant'][3]; ?>>Под ламинат или паркетную доску</option>
					<option value="4"<?php echo $selected['options']['variant'][4]; ?>>Под плитку в ванной</option>
					<option value="5"<?php echo $selected['options']['variant'][5]; ?>>Под наливной пол</option>
				</select>
			</td>
		</tr>
		<?php } ?>
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
			<strong>Описание проекта:</strong> Укладка ламината в детской в новой квартире 18 м<sup>2</sup>
		</div>
		<table>
			<tr>
				<td>Подготовка поверхности</td>
				<td class="unit">18 м<sup>2</sup></td>
			</tr>
			<tr>
				<td>Устройство стяжки цементно-песчанной смесью до 5 см</td>
				<td class="unit">18 м<sup>2</sup></td>
			</tr>
			<tr>
				<td>Мотаж плинтуса (пластик)</td>
				<td class="unit">22 п.м.</td>
			</tr>
			<tr>
				<td>Укладка ламината</td>
				<td class="unit">18 м<sup>2</sup></td>
			</tr>
		</table>
	</div>
	<div class="price">
		<div class="prefix">Мы сделали это всего за</div>
		<?php
		$value = 16440;
		?>
		<div class="value"><?php echo number_format($value, 0, ' ', ' '); ?></div>
		<div class="note">Вы можете расширить или сократить объем работ на свое усмотрение. Цена указана без учета материалов.</div>
	</div>
	<?php } else if ($options['type'] == 3) { ?>
	<div class="services">
    <div class="task">
			<strong>Описание проекта:</strong> Укладка линолеума/ковролина в коридоре новостройки 8 м<sup>2</sup>
		</div>
		<table>
			<tr>
				<td>Подготовка поверхности</td>
				<td class="unit">8 м<sup>2</sup></td>
			</tr>
			<tr>
				<td>Устройство стяжки цементно-песчанной смесью до 5 см</td>
				<td class="unit">8 м<sup>2</sup></td>
			</tr>
			<tr>
				<td>Мотаж плинтуса (пластик)</td>
				<td class="unit">14 п.м.</td>
			</tr>
			<tr>
				<td>Укладка линолеума / ковролина</td>
				<td class="unit">8 м<sup>2</sup></td>
			</tr>
		</table>
	</div>
	<div class="price">
		<div class="prefix">Мы сделали это всего за</div>
		<?php
		$value = 8660;
		?>
		<div class="value"><?php echo number_format($value, 0, ' ', ' '); ?></div>
		<div class="note">Вы можете расширить или сократить объем работ на свое усмотрение. Цена указана без учета материалов.</div>
	</div>
	<?php } else if ($options['type'] == 4) { ?>
	<div class="services">
    <div class="task">
			<strong>Описание проекта:</strong> Укладка паркетной доски в зале новостройки 24 м<sup>2</sup>
		</div>
		<table>
			<tr>
				<td>Подготовка поверхности</td>
				<td class="unit">24 м<sup>2</sup></td>
			</tr>
			<tr>
				<td>Устройство стяжки цементно-песчанной смесью до 5 см</td>
				<td class="unit">24 м<sup>2</sup></td>
			</tr>
			<tr>
				<td>Мотаж плинтуса (пластик)</td>
				<td class="unit">28 п.м.</td>
			</tr>
			<tr>
				<td>Укладка паркетной доски</td>
				<td class="unit">24 м<sup>2</sup></td>
			</tr>
		</table>
	</div>
	<div class="price">
		<div class="prefix">Мы сделали это всего за</div>
		<?php
		$value = 22680;
		?>
		<div class="value"><?php echo number_format($value, 0, ' ', ' '); ?></div>
		<div class="note">Вы можете расширить или сократить объем работ на свое усмотрение. Цена указана без учета материалов.</div>
	</div>
	<?php } else if ($options['type'] == 5) { ?>
	<div class="services">
    <div class="task">
			<strong>Описание проекта:</strong> Укладка паркета в гостинной новостройки 20 м<sup>2</sup>
		</div>
		<table>
			<tr>
				<td>Подготовка поверхности</td>
				<td class="unit">20 м<sup>2</sup></td>
			</tr>
			<tr>
				<td>Устройство стяжки цементно-песчанной смесью до 5 см</td>
				<td class="unit">20 м<sup>2</sup></td>
			</tr>
			<tr>
				<td>Мотаж плинтуса (пластик)</td>
				<td class="unit">24 п.м.</td>
			</tr>
			<tr>
				<td>Укладка паркета</td>
				<td class="unit">20 м<sup>2</sup></td>
			</tr>
		</table>
	</div>
	<div class="price">
		<div class="prefix">Мы сделали это всего за</div>
		<?php
		$value = 31600;
		?>
		<div class="value"><?php echo number_format($value, 0, ' ', ' '); ?></div>
		<div class="note">Вы можете расширить или сократить объем работ на свое усмотрение. Цена указана без учета материалов.</div>
	</div>
	<?php } else if ($options['type'] == 6) { ?>
	<div class="services">
    <div class="task">
			<strong>Описание проекта:</strong> Укладка напольного клеевого пробкового покрытия в спальне новостройки 15 м<sup>2</sup>
		</div>
		<table>
			<tr>
				<td>Подготовка поверхности</td>
				<td class="unit">15 м<sup>2</sup></td>
			</tr>
			<tr>
				<td>Устройство стяжки цементно-песчанной смесью до 5 см</td>
				<td class="unit">15 м<sup>2</sup></td>
			</tr>
			<tr>
				<td>Мотаж плинтуса (пластик)</td>
				<td class="unit">18 п.м.</td>
			</tr>
			<tr>
				<td>Укладка напольного клеевого пробкового покрытия</td>
				<td class="unit">15 м<sup>2</sup></td>
			</tr>
		</table>
	</div>
	<div class="price">
		<div class="prefix">Мы сделали это всего за</div>
		<?php
		$value = 16425;
		?>
		<div class="value"><?php echo number_format($value, 0, ' ', ' '); ?></div>
		<div class="note">Вы можете расширить или сократить объем работ на свое усмотрение. Цена указана без учета материалов.</div>
	</div>
	<?php } else if ($options['type'] == 7) { ?>
	<div class="services">
    <div class="task">
			<strong>Описание проекта:</strong> Укладка замкового плавающего пробкового напольного покрытия в спальне новостройки 16 м<sup>2</sup>
		</div>
		<table>
			<tr>
				<td>Подготовка поверхности</td>
				<td class="unit">16 м<sup>2</sup></td>
			</tr>
			<tr>
				<td>Устройство стяжки цементно-песчанной смесью до 5 см</td>
				<td class="unit">16 м<sup>2</sup></td>
			</tr>
			<tr>
				<td>Мотаж плинтуса (пластик)</td>
				<td class="unit">21 п.м.</td>
			</tr>
			<tr>
				<td>Укладка замкового плавающего пробкового напольного покрытия</td>
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
	<?php } else if ($options['type'] == 8) { ?>
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
	<?php } else if ($options['type'] == 9) { ?>
	<?php if ($options['variant'] == 1) { ?>
	<div class="services">
     <div class="task">
			<strong>Описание проекта:</strong> В детской комнате общей площадью 14 м<sup>2</sup> необходимо было сделать теплый пол площадью 10 м<sup>2</sup> остальная площадь занята мебелью
		</div>
		<table>
			<tr>
				<td>Подготовка поверхности</td>
				<td class="unit">14 м<sup>2</sup></td>
			</tr>
			<tr>
				<td>Монтаж нагревательных элементов с подключением</td>
				<td class="unit">10 м<sup>2</sup></td>
			</tr>
			<tr>
				<td>Прокладка силовой линии</td>
				<td class="unit">10 п.м.</td>
			</tr>
			<tr>
				<td>Укладка теплоотражающего материала</td>
				<td class="unit">10 м<sup>2</sup></td>
			</tr>
			<tr>
				<td>Укладка полиэтиленовой пленки</td>
				<td class="unit">10 м<sup>2</sup></td>
			</tr>
			<tr>
				<td>Укладка фанеры</td>
				<td class="unit">14 м<sup>2</sup></td>
			</tr>
			<tr>
				<td>Настил ковролина и линолеума</td>
				<td class="unit">14 м<sup>2</sup></td>
			</tr>
			<tr>
				<td>Мотаж плинтуса (пластик)</td>
				<td class="unit">19 п.м.</td>
			</tr>
		</table>
	</div>
	<div class="price">
		<div class="prefix">Мы сделали это всего за</div>
		<?php
		$value = 20330;
		?>
		<div class="value"><?php echo number_format($value, 0, ' ', ' '); ?></div>
		<div class="note">Вы можете расширить или сократить объем работ на свое усмотрение. Цена указана без учета материалов.</div>
	</div>
	<?php } else if ($options['variant'] == 2) { ?>
	<div class="services">
    <div class="task">
			<strong>Описание проекта:</strong> Монтаж теплого пола в кухне площадью 10 м<sup>2</sup>. Укладка теплого пола 5 м<sup>2</sup> на открытой поверхности.
		</div>
		<table>
			<tr>
				<td>Подготовка поверхности</td>
				<td class="unit">9 м<sup>2</sup></td>
			</tr>
			<tr>
				<td>Монтаж нагревательных элементов с подключением</td>
				<td class="unit">5 м<sup>2</sup></td>
			</tr>
			<tr>
				<td>Прокладка силовой линии</td>
				<td class="unit">10 п.м.</td>
			</tr>
			<tr>
				<td>Укладка теплоотражающего материала</td>
				<td class="unit">5 м<sup>2</sup></td>
			</tr>
			<tr>
				<td>Уклаладка плитки</td>
				<td class="unit">9 м<sup>2</sup></td>
			</tr>
			<tr>
				<td>Затирка плиточных швов</td>
				<td class="unit">9 м<sup>2</sup></td>
			</tr>
		</table>
	</div>
	<div class="price">
		<div class="prefix">Мы сделали это всего за</div>
		<?php
		$value = 12400;
		?>
		<div class="value"><?php echo number_format($value, 0, ' ', ' '); ?></div>
		<div class="note">Вы можете расширить или сократить объем работ на свое усмотрение. Цена указана без учета материалов.</div>
	</div>
	<?php } else if ($options['variant'] == 3) { ?>
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
				<td class="unit">10 п.м.</td>
			</tr>
			<tr>
				<td>Укладка теплоотражающего материала</td>
				<td class="unit">10 м<sup>2</sup></td>
			</tr>
			<tr>
				<td>Укладка полиэтиленовой пленки</td>
				<td class="unit">10 м<sup>2</sup></td>
			</tr>
			<tr>
				<td>Настил ламината</td>
				<td class="unit">21 м<sup>2</sup></td>
			</tr>
			<tr>
				<td>Мотаж плинтуса (пластик)</td>
				<td class="unit">27 п.м.</td>
			</tr>
		</table>
	</div>
	<div class="price">
		<div class="prefix">Мы сделали это всего за</div>
		<?php
		$value = 22370
		?>
		<div class="value"><?php echo number_format($value, 0, ' ', ' '); ?></div>
		<div class="note">Вы можете расширить или сократить объем работ на свое усмотрение. Цена указана без учета материалов.</div>
	</div>
	<?php } else if ($options['variant'] == 4) { ?>
	<div class="services">
     <div class="task">
			<strong>Описание проекта:</strong> Монтеж теплого пола 2 м<sup>2</sup>, в ванной комнате 4 м<sup>2</sup> на открытой поверхности.
		</div>
		<table>
			<tr>
				<td>Подготовка поверхности</td>
				<td class="unit">4 м<sup>2</sup></td>
			</tr>
			<tr>
				<td>Монтаж нагревательных элементов с подключением</td>
				<td class="unit">4 м<sup>2</sup></td>
			</tr>
			<tr>
				<td>Прокладка силовой линии</td>
				<td class="unit">10 п.м.</td>
			</tr>
			<tr>
				<td>Укладка теплоотражающего материала</td>
				<td class="unit">4 м<sup>2</sup></td>
			</tr>
			<tr>
				<td>Уклаладка плитки</td>
				<td class="unit">4 м<sup>2</sup></td>
			</tr>
		</table>
	</div>
	<div class="price">
		<div class="prefix">Мы сделали это всего за</div>
		<?php
		$value = 6000;
		?>
		<div class="value"><?php echo number_format($value, 0, ' ', ' '); ?></div>
		<div class="note">Вы можете расширить или сократить объем работ на свое усмотрение. Цена указана без учета материалов.</div>
	</div>
	<?php } else if ($options['variant'] == 5) { ?>
	<div class="services">
     <div class="task">
			<strong>Описание проекта:</strong> Монтаж теплого пола в студии 50,73 м<sup>2</sup>, основа для 3D пола. Теплый пол укладывался на 16 м<sup>2</sup> которые не заняты мебелью.
		</div>
		<table>
			<tr>
				<td>Подготовка поверхности</td>
				<td class="unit">50,73 м<sup>2</sup></td>
			</tr>
			<tr>
				<td>Монтаж нагревательных элементов с подключением</td>
				<td class="unit">16 м<sup>2</sup></td>
			</tr>
			<tr>
				<td>Прокладка силовой линии</td>
				<td class="unit">10 п.м.</td>
			</tr>
			<tr>
				<td>Укладка теплоотражающего материала</td>
				<td class="unit">16 м<sup>2</sup></td>
			</tr>
			<tr>
				<td>Выравнивание пола самонивелирующей смесью до 3 см</td>
				<td class="unit">50,73 м<sup>2</sup></td>
			</tr>
		</table>
	</div>
	<div class="price">
		<div class="prefix">Мы сделали это всего за</div>
		<?php
		$value = 37265;
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
				'project': 'floor'
			});
		});
	});
</script>

<script type="text/javascript">
<?php require 'scripts/price.js'; ?>
</script>
