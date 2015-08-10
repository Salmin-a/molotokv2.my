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
					<option value="1"<?php echo $selected['options']['type'][1]; ?>>Наливной 3D-пол в ванной, 10 м²</option>
					<option value="2"<?php echo $selected['options']['type'][2]; ?>>Теплый пол в детской комнате, 10 м²</option>
                    <option value="3"<?php echo $selected['options']['type'][3]; ?>>Теплый пол на кухне под плитку, 10 м²</option>
					<option value="4"<?php echo $selected['options']['type'][4]; ?>>Теплый пол под ламинат в гостинной, 21 м²</option>
                    <option value="5"<?php echo $selected['options']['type'][5]; ?>>Теплый пол под плитку в ванной, 4 м²</option>
					<option value="6"<?php echo $selected['options']['type'][6]; ?>>Теплый пол в студии, 50 м²</option>
				</select>
			</td>
		</tr>
	</table>
</div>

<div class="result">
	<?php if ($options['type'] == 1) { ?>
	<div class="services">
    <div class="task">
			<strong>Описание проекта:</strong> Подготовка поверхности для изготовления 3D полов в ванной 10 м<sup>2</sup>
		</div>
		<table>
			<tr>
				<td>Устройство стяжки цементно-песчанной смесью до 5 см</td>
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
    <?php } else if ($options['type'] == 2) { ?>
    <div class="services">
		<div class="task">
			<strong>Описание проекта:</strong> В детской комнате общей площадью 14 м<sup>2</sup>, необходимо было сделать теплый пол площадью 10 м<sup>2</sup> остальная площадь занята мебелью
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
				<td class="unit">10 м. п.</td>
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
				<td>Настил ковролин и линолеум</td>
				<td class="unit">14 м<sup>2</sup></td>
			</tr>
            <tr>
				<td>Мотаж плинтуса (пластик)</td>
				<td class="unit">19 м. п.</td>
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
    <?php } else if ($options['type'] == 3) { ?>
    <div class="services">
		<div class="task">
			<strong>Описание проекта:</strong> Укладка теплых полов под плитку в кухне площадью 10 м<sup>2</sup>. 
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
				<td class="unit">10 м<sup>2</sup></td>
			</tr>
			<tr>
				<td>Укладка теплоотражающего материала</td>
				<td class="unit">5 м<sup>2</sup></td>
			</tr>
            <tr>
				<td>Уклаладка плитки</td>
				<td class="unit">9 м<sup>5</sup></td>
			</tr>
			<tr>
				<td>затирка плиточных швов</td>
				<td class="unit">9 м<sup>5</sup></td>
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
    <?php } else if ($options['type'] == 4) { ?>
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
    <?php } else if ($options['type'] == 5) { ?>
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
		$value = 7100;
		?>
		<div class="value"><?php echo number_format($value, 0, ' ', ' '); ?></div>
		<div class="note">Вы можете расширить или сократить объем работ на свое усмотрение. Цена указана без учета материалов.</div>
	</div>
    <?php } else if ($options['type'] == 6) { ?>
    <div class="services">
		<div class="task">
			<strong>Описание проекта:</strong> Монтаж теплого пола в студии 50,73 м<sup>2</sup>, основа для 3D пола. Теплый пол укладывался на 16 м<sup>2</sup> которые не заняты мебелью.
		</div>
		<table>
        	<tr>
				<td>Подготовка поверхности</td>
				<td class="unit">50.73 м<sup>2</sup></td>
			</tr>
           <tr>
				<td>Монтаж нагревательных элементов с подключением</td>
				<td class="unit">16 м<sup>2</sup></td>
			</tr>
            <tr>
				<td>Прокладка силовой линии</td>
				<td class="unit">10 м. п.</td>
			</tr>
            <tr>
				<td>Укладка теплоотражающего материала</td>
				<td class="unit">16 м<sup>2</sup></td>
			</tr>
            <tr>
				<td>Выравнивание пола самонивелирующей смесью до 3 см</td>
				<td class="unit">50.73 м<sup>2</sup></td>
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
				'project': 'tiopliy'
			});
		});
	});
</script>

<script type="text/javascript">
<?php require 'scripts/price.js'; ?>
</script>
