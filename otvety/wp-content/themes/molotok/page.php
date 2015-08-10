<?php get_header(); ?>

<div id="columns">
   <div class="viewport">
      <div id="middleColumn">
         <div id="content">
            <div class="path">
               <ul>
                  <li>
                     <a href="/index.html "> Главная страница </a>
                  </li>
		  <li>
		     <a href="/otvety/">Ответы на вопросы</a>
		 </li>                      
               </ul>
            </div>
            <?php get_template_part( 'loop', 'page' ); ?>
         </div>
      </div>
      <div id="leftColumn" class="sidebar">
         
             <?php get_sidebar(); ?>
         


          
      </div>
   </div>
   <div id="rightColumn" class="sidebar">
      <div class="block">
        <div class="order">
<noindex>
<ul class="advantages">
<li><span class="num">1</span>Лучшие мастера из РФ и РБ</li>
<li><span class="num">2</span>Оплата за результат</li>
<li><span class="num">3</span>Каталог материалов</li>
<li><span class="num">4</span>Бесплатный <br>выезд сметчика</li>
<li><span class="num">5</span>Гарантия — <br>до 10 лет</li>
</ul>
</noindex>
<p>Заполните заявку и наш специалист перезвонит вам в течении 5 минут.</p>
<form action="/content/zakaz.html" method="post">
<input name="phone" class="text" type="text" value="8 (___) ___-__-__" title="8 (___) ___-__-__">
<input name="name" class="text" type="text" value="Как вас зовут" title="Как вас зовут">
<textarea name="subject" class="text" title="Что нужно сделать">Что нужно сделать</textarea>
<input class="submit" type="submit" value="Отправить заявку">
</form>
</div> 
      </div>
       
   </div>
</div>

<?php get_footer(); ?>