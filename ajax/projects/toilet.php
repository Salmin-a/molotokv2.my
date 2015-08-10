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
				if (!isset($options['variant'])) {
					$options['variant'] = 1;
				}
				if ($options['variant'] == 1) {
					$selected['options']['variant'][1] = ' selected="selected"';
				}
				else if ($options['variant'] == 2) {
					$selected['options']['variant'][2] = ' selected="selected"';
				}
				else if ($options['variant'] == 3) {
					$selected['options']['variant'][3] = ' selected="selected"';
				}		
			
				?>
				<select class="variant">					
                    <option value="1"<?php echo $selected['options']['variant'][1]; ?>>Капитальный ремонт 1,2 м²</option>
                    <option value="2"<?php echo $selected['options']['variant'][2]; ?>>Косметический ремонт 1,04 м²</option>
                    <option value="3"<?php echo $selected['options']['variant'][3]; ?>>Эксклюзивный ремонт 2,4 м²</option>
				</select>
			</td>
		</tr>
	</table>
</div>

<div class="result">
	   <?php if ($options['variant'] == 1) { ?>
	<div class="services">
		<div class="task">			
		</div>
      <div class="group active">
		<div class="group-properties">
				<div class="group-name">Демотажные работы</div>
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
			    <td>Демонтаж    шкафа сантехнического</td>
			    <td class="unit">м²</td>
			    <td class="unit">1</td>
			 <!--   <td class="unit">540</td>
			    <td class="unit">540</td>-->
		    </tr>
			  <tr>
			    <td>Демонтаж линолеума</td>
			    <td class="unit">м²</td>
			    <td class="unit">1,1</td>
			 <!--   <td class="unit">80</td>
			    <td class="unit">88</td>-->
		    </tr>
			  <tr>
			    <td>Демонтаж краски стен и потолка</td>
			    <td class="unit">м²</td>
			    <td class="unit">9,7</td>
			   <!-- <td class="unit">120</td>
			    <td class="unit">1164</td>-->
		    </tr>
			  <tr>
			    <td>Демонтаж унитаза (без выноса)</td>
			    <td class="unit">шт.</td>
			    <td class="unit">1</td>
			<!--    <td class="unit">270</td>
			    <td class="unit">270</td>-->
		    </tr>
		  </table>
		</div>
        
      <div class="group">
		<div class="group-properties">
				<div class="group-name">Стены</div>
				<div class="group-price"></div>
	    </div>
	    <table>
       	    <tr>
			    <th>Наименование работ</th>
			    <th>Ед. измер.</th>
                <th>Кол-во</th>
			  <!--  <th>Цена</th>
			    <th>Сумма</th>   -->                 
		    </tr>
		    <tr>
		      <td>Штукатурка    стен по маякам слоем до 30мм</td>
		      <td class="unit">м²</td>
		      <td class="unit">9,7</td>
		    <!--  <td class="unit">480</td>
		      <td class="unit">4656</td>-->
	      </tr>
		    <tr>
		      <td>Грунтование стен (2 слоя)</td>
		      <td class="unit">м²</td>
		      <td class="unit">9,7</td>
		   <!--   <td class="unit">60</td>
		      <td class="unit">582</td>-->
	      </tr>
		    <tr>
		      <td>Монтаж сантехнического люка</td>
		      <td class="unit">шт.</td>
		      <td class="unit">1</td>
		   <!--   <td class="unit">2000</td>
		      <td class="unit">2000</td>-->
	      </tr>
		    <tr>
		      <td>Изготовление шкафа сантехнического из ГКЛ (цена зависит от    размеров)</td>
		      <td class="unit">шт.</td>
		      <td class="unit">1</td>
		     <!-- <td class="unit">4350</td>
		      <td class="unit">4350</td>-->
	      </tr>
		    <tr>
		      <td>Выравниварие пола</td>
		      <td class="unit">м²</td>
		      <td class="unit">1,1</td>
		   <!--   <td class="unit">300</td>
		      <td class="unit">330</td>-->
	      </tr>
		    <tr>
		      <td>Демонтаж бетонного плинтуса</td>
		      <td class="unit">п.м</td>
		      <td class="unit">3</td>
		     <!-- <td class="unit">100</td>
		      <td class="unit">300</td>-->
	      </tr>
		    <tr>
		      <td>Укладка плитки на пол</td>
		      <td class="unit">м²</td>
		      <td class="unit">1,1</td>
		     <!-- <td class="unit">650</td>
		      <td class="unit">715</td>-->
	      </tr>
		    <tr>
		      <td>Укладка плитки на стены</td>
		      <td class="unit">м²</td>
		      <td class="unit">9,7</td>
		     <!-- <td class="unit">650</td>
		      <td class="unit">6305</td>-->
	      </tr>
		    <tr>
		      <td>Вырез (выпил) под трубы</td>
		      <td class="unit">ед.</td>
		      <td class="unit">2</td>
		  <!--    <td class="unit">260</td>
		      <td class="unit">520</td>-->
	      </tr>
		    <tr>
		      <td>Затирка плиточных швов</td>
		      <td class="unit">м²</td>
		      <td class="unit">9,7</td>
		    <!--  <td class="unit">100</td>
		      <td class="unit">970</td>-->
	      </tr>
	    </table>
		</div>        
      <div class="group">
		<div class="group-properties">
				<div class="group-name">Пол</div>
				<div class="group-price"></div>
	    </div>
	    <table>
       	    <tr>
			    <th>Наименование работ</th>
			    <th>Ед. измер.</th>
                <th>Кол-во</th>
			  <!--  <th>Цена</th>
			    <th>Сумма</th>     -->               
		    </tr>
		    <tr>
		      <td>Укладка    плитки на пол до 20 м.кв.</td>
		      <td class="unit">м²</td>
		      <td class="unit">1,2</td>
		     <!-- <td class="unit">650</td>
		      <td class="unit">780</td>-->
	      </tr>
		    <tr>
		      <td>Стяжка</td>
		      <td class="unit">м²</td>
		      <td class="unit">1,2</td>
		  <!--    <td class="unit">300</td>
		      <td class="unit">360</td>-->
	      </tr>
		    <tr>
		      <td>Затирка плиточных швов</td>
		      <td class="unit">м²</td>
		      <td class="unit">1,2</td>
		     <!-- <td class="unit">100</td>
		      <td class="unit">120</td>-->
	      </tr>
	    </table>
		</div>
      <div class="group">
		<div class="group-properties">
				<div class="group-name">Потолок</div>
				<div class="group-price"></div>
	    </div>
	    <table>
       	    <tr>
			    <th>Наименование работ</th>
			    <th>Ед. измер.</th>
                <th>Кол-во</th>
			  <!--  <th>Цена</th>
			    <th>Сумма</th>        -->            
		    </tr>
		    <tr>
		      <td>Монтаж    каркаса:</td>
		      <td class="unit">м²</td>
		      <td class="unit">1,2</td>
		     <!-- <td class="unit">350</td>
		      <td class="unit">420</td>-->
	      </tr>
		    <tr>
		      <td>Монтаж подвесного потолка</td>
		      <td class="unit">м²</td>
		      <td class="unit">1,2</td>
		     <!-- <td class="unit">550</td>
		      <td class="unit">660</td>-->
	      </tr>
		    <tr>
		      <td>Антисептирование</td>
		      <td class="unit">м²</td>
		      <td class="unit">1,2</td>
		     <!-- <td class="unit">120</td>
		      <td class="unit">144</td>-->
	      </tr>
		    <tr>
		      <td>Установка светильника (с подключением, без сборки) - встроенного    галогенного, точечного (на готовое установочное место)</td>
		      <td class="unit">шт.</td>
		      <td class="unit">2</td>
		     <!-- <td class="unit">450</td>
		      <td class="unit">900</td>-->
	      </tr>
	    </table>
		</div>
      <div class="group">
		<div class="group-properties">
				<div class="group-name">Сантехнические работы</div>
				<div class="group-price"></div>
	    </div>
	    <table>
       	    <tr>
			    <th>Наименование работ</th>
			    <th>Ед. измер.</th>
                <th>Кол-во</th>
			  <!--  <th>Цена</th>
			    <th>Сумма</th>-->                    
		    </tr>
             <tr>
               <td>Разводка    труб водоснабжения из полипропилена (до 3-х метров) - двойная точка (ГВ, ХВ)</td>
               <td class="unit">шт.</td>
               <td class="unit">1</td>
              <!-- <td class="unit">3240</td>
               <td class="unit">3240</td>-->
             </tr>
             <tr>
               <td>Врезка в канализацию</td>
               <td class="unit">шт.</td>
               <td class="unit">2</td>
               <!--<td class="unit">650</td>
               <td class="unit">1300</td>-->
             </tr>
             <tr>
               <td>Разводка труб водоснабжения из полипропилена (до 3-х метров)    точка ( ХВ)</td>
               <td class="unit">шт.</td>
               <td class="unit">1</td>
             <!--  <td class="unit">1840</td>
               <td class="unit">1840</td>-->
             </tr>
             <tr>
               <td>Установка унитаза импортного (сверление отверстий до 4,    выравнивание и монтаж)</td>
               <td class="unit">шт.</td>
               <td class="unit">1</td>
             <!--  <td class="unit">2530</td>
               <td class="unit">2530</td>-->
             </tr>
	    </table>
		</div>
	</div>
	<div class="price">
		<div class="prefix">Мы сделали это всего за</div>
		<?php
			$value = 35084;
		?>
		<div class="value"><?php echo number_format($value, 0, ' ', ' '); ?></div>
		<div class="note">Вы можете расширить или сократить объем работ на свое усмотрение. Цена указана без учета материалов.</div>
	</div>
    
        <?php } else if ($options['variant'] == 2) { ?>
  <div class="services">
	<div class="task">			
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
			    <td>Демонтаж    плитки пола</td>
			    <td class="unit">м²</td>
			    <td class="unit">1,04</td>
			   <!-- <td class="unit">210</td>
			    <td class="unit">218</td>-->
	      </tr>
			  <tr>
			    <td>Демонтаж    пллитки стен</td>
			    <td class="unit">м²</td>
			    <td class="unit">9</td>
			    <!--<td class="unit">210</td>
			    <td class="unit">1890</td>-->
	      </tr>
			  <tr>
			    <td>Демонтаж    унитаза</td>
			    <td class="unit">шт.</td>
			    <td class="unit">1</td>
			   <!-- <td class="unit">270</td>
			    <td class="unit">270</td>-->
	      </tr>
			  <tr>
			    <td>Грунтование стен бетоноконтактом</td>
			    <td class="unit">м²</td>
			    <td class="unit">9</td>
			  <!--  <td class="unit">110</td>
			    <td class="unit">990</td>-->
	      </tr>
			  <tr>
			    <td>Укладка плитки    с пола</td>
			    <td class="unit">м²</td>
			    <td class="unit">1,04</td>
			  <!--  <td class="unit">650</td>
			    <td class="unit">676</td>-->
	      </tr>
			  <tr>
			    <td>Укладка плитки    с стены</td>
			    <td class="unit">м²</td>
			    <td class="unit">9</td>
			 <!--   <td class="unit">650</td>
			    <td class="unit">5850</td>-->
	      </tr>
			  <tr>
			    <td>Изготовление и    монтаж сантехшкафа</td>
			    <td class="unit">шт.</td>
			    <td class="unit">1</td>
			   <!-- <td class="unit">2700</td>
			    <td class="unit">2700</td>-->
	      </tr>
			  <tr>
			    <td>Вырез отверстия в плитке до    50мм</td>
			    <td class="unit">шт.</td>
			    <td class="unit">2</td>
			 <!--   <td class="unit">690</td>
			    <td class="unit">1380</td>-->
	      </tr>
			  <tr>
			    <td>Подрезка плитки</td>
			    <td class="unit">м. п.</td>
			    <td class="unit">7</td>
			   <!-- <td class="unit">390</td>
			    <td class="unit">2730</td>-->
	      </tr>
			  <tr>
			    <td>Установка    унитаза</td>
			    <td class="unit">шт.</td>
			    <td class="unit">1</td>
			   <!-- <td class="unit">2530</td>
			    <td class="unit">2530</td>-->
	      </tr>
			  <tr>
			    <td>Затирка плиточных швов (стены)</td>
			    <td class="unit">м²</td>
			    <td class="unit">9</td>
			   <!-- <td class="unit">130</td>
			    <td class="unit">1170</td>-->
	      </tr>
			  <tr>
			    <td>Регулировка    запорной арматуры</td>
			    <td class="unit">шт.</td>
			    <td class="unit">1</td>
			 <!--   <td class="unit">260</td>
			    <td class="unit">260</td>-->
	      </tr>
			  <tr>
			    <td>Монтаж каркаса:</td>
			    <td class="unit">м²</td>
			    <td class="unit">1,2</td>
			   <!-- <td class="unit">350</td>
			    <td class="unit">420</td>-->
	      </tr>
			  <tr>
			    <td>Монтаж подвесного потолка</td>
			    <td class="unit">м²</td>
			    <td class="unit">1,2</td>
			   <!-- <td class="unit">550</td>
			    <td class="unit">660</td>-->
	      </tr>
			  <tr>
			    <td>Антисептирование</td>
			    <td class="unit">м²</td>
			    <td class="unit">1,2</td>
			  <!--  <td class="unit">120</td>
			    <td class="unit">144</td>-->
	      </tr>
			  <tr>
			    <td>Установка светильника (с подключением, без сборки) - встроенного    галогенного, точечного (на готовое установочное место)</td>
			    <td class="unit">шт.</td>
			    <td class="unit">2</td>
			   <!-- <td class="unit">450</td>
			    <td class="unit">900</td>-->
	      </tr>
	    </table>
	  </div> 
	<div class="price">
		<div class="prefix">Мы сделали это всего за</div>
		<?php
		$value = 28788;
		?>
		<div class="value"><?php echo number_format($value, 0, ' ', ' '); ?></div>
		<div class="note">Вы можете расширить или сократить объем работ на свое усмотрение. Цена указана без учета материалов.</div>
	</div>    
     
	</div>
    
        <?php } else if ($options['variant'] == 3) { ?>
 	<div class="services">
		<div class="task">			
		</div>
      <div class="group active">
		<div class="group-properties">
				<div class="group-name">Демотажные работы</div>
				<div class="group-price"></div>
		  </div>
		  <table>
           	  <tr>
				  <th>Наименование работ</th>
				  <th>Ед. измер.</th>
                  <th>Кол-во</th>
				<!--  <th>Цена</th>
				  <th>Сумма</th>   -->                 
			  </tr>
			  <tr>
			    <td>Демонтаж    шкафа сантехнического</td>
			    <td class="unit">м²</td>
			    <td class="unit">1</td>
			   <!-- <td class="unit">540</td>
			    <td class="unit">540</td>-->
		    </tr>
			  <tr>
			    <td>Демонтаж плитки</td>
			    <td class="unit">м²</td>
			    <td class="unit">2,4</td>
			 <!--   <td class="unit">210</td>
			    <td class="unit">504</td>-->
		    </tr>
			  <tr>
			    <td>Демонтаж унитаза (без выноса)</td>
			    <td class="unit">шт.</td>
			    <td class="unit">1</td>
			    <!--<td class="unit">270</td>
			    <td class="unit">270</td>-->
		    </tr>
		  </table>
		</div>
        
      <div class="group">
		<div class="group-properties">
				<div class="group-name">Стены</div>
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
		      <td>Штукатурка    стен по маякам слоем до 30мм</td>
		      <td class="unit">м²</td>
		      <td class="unit">48,6</td>
		     <!-- <td class="unit">480</td>
		      <td class="unit">23328</td>-->
	      </tr>
		    <tr>
		      <td>Грунтование стен (2 слоя)</td>
		      <td class="unit">м²</td>
		      <td class="unit">48,6</td>
		     <!-- <td class="unit">60</td>
		      <td class="unit">2916</td>-->
	      </tr>
		    <tr>
		      <td>Монтаж сантехнического люка</td>
		      <td class="unit">шт.</td>
		      <td class="unit">1</td>
		      <!--<td class="unit">2500</td>
		      <td class="unit">2500</td>-->
	      </tr>
		    <tr>
		      <td>Изготовление шкафа сантехнического из ГКЛ (цена зависит от    размеров)</td>
		      <td class="unit">шт.</td>
		      <td class="unit">1</td>
		     <!-- <td class="unit">4350</td>
		      <td class="unit">4350</td>-->
	      </tr>
		    <tr>
		      <td>Выравниварие пола</td>
		      <td class="unit">м²</td>
		      <td class="unit">2,4</td>
		     <!-- <td class="unit">300</td>
		      <td class="unit">720</td>-->
	      </tr>
		    <tr>
		      <td>Демонтаж бетонного плинтуса</td>
		      <td class="unit">п.м</td>
		      <td class="unit">3</td>
		     <!-- <td class="unit">210</td>
		      <td class="unit">630</td>-->
	      </tr>
		    <tr>
		      <td>Укладка керамогранита на пол</td>
		      <td class="unit">м²</td>
		      <td class="unit">2,4</td>
		  <!--    <td class="unit">980</td>
		      <td class="unit">2352</td>-->
	      </tr>
		    <tr>
		      <td>Укладка плитки на стены</td>
		      <td class="unit">м²</td>
		      <td class="unit">48,6</td>
		     <!-- <td class="unit">650</td>
		      <td class="unit">31590</td>-->
	      </tr>
		    <tr>
		      <td>Вырез (выпил) под трубы</td>
		      <td class="unit">ед.</td>
		      <td class="unit">5</td>
		     <!-- <td class="unit">260</td>
		      <td class="unit">1300</td>-->
	      </tr>
		    <tr>
		      <td>Затирка плиточных швов</td>
		      <td class="unit">м²</td>
		      <td class="unit">48,6</td>
		     <!-- <td class="unit">100</td>
		      <td class="unit">4860</td>-->
	      </tr>
	    </table>
		</div>        
      <div class="group">
		<div class="group-properties">
				<div class="group-name">Пол</div>
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
		      <td>Укладка    плитки на пол до 20 м.кв.</td>
		      <td class="unit">м²</td>
		      <td class="unit">2,4</td>
		     <!-- <td class="unit">650</td>
		      <td class="unit">1560</td>-->
	      </tr>
		    <tr>
		      <td>Стяжка</td>
		      <td class="unit">м²</td>
		      <td class="unit">2,4</td>
		    <!--  <td class="unit">300</td>
		      <td class="unit">720</td>-->
	      </tr>
		    <tr>
		      <td>Затирка плиточных швов</td>
		      <td class="unit">м²</td>
		      <td class="unit">2,4</td>
		    <!--  <td class="unit">100</td>
		      <td class="unit">240</td>-->
	      </tr>
	    </table>
		</div>
      <div class="group">
		<div class="group-properties">
				<div class="group-name">Потолок</div>
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
		      <td>Монтаж    каркаса:</td>
		      <td class="unit">м²</td>
		      <td class="unit">2,4</td>
		    <!--  <td class="unit">350</td>
		      <td class="unit">840</td>-->
	      </tr>
		    <tr>
		      <td>Монтаж подвесного потолка</td>
		      <td class="unit">м²</td>
		      <td class="unit">2,4</td>
		     <!-- <td class="unit">550</td>
		      <td class="unit">1320</td>-->
	      </tr>
		    <tr>
		      <td>Антисептирование</td>
		      <td class="unit">м²</td>
		      <td class="unit">2,4</td>
		     <!-- <td class="unit">120</td>
		      <td class="unit">288</td>-->
	      </tr>
		    <tr>
		      <td>Установка светильника (с подключением, без сборки) - встроенного    галогенного, точечного (на готовое установочное место)</td>
		      <td class="unit">шт.</td>
		      <td class="unit">12</td>
		    <!--  <td class="unit">450</td>
		      <td class="unit">5400</td>-->
	      </tr>
	    </table>
		</div>
      <div class="group">
		<div class="group-properties">
				<div class="group-name">Сантехнические работы</div>
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
               <td>Разводка    труб водоснабжения из полипропилена (до 3-х метров) - двойная точка (ГВ, ХВ)</td>
               <td class="unit">шт.</td>
               <td class="unit">1</td>
              <!-- <td class="unit">3240</td>
               <td class="unit">3240</td>-->
             </tr>
             <tr>
               <td>Установка коллектора</td>
               <td class="unit">шт.</td>
               <td class="unit">2</td>
               <!--<td class="unit">590</td>
               <td class="unit">1180</td>-->
             </tr>
             <tr>
               <td>Установка фильтра тонкой очистки</td>
               <td class="unit">шт.</td>
               <td class="unit">2</td>
              <!-- <td class="unit">810</td>
               <td class="unit">1620</td>-->
             </tr>
             <tr>
               <td>Установка фильтра грубой очистки</td>
               <td class="unit">шт.</td>
               <td class="unit">2</td>
              <!-- <td class="unit">540</td>
               <td class="unit">1080</td>-->
             </tr>
             <tr>
               <td>Врезка в канализацию</td>
               <td class="unit">шт.</td>
               <td class="unit">2</td>
              <!-- <td class="unit">650</td>
               <td class="unit">1300</td>-->
             </tr>
             <tr>
               <td>Разводка труб водоснабжения из полипропилена (до 3-х метров)    точка ( ХВ)</td>
               <td class="unit">шт.</td>
               <td class="unit">1</td>
               <!--<td class="unit">1840</td>
               <td class="unit">1840</td>-->
             </tr>
             <tr>
               <td>Установка унитазп импортного (сверление отверстий до 4,    выравнивание и монтаж)</td>
               <td class="unit">шт.</td>
               <td class="unit">1</td>
              <!-- <td class="unit">2530</td>
               <td class="unit">2530</td>-->
             </tr>
        </table>
		</div>
	</div>
	<div class="price">
		<div class="prefix">Мы сделали это всего за</div>
		<?php
			$value = 99018;
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
				'project': 'toilet'
			});
		});
	});
</script>

<script type="text/javascript">
	<?php require 'scripts/group.js'; ?>
	<?php require 'scripts/price.js'; ?>
</script>
