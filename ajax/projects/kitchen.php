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
                    <option value="1"<?php echo $selected['options']['variant'][1]; ?>>Капитальный ремонт 7,8 м²</option>
                    <option value="2"<?php echo $selected['options']['variant'][2]; ?>>Косметический ремонт 5,8 м²</option>
                    <option value="3"<?php echo $selected['options']['variant'][3]; ?>>Эксклюзивный ремонт 14 м²</option>
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
				<div class="group-name">Потолок</div>
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
			    <td>Расчистка    потолка от старой краски</td>
			    <td class="unit">м.кв.</td>
			    <td class="unit">7,8</td>
			  <!--  <td class="unit">190</td>
			    <td class="unit">1482</td>-->
		    </tr>
			  <tr>
			    <td>Расчистка рустов и заделак рустов</td>
			    <td class="unit">м.п</td>
			    <td class="unit">3,12</td>
			   <!-- <td class="unit">150</td>
			    <td class="unit">468</td>-->
		    </tr>
			  <tr>
			    <td>Штукатурка потолка</td>
			    <td class="unit">м.кв.</td>
			    <td class="unit">7,8</td>
			  <!--  <td class="unit">650</td>
			    <td class="unit">5070</td>-->
		    </tr>
			  <tr>
			    <td>Грунтование потолка (грунт, бетоноконтакт) 2 раза</td>
			    <td class="unit">м.кв.</td>
			    <td class="unit">7,8</td>
			<!--    <td class="unit">60</td>
			    <td class="unit">468</td>-->
		    </tr>
			  <tr>
			    <td>Шпаклевка потолка 3 слой</td>
			    <td class="unit">м.кв.</td>
			    <td class="unit">7,8</td>
			   <!-- <td class="unit">390</td>
			    <td class="unit">3042</td>-->
		    </tr>
			  <tr>
			    <td>Шлифовка потолка 2 раза</td>
			    <td class="unit">м.кв.</td>
			    <td class="unit">7,8</td>
			  <!--  <td class="unit">130</td>
			    <td class="unit">1014</td>-->
		    </tr>
			  <tr>
			    <td>Покраска потолка водоэмульсионной краской (2 раза)</td>
			    <td class="unit">м.кв.</td>
			    <td class="unit">7,8</td>
			<!--    <td class="unit">250</td>
			    <td class="unit">1950</td>-->
		    </tr>
			  <tr>
			    <td>Монтаж потолочного плинтуса</td>
			    <td class="unit">м.п</td>
			    <td class="unit">11,24</td>
			  <!--  <td class="unit">250</td>
			    <td class="unit">2810</td>-->
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
			   <!-- <th>Цена</th>
			    <th>Сумма</th> -->                   
		    </tr>
		    <tr>
		      <td>Демонтаж    плитки со стен (простой)</td>
		      <td class="unit">м.кв.</td>
		      <td class="unit">2,50</td>
		    <!--  <td class="unit">90</td>
		      <td class="unit">225</td>-->
	      </tr>
		    <tr>
		      <td>Удаление старых обоев</td>
		      <td class="unit">м.кв.</td>
		      <td class="unit">25,00</td>
		     <!-- <td class="unit">110</td>
		      <td class="unit">2750</td>-->
	      </tr>
		    <tr>
		      <td>Штукатурка стен</td>
		      <td class="unit">м.кв.</td>
		      <td class="unit">25,00</td>
		     <!-- <td class="unit">550</td>
		      <td class="unit">13750</td>-->
	      </tr>
		    <tr>
		      <td>Шпатлевка стен в 3 слоя</td>
		      <td class="unit">м.кв.</td>
		      <td class="unit">25,00</td>
		   <!--   <td class="unit">220</td>
		      <td class="unit">5500</td>-->
	      </tr>
		    <tr>
		      <td>Монтаж перфорированного уголка</td>
		      <td class="unit">м.п</td>
		      <td class="unit">7,50</td>
		      <!--<td class="unit">70</td>
		      <td class="unit">525</td>-->
	      </tr>
		    <tr>
		      <td>Шлифовка стен (1 раз)</td>
		      <td class="unit">м.кв.</td>
		      <td class="unit">25,00</td>
		   <!--   <td class="unit">40</td>
		      <td class="unit">1000</td>-->
	      </tr>
		    <tr>
		      <td>Грунтование стен акриловой грунтовкой (2 раза)</td>
		      <td class="unit">м.кв.</td>
		      <td class="unit">25,00</td>
		      <!--<td class="unit">50</td>
		      <td class="unit">1250</td>-->
	      </tr>
		    <tr>
		      <td>Грунтование стен бетоноконтактом</td>
		      <td class="unit">м.кв.</td>
		      <td class="unit">25,00</td>
		    <!--  <td class="unit">70</td>
		      <td class="unit">1750</td>-->
	      </tr>
		    <tr>
		      <td>Монтаж перегородки из ГКЛ (1 слой)</td>
		      <td class="unit">м.кв.</td>
		      <td class="unit">1,00</td>
		    <!--  <td class="unit">590</td>
		      <td class="unit">590</td>-->
	      </tr>
		    <tr>
		      <td>Оклейка обоев виниловых с подбором рисунка</td>
		      <td class="unit">м.кв.</td>
		      <td class="unit">12,50</td>
		   <!--   <td class="unit">300</td>
		      <td class="unit">3750</td>-->
	      </tr>
		    <tr>
		      <td>Оклейка обоев виниловых без подбора рисунка</td>
		      <td class="unit">м.кв.</td>
		      <td class="unit">12,50</td>
		      <!--<td class="unit">260</td>
		      <td class="unit">3250</td>-->
	      </tr>
		    <tr>
		      <td>Установка двери однодольной со стеклом</td>
		      <td class="unit">шт</td>
		      <td class="unit">1,00</td>
		    <!--  <td class="unit">2350</td>
		      <td class="unit">2350</td>-->
	      </tr>
		    <tr>
		      <td>Врезка замка простой</td>
		      <td class="unit">шт</td>
		      <td class="unit">1,00</td>
		    <!--  <td class="unit">1040</td>
		      <td class="unit">1040</td>-->
	      </tr>
	    </table>
		</div>        
      <div class="group">
		<div class="group-properties">
				<div class="group-name">Электромонтажные работы</div>
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
		      <td>Демонтаж    точки электрической</td>
		      <td class="unit">шт</td>
		      <td class="unit">2,00</td>
		   <!--   <td class="unit">120</td>
		      <td class="unit">240</td>-->
	      </tr>
		    <tr>
		      <td>Штробление под электропроводку</td>
		      <td class="unit">м.п.</td>
		      <td class="unit">1,50</td>
		     <!-- <td class="unit">550</td>
		      <td class="unit">825</td>-->
	      </tr>
		    <tr>
		      <td>Изготовление, штробление отверстия под электроточку (бетон)</td>
		      <td class="unit">шт</td>
		      <td class="unit">3,00</td>
		      <!--<td class="unit">500</td>
		      <td class="unit">1500</td>-->
	      </tr>
		    <tr>
		      <td>Установка электроточки на готовое место</td>
		      <td class="unit">шт</td>
		      <td class="unit">3,00</td>
		    <!--  <td class="unit">250</td>
		      <td class="unit">750</td>-->
	      </tr>
		    <tr>
		      <td>Установка подрозетника</td>
		      <td class="unit">шт</td>
		      <td class="unit">3,00</td>
		     <!-- <td class="unit">200</td>
		      <td class="unit">400</td>-->
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
			    <th>Сумма</th>     -->               
		    </tr>
		    <tr>
		      <td>Демонтаж    плинтусов</td>
		      <td class="unit">м.п</td>
		      <td class="unit">11,24</td>
		    <!--  <td class="unit">40</td>
		      <td class="unit">449</td>-->
	      </tr>
		    <tr>
		      <td>Демонтаж покрытий из текстиля и ПВХ</td>
		      <td class="unit">м.кв.</td>
		      <td class="unit">7,80</td>
		     <!-- <td class="unit">90</td>
		      <td class="unit">702</td>-->
	      </tr>
		    <tr>
		      <td>Демонтаж цементной стяжки до 30мм</td>
		      <td class="unit">м.кв.</td>
		      <td class="unit">1,00</td>
		     <!-- <td class="unit">290</td>
		      <td class="unit">290</td>-->
	      </tr>
		    <tr>
		      <td>Наливной пол</td>
		      <td class="unit">м.кв.</td>
		      <td class="unit">7,80</td>
		     <!-- <td class="unit">350</td>
		      <td class="unit">2730</td>-->
	      </tr>
		    <tr>
		      <td>Укладка плитки на пол от 5 м.кв до 20 м.кв</td>
		      <td class="unit">м.кв.</td>
		      <td class="unit">7,80</td>
		     <!-- <td class="unit">550</td>
		      <td class="unit">4290</td>-->
	      </tr>
		    <tr>
		      <td>Затирка плиточных швов</td>
		      <td class="unit">м.кв.</td>
		      <td class="unit">7,80</td>
		     <!-- <td class="unit">100</td>
		      <td class="unit">780</td>-->
	      </tr>
		    <tr>
		      <td>Подрезка плитки</td>
		      <td class="unit">м.кв.</td>
		      <td class="unit">3,12</td>
		     <!-- <td class="unit">390</td>
		      <td class="unit">1200</td>-->
	      </tr>
		    <tr>
		      <td>Установка порожка (металл)</td>
		      <td class="unit">м.п</td>
		      <td class="unit">0,90</td>
		     <!-- <td class="unit">250</td>
		      <td class="unit">230</td>-->
	      </tr>
		    <tr>
		      <td>Монтаж плинтуса (пластик)</td>
		      <td class="unit">м.п</td>
		      <td class="unit">11,24</td>
		    <!--  <td class="unit">150</td>
		      <td class="unit">1686</td>-->
	      </tr>
	    </table>
		</div>     
	</div>
	<div class="price">
		<div class="prefix">Мы сделали это всего за</div>
		<?php
			$value = 70106;
		?>
		<div class="value"><?php echo number_format($value, 0, ' ', ' '); ?></div>
		<div class="note">Вы можете расширить или сократить объем работ на свое усмотрение. Цена указана без учета материалов.</div>
	</div>
    
        <?php } else if ($options['variant'] == 2) { ?>

		<div class="services">
		<div class="task">			
		</div>
      <div class="group active">
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
				  <th>Сумма</th>  -->                  
			  </tr>
			  <tr>
			    <td>Расчистка    потолка от старой краски</td>
			    <td class="unit">м.кв.</td>
			    <td class="unit">5,8</td>
			   <!-- <td class="unit">190</td>
			    <td class="unit">1102</td>-->
		    </tr>
			  <tr>
			    <td>Грунтование потолка (грунт, бетоноконтакт) 2 раза</td>
			    <td class="unit">м.кв.</td>
			    <td class="unit">5,8</td>
			 <!--   <td class="unit">60</td>
			    <td class="unit">348</td>-->
		    </tr>
			  <tr>
			    <td>Шпаклевка потолка в 3 слоя</td>
			    <td class="unit">м.кв.</td>
			    <td class="unit">5,8</td>
			   <!-- <td class="unit">390</td>
			    <td class="unit">2262</td>-->
		    </tr>
			  <tr>
			    <td>Шлифовка потолка 2 раза</td>
			    <td class="unit">м.кв.</td>
			    <td class="unit">5,8</td>
			<!--    <td class="unit">130</td>
			    <td class="unit">754</td>-->
		    </tr>
			  <tr>
			    <td>Покраска потолка водоэмульсионной краской (2 раза)</td>
			    <td class="unit">м.кв.</td>
			    <td class="unit">5,8</td>
			  <!--  <td class="unit">250</td>
			    <td class="unit">1450</td>-->
		    </tr>
			  <tr>
			    <td>Монтаж потолочного плинтуса</td>
			    <td class="unit">м.п</td>
			    <td class="unit">10,2</td>
			  <!--  <td class="unit">250</td>
			    <td class="unit">2550</td>-->
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
			   <!-- <th>Цена</th>
			    <th>Сумма</th>   -->                 
		    </tr>
		    <tr>
		      <td>Демонтаж    плитки со стен (простой)</td>
		      <td class="unit">м.кв.</td>
		      <td class="unit">2,5</td>
		    <!--  <td class="unit">90</td>
		      <td class="unit">225</td>-->
	      </tr>
		    <tr>
		      <td>Удаление старых обоев</td>
		      <td class="unit">м.кв.</td>
		      <td class="unit">19</td>
		    <!--  <td class="unit">110</td>
		      <td class="unit">2090</td>-->
	      </tr>
		    <tr>
		      <td>Шпатлевка стен в 3 слоя</td>
		      <td class="unit">м.кв.</td>
		      <td class="unit">19</td>
		     <!-- <td class="unit">220</td>
		      <td class="unit">4180</td>-->
	      </tr>
		    <tr>
		      <td>Шлифовка стен (1 раз)</td>
		      <td class="unit">м.кв.</td>
		      <td class="unit">19</td>
		   <!--   <td class="unit">40</td>
		      <td class="unit">760</td>-->
	      </tr>
		    <tr>
		      <td>Грунтование стен акриловой грунтовкой (2 раза)</td>
		      <td class="unit">м.кв.</td>
		      <td class="unit">19</td>
		     <!-- <td class="unit">50</td>
		      <td class="unit">950</td>-->
	      </tr>
		    <tr>
		      <td>Грунтование стен бетоноконтактом</td>
		      <td class="unit">м.кв.</td>
		      <td class="unit">19</td>
		     <!-- <td class="unit">70</td>
		      <td class="unit">1750</td>-->
	      </tr>
		    <tr>
		      <td>Оклейка обоев виниловых с подбором рисунка</td>
		      <td class="unit">м.кв.</td>
		      <td class="unit">19</td>
		     <!-- <td class="unit">300</td>
		      <td class="unit">5700</td>-->
	      </tr>
	    </table>
		</div>        
      <div class="group">
		<div class="group-properties">
				<div class="group-name">Электромонтажные работы</div>
				<div class="group-price"></div>
	    </div>
	    <table>
       	    <tr>
			    <th>Наименование работ</th>
			    <th>Ед. измер.</th>
                <th>Кол-во</th>
			   <!-- <th>Цена</th>
			    <th>Сумма</th>       -->             
		    </tr>
		    <tr>
		      <td>Демонтаж    электроточки</td>
		      <td class="unit">шт</td>
		      <td class="unit">2</td>
		     <!-- <td class="unit">120</td>
		      <td class="unit">240</td>-->
	      </tr>
		    <tr>
		      <td>Установка электроточки</td>
		      <td class="unit">шт</td>
		      <td class="unit">2</td>
		    <!--  <td class="unit">250</td>
		      <td class="unit">500</td>-->
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
			    <th>Сумма</th> -->                   
		    </tr>
		    <tr>
		      <td>Демонтаж    плинтусов</td>
		      <td class="unit">м.п</td>
		      <td class="unit">10,2</td>
		     <!-- <td class="unit">40</td>
		      <td class="unit">408</td>-->
	      </tr>
		    <tr>
		      <td>Демонтаж покрытий из текстиля и ПВХ</td>
		      <td class="unit">м.кв.</td>
		      <td class="unit">5,8</td>
		   <!--   <td class="unit">90</td>
		      <td class="unit">522</td>-->
	      </tr>
		    <tr>
		      <td>Укладка плитки на пол от 5 м.кв до 20 м.кв</td>
		      <td class="unit">м.кв.</td>
		      <td class="unit">5,8</td>
		    <!--  <td class="unit">550</td>
		      <td class="unit">3190</td>-->
	      </tr>
		    <tr>
		      <td>Затирка плиточных швов</td>
		      <td class="unit">м.кв.</td>
		      <td class="unit">5,8</td>
		  <!--    <td class="unit">100</td>
		      <td class="unit">580</td>-->
	      </tr>
		    <tr>
		      <td>Подрезка плитки</td>
		      <td class="unit">м.кв.</td>
		      <td class="unit">3,12</td>
		   <!--   <td class="unit">390</td>
		      <td class="unit">1200</td>-->
	      </tr>
		    <tr>
		      <td>Установка порожка (металл)</td>
		      <td class="unit">м.п</td>
		      <td class="unit">0,9</td>
		     <!-- <td class="unit">250</td>
		      <td class="unit">230</td>-->
	      </tr>
		    <tr>
		      <td>Монтаж плинтуса (пластик)</td>
		      <td class="unit">м.п</td>
		      <td class="unit">10,2</td>
		    <!--  <td class="unit">150</td>
		      <td class="unit">1530</td>-->
	      </tr>
	    </table>
		</div>     
	</div>
	<div class="price">
		<div class="prefix">Мы сделали это всего за</div>
		<?php
			$value = 42512;
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
				<div class="group-name">Потолок</div>
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
			    <td>Потолок    из ГКЛ</td>
			    <td class="unit">м.кв.</td>
			    <td class="unit">5</td>
			   <!-- <td class="unit">590</td>
			    <td class="unit">2950</td>-->
		    </tr>
			  <tr>
			    <td>Криволинейные участки</td>
			    <td class="unit">м.кв.</td>
			    <td class="unit">2</td>
			  <!--  <td class="unit">1190</td>
			    <td class="unit">2380</td>-->
		    </tr>
			  <tr>
			    <td>Переход потолка в другой уровень по кривой линии</td>
			    <td class="unit">м.кв.</td>
			    <td class="unit">3</td>
			   <!-- <td class="unit">2790</td>
			    <td class="unit">8370</td>-->
		    </tr>
			  <tr>
			    <td>Грунтование потолка (грунт, бетоноконтакт) 2 раза</td>
			    <td class="unit">м.кв.</td>
			    <td class="unit">5</td>
			 <!--   <td class="unit">60</td>
			    <td class="unit">300</td>-->
		    </tr>
			  <tr>
			    <td>Шпаклевка потолка 3 слой</td>
			    <td class="unit">м.кв.</td>
			    <td class="unit">5</td>
			   <!-- <td class="unit">390</td>
			    <td class="unit">1950</td>-->
		    </tr>
			  <tr>
			    <td>Шлифовка потолка 2 раза</td>
			    <td class="unit">м.кв.</td>
			    <td class="unit">5</td>
			 <!--   <td class="unit">130</td>
			    <td class="unit">650</td>-->
		    </tr>
			  <tr>
			    <td>Покраска потолка водоэмульсионной краской (2 раза)</td>
			    <td class="unit">м.кв.</td>
			    <td class="unit">5</td>
			  <!--  <td class="unit">250</td>
			    <td class="unit">1250</td>-->
		    </tr>
			  <tr>
			    <td>Натяжной потолок</td>
			    <td class="unit">м.кв.</td>
			    <td class="unit">7</td>
			  <!--  <td class="unit">900</td>
			    <td class="unit">6300</td>-->
		    </tr>
			  <tr>
			    <td>Монтаж потолочного плинтуса</td>
			    <td class="unit">м.п</td>
			    <td class="unit">10,2</td>
			<!--    <td class="unit">250</td>
			    <td class="unit">2550</td>-->
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
			 <!--   <th>Цена</th>
			    <th>Сумма</th> -->                   
		    </tr>
		    <tr>
		      <td>Демонтаж    плитки со стен (простой)</td>
		      <td class="unit">м.кв.</td>
		      <td class="unit">2,5</td>
		  <!--    <td class="unit">90</td>
		      <td class="unit">225</td>-->
	      </tr>
		    <tr>
		      <td>Удаление старых обоев</td>
		      <td class="unit">м.кв.</td>
		      <td class="unit">35</td>
		     <!-- <td class="unit">110</td>
		      <td class="unit">3850</td>-->
	      </tr>
		    <tr>
		      <td>Штукатурка стен</td>
		      <td class="unit">м.кв.</td>
		      <td class="unit">35</td>
		 <!--     <td class="unit">550</td>
		      <td class="unit">19250</td>-->
	      </tr>
		    <tr>
		      <td>Укладка плитки </td>
		      <td class="unit">м.кв.</td>
		      <td class="unit">5</td>
		     <!-- <td class="unit">650</td>
		      <td class="unit">3250</td>-->
	      </tr>
		    <tr>
		      <td>Подрезка плитки</td>
		      <td class="unit">м.кв.</td>
		      <td class="unit">4</td>
		 <!--     <td class="unit">390</td>
		      <td class="unit">1560</td>-->
	      </tr>
		    <tr>
		      <td>Затирка швов</td>
		      <td class="unit">м.кв.</td>
		      <td class="unit">5</td>
		 <!--     <td class="unit">100</td>
		      <td class="unit">500</td>-->
	      </tr>
		    <tr>
		      <td>Перегородка из ГКЛ</td>
		      <td class="unit">м.кв.</td>
		      <td class="unit">5</td>
		     <!-- <td class="unit">590</td>
		      <td class="unit">2950</td>-->
	      </tr>
		    <tr>
		      <td>Криолинейный участок</td>
		      <td class="unit">м.кв.</td>
		      <td class="unit">4</td>
		    <!--  <td class="unit">590</td>
		      <td class="unit">2360</td>-->
	      </tr>
		    <tr>
		      <td>Шпатлевка стен в 3 слоя</td>
		      <td class="unit">м.кв.</td>
		      <td class="unit">34</td>
		   <!--   <td class="unit">220</td>
		      <td class="unit">7480</td>-->
	      </tr>
		    <tr>
		      <td>Шлифовка стен</td>
		      <td class="unit">м.кв.</td>
		      <td class="unit">34</td>
		     <!-- <td class="unit">60</td>
		      <td class="unit">2040</td>-->
	      </tr>
		    <tr>
		      <td>Грунтование стен акриловой грунтовкой (2 раза)</td>
		      <td class="unit">м.кв.</td>
		      <td class="unit">34</td>
		   <!--   <td class="unit">50</td>
		      <td class="unit">1700</td>-->
	      </tr>
		    <tr>
		      <td>Оклейка текстильных обоев</td>
		      <td class="unit">м.кв.</td>
		      <td class="unit">34</td>
		    <!--  <td class="unit">400</td>
		      <td class="unit">13600</td>-->
	      </tr>
		    <tr>
		      <td>Установка двери двудольной</td>
		      <td class="unit">шт</td>
		      <td class="unit">1</td>
		      <!--<td class="unit">2850</td>
		      <td class="unit">2850</td>-->
	      </tr>
		    <tr>
		      <td>Врезка замка простой</td>
		      <td class="unit">шт</td>
		      <td class="unit">1</td>
		    <!--  <td class="unit">1260</td>
		      <td class="unit">1260</td>-->
	      </tr>
	    </table>
		</div>        
      <div class="group">
		<div class="group-properties">
				<div class="group-name">Электромонтажные работы</div>
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
		      <td>Демонтаж    точки электрической</td>
		      <td class="unit">шт</td>
		      <td class="unit">3</td>
		     <!-- <td class="unit">120</td>
		      <td class="unit">360</td>-->
	      </tr>
		    <tr>
		      <td>Установка светильников</td>
		      <td class="unit">шт</td>
		      <td class="unit">8</td>
		    <!--  <td class="unit">490</td>
		      <td class="unit">3920</td>-->
	      </tr>
		    <tr>
		      <td>Прокладка провода на клипсах по потолку</td>
		      <td class="unit">м.п.</td>
		      <td class="unit">16</td>
		    <!--  <td class="unit">130</td>
		      <td class="unit">2080</td>-->
	      </tr>
		    <tr>
		      <td>Штробление под электропроводку</td>
		      <td class="unit">м.п.</td>
		      <td class="unit">14</td>
		     <!-- <td class="unit">550</td>
		      <td class="unit">7700</td>-->
	      </tr>
		    <tr>
		      <td>Прокладка кабеля в штробе и заделка гипсом</td>
		      <td class="unit">м.п.</td>
		      <td class="unit">14</td>
		    <!--  <td class="unit">150</td>
		      <td class="unit">2100</td>-->
	      </tr>
		    <tr>
		      <td>Изготовление отверстия под электроточку</td>
		      <td class="unit">шт</td>
		      <td class="unit">7</td>
		      <!--<td class="unit">550</td>
		      <td class="unit">3850</td>-->
	      </tr>
		    <tr>
		      <td>Установка подразетников</td>
		      <td class="unit">шт</td>
		      <td class="unit">10</td>
		    <!--  <td class="unit">200</td>
		      <td class="unit">2000</td>-->
	      </tr>
		    <tr>
		      <td>Установка электроточки на готовое место</td>
		      <td class="unit">шт</td>
		      <td class="unit">10</td>
		     <!-- <td class="unit">250</td>
		      <td class="unit">2500</td>-->
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
			    <th>Сумма</th> -->                   
		    </tr>
		    <tr>
		      <td>Демонтаж    плинтусов</td>
		      <td class="unit">м.п</td>
		      <td class="unit">14</td>
		    <!--  <td class="unit">40</td>
		      <td class="unit">560</td>-->
	      </tr>
		    <tr>
		      <td>Демонтаж покрытий из текстиля и ПВХ</td>
		      <td class="unit">м.кв.</td>
		      <td class="unit">14</td>
		     <!-- <td class="unit">90</td>
		      <td class="unit">1260</td>-->
	      </tr>
		    <tr>
		      <td>Монтаж демферной ленты</td>
		      <td class="unit">м.кв.</td>
		      <td class="unit">14</td>
		      <!--<td class="unit">40</td>
		      <td class="unit">560</td>-->
	      </tr>
		    <tr>
		      <td>Наливной пол по маякам</td>
		      <td class="unit">м.кв.</td>
		      <td class="unit">14</td>
		     <!-- <td class="unit">350</td>
		      <td class="unit">4200</td>-->
	      </tr>
		    <tr>
		      <td>Укладка плитки на пол от 5 м.кв до 20 м.кв</td>
		      <td class="unit">м.кв.</td>
		      <td class="unit">14</td>
		     <!-- <td class="unit">550</td>
		      <td class="unit">6600</td>-->
	      </tr>
		    <tr>
		      <td>Затирка плиточных швов</td>
		      <td class="unit">м.кв.</td>
		      <td class="unit">14</td>
		     <!-- <td class="unit">100</td>
		      <td class="unit">1200</td>-->
	      </tr>
		    <tr>
		      <td>Подрезка плитки</td>
		      <td class="unit">м.кв.</td>
		      <td class="unit">8</td>
		  <!--    <td class="unit">390</td>
		      <td class="unit">3120</td>-->
	      </tr>
		    <tr>
		      <td>Установка порожка (металл)</td>
		      <td class="unit">м.п</td>
		      <td class="unit">0,9</td>
		     <!-- <td class="unit">250</td>
		      <td class="unit">230</td>-->
	      </tr>
		    <tr>
		      <td>Монтаж плинтуса (пластик)</td>
		      <td class="unit">м.п</td>
		      <td class="unit">13</td>
		     <!-- <td class="unit">150</td>
		      <td class="unit">1950</td>-->
	      </tr>
	    </table>
		</div>     
	</div>
	<div class="price">
		<div class="prefix">Мы сделали это всего за</div>
		<?php
			$value = 120065;
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
				'project': 'kitchen<canvas></canvas>'
			});
		});
	});
</script>

<script type="text/javascript">
<?php require 'scripts/group.js'; ?>
<?php require 'scripts/price.js'; ?>
</script>
