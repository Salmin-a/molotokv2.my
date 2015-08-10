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
					<option value="1"<?php echo $selected['options']['type'][1]; ?>>3D пол в ванной, 10 м²</option>
					<option value="2"<?php echo $selected['options']['type'][2]; ?>>Напольное клеевое пробковое покрытие, 15 м²</option>
                    <option value="3"<?php echo $selected['options']['type'][3]; ?>>Замковое плавающее пробковое напольное покрытие, 16 м²</option>
					
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
			<strong>Описание проекта:</strong> Пол в спальне новостройки 15 м<sup>2</sup>
		</div>
		<table>
			<tr>
				<td>Подготовка поверхности</td>
				<td class="unit">15 м<sup>2</sup></td>
			</tr>
           <tr>
				<td>Устройство самониверующейся смесью до 5 см</td>
				<td class="unit">15 м<sup>2</sup></td>
			</tr>
            <tr>
				<td>Монтаж плинтуса</td>
				<td class="unit">18 м. п.</td>
			</tr>
            <tr>
				<td>укладка напольного клеевого пробкового покрытия</td>
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
    <?php } else if ($options['type'] == 3) { ?>
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
		$('div.content div.project div.options select').change(function(){
			var options = {};
			$('div.content div.project div.options select').each(function(index){
				var name = $(this).attr('class');
				var val = $(this).val();
				options[name] = val;
			});
			$('div.content div.project').load('/ajax/projects.php',{
				'options': options,
				'project': 'probka'
			});
		});
	});
</script>

<script type="text/javascript">
<?php require 'scripts/price.js'; ?>
</script>
