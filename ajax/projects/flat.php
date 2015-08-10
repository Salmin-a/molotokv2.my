<?php

$options = $_POST['options'];

?>

<div class="options">
	<table width="100%">
		<col width="150" />
		<col width="" />
		<tr>
			<td>Тип ремонта:</td>
			<td>
				<?php
				if (!isset($options['type'])) {
					$options['type'] = 1;
				}
				if ($options['type'] == 1) {
					$selected['options']['type'][1] = ' selected="selected"';
				}
				else if ($options['type'] == 2) {
					$selected['options']['type'][2] = ' selected="selected"';
				} 
				else if ($options['type'] == 3) {
					$selected['options']['type'][3] = ' selected="selected"';
				} 				
												
				?>
				<select class="type">					
                    <option value="1"<?php echo $selected['options']['type'][1]; ?>>Косметический ремонт 34м²</option>
                    <option value="2"<?php echo $selected['options']['type'][2]; ?>>Капитальный ремонт 52м²</option>
                    <option value="3"<?php echo $selected['options']['type'][3]; ?>>Эксклюзивный ремонт 74м²</option>
				</select>
			</td>
		</tr>
	</table>
</div>

<div class="result">
	
    <?php  if ($options['type'] == 1) { ?>
	<div class="services">
		<div class="task">
			
		</div>
	  <div class="group active">
		<div class="group-properties">
				<div class="group-name"><span>Потолок</span></div>
				<div class="group-price"></div>
		  </div>
		  <table>
            <tr>
			     <th>Наименование работ</th>
			     <th>Ед. измер.</th>
                 <th>Кол-во</th>
			     <!--<th>Цена</th>
			     <th>Сумма</th> -->                   
		    </tr>
              
             <tr>
               <td>Грунтование    потолка</td>
               <td class="unit">м.кв</td>
               <td class="unit">34</td>
               <!--<td class="unit">50,00</td>
               <td class="unit">1700</td>-->
             </tr>
             <tr>
               <td>Шпаклевка потолка под покраску</td>
               <td class="unit">м.кв</td>
               <td class="unit">34</td>
              <!-- <td class="unit">410,00</td>
               <td class="unit">13940</td>-->
             </tr>
             <tr>
               <td>Шлифовка потолка</td>
               <td class="unit">м.кв</td>
               <td class="unit">34</td>
              <!-- <td class="unit">90,00</td>
               <td class="unit">3060</td>-->
             </tr>
             <tr>
               <td>Покраска потолка водоэмульсионной краской</td>
               <td class="unit">м.кв</td>
               <td class="unit">34</td>
               <!--<td class="unit">300,00</td>
               <td class="unit">10200</td>-->
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
				  <th>Наименование работ</th>
				  <th>Ед. измер.</th>
                  <th>Кол-во</th>
				 <!-- <th>Цена</th>
				  <th>Сумма</th> -->                   
			  </tr>
              
               <tr>
                 <td>Удаление    старых обоев</td>
                 <td class="unit">м.кв</td>
                 <td class="unit">48,77</td>
                 <!--<td class="unit">110,00</td>
                 <td class="unit">5364,70</td>-->
               </tr>
               <tr>
                 <td>Шпаклевка стен</td>
                 <td class="unit">м.кв</td>
                 <td class="unit">48,77</td>
                <!-- <td class="unit">220,00</td>
                 <td class="unit">10729,40</td>-->
               </tr>
               <tr>
                 <td>Шпаклевка стен под покраску</td>
                 <td class="unit">м.кв</td>
                 <td class="unit">41</td>
                 <!--<td class="unit">290,00</td>
                 <td class="unit">11890,00</td>-->
               </tr>
               <tr>
                 <td>Шлифовка стен</td>
                 <td class="unit">м.кв</td>
                 <td class="unit">89,77</td>
               <!--  <td class="unit">40,00</td>
                 <td class="unit">3590,80</td>-->
               </tr>
               <tr>
                 <td>Грунтование стен акриловой грунтовкой </td>
                 <td class="unit">м.кв</td>
                 <td class="unit">89,77</td>
                 <!--<td class="unit">30,00</td>
                 <td class="unit">5386,20</td>-->
               </tr>
               <tr>
                 <td>Оклейка обоев текстильных обоев</td>
                 <td class="unit">м.кв</td>
                 <td class="unit">48,77</td>
                 <!--<td class="unit">400,00</td>
                 <td class="unit">19508,00</td>-->
               </tr>
               <tr>
                 <td>Покраска стен масляной краской</td>
                 <td class="unit">м.кв</td>
                 <td class="unit">41</td>
                 <!--<td class="unit">220,00</td>
                 <td class="unit">9020,00</td>-->
               </tr>
               <tr>
                 <td>Расчистка и покраска радиаторов отопление</td>
                 <td class="unit">м.кв</td>
                 <td class="unit">2</td>
             <!--    <td class="unit">800,00</td>
                 <td class="unit">1600,00</td>-->
               </tr>
               <tr>
                 <td>Расчистка и покраска труб отопления</td>
                 <td class="unit">м.п</td>
                 <td class="unit">5</td>
               <!--  <td class="unit">290,00</td>
                 <td class="unit">1450,00</td>-->
               </tr>
               <tr>
                 <td>Расчистка и покраска оконной рамы</td>
                 <td class="unit">м.кв</td>
                 <td class="unit">2</td>
               <!--  <td class="unit">1300,00</td>
                 <td class="unit">2600,00</td>-->
               </tr>
               <tr>
                 <td>Установка двери: однодольной (коробка + полотно)</td>
                 <td class="unit">шт</td>
                 <td class="unit">1</td>
             <!--    <td class="unit">2100,00</td>
                 <td class="unit">2100,00</td>-->
               </tr>
               <tr>
                 <td>Врезка РУЧКИ-защелки</td>
                 <td class="unit">шт</td>
                 <td class="unit">1</td>
               <!--  <td class="unit">410,00</td>
                 <td class="unit">410,00</td>-->
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
			     <th>Наименование работ</th>
			     <th>Ед. измер.</th>
                 <th>Кол-во</th>
			  <!--   <th>Цена</th>
			     <th>Сумма</th> -->                   
		    </tr>
              
             <tr>
               <td>Демонтаж    точки эле-ской (выключатель, розетка)</td>
               <td class="unit">шт</td>
               <td class="unit">11</td>
             <!--  <td class="unit">120,00</td>
               <td class="unit">1320,00</td>-->
             </tr>
             <tr>
               <td>Установка эл. Точки на готовое место</td>
               <td class="unit">шт</td>
               <td class="unit">11</td>
              <!-- <td class="unit">250,00</td>
               <td class="unit">2750,00</td>-->
             </tr>
          </table>
		</div>
        
	  <div class="group">
		<div class="group-properties">
				<div class="group-name"><span>Полы</span></div>
				<div class="group-price"></div>
		  </div>
			  <table>
             <tr>
				  <th>Наименование работ</th>
				  <th>Ед. измер.</th>
                  <th>Кол-во</th>
				 <!-- <th>Цена</th>
				  <th>Сумма</th>     -->               
			  </tr>
              
               <tr>
                 <td>Демонтаж    покрытий из текстиля и ПВХ</td>
                 <td class="unit">м.кв</td>
                 <td class="unit">25,365</td>
                <!-- <td class="unit">90,00</td>
                 <td class="unit">2282,85</td>-->
               </tr>
               <tr>
                 <td>Укладка плитки на пол</td>
                 <td class="unit">м.кв</td>
                 <td class="unit">2,86</td>
                 <!--<td class="unit">650,00</td>
                 <td class="unit">1859,00</td>-->
               </tr>
               <tr>
                 <td>Затирка плиточных швов</td>
                 <td class="unit">м.кв</td>
                 <td class="unit">2,86</td>
               <!--  <td class="unit">100,00</td>
                 <td class="unit">286,00</td>-->
               </tr>
               <tr>
                 <td>Настил линолеума, ковролина</td>
                 <td class="unit">м.кв</td>
                 <td class="unit">34</td>
               <!--  <td class="unit">260,00</td>
                 <td class="unit">8840,00</td>-->
               </tr>
               <tr>
                 <td>Подрезка линолеума, ковролина по прямой</td>
                 <td class="unit">м.п</td>
                 <td class="unit">38</td>
                 <!--<td class="unit">70,00</td>
                 <td class="unit">2660,00</td>-->
               </tr>
               <tr>
                 <td>Монтаж плинтуса пластик</td>
                 <td class="unit">м.п</td>
                 <td class="unit">38</td>
                 <!--<td class="unit">150,00</td>
                 <td class="unit">5700,00</td>-->
               </tr>
          </table>
		</div>
	</div>
	<div class="price">
		<div class="prefix">Мы сделали это всего за</div>
		<?php
		$value = 128246.95;
		?>
		<div class="value"><?php echo number_format($value, 0, ' ', ' '); ?></div>
		<div class="note">Вы можете расширить или сократить объем работ на свое усмотрение. Цена указана без учета материалов.</div>
	</div>
    
        <?php } else if ($options['type'] == 2) { ?>
	<div class="services">
		<div class="task">
			
		</div>
	  <div class="group active">
		<div class="group-properties">
				<div class="group-name"><span>Потолок</span></div>
				<div class="group-price"></div>
		  </div>
		  <table>
            <tr>
			     <th>Наименование работ</th>
			     <th>Ед. измер.</th>
                 <th>Кол-во</th>
			    <!-- <th>Цена</th>
			     <th>Сумма</th-->>                    
		    </tr>
              
             <tr>
               <td>Штукатурка    по маякам</td>
               <td class="unit">м.кв</td>
               <td class="unit">52,00</td>
            <!--   <td class="unit">600</td>
               <td class="unit">31200</td>-->
             </tr>
             <tr>
               <td>Грунтование потолка</td>
               <td class="unit">м.кв</td>
               <td class="unit">52</td>
               <!--<td class="unit">50,00</td>
               <td class="unit">2600</td>-->
             </tr>
             <tr>
               <td>Шпаклевка потолка под покраску</td>
               <td class="unit">м.кв</td>
               <td class="unit">52</td>
             <!--  <td class="unit">410,00</td>
               <td class="unit">21320</td>-->
             </tr>
             <tr>
               <td>Шлифовка потолка</td>
               <td class="unit">м.кв</td>
               <td class="unit">52</td>
             <!--  <td class="unit">90,00</td>
               <td class="unit">4680</td>-->
             </tr>
             <tr>
               <td>Покраска потолка водоэмульсионной краской</td>
               <td class="unit">м.кв</td>
               <td class="unit">52</td>
             <!--  <td class="unit">300,00</td>
               <td class="unit">15600</td>-->
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
				  <th>Наименование работ</th>
				  <th>Ед. измер.</th>
                  <th>Кол-во</th>
				  <!--<th>Цена</th>
				  <th>Сумма</th>   -->                 
			  </tr>
              
               <tr>
                 <td>Демонтаж    старых обоев</td>
                 <td class="unit">м.кв</td>
                 <td class="unit">111</td>
                <!-- <td class="unit">110,00</td>
                 <td class="unit">12210,00</td>-->
               </tr>
               <tr>
                 <td>Штукатурка по маякам</td>
                 <td class="unit">м.кв</td>
                 <td class="unit">111</td>
                <!-- <td class="unit">500,00</td>
                 <td class="unit">55500,00</td>-->
               </tr>
               <tr>
                 <td>Шпаклевка стен</td>
                 <td class="unit">м.кв</td>
                 <td class="unit">111</td>
                <!-- <td class="unit">220,00</td>
                 <td class="unit">24420,00</td>-->
               </tr>
               <tr>
                 <td>Шлифовка стен</td>
                 <td class="unit">м.кв</td>
                 <td class="unit">111</td>
                <!-- <td class="unit">60,00</td>
                 <td class="unit">6660,00</td>-->
               </tr>
               <tr>
                 <td>Укладка плитки на стены</td>
                 <td class="unit">м.кв</td>
                 <td class="unit">3</td>
                <!-- <td class="unit">550,00</td>
                 <td class="unit">1650,00</td>-->
               </tr>
               <tr>
                 <td>Затирка швов</td>
                 <td class="unit">м.кв</td>
                 <td class="unit">3</td>
                <!-- <td class="unit">100,00</td>
                 <td class="unit">300,00</td>-->
               </tr>
               <tr>
                 <td>Подрезка плитки</td>
                 <td class="unit">м.п.</td>
                 <td class="unit">4</td>
               <!--  <td class="unit">350,00</td>
                 <td class="unit">1400,00</td>-->
               </tr>
               <tr>
                 <td>Грунтование стен акриловой грунтовкой (2 раза)</td>
                 <td class="unit">м.кв</td>
                 <td class="unit">111</td>
                <!-- <td class="unit">30,00</td>
                 <td class="unit">3330,00</td>-->
               </tr>
               <tr>
                 <td>Оклейка текстильных обоев</td>
                 <td class="unit">м.кв</td>
                 <td class="unit">108</td>
                <!-- <td class="unit">400,00</td>
                 <td class="unit">43200,00</td>-->
               </tr>
               <tr>
                 <td>Расчистка и покраска радиаторов отопление</td>
                 <td class="unit">м.кв</td>
                 <td class="unit">2</td>
                 <!--<td class="unit">800,00</td>
                 <td class="unit">1600,00</td>-->
               </tr>
               <tr>
                 <td>Расчистка и покраска труб отопления</td>
                 <td class="unit">м.п</td>
                 <td class="unit">10</td>
               <!--  <td class="unit">290,00</td>
                 <td class="unit">2900,00</td>-->
               </tr>
               <tr>
                 <td>Расчистка и покраска оконной рамы</td>
                 <td class="unit">м.кв</td>
                 <td class="unit">3</td>
                <!-- <td class="unit">1300,00</td>
                 <td class="unit">3900,00</td>-->
               </tr>
               <tr>
                 <td>Установка двери: однодольной (коробка + полотно)</td>
                 <td class="unit">шт</td>
                 <td class="unit">4</td>
                 <!--<td class="unit">2100,00</td>
                 <td class="unit">8400,00</td>-->
               </tr>
               <tr>
                 <td>Врезка РУЧКИ-защелки</td>
                 <td class="unit">шт</td>
                 <td class="unit">4</td>
                <!-- <td class="unit">1040,00</td>
                 <td class="unit">4160,00</td>-->
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
			     <th>Наименование работ</th>
			     <th>Ед. измер.</th>
                 <th>Кол-во</th>
			     <!--<th>Цена</th>
			     <th>Сумма</th>  -->                  
		    </tr>
              
             <tr>
               <td>Демонтаж    точки эле-ской (выключатель, розетка)</td>
               <td class="unit">шт</td>
               <td class="unit">11</td>
              <!-- <td class="unit">120,00</td>
               <td class="unit">1320,00</td>-->
             </tr>
             <tr>
               <td>Демонтаж электропроводки</td>
               <td class="unit">м.п.</td>
               <td class="unit">28</td>
               <!--<td class="unit">50,00</td>
               <td class="unit">1400,00</td>-->
             </tr>
             <tr>
               <td>Установка щитка</td>
               <td class="unit">шт.</td>
               <td class="unit">1</td>
              <!-- <td class="unit">2500,00</td>
               <td class="unit">2500,00</td>-->
             </tr>
             <tr>
               <td>Монтаж УЗО, автоматов</td>
               <td class="unit">шт</td>
               <td class="unit">5</td>
             <!--  <td class="unit">500,00</td>
               <td class="unit">2500,00</td>-->
             </tr>
             <tr>
               <td>Штробление стен</td>
               <td class="unit">м.п.</td>
               <td class="unit">28</td>
              <!-- <td class="unit">550,00</td>
               <td class="unit">15400,00</td>-->
             </tr>
             <tr>
               <td>Прокладка кабеля в готовой штробе с заделкой гипсом</td>
               <td class="unit">м.п.</td>
               <td class="unit">28</td>
              <!-- <td class="unit">150,00</td>
               <td class="unit">4200,00</td>-->
             </tr>
             <tr>
               <td>Изготовление отверстия под электроточку</td>
               <td class="unit">шт.</td>
               <td class="unit">15</td>
              <!-- <td class="unit">500,00</td>
               <td class="unit">7500,00</td>-->
             </tr>
             <tr>
               <td>Монтаж коробки распаенной</td>
               <td class="unit">шт.</td>
               <td class="unit">5</td>
             <!--  <td class="unit">550,00</td>
               <td class="unit">2750,00</td>-->
             </tr>
             <tr>
               <td>Установка эл. Точки на готовое место</td>
               <td class="unit">шт</td>
               <td class="unit">26</td>
              <!-- <td class="unit">250,00</td>
               <td class="unit">6500,00</td>-->
             </tr>
          </table>
		</div>
        
	  <div class="group">
		<div class="group-properties">
				<div class="group-name"><span>Полы</span></div>
				<div class="group-price"></div>
		  </div>
			  <table>
             <tr>
				  <th>Наименование работ</th>
				  <th>Ед. измер.</th>
                  <th>Кол-во</th>
				 <!-- <th>Цена</th>
				  <th>Сумма</th>  -->                  
			  </tr>
              
               <tr>
                 <td>Демонтаж    покрытий из текстиля и ПВХ</td>
                 <td class="unit">м.кв</td>
                 <td class="unit">52</td>
                <!-- <td class="unit">130,00</td>
                 <td class="unit">6760,00</td>-->
               </tr>
               <tr>
                 <td>Выравнивание пола самонивелирующей смесью</td>
                 <td class="unit">м.кв</td>
                 <td class="unit">52</td>
                <!-- <td class="unit">400,00</td>
                 <td class="unit">20800,00</td>-->
               </tr>
               <tr>
                 <td>Укладка плитки на пол</td>
                 <td class="unit">м.кв</td>
                 <td class="unit">16</td>
                 <!--<td class="unit">650,00</td>
                 <td class="unit">10400,00</td>-->
               </tr>
               <tr>
                 <td>Подрезка плитки</td>
                 <td class="unit">м.кв</td>
                 <td class="unit">10</td>
                <!-- <td class="unit">350,00</td>
                 <td class="unit">3500,00</td>-->
               </tr>
               <tr>
                 <td>Затирка плиточных швов</td>
                 <td class="unit">м.кв</td>
                 <td class="unit">16</td>
            <!--     <td class="unit">100,00</td>
                 <td class="unit">1600,00</td>-->
               </tr>
               <tr>
                 <td>Укладка ламината</td>
                 <td class="unit">м.кв</td>
                 <td class="unit">36</td>
               <!--  <td class="unit">280,00</td>
                 <td class="unit">10080,00</td>-->
               </tr>
               <tr>
                 <td>Подрезка ламината</td>
                 <td class="unit">м.п</td>
                 <td class="unit">22</td>
             <!--    <td class="unit">130,00</td>
                 <td class="unit">2860,00</td>-->
               </tr>
               <tr>
                 <td>Монтаж плинтуса пластик</td>
                 <td class="unit">м.п</td>
                 <td class="unit">61</td>
                 <!--<td class="unit">150,00</td>
                 <td class="unit">9150,00</td>-->
               </tr>
          </table>
		</div>
	</div>
	<div class="price">
		<div class="prefix">Мы сделали это всего за</div>
		<?php
		$value = 323050;
		?>
		<div class="value"><?php echo number_format($value, 0, ' ', ' '); ?></div>
		<div class="note">Вы можете расширить или сократить объем работ на свое усмотрение. Цена указана без учета материалов.</div>
	</div>
    
            <?php } else if ($options['type'] == 3) { ?>
	<div class="services">
		<div class="task">
			
		</div>
	  <div class="group active">
		<div class="group-properties">
				<div class="group-name"><span>Потолок</span></div>
				<div class="group-price"></div>
		  </div>
		  <table>
            <tr>
			     <th>Наименование работ</th>
			     <th>Ед. измер.</th>
                 <th>Кол-во</th>
			 <!--    <th>Цена</th>
			     <th>Сумма</th>        -->            
		    </tr>
              
             <tr>
               <td>Монтаж    потолка из ГКЛ</td>
               <td class="unit">м.кв</td>
               <td class="unit">34</td>
              <!-- <td class="unit">590</td>
               <td class="unit">20060</td>-->
             </tr>
             <tr>
               <td>Переход потолка из ГКЛ в другой уровень по прямой</td>
               <td class="unit">м.кв</td>
               <td class="unit">12</td>
               <!--<td class="unit">1990</td>
               <td class="unit">23880</td>-->
             </tr>
             <tr>
               <td>Криволинейный участок потолка из ГКЛ</td>
               <td class="unit">м.кв</td>
               <td class="unit">9</td>
              <!-- <td class="unit">1190</td>
               <td class="unit">10710</td>-->
             </tr>
             <tr>
               <td>Подрезка ГКЛ</td>
               <td class="unit">м.п.</td>
               <td class="unit">12</td>
              <!-- <td class="unit">160</td>
               <td class="unit">1920</td>-->
             </tr>
             <tr>
               <td>Проклейка серпянкой и заделка швов</td>
               <td class="unit">м.п.</td>
               <td class="unit">36</td>
              <!-- <td class="unit">130</td>
               <td class="unit">4680</td>-->
             </tr>
             <tr>
               <td>Шпаклевка потолка под покраску</td>
               <td class="unit">м.кв</td>
               <td class="unit">34</td>
               <!--<td class="unit">370</td>
               <td class="unit">12580</td>-->
             </tr>
             <tr>
               <td>Шлифовка потолка</td>
               <td class="unit">м.кв</td>
               <td class="unit">34</td>
              <!-- <td class="unit">130</td>
               <td class="unit">4420</td>-->
             </tr>
             <tr>
               <td>Покраска потолка водоэмульсионной краской</td>
               <td class="unit">м.кв</td>
               <td class="unit">34</td>
            <!--   <td class="unit">280</td>
               <td class="unit">9520</td>-->
             </tr>
             <tr>
               <td>Натяжной потолок</td>
               <td class="unit">м.кв.</td>
               <td class="unit">40</td>
            <!--   <td class="unit">990</td>
               <td class="unit">39600</td>-->
             </tr>
             <tr>
               <td>Установка крепления под люстру</td>
               <td class="unit">шт.</td>
               <td class="unit">4</td>
              <!-- <td class="unit">500</td>
               <td class="unit">2000</td>-->
             </tr>
             <tr>
               <td>Установка потолочного плинтуса</td>
               <td class="unit">м.п.</td>
               <td class="unit">44</td>
             <!--  <td class="unit">230</td>
               <td class="unit">10120</td>-->
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
			    <th>Наименование работ</th>
			    <th>Ед. измер.</th>
                <th>Кол-во</th>
			    <!--<th>Цена</th>
			    <th>Сумма</th> -->                   
	       </tr>
              
            <tr>
              <td>Демонтаж    радиатора отопления (без выноса)</td>
              <td class="unit">шт.</td>
              <td class="unit">6</td>
              <!--<td class="unit">410</td>
              <td class="unit">2460</td>-->
            </tr>
            <tr>
              <td>Демонтаж труб</td>
              <td class="unit">м.п.</td>
              <td class="unit">12</td>
              <!--<td class="unit">200</td>
              <td class="unit">2400</td>-->
            </tr>
            <tr>
              <td>Установка    радиаторов отопления</td>
              <td class="unit">шт.</td>
              <td class="unit">6</td>
           <!--   <td class="unit">2700</td>
              <td class="unit">16200</td>-->
            </tr>
            <tr>
              <td>Разводка труб</td>
              <td class="unit">м.п.</td>
              <td class="unit">12</td>
             <!-- <td class="unit">590</td>
              <td class="unit">7080</td>-->
            </tr>
            <tr>
              <td>Установка    перемычек (байпас)</td>
              <td class="unit">шт.</td>
              <td class="unit">6</td>
             <!-- <td class="unit">2900</td>
              <td class="unit">17400</td>-->
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
				  <th>Наименование работ</th>
				  <th>Ед. измер.</th>
                  <th>Кол-во</th>
				<!--  <th>Цена</th>
				  <th>Сумма</th>  -->                  
			  </tr>
              
               <tr>
                 <td>Удаление    старых обоев</td>
                 <td class="unit">м.кв</td>
                 <td class="unit">138</td>
                <!-- <td class="unit">110</td>
                 <td class="unit">15180</td>-->
               </tr>
               <tr>
                 <td>Штукатурка по маякам</td>
                 <td class="unit">м.кв</td>
                 <td class="unit">138</td>
                <!-- <td class="unit">620</td>
                 <td class="unit">85560</td>-->
               </tr>
               <tr>
                 <td>Армирование малярной сетки под штукатурку</td>
                 <td class="unit">м.кв</td>
                 <td class="unit">138</td>
                <!-- <td class="unit">90</td>
                 <td class="unit">12420</td>-->
               </tr>
               <tr>
                 <td>Монтаж перегородки из ГКЛ</td>
                 <td class="unit">м.кв</td>
                 <td class="unit">25</td>
             <!--    <td class="unit">720</td>
                 <td class="unit">18000</td>-->
               </tr>
               <tr>
                 <td>Криволинейный участок из ГКЛ</td>
                 <td class="unit">м.п.</td>
                 <td class="unit">16</td>
             <!--    <td class="unit">590</td>
                 <td class="unit">9440</td>-->
               </tr>
               <tr>
                 <td>Шпаклевка стен</td>
                 <td class="unit">м.кв</td>
                 <td class="unit">163</td>
                <!-- <td class="unit">320</td>
                 <td class="unit">52160</td>-->
               </tr>
               <tr>
                 <td>Шлифовка стен</td>
                 <td class="unit">м.кв</td>
                 <td class="unit">163</td>
                <!-- <td class="unit">90</td>
                 <td class="unit">14670</td>-->
               </tr>
               <tr>
                 <td>Укладка плитки на стены</td>
                 <td class="unit">м.кв</td>
                 <td class="unit">6</td>
          <!--       <td class="unit">750</td>
                 <td class="unit">4500</td>-->
               </tr>
               <tr>
                 <td>Затирка швов</td>
                 <td class="unit">м.кв</td>
                 <td class="unit">6</td>
              <!--   <td class="unit">100</td>
                 <td class="unit">600</td>-->
               </tr>
               <tr>
                 <td>Подрезка плитки</td>
                 <td class="unit">м.п.</td>
                 <td class="unit">5</td>
                <!-- <td class="unit">350</td>
                 <td class="unit">1750</td>-->
               </tr>
               <tr>
                 <td>Грунтование стен акриловой грунтовкой (2 раза)</td>
                 <td class="unit">м.кв</td>
                 <td class="unit">163</td>
                 <!--<td class="unit">60</td>
                 <td class="unit">9780</td>-->
               </tr>
               <tr>
                 <td>Оклейка текстильных обоев </td>
                 <td class="unit">м.кв</td>
                 <td class="unit">163</td>
          <!--       <td class="unit">400</td>
                 <td class="unit">65200</td>-->
               </tr>
               <tr>
                 <td>Демонтаж дверей</td>
                 <td class="unit">шт</td>
                 <td class="unit">6</td>
            <!--     <td class="unit">410</td>
                 <td class="unit">2460</td>-->
               </tr>
               <tr>
                 <td>Установка двери: однодольной (коробка + полотно)</td>
                 <td class="unit">шт</td>
                 <td class="unit">4</td>
               <!--  <td class="unit">2100</td>
                 <td class="unit">8400</td>-->
               </tr>
               <tr>
                 <td>Установка двери двудольной</td>
                 <td class="unit">шт.</td>
                 <td class="unit">2</td>
             <!--    <td class="unit">2850</td>
                 <td class="unit">5700</td>-->
               </tr>
               <tr>
                 <td>Врезка ручки-защелки</td>
                 <td class="unit">шт</td>
                 <td class="unit">6</td>
              <!--   <td class="unit">1040</td>
                 <td class="unit">6240</td>-->
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
			     <th>Наименование работ</th>
			     <th>Ед. измер.</th>
                 <th>Кол-во</th>
			   <!--  <th>Цена</th>
			     <th>Сумма</th> -->                   
		    </tr>
              
             <tr>
               <td>Демонтаж    электроточки (выключатель, розетка)</td>
               <td class="unit">шт</td>
               <td class="unit">19</td>
              <!-- <td class="unit">120</td>
               <td class="unit">2280</td>-->
             </tr>
             <tr>
               <td>Демонтаж электропроводки</td>
               <td class="unit">м.п.</td>
               <td class="unit">40</td>
           <!--    <td class="unit">50</td>
               <td class="unit">2000</td>-->
             </tr>
             <tr>
               <td>Установка щитка</td>
               <td class="unit">шт.</td>
               <td class="unit">1</td>
            <!--   <td class="unit">3000</td>
               <td class="unit">3000</td>-->
             </tr>
             <tr>
               <td>Монтаж УЗО, автоматов</td>
               <td class="unit">шт</td>
               <td class="unit">8</td>
              <!-- <td class="unit">500</td>
               <td class="unit">4000</td>-->
             </tr>
             <tr>
               <td>Штробление стен</td>
               <td class="unit">м.п.</td>
               <td class="unit">55</td>
          <!--     <td class="unit">550</td>
               <td class="unit">30250</td>-->
             </tr>
             <tr>
               <td>Прокладка кабеля в готовой штробе с заделкой гипсом</td>
               <td class="unit">м.п.</td>
               <td class="unit">55</td>
              <!-- <td class="unit">150</td>
               <td class="unit">8250</td>-->
             </tr>
             <tr>
               <td>Изготовление отверстия под электроточку</td>
               <td class="unit">шт.</td>
               <td class="unit">26</td>
              <!-- <td class="unit">500</td>
               <td class="unit">13000</td>-->
             </tr>
             <tr>
               <td>Монтаж коробки распаенной</td>
               <td class="unit">шт.</td>
               <td class="unit">10</td>
              <!-- <td class="unit">550</td>
               <td class="unit">5500</td>-->
             </tr>
             <tr>
               <td>Установка электроточки на готовое место</td>
               <td class="unit">шт</td>
               <td class="unit">45</td>
             <!--  <td class="unit">250</td>
               <td class="unit">11250</td>-->
             </tr>
             <tr>
               <td>Установка светильников</td>
               <td class="unit">шт.</td>
               <td class="unit">42</td>
            <!--   <td class="unit">490</td>
               <td class="unit">20580</td>-->
             </tr>
             <tr>
               <td>Прокладка кабеля на клипсах (по потолку)</td>
               <td class="unit">м.п.</td>
               <td class="unit">62</td>
              <!-- <td class="unit">130</td>
               <td class="unit">8060</td>-->
             </tr>
          </table>
		</div>
        
	  <div class="group">
		<div class="group-properties">
				<div class="group-name"><span>Полы</span></div>
				<div class="group-price"></div>
		  </div>
			  <table>
             <tr>
				  <th>Наименование работ</th>
				  <th>Ед. измер.</th>
                  <th>Кол-во</th>
				 <!-- <th>Цена</th>
				  <th>Сумма</th> -->                   
			  </tr>
              
               <tr>
                 <td>Демонтаж    плинтусов</td>
                 <td class="unit">м.п</td>
                 <td class="unit">82</td>
                <!-- <td class="unit">40</td>
                 <td class="unit">3280</td>-->
               </tr>
               <tr>
                 <td>Демонтаж покрытий из текстиля и ПВХ</td>
                 <td class="unit">м.кв</td>
                 <td class="unit">74</td>
                <!-- <td class="unit">130</td>
                 <td class="unit">9620</td>-->
               </tr>
               <tr>
                 <td>Монтаж демферной ленты</td>
                 <td class="unit">м.п</td>
                 <td class="unit">82</td>
               <!--  <td class="unit">40</td>
                 <td class="unit">3280</td>-->
               </tr>
               <tr>
                 <td>Выравнивание пола самонивелирующей смесью по маякам</td>
                 <td class="unit">м.кв</td>
                 <td class="unit">74</td>
                <!-- <td class="unit">350</td>
                 <td class="unit">25900</td>-->
               </tr>
               <tr>
                 <td>Укладка плитки на пол</td>
                 <td class="unit">м.кв</td>
                 <td class="unit">26</td>
               <!--  <td class="unit">650</td>
                 <td class="unit">16900</td>-->
               </tr>
               <tr>
                 <td>Подрезка плитки</td>
                 <td class="unit">м.кв</td>
                 <td class="unit">16</td>
               <!--  <td class="unit">350</td>
                 <td class="unit">5600</td>-->
               </tr>
               <tr>
                 <td>Затирка плиточных швов</td>
                 <td class="unit">м.кв</td>
                 <td class="unit">26</td>
                <!-- <td class="unit">100</td>
                 <td class="unit">2600</td>-->
               </tr>
               <tr>
                 <td>Укладка паркетной доски</td>
                 <td class="unit">м.кв</td>
                 <td class="unit">48</td>
                <!-- <td class="unit">380</td>
                 <td class="unit">18240</td>-->
               </tr>
               <tr>
                 <td>Подрезка ламината</td>
                 <td class="unit">м.п</td>
                 <td class="unit">30</td>
                 <!--<td class="unit">180</td>
                 <td class="unit">5400</td>-->
               </tr>
               <tr>
                 <td>Монтаж плинтуса пластик</td>
                 <td class="unit">м.п</td>
                 <td class="unit">82</td>
                 <!--<td class="unit">150</td>
                 <td class="unit">12300</td>-->
               </tr>
          </table>
		</div>
	</div>
	<div class="price">
		<div class="prefix">Мы сделали это всего за</div>
		<?php
		$value = 708380;
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
				'project': 'flat'
			});
		});
	});
</script>

<script type="text/javascript">
<?php require 'scripts/group.js'; ?>
<?php require 'scripts/price.js'; ?>
</script>
