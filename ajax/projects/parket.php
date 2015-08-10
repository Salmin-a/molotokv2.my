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
					<option value="1"<?php echo $selected['options']['type'][1]; ?>>Укладка паркета в гостинной, 20 м²</option>
					<option value="2"<?php echo $selected['options']['type'][2]; ?>>Изготовление 3D пола в ванной, 10 м²</option>
				</select>
			</td>
		</tr>
	</table>
</div>

<div class="result">
	<?php if ($options['type'] == 1) { ?>
	<div class="services">
		<div class="task">
			<strong>Описание проекта:</strong> Пол в гостинной, новостройка 20 м<sup>2</sup>
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
				<td>Монтаж плинтуса</td>
				<td class="unit">24 м.п.</td>
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
    
    <?php } else if ($options['type'] == 2) { ?>
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
				'project': 'parket'
			});
		});
	});
</script>

<script type="text/javascript">
<?php require 'scripts/price.js'; ?>
</script>
