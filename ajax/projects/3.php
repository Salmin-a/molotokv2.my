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
                    <option value="1"<?php echo $selected['options']['variant'][1]; ?>>Капитальный ремонт 12 м²</option>
                    <option value="2"<?php echo $selected['options']['variant'][2]; ?>>Косметический ремонт стен и потолка 12 м²</option>
                    <option value="3"<?php echo $selected['options']['variant'][3]; ?>>Эксклюзивный ремонт 20 м²</option>
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
				 <!-- <th>Цена</th>
				  <th>Сумма</th>  -->                  
			  </tr>
			  <tr>
			    <td>Шпаклевка    потолка</td>
				  <td class="unit">м.кв.</td>
				  <td class="unit">12,1</td>
				 <!-- <td class="unit">390</td>
				  <td class="unit">4719</td>-->
              </tr>
			  <tr>
			    <td>Шлифовка потолка</td>
				  <td class="unit">м.кв.</td>
				  <td class="unit">12,1</td>
			<!--	  <td class="unit">130</td>
				  <td class="unit">1573</td>-->
              </tr>
			  <tr>
			    <td>Покраска потолка</td>
				  <td class="unit">м.кв.</td>
				  <td class="unit">12,1</td>
				<!--  <td class="unit">350</td>
				  <td class="unit">4235</td>-->
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
		      <td>Штукатурка    стен по маякам</td>
		      <td class="unit">м.кв</td>
		      <td class="unit">23,4</td>
		     <!-- <td class="unit">790</td>
		      <td class="unit">18486</td>-->
		    </tr>
		    <tr>
		      <td>Шлифовка стен</td>
		      <td class="unit">м.кв</td>
		      <td class="unit">23,4</td>
		     <!-- <td class="unit">90</td>
		      <td class="unit">2106</td>-->
		    </tr>
		    <tr>
		      <td>Шпаклевка стен</td>
		      <td class="unit">м.кв</td>
		      <td class="unit">23,4</td>
		     <!-- <td class="unit">280</td>
		      <td class="unit">6552</td>-->
		    </tr>
		    <tr>
		      <td>Оклейка обоев</td>
		      <td class="unit">м.кв</td>
		      <td class="unit">23,4</td>
		     <!-- <td class="unit">240</td>
		      <td class="unit">5616</td>-->
		    </tr>
		    <tr>
		      <td>Грунтовка 2 слоя</td>
		      <td class="unit">м.кв</td>
		      <td class="unit">23,4</td>
		     <!-- <td class="unit">60</td>
		      <td class="unit">1404</td>-->
		    </tr>
		    <tr>
		      <td>Демонтаж электроточки</td>
		      <td class="unit">шт</td>
		      <td class="unit">1,0</td>
		     <!-- <td class="unit">120</td>
		      <td class="unit">120</td>-->
		    </tr>                               
           	<tr>
           	  <td>Штробление стен кирпич</td>
           	  <td class="unit">м.п</td>
           	  <td class="unit">4,0</td>
           	 <!-- <td class="unit">550</td>
           	  <td class="unit">2200</td>-->
			</tr>
               	<tr>
               	  <td>Прокладка кабеля</td>
               	  <td class="unit">м.п</td>
               	  <td class="unit">20,0</td>
               	<!--  <td class="unit">30</td>
               	  <td class="unit">600</td>-->
			</tr>
               	<tr>
               	  <td>Изготовление штроб под электроточку</td>
               	  <td class="unit">шт</td>
               	  <td class="unit">8,0</td>
               	 <!-- <td class="unit">450</td>
               	  <td class="unit">3600</td>-->
			</tr>
               	<tr>
               	  <td>Установка розетки ТВ</td>
               	  <td class="unit">шт</td>
               	  <td class="unit">1,0</td>
            <!--   	  <td class="unit">340</td>
               	  <td class="unit">340</td>-->
			</tr>
               	<tr>
               	  <td>Установка подрозетников</td>
               	  <td class="unit">шт</td>
               	  <td class="unit">12,0</td>
             <!--  	  <td class="unit">200</td>
               	  <td class="unit">2400</td>-->
			</tr>
               	<tr>
               	  <td>Демонтаж деревянного основания</td>
               	  <td class="unit">м.кв</td>
               	  <td class="unit">12,1</td>
               	<!--  <td class="unit">210</td>
               	  <td class="unit">2541</td>-->
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
			    <th>Сумма</th>-->                    
		    </tr>
		    <tr>
		      <td>Монтаж    насыпного пола 10 см</td>
		      <td class="unit">м.кв</td>
		      <td class="unit">12,1</td>
		   <!--   <td class="unit">750</td>
		      <td class="unit">9075</td>-->
		    </tr>
		    <tr>
		      <td>Укладка плитки пола 90 градусов</td>
		      <td class="unit">м.кв</td>
		      <td class="unit">12,1</td>
		  <!--    <td class="unit">750</td>
		      <td class="unit">9075</td>-->
		    </tr>
		    <tr>
		      <td>Затирка швов</td>
		      <td class="unit">м.кв</td>
		      <td class="unit">12,1</td>
		    <!--  <td class="unit">100</td>
		      <td class="unit">1210</td>-->
		    </tr>
		    <tr>
		      <td>Подрезка плитки</td>
		      <td class="unit">м.кв</td>
		      <td class="unit">6,0</td>
		  <!--    <td class="unit">390</td>
		      <td class="unit">2340</td>-->
		    </tr>		     
	    </table>
		</div>
	</div>
	<div class="price">
		<div class="prefix">Мы сделали это всего за</div>
		<?php
		$value = 78192;
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
				  <!--<th>Цена</th>
				  <th>Сумма</th>     -->               
			  </tr>
			  <tr>
			    <td>Шпатлевка    потолка <strong>2 раза</strong></td>
			    <td class="unit">м.кв.</td>
			    <td class="unit">12</td>
			   <!-- <td class="unit">270</td>
			    <td class="unit">3240</td>-->
		      </tr>
			  <tr>
			    <td>Шлифовка потолка </td>
			    <td class="unit">м.кв.</td>
			    <td class="unit">12</td>
			<!--    <td class="unit">50</td>
			    <td class="unit">600</td>-->
		      </tr>
			  <tr>
			    <td>Грунтовка    потолка</td>
			    <td class="unit">м.кв.</td>
			    <td class="unit">12</td>
			<!--    <td class="unit">50</td>
			    <td class="unit">600</td>-->
		      </tr>		
			  <tr>
			    <td>Покраска    потолка <strong>2 раза</strong></td>
			    <td class="unit">м.кв.</td>
			    <td class="unit">12</td>
			 <!--   <td class="unit">220</td>
			    <td class="unit">2640</td>-->
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
			    <th>Сумма</th>    -->                
		    </tr>
		    <tr>
		      <td>Шпатлевка    стен</td>
		      <td class="unit">м.кв.</td>
		      <td class="unit">26,5</td>
		    <!--  <td class="unit">360</td>
		      <td class="unit">9540</td>-->
	        </tr>
		    <tr>
		      <td>Шлифовка стен <strong>2 раза</strong></td>
		      <td class="unit">м.кв.</td>
		      <td class="unit">26,5</td>
		    <!--  <td class="unit">60</td>
		      <td class="unit">1590</td>-->
	        </tr>
		    <tr>
		      <td>Грунтовка стен    <strong>2 раза</strong></td>
		      <td class="unit">м.кв.</td>
		      <td class="unit">26,5</td>
		    <!--  <td class="unit">50</td>
		      <td class="unit">1325</td>-->
	        </tr>
		    <tr>
		      <td>Оклейка обоев    с подгоном рисунка</td>
		      <td class="unit">м.кв.</td>
		      <td class="unit">26,5</td>
		 <!--     <td class="unit">230</td>
		      <td class="unit">6095</td>-->
	        </tr>
		    <tr>
		      <td>Демонтаж/монтаж    новых электроточек</td>
		      <td class="unit">шт.</td>
		      <td class="unit">3</td>
		   <!--   <td class="unit">320</td>
		      <td class="unit">960</td>-->
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
			    <th>Сумма</th>     -->               
		    </tr>
		    <tr>
		      <td>Установка    порожка</td>
		      <td class="unit">м.кв.</td>
		      <td class="unit">1</td>
		    <!--  <td class="unit">250</td>
		      <td class="unit">250</td>-->
	        </tr>
		    <tr>
		      <td>Установка плинтусов</td>
		      <td class="unit">м.п.</td>
		      <td class="unit">14</td>
		     <!-- <td class="unit">150</td>
		      <td class="unit">2100</td>-->
	        </tr>
		    <tr>
		      <td>Укладка ламината</td>
		      <td class="unit">м.кв.</td>
		      <td class="unit">12</td>
		     <!-- <td class="unit">210</td>
		      <td class="unit">2520</td>-->
	        </tr>
		    <tr>
		      <td>Подрезка ламината</td>
		      <td class="unit">м.п.</td>
		      <td class="unit">6</td>
		     <!-- <td class="unit">130</td>
		      <td class="unit">780</td>-->
	        </tr>	
      	    <tr>
      	      <td>Настил    подложки</td>
      	      <td class="unit">м.кв.</td>
      	      <td class="unit">12</td>
      	  <!--    <td class="unit">20</td>
      	      <td class="unit">240</td>-->
	        </tr>	     
	    </table>
		</div>
	</div>
	<div class="price">
		<div class="prefix">Мы сделали это всего за</div>
		<?php
		$value = 42480;
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
				  <th class="unit">Ед. измер.</th>
                  <th class="unit">Кол-во</th>
				<!--  <th class="unit">Цена</th>
				  <th class="unit">Сумма</th>   -->                 
			  </tr>
			  <tr>
			    <td>Демонтаж    обоев</td>
			    <td class="unit">кв.м</td>
			    <td class="unit">43</td>
			   <!-- <td class="unit">110</td>
			    <td class="unit">4730</td>-->
		      </tr>
			  <tr>
			    <td>Демонтаж  электроточек</td>
			    <td class="unit">шт.</td>
			    <td class="unit">5</td>
			   <!-- <td class="unit">350</td>
			    <td class="unit">1750</td>-->
		      </tr>
			  <tr>
			    <td>Штробление    стен под электропроводку</td>
			    <td class="unit">п.м.</td>
			    <td class="unit">11</td>
			   <!-- <td class="unit">550</td>
			    <td class="unit">6050</td>-->
		      </tr>		
			  <tr>
			    <td>Прокладка    кабеля в штробе с заделкой гипсом</td>
			    <td class="unit">п.м.</td>
			    <td class="unit">11</td>
			 <!--   <td class="unit">150</td>
			    <td class="unit">1650</td>-->
		      </tr>	
              			  <tr>
              			    <td>Изготовление    отверстия под электроточку</td>
              			    <td class="unit">шт.</td>
              			    <td class="unit">9</td>
              			  <!--  <td class="unit">450</td>
              			    <td class="unit">4050</td>-->
		                </tr>	
              			  <tr>
              			    <td>Установка    новых электроточек</td>
              			    <td class="unit">шт.</td>
              			    <td class="unit">9</td>
              			  <!--  <td class="unit">250</td>
              			    <td class="unit">2250</td>-->
		                </tr>	
              			  <tr>
              			    <td>Штукатурка    стен по маякам</td>
              			    <td class="unit">кв.м</td>
              			    <td class="unit">43</td>
              			   <!-- <td class="unit">650</td>
              			    <td class="unit">27950</td>-->
		                </tr>	
              			  <tr>
              			    <td>Поклейка обоев    (текстильные)</td>
              			    <td class="unit">кв.м</td>
              			    <td class="unit">51</td>
              			   <!-- <td class="unit">350</td>
              			    <td class="unit">17850</td>-->
		                </tr>	
              			  <tr>
              			    <td>Установка    двери в комплексе</td>
              			    <td class="unit">шт.</td>
              			    <td class="unit">1</td>
              			   <!-- <td class="unit">3420</td>
              			    <td class="unit">3420</td>-->
		                </tr>	
              			  <tr>
              			    <td>Шпаклевка стен    с шлифовкой</td>
              			    <td class="unit">кв.м</td>
              			    <td class="unit">51</td>
              			  <!--  <td class="unit">390</td>
              			    <td class="unit">19890</td>-->
		                </tr>	
              			  <tr>
              			    <td>Монтаж    перегородок из ГКЛ</td>
              			    <td class="unit">кв.м</td>
              			    <td class="unit">8</td>
              			  <!--  <td class="unit">590</td>
              			    <td class="unit">4720</td>-->
		                </tr>	
              			  <tr>
              			    <td>Криволинейные    участки на стенах</td>
              			    <td class="unit">п.м.</td>
              			    <td class="unit">5</td>
              			   <!-- <td class="unit">890</td>
              			    <td class="unit">4450</td>-->
		                </tr>	
              			  <tr>
              			    <td>Грунтовка стен</td>
              			    <td class="unit">кв.м</td>
              			    <td class="unit">43</td>
              			<!--    <td class="unit">50</td>
              			    <td class="unit">2150</td>-->
		                </tr>	
              			  <tr>
              			    <td>Потолок из ГКЛ</td>
              			    <td class="unit">кв.м</td>
              			    <td class="unit">8</td>
              			  <!--  <td class="unit">590</td>
              			    <td class="unit">4720</td>-->
		                </tr>	
              			  <tr>
              			    <td>Криволинейные    участки на потолке</td>
              			    <td class="unit">п.м.</td>
              			    <td class="unit">6</td>
              			   <!-- <td class="unit">590</td>
              			    <td class="unit">3540</td>-->
		                </tr>	
              			  <tr>
              			    <td>Подрезка ГКЛ</td>
              			    <td class="unit">п.м.</td>
              			    <td class="unit">6</td>
              		<!--	    <td class="unit">160</td>
              			    <td class="unit">960</td>-->
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
			    <th>Сумма</th>-->                    
		    </tr>
		    <tr>
		      <td>Шпаклевка    потолка</td>
		      <td class="unit">кв.м</td>
		      <td class="unit">8</td>
		    <!--  <td class="unit">370</td>
		      <td class="unit">2960</td>-->
	        </tr>
		    <tr>
		      <td>Шлифовка    потолка и грунтование</td>
		      <td class="unit">кв.м</td>
		      <td class="unit">8</td>
		     <!-- <td class="unit">200</td>
		      <td class="unit">1600</td>-->
	        </tr>
		    <tr>
		      <td>Покраска    потолка</td>
		      <td class="unit">кв.м</td>
		      <td class="unit">8</td>
		     <!-- <td class="unit">230</td>
		      <td class="unit">1840</td>-->
	        </tr>
		    <tr>
		      <td>Монтаж    натяжного потолка</td>
		      <td class="unit">кв.м</td>
		      <td class="unit">12</td>
		 <!--     <td class="unit">900</td>
		      <td class="unit">10800</td>-->
	        </tr>
		    <tr>
		      <td>Переход    потолка в другой уровень</td>
		      <td class="unit">п.м.</td>
		      <td class="unit">8</td>
		    <!--  <td class="unit">1190</td>
		      <td class="unit">9520</td>-->
	        </tr>
		    <tr>
		      <td>Установка    крепления под люстру</td>
		      <td class="unit">шт.</td>
		      <td class="unit">1</td>
		   <!--   <td class="unit">400</td>
		      <td class="unit">400</td>-->
	        </tr>	
		    <tr>
		      <td>Установка    кольца</td>
		      <td class="unit">шт.</td>
		      <td class="unit">5</td>
		     <!-- <td class="unit">250</td>
		      <td class="unit">1250</td>-->
	        </tr>	
		    <tr>
		      <td>Прокладка    провода по потолку на клипсах</td>
		      <td class="unit">п.м.</td>
		      <td class="unit">14</td>
		      <!--<td class="unit">130</td>
		      <td class="unit">1820</td>-->
	        </tr>	
		    <tr>
		      <td>Установка    светильников</td>
		      <td class="unit">шт.</td>
		      <td class="unit">9</td>
		  <!--    <td class="unit">490</td>
		      <td class="unit">4410</td>-->
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
		      <td>Демонтаж    паркетной доски</td>
		      <td class="unit">кв.м</td>
		      <td class="unit">20</td>
		  <!--    <td class="unit">90</td>
		      <td class="unit">1800</td>-->
	        </tr>
		    <tr>
		      <td>Демонтаж    плинтуса</td>
		      <td class="unit">п.м.</td>
		      <td class="unit">19</td>
		     <!-- <td class="unit">40</td>
		      <td class="unit">760</td>-->
	        </tr>
		    <tr>
		      <td>Наливной пол</td>
		      <td class="unit">кв.м</td>
		      <td class="unit">20</td>
		    <!--  <td class="unit">360</td>
		      <td class="unit">7200</td>-->
	        </tr>
		    <tr>
		      <td>Укладка    подложки</td>
		      <td class="unit">кв.м</td>
		      <td class="unit">20</td>
		    <!--  <td class="unit">40</td>
		      <td class="unit">800</td>-->
	        </tr>	
      	    <tr>
      	      <td>Укладка    паркетной доски</td>
      	      <td class="unit">кв.м</td>
      	      <td class="unit">20</td>
      	   <!--   <td class="unit">590</td>
      	      <td class="unit">11800</td>-->
   	        </tr>	
      	    <tr>
      	      <td>Подрезка    паркетной доски</td>
      	      <td class="unit">п.м.</td>
      	      <td class="unit">9</td>
      	    <!--  <td class="unit">180</td>
      	      <td class="unit">1620</td>-->
   	        </tr>	
      	    <tr>
      	      <td>Монтаж    плинтуса</td>
      	      <td class="unit">п.м.</td>
      	      <td class="unit">19</td>
      	    <!--  <td class="unit">120</td>
      	      <td class="unit">2280</td>-->
   	        </tr>	                             
	    </table>
		</div>
	</div>
	<div class="price">
		<div class="prefix">Мы сделали это всего за</div>
		<?php
		$value = 170990;
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
				'project': '3<canvas></canvas>'
			});
		});
	});
</script>

<script type="text/javascript">
<?php require 'scripts/group.js'; ?>
<?php require 'scripts/price.js'; ?>
</script>
