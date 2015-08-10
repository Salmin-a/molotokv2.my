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
                    <option value="1"<?php echo $selected['options']['variant'][1]; ?>>Капитальный ремонт 2,94 м²</option>
                    <option value="2"<?php echo $selected['options']['variant'][2]; ?>>Косметический ремонт 1,89 м²</option>
                    <option value="3"<?php echo $selected['options']['variant'][3]; ?>>Эксклюзивный ремонт 12,1 м²</option>
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
				<div class="group-name">Стены</div>
				<div class="group-price"></div>
		  </div>
		  <table>
           	  <tr>
				  <th>Наименование работ</th>
				  <th>Ед. измер.</th>
                  <th>Кол-во</th>
				 <!-- <th>Цена</th>
				  <th>Сумма</th>-->                    
			  </tr>
			  <tr>
				  <td>Демонтаж плитки стен</td>
				  <td class="unit">м.кв.</td>
                  <td class="unit">6,53</td>
                <!--  <td class="unit">120</td>
                  <td class="unit">783,6</td>-->
			  </tr>
			  <tr>
				  <td>Расчистка стен от старой краски</td>
				  <td class="unit">м.кв.</td>
                  <td class="unit">11,69</td>
                <!--  <td class="unit">130</td>
                  <td class="unit">1519,7</td>-->
			  </tr>
			  <tr>
				  <td>Штукатурка стен по маякам слоем 30мм</td>
				  <td class="unit">м.кв.</td>
                  <td class="unit">18,23</td>
                 <!-- <td class="unit">630</td>
                  <td class="unit">11484,9</td>-->
			  </tr>
			  <tr>
				  <td>Грунтование стен бетоноконтактом</td>
				  <td class="unit">м.кв.</td>
                  <td class="unit">11,69</td>
                 <!-- <td class="unit">110</td>
                  <td class="unit">1285,9</td>-->
			  </tr>
			  <tr>
				  <td>Укладка плитки на стены</td>
				  <td class="unit">м.кв.</td>
                  <td class="unit">18,23</td>
               <!--   <td class="unit">850</td>
                  <td class="unit">15495,5</td>-->
			  </tr>
			  <tr>
				  <td>Затирка плиточных швов</td>
				  <td class="unit">м.кв.</td>
                  <td class="unit">18,23</td>
                 <!-- <td class="unit">130</td>
                  <td class="unit">1269,9</td>-->
			  </tr>                               
               				  <tr>
					<td>Подрезка плитки</td>
					<td class="unit">м.п.</td>
                    <td class="unit">15,00</td>
                  <!--  <td class="unit">390</td>
                    <td class="unit">5850,0</td>-->
			  </tr>
		  </table>
		</div>
        
      <div class="group">
		<div class="group-properties">
				<div class="group-name">Полы</div>
				<div class="group-price"></div>
	    </div>
	    <table>
       	    <tr>
			    <th>Наименование работ</th>
			    <th>Ед. измер.</th>
                <th>Кол-во</th>
			  <!--  <th>Цена</th>
			    <th>Сумма</th>      -->              
		    </tr>
		    <tr>
			    <td>Демонтаж керамической плитки</td>
			    <td class="unit">м.кв.</td>
                <td class="unit">2,94</td>
              <!--  <td class="unit">210</td>
                <td class="unit">617,4</td>-->
		    </tr>
		    <tr>
			    <td>Монтаж теплого пола электрического</td>
			    <td class="unit">м.кв.</td>
                <td class="unit">1,00</td>
               <!-- <td class="unit">700</td>
                <td class="unit">700,0</td>-->
		    </tr>
		    <tr>
			    <td>Выравнивание пола самонивелирующей смесью</td>
			    <td class="unit">м.кв.</td>
                <td class="unit">2,94</td>
              <!--  <td class="unit">520</td>
                <td class="unit">1528,8</td>-->
		    </tr>
		    <tr>
			    <td>Укладка плитки на пол</td>
			    <td class="unit">м.кв.</td>
                <td class="unit">2,94</td>
               <!-- <td class="unit">860</td>
                <td class="unit">2528,4</td>-->
		    </tr>
		    <tr>
			    <td>Устройство порогов из плитки</td>
			    <td class="unit">м.п.</td>
                <td class="unit">1,00</td>
               <!-- <td class="unit">690</td>
                <td class="unit">690,0</td>-->
		    </tr>
		    <tr>
			    <td>Затирка плиточных швов</td>
			    <td class="unit">м.кв.</td>
                <td class="unit">2,94</td>
              <!--  <td class="unit">130</td>
                <td class="unit">382,2</td>-->
		    </tr>                               
           				    <tr>
					<td>Подрезка плитки</td>
					<td class="unit">м.кв.</td>
                    <td class="unit">3,43</td>
                  <!--  <td class="unit">390</td>
                    <td class="unit">1337,7</td>-->
		    </tr>
	    </table>
		</div>
        
      <div class="group">
		<div class="group-properties">
				<div class="group-name">Другие виды услуг</div>
				<div class="group-price"></div>
	    </div>
	    <table>
       	    <tr>
			    <th>Наименование работ</th>
			    <th>Ед. измер.</th>
                <th>Кол-во</th>
			  <!--  <th>Цена</th>
			    <th>Сумма</th>      -->              
		    </tr>
		    <tr>
			    <td>Демонтаж ванны</td>
				<td class="unit">шт</td>
			    <td class="unit">1,00</td>
			   <!-- <td class="unit">900</td>
				<td class="unit">900</td>-->
		    </tr>
		    <tr>
			    <td>Демонтаж раковины</td>
				<td class="unit">шт</td>
				<td class="unit">1,00</td>
				<!--<td class="unit">400</td>
				<td class="unit">400</td>-->
		    </tr>
		    <tr>
			    <td>Демонтаж стиральной машины</td>
				<td class="unit">шт</td>
				<td class="unit">1,00</td>
				<!--<td class="unit">260</td>
				<td class="unit">260</td>-->
		    </tr>
		    <tr>
			    <td>Демонтаж смесителя</td>
				<td class="unit">шт</td>
				<td class="unit">1,00</td>
				<!--<td class="unit">150</td>
				<td class="unit">150</td>-->
		    </tr>
		    <tr>
			    <td>Демонтаж труб водоснабжения</td>
				<td class="unit">шт</td>
				<td class="unit">1,00</td>
				<!--<td class="unit">200</td>
				<td class="unit">200</td>-->
		    </tr>
		    <tr>
			    <td>Демонтаж труб канализации</td>
				<td class="unit">м.п</td>
				<td class="unit">2,50</td>
				<!--<td class="unit">150</td>
				<td class="unit">375</td>-->
		    </tr>                               
            <tr>
				<td>Установка ванны</td>
				<td class="unit">шт</td>
				<td class="unit">1,00</td>
				<!--<td class="unit">2950</td>
				<td class="unit">2950</td>-->
			</tr>
            <tr>
				<td>Установка раковины</td>
				<td class="unit">шт</td>
				<td class="unit">1,00</td>
			<!--	<td class="unit">1490</td>
				<td class="unit">1490</td>-->
			</tr>
            <tr>
				<td>Разводка труб водоснабжения (одинарная точка)</td>
				<td class="unit">тчк</td>
				<td class="unit">1,00</td>
				<!--<td class="unit">1710</td>
				<td class="unit">1710</td>-->
			</tr>
            <tr>
				<td>Разводка труб водоснабжения (двойная точка)</td>
				<td class="unit">тчк</td>
				<td class="unit">2,00</td>
				<!--<td class="unit">3240</td>
				<td class="unit">6480</td>-->
			</tr>
            <tr>
				<td>Разводка труб канализации</td>
				<td class="unit">м.п.</td>
				<td class="unit">2,50</td>
			<!--	<td class="unit">490</td>
				<td class="unit">1225</td>-->
			</tr>
            <tr>
				<td>Установка смесителя на мойку</td>
				<td class="unit">шт</td>
				<td class="unit">1,00</td>
				<!--<td class="unit">760</td>
				<td class="unit">760</td>-->
			</tr>
            <tr>
				<td>Установка смесителя с душем</td>
				<td class="unit">шт</td>
				<td class="unit">1,00</td>
			<!--	<td class="unit">960</td>
				<td class="unit">960</td>-->
			</tr>
            <tr>
				<td>Штробление стен</td>
				<td class="unit">м.п.</td>
				<td class="unit">1,00</td>
			<!--	<td class="unit">900</td>
				<td class="unit">900</td>-->
			</tr>
            <tr>
				<td>Установка стиральной машины</td>
				<td class="unit">шт</td>
				<td class="unit">1,00</td>
				<!--<td class="unit">550</td>
				<td class="unit">550</td>-->
			</tr>
            <tr>
				<td>Реечный потолок с освещением</td>
				<td class="unit">шт.</td>
				<td class="unit">1,00</td>
				<!--<td class="unit">6500</td>
				<td class="unit">6500</td>-->
			</tr>           
	    </table>
		</div>
	</div>
	<div class="price">
		<div class="prefix">Мы сделали это всего за</div>
		<?php
		$value = 72384;
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
		      <td>Укладка    плитки пола</td>
     		  <td class="unit">м.кв.</td>
				<td class="unit">1,89</td>
				<!--<td class="unit">650</td>
				<td class="unit">1228,5</td>-->
	        </tr>
		    <tr>
		      <td>Укладка    пллитки стен</td>
			  <td class="unit">м.кв.</td>
			  <td class="unit">17</td>
			<!--  <td class="unit">650</td>
			  <td class="unit">11050,0</td>-->
	        </tr>
		    <tr>
		      <td>Демонтаж    плитки с пола</td>
			  <td class="unit">м.кв.</td>
			  <td class="unit">1,89</td>
			<!--  <td class="unit">210</td>
			  <td class="unit">396,9</td>-->
	        </tr>
		    <tr>
		      <td>Демонтаж    плитки с стены</td>
			  <td class="unit">м.кв.</td>
			  <td class="unit">17</td>
			  <!--<td class="unit">210</td>
			  <td class="unit">3570,0</td>-->
	        </tr>
		    <tr>
		      <td>Демонтаж    полотенцесушителя</td>
			  <td class="unit">шт</td>
			  <td class="unit">1</td>
			 <!-- <td class="unit">410</td>
			  <td class="unit">410,0</td>-->
	        </tr>
		    <tr>
		      <td>Вырез отверстия в плитке до 50    мм</td>
			  <td class="unit">шт</td>
			  <td class="unit">6</td>
			 <!-- <td class="unit">690</td>
			  <td class="unit">4140,0</td>-->
	        </tr>                               
            <tr>
              <td>Подрезка плитки</td>
			  <td class="unit">м</td>
			  <td class="unit">23,2</td>
			<!--  <td class="unit">390</td>
			  <td class="unit">9048,0</td>-->
            </tr>
            <tr>
              <td>Установка    смесителя</td>
			  <td class="unit">шт</td>
			  <td class="unit">1</td>
			 <!-- <td class="unit">860</td>
			  <td class="unit">860,0</td>-->
            </tr>
            <tr>
              <td>Установка    умывальника</td>
			  <td class="unit">шт</td>
			  <td class="unit">1</td>
			 <!-- <td class="unit">1490</td>
			  <td class="unit">1490,0</td>-->
            </tr>
            <tr>
              <td>Установка ванны</td>
			  <td class="unit">шт</td>
			  <td class="unit">1</td>
			 <!-- <td class="unit">3280</td>
			  <td class="unit">3280,0</td>-->
            </tr>
            <tr>
              <td>Перенос    полотенцесушителя</td>
			  <td class="unit">шт</td>
			  <td class="unit">1</td>
			<!--  <td class="unit">1800</td>
			  <td class="unit">1800,0</td>-->
            </tr>
            <tr>
              <td>Реечный    потолок для ванной </td>
			  <td class="unit">шт</td>
			  <td class="unit">1</td>
			 <!-- <td class="unit">3896</td>
			  <td class="unit">3896,0</td>-->
            </tr>
	    </table>
		
	</div>
	<div class="price">
		<div class="prefix">Мы сделали это всего за</div>
		<?php
		$value = 51169.4;
		?>
		<div class="value"><?php echo number_format($value, 0, ' ', ' '); ?></div>
		<div class="note">Вы можете расширить или сократить объем работ на свое усмотрение. Цена указана без учета материалов.</div>
	</div>
    
        <?php } else if ($options['variant'] == 3) { ?>
	<div class="services">
		<div class="task">		
		</div>
	  <div class="group active">
		<div class="group-properties">
				<div class="group-name">Стены</div>
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
		      <td>Демонтаж    плитки стен (простой)</td>
		      <td class="unit">м.кв.</td>
		      <td class="unit">40,78</td>
		     <!-- <td class="unit">120</td>
		      <td class="unit">4893,6</td>-->
		    </tr>
		    <tr>
		      <td>Штукатурка  стен по маякам    слоем 30 мм</td>
		      <td class="unit">м.кв.</td>
		      <td class="unit">40,78</td>
		     <!-- <td class="unit">600</td>
			  <td class="unit">24468,0</td>-->
		    </tr>
		    <tr>
		      <td>Грунтование стен бетоноконтактом</td>
		      <td class="unit">м.кв.</td>
		      <td class="unit">40,78</td>
		    <!--  <td class="unit">110</td>
			  <td class="unit">4485,8</td>-->
		    </tr>
		    <tr>
		      <td>Укладка керамогранита на стены</td>
		      <td class="unit">м.кв.</td>
		      <td class="unit">40,78</td>
		     <!-- <td class="unit">1320</td>
     		  <td class="unit">53829,6</td>-->
		    </tr>
		    <tr>
		      <td>Подрезка плитки под 45 градусов</td>
		      <td class="unit">м.п</td>
		      <td class="unit">2,80</td>
		   <!--   <td class="unit">1090</td>
			  <td class="unit">3052,0</td>-->
		    </tr>
		    <tr>
		      <td>Подрезка плитки под</td>
		      <td class="unit">м.п</td>
		      <td class="unit">35,00</td>
		    <!--  <td class="unit">390</td>
			  <td class="unit">13650,0</td>-->
		    </tr>              
	    </table>
		</div>
        
      <div class="group">
		<div class="group-properties">
				<div class="group-name">Полы</div>
				<div class="group-price"></div>
	    </div>
	    <table>
       	    <tr>
			    <th>Наименование работ</th>
			    <th>Ед. измер.</th>
                <th>Кол-во</th>
		<!--	    <th>Цена</th>
			    <th>Сумма</th>  -->                  
		    </tr>
		    <tr>
		      <td>Демонтаж    керамической плитки</td>
		      <td class="unit">м.кв.</td>
		      <td class="unit">12,10</td>
		   <!--   <td class="unit">210</td>
		      <td class="unit">2541</td>-->
		    </tr>
		    <tr>
		      <td>Монтаж теплого пола электрического</td>
		      <td class="unit">м.кв.</td>
		      <td class="unit">8,00</td>
		     <!-- <td class="unit">700</td>
			  <td class="unit">5600</td>-->
		    </tr>
		    <tr>
		      <td>Выравнивание пола самонивелирующей смесью</td>
		      <td class="unit">м.кв.</td>
		      <td class="unit">12,10</td>
		     <!-- <td class="unit">550</td>
			  <td class="unit">6655</td>-->
		    </tr>
		    <tr>
		      <td>Укладка керамогранита на пол</td>
		      <td class="unit">м.кв.</td>
		      <td class="unit">12,10</td>
		   <!--   <td class="unit">1100</td>
			  <td class="unit">13310</td>-->
		    </tr>
		    <tr>
		      <td>Подрезка плитки</td>
		      <td class="unit">м.кв.</td>
		      <td class="unit">5,70</td>
		     <!-- <td class="unit">390</td>
			  <td class="unit">2223</td>-->
		    </tr>
	    </table>
		</div>
        
      <div class="group">
		<div class="group-properties">
				<div class="group-name">Другие виды услуг</div>
				<div class="group-price"></div>
	    </div>
	    <table>
       	    <tr>
			    <th>Наименование работ</th>
			    <th>Ед. измер.</th>
                <th>Кол-во</th>
			 <!--   <th>Цена</th>
			    <th>Сумма</th>  -->                  
		    </tr>
		    <tr>
		      <td>Демонтаж    ванны</td>
		      <td class="unit">шт</td>
		      <td class="unit">1,00</td>
		     <!-- <td class="unit">900</td>
		      <td class="unit">900</td>-->
		    </tr>
		    <tr>
		      <td>Демонтаж раковины</td>
		      <td class="unit">шт</td>
		      <td class="unit">1,00</td>
		     <!-- <td class="unit">400</td>
			  <td class="unit">400</td>-->
		    </tr>
		    <tr>
		      <td>Демонтаж стиральной машины</td>
		      <td class="unit">шт</td>
		      <td class="unit">1,00</td>
		     <!-- <td class="unit">260</td>
			  <td class="unit">260</td>-->
		    </tr>
		    <tr>
		      <td>Демонтаж смесителя</td>
		      <td class="unit">шт</td>
		      <td class="unit">1,00</td>
		     <!-- <td class="unit">150</td>
			  <td class="unit">150</td>-->
		    </tr>
		    <tr>
		      <td>Демонтаж труб водоснабжения</td>
		      <td class="unit">шт</td>
		      <td class="unit">1,00</td>
		     <!-- <td class="unit">200</td>
			  <td class="unit">200</td>-->
		    </tr>
		    <tr>
		      <td>Демонтаж труб канализации</td>
		      <td class="unit">м.п</td>
		      <td class="unit">2,50</td>
		      <!--<td class="unit">150</td>
			  <td class="unit">375</td>-->
		    </tr>                               
            <tr>
              <td>Установка ванны с гидромассажем</td>
              <td class="unit">шт</td>
              <td class="unit">1,00</td>
             <!-- <td class="unit">5680</td>
			  <td class="unit">5680</td>-->
			</tr>
            <tr>
              <td>Установка раковины (тюльпан)</td>
              <td class="unit">шт</td>
              <td class="unit">1,00</td>
             <!-- <td class="unit">3470</td>
			  <td class="unit">3470</td>-->
			</tr>
            <tr>
              <td>Установка душевой кабины с гидромассажем, парогенератором, от    115 см</td>
              <td class="unit">шт.</td>
              <td class="unit">1,00</td>
             <!-- <td class="unit">9500</td>
			  <td class="unit">9500</td>-->
			</tr>
            <tr>
              <td>Разводка труб водоснабжения (одинарная точка)</td>
              <td class="unit">тчк</td>
              <td class="unit">1,00</td>
             <!-- <td class="unit">1710</td>
			  <td class="unit">1710</td>-->
			</tr>
            <tr>
              <td>Разводка труб водоснабжения (двойная точка)</td>
              <td class="unit">тчк</td>
              <td class="unit">3,00</td>
             <!-- <td class="unit">3240</td>
			  <td class="unit">9720</td>-->
			</tr>
            <tr>
              <td>Пренос полотенцесушителя</td>
              <td class="unit">шт</td>
              <td class="unit">1,00</td>
             <!-- <td class="unit">6750</td>
			  <td class="unit">6750</td>-->
			</tr>
            <tr>
              <td>Разводка труб канализации</td>
              <td class="unit">м.п.</td>
              <td class="unit">5,50</td>
            <!--  <td class="unit">490</td>
			  <td class="unit">2695</td>-->
			</tr>
            <tr>
              <td>Установка смесителя на раковину</td>
              <td class="unit">шт</td>
              <td class="unit">1,00</td>
             <!-- <td class="unit">760</td>
			  <td class="unit">760</td>-->
			</tr>
            <tr>
              <td>Установка смесителя с душем</td>
              <td class="unit">шт</td>
              <td class="unit">2,00</td>
             <!-- <td class="unit">960</td>
			  <td class="unit">1920</td>-->
			</tr>
            <tr>
              <td>Штробление стен под трубы водоснабжение</td>
              <td class="unit">м.п.</td>
              <td class="unit">3,50</td>
             <!-- <td class="unit">900</td>
			  <td class="unit">3150</td>-->
			</tr>    
            <tr>
              <td>Установка стиральной машины</td>
              <td class="unit">шт</td>
              <td class="unit">1,00</td>
             <!-- <td class="unit">550</td>
			  <td class="unit">550</td>-->
			</tr>    
              <tr>
                <td>Реечный потолок с освещением 12 светильников</td>
                <td class="unit">шт.</td>
                <td class="unit">1,00</td>
               <!-- <td class="unit">14870</td>
			  <td class="unit">14870</td>-->
			</tr>           
	    </table>
		</div>
	</div>
	<div class="price">
		<div class="prefix">Мы сделали это всего за</div>
		<?php
		$value = 197768;
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
				'project': 'bathroom'
			});
		});
	});
</script>

<script type="text/javascript">
<?php require 'scripts/group.js'; ?>
<?php require 'scripts/price.js'; ?>
</script>
