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
					<option value="1"<?php echo $selected['options']['type'][1]; ?>>Монтаж полотенцесушителя</option>
					<option value="2"<?php echo $selected['options']['type'][2]; ?>>Разводка труб</option>
					<option value="3"<?php echo $selected['options']['type'][3]; ?>>Ремонт туалета &laquo;под ключ&raquo;</option>
					<option value="4"<?php echo $selected['options']['type'][4]; ?>>Ремонт ванной &laquo;под ключ&raquo;</option>
				</select>
			</td>
		</tr>
		<?php if ($options['type'] == 1) { ?>
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
					<option value="1"<?php echo $selected['options']['variant'][1]; ?>>Накидная гайка</option>
					<option value="2"<?php echo $selected['options']['variant'][2]; ?>>Внешняя резьба</option>
				</select>
			</td>
		</tr>
		<?php } else if ($options['type'] == 2) { ?>
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
					<option value="1"<?php echo $selected['options']['variant'][1]; ?>>Открытым способом</option>
					<option value="2"<?php echo $selected['options']['variant'][2]; ?>>Закрытым способом</option>
				</select>
			</td>
		</tr>
		<?php } else if ($options['type'] == 3) { ?>
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
					<option value="1"<?php echo $selected['options']['variant'][1]; ?>>Эконом</option>
					<option value="2"<?php echo $selected['options']['variant'][2]; ?>>Косметический</option>
				</select>
			</td>
		</tr>
		<?php } else if ($options['type'] == 4) { ?>
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
					<option value="1"<?php echo $selected['options']['variant'][1]; ?>>Эконом</option>
					<option value="2"<?php echo $selected['options']['variant'][2]; ?>>Евроремонт</option>
				</select>
			</td>
		</tr>
		<?php } ?>
	</table>
</div>

<div class="result">
	<?php if ($options['type'] == 1) { ?>
	<?php if ($options['variant'] == 1) { ?>
	<div class="services">
		<table>
			<tr>
				<td>Работы по установке</td>
				<td class="unit"></td>
			</tr>
			<tr>
				<td>Кран шаровый</td>
				<td class="unit">2 шт.</td>
			</tr>
			<tr>
				<td>Трубы</td>
				<td class="unit"></td>
			</tr>
			<tr>
				<td>Фитинги</td>
				<td class="unit"></td>
			</tr>
			<tr>
				<td>Расходные материалы</td>
				<td class="unit"></td>
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
	<?php } else if ($options['variant'] == 2) { ?>
	<div class="services">
		<table>
			<tr>
				<td>Работы по установке</td>
				<td class="unit"></td>
			</tr>
			<tr>
				<td>Кран шаровый</td>
				<td class="unit">2 шт.</td>
			</tr>
			<tr>
				<td>Муфта* 1-¾</td>
				<td class="unit">2 шт.</td>
			</tr>
			<tr>
				<td>Трубы</td>
				<td class="unit"></td>
			</tr>
			<tr>
				<td>Фитинги</td>
				<td class="unit"></td>
			</tr>
			<tr>
				<td>Расходные материалы</td>
				<td class="unit"></td>
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
	<?php } ?>
	<?php } else if ($options['type'] == 2) { ?>
	<?php if ($options['variant'] == 1) { ?>
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
		</table>
	</div>
	<div class="price">
		<div class="prefix">Мы сделали это всего за</div>
		<?php
		$value = 14520;
		?>
		<div class="value"><?php echo number_format($value, 0, ' ', ' '); ?></div>
		<div class="note">Вы можете расширить или сократить объем работ на свое усмотрение. Цена указана без учета материалов.</div>
	</div>
	<?php } else if ($options['variant'] == 2) { ?>
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
		<?php
		$value = 27480;
		?>
		<div class="value"><?php echo number_format($value, 0, ' ', ' '); ?></div>
		<div class="note">Вы можете расширить или сократить объем работ на свое усмотрение. Цена указана без учета материалов.</div>
	</div>
	<?php } ?>
	<?php } else if ($options['type'] == 3) { ?>
	<?php if ($options['variant'] == 1) { ?>
	<div class="services">
		<table>
			<tr>
				<td>Укладка платки фартук на уровне 1,6 метра</td>
				<td class="unit">6,5 м<sup>2</sup></td>
			</tr>
			<tr>
				<td>Укладка плитки на пол</td>
				<td class="unit">1,4 м<sup>2</sup></td>
			</tr>
			<tr>
				<td>Окраска стен водоимульсионной краской/ или оклейка обоями</td>
				<td class="unit">4 м<sup>2</sup></td>
			</tr>
			<tr>
				<td>Окраска потолка водоимульсионной краской / или оклейка обоями</td>
				<td class="unit">1,4 м<sup>2</sup></td>
			</tr>
			<tr>
				<td>Профилактика соеденений труб, кранов, канализации</td>
				<td class="unit">1 шт.</td>
			</tr>
		</table>
	</div>
	<div class="price">
		<div class="prefix">Мы сделали это всего за</div>
		<?php
		$value = 6932;
		?>
		<div class="value"><?php echo number_format($value, 0, ' ', ' '); ?></div>
		<div class="note">Вы можете расширить или сократить объем работ на свое усмотрение. Цена указана без учета материалов.</div>
	</div>
	<?php } else if ($options['variant'] == 2) { ?>
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
	<?php } ?>
	<?php } else if ($options['type'] == 4) { ?>
	<?php if ($options['variant'] == 1) { ?>
	<div class="services">
		<div class="task">
			<strong>Описание проекта:</strong> заказчику перед сдачей квартиры было необходимо с минимальными вложениями освежить ванную комнату.
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
	<div class="price">
		<div class="prefix">Мы сделали это всего за</div>
		<?php
		$value = 6640;
		?>
		<div class="value"><?php echo number_format($value, 0, ' ', ' '); ?></div>
		<div class="note">Вы можете расширить или сократить объем работ на свое усмотрение. Цена указана без учета материалов.</div>
	</div>
	<?php } else if ($options['variant'] == 2) { ?>
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
				'project': 'sanitary5'
			});
		});
	});
</script>
