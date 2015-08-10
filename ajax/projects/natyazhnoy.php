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
					<option value="1"<?php echo $selected['options']['type'][1]; ?>>В детской комнате, 12 м²</option>
					<option value="2"<?php echo $selected['options']['type'][2]; ?>>В зале, 20 м²</option>
                    <option value="3"<?php echo $selected['options']['type'][3]; ?>>На кухне, 12 м²</option>
					<option value="4"<?php echo $selected['options']['type'][4]; ?>>Зала в новостройке, 24 м²</option>
                    <option value="5"<?php echo $selected['options']['type'][5]; ?>>В совмещенном санузле, 4 м²</option>					
				</select>
			</td>
		</tr>
	</table>
</div>

<div class="result">
	<?php if ($options['type'] == 1) { ?>
        <div class="services">
		<div class="task">
			<strong>Описание проекта:</strong> Потолок в детской комнате. В старой пятиэтажке потолок был в ужасном состоянии после того как залили соседи (прорвало батарею). Решили сделать натяжной потолок. Для примера, штукатурка, шпаклевка, покраска обошлась бы примерно 12000
		</div>
		<table>
			<tr>
				<td>Натяжной потолок</td>
				<td class="unit">12 м<sup>2</sup></td>
			</tr>
           <tr>
				<td>Демонтаж люстры</td>
				<td class="unit">1 шт.</td>
			</tr>
            <tr>
				<td>Грунтовка потолков за 1 раз</td>
				<td class="unit">12 м<sup>2</sup></td>
			</tr>
            <tr>
				<td>Обход трубы</td>
				<td class="unit">2 шт.</td>
			</tr>
            <tr>
				<td>Установка кольца под люстру</td>
				<td class="unit">1 шт.</td>
			</tr>
            <tr>
				<td>Установка люстры</td>
				<td class="unit">1 шт.</td>
			</tr>
		</table>
	</div>
	<div class="price">
		<div class="prefix">Мы сделали это всего за</div>
		<?php
		$value = 8220;
		?>
		<div class="value"><?php echo number_format($value, 0, ' ', ' '); ?></div>
		<div class="note">Вы можете расширить или сократить объем работ на свое усмотрение.</div>
	</div>
    <?php } else if ($options['type'] == 2) { ?>
    	<div class="services">
		<div class="task">
			<strong>Описание проекта:</strong> Потолок в зале. Дом новостройка.
		</div>
		<table>
			<tr>
				<td>Натяжной потолок 20 м<sup>2</sup></td>
				<td class="unit">1 м<sup>2</sup></td>
			</tr>
           <tr>
				<td>Демонтаж люстры</td>
				<td class="unit">1 шт.</td>
			</tr>
            <tr>
				<td>Грунтовка потолков за 1 раз</td>
				<td class="unit">20 м<sup>2</sup></td>
			</tr>
            <tr>
				<td>Обход трубы</td>
				<td class="unit">1 шт.</td>
			</tr>
            <tr>
				<td>Установка кольца под люстру</td>
				<td class="unit">1 шт.</td>
			</tr>
            <tr>
				<td>Установка стойки точечного светильника + установка светильника</td>
				<td class="unit">4 шт.</td>
			</tr>
            <tr>
				<td>Светильники</td>
				<td class="unit">4 шт.</td>
			</tr>
            <tr>
				<td>Установка люстры</td>
				<td class="unit">1 шт.</td>
			</tr>
			
		</table>
	</div>
	<div class="price">
		<div class="prefix">Мы сделали это всего за</div>
		<?php
		$value = 21090;
		?>
		<div class="value"><?php echo number_format($value, 0, ' ', ' '); ?></div>
		<div class="note">Вы можете расширить или сократить объем работ на свое усмотрение.</div>
	</div>
    <?php } else if ($options['type'] == 3) { ?>
    	<div class="services">
		<div class="task">
			<strong>Описание проекта:</strong> Потолок в кухне. 9-ти этажный дом. Давно не делался ремонт, потолок был в жирных разводах. Прогрунтовали и закрыли все это натяжным потолком. 
		</div>
		<table>
			<tr>
				<td>Натяжной потолок 12 м<sup>2</sup></td>
				<td class="unit">1 шт.</td>
			</tr>
           <tr>
				<td>Демонтаж люстры</td>
				<td class="unit">1 шт.</td>
			</tr>
            <tr>
				<td>Грунтовка потолков за 1 раз</td>
				<td class="unit">9 м<sup>2</sup></td>
			</tr>
            <tr>
				<td>Обход трубы</td>
				<td class="unit">2 шт.</td>
			</tr>
            <tr>
				<td>Установка кольца под люстру</td>
				<td class="unit">1 шт.</td>
			</tr>
            <tr>
				<td>Установка люстры</td>
				<td class="unit">1 шт.</td>
			</tr>
		</table>
	</div>
	<div class="price">
		<div class="prefix">Мы сделали это всего за</div>
		<?php
		$value = 9210;
		?>
		<div class="value"><?php echo number_format($value, 0, ' ', ' '); ?></div>
		<div class="note">Вы можете расширить или сократить объем работ на свое усмотрение.</div>
	</div>
    <?php } else if ($options['type'] == 4) { ?>
    	<div class="services">
		<div class="task">
			<strong>Описание проекта:</strong> Потолок в зале. Дом новостройка.
		</div>
		<table>
			<tr>
				<td>Натяжной потолок 24 м<sup>2</sup> c Art печатью 6 м<sup>2</sup>. Сатин белый 220</td>
				<td class="unit">1 шт.</td>
			</tr>
           <tr>
				<td>Демонтаж люстры</td>
				<td class="unit">1 шт.</td>
			</tr>
            <tr>
				<td>Грунтовка потолков за 1 раз</td>
				<td class="unit">24 м<sup>2</sup></td>
			</tr>
            <tr>
				<td>Обход трубы</td>
				<td class="unit">1 шт.</td>
			</tr>
            <tr>
				<td>Установка стойки точечного светильника + установка светильника</td>
				<td class="unit">8 шт.</td>
			</tr>
            <tr>
				<td>Светильники</td>
				<td class="unit">8 шт.</td>
			</tr>
		</table>
	</div>
	<div class="price">
		<div class="prefix">Мы сделали это всего за</div>
		<?php
		$value = 42922;
		?>
		<div class="value"><?php echo number_format($value, 0, ' ', ' '); ?></div>
		<div class="note">Вы можете расширить или сократить объем работ на свое усмотрение.</div>
	</div>
    <?php } else if ($options['type'] == 5) { ?>
        <div class="services">
            <div class="task">
                <strong>Описание проекта:</strong> Потолок в совмещенном санузле.
            </div>
            <table>
                <tr>
                    <td>Натяжной потолок 4 м<sup>2</sup> Капельки воды</td>
                    <td class="unit">1 шт.</td>
                </tr>
               <tr>
                    <td>Грунтовка потолков за 1 раз</td>
                    <td class="unit">4 м<sup>2</sup></td>
                </tr>
                <tr>
                    <td>Дополнительный угол</td>
                    <td class="unit">2 шт.</td>
                </tr>
                <tr>
                    <td>Светильники</td>
                    <td class="unit">8 шт.</td>
                </tr>
                <tr>
                    <td>Установка стойки точечного светильника + установка светильника</td>
                    <td class="unit">6 шт.</td>
                </tr>
            </table>
        </div>
        <div class="price">
            <div class="prefix">Мы сделали это всего за</div>
            <?php
            $value = 12900;
            ?>
            <div class="value"><?php echo number_format($value, 0, ' ', ' '); ?></div>
            <div class="note">Вы можете расширить или сократить объем работ на свое усмотрение.</div>


      





        </div>
 

     <div class="tabs-content-item work">
        
        
        			<table class = "work">


				<tr class="row_of_work">


					<td><a href="/pictures/armstrong_2.jpg" rel="work" class="nyroModal"><img src="/pictures/armstrong_2.jpg" alt="" /></a></td>
					<td class="description"><strong>Установка потолка в офисном помещении 144 м<sup>2</sup></strong><br><br>
                    	&#10003;&nbsp;&nbsp;Матрикс Декоративный 600х600х12 мм <br>
                        &#10003;&nbsp;&nbsp;Монтаж уголка + уголок по периметру <br>
                    	&#10003;&nbsp;&nbsp;Подрезка панели (продольная/поперечная)<br>
                        &#10003;&nbsp;&nbsp;Обход трубопровода<br>
                        &#10003;&nbsp;&nbsp;Вывод воздуховода<br>
                        &#10003;&nbsp;&nbsp;Установка светильника</p>
                        <p><div class="armstrong_key"> "под ключ"! включая все расходные материалы,<br> доставку, замеры </div></p><br>
                        <p><strong><div>Мы сделали это всего за: <div class="workprice">116870 руб.</div></div></strong></p><br>
                    </td>					
				</tr>

								

</table>
        
            <div> 

        
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
				'project': 'natyazhnoy'
			});
		});
	});
</script>

<script type="text/javascript">
<?php require 'scripts/price.js'; ?>
</script>
