<?php 
 session_start(); 
 $_SESSION['e-mail'] = category_description(7); 
?>
<?php get_header(); ?>
<?php if (get_the_ID()=='2'): ?>
 <div style="clear:both"></div>
 <div class="first-block first-block_resize">
  <div class="h-orientation">
  <div class="first-block__circle first-block__circle_resize">
  	<p>
     <span>Срочный</span> ремонт стиральных машин любых марок<br>
     <a href="#win1" class="first-block__href_hover first-block__href_resize">Вызвать мастера ПРЯМО СЕЙЧАС!</a>
  	</p>
  </div>
  </div>    
 </div>
 <div class="second-block second-block_resize">
  <div class="h-orientation">
  <div class="second-block__content second-block__content_resize">
  	<span>Ремонт стиральных машин</span>
    <p>Поломки бывают разные: редкие и типичные, сложные и простые. Но любая из них кажется катастрофой, когда из строя выходит стиральная машина. Именно в такие моменты осознаешь, насколько такой помощник упрощает жизнь! Если это актуальный повод и для вашего расстройства, М-Мастер готов все изменить: наша специализация – ремонт стиральных машин в Минске и минском районе!</p>
  </div>
  <div class="second-block__image second-block__image_resize"></div>
  </div>
 </div>
 <div class="third-block third-block_resize">
  <div class="h-orientation">
  <div class="third-block__container third-block__container_resize">
   <span>Как мы работаем?</span>
   <table class="third-block__content third-block__content_resize">
    <tr>
     <td><img src="<?php bloginfo("template_directory");?>/optimized/img-min/bistro-icon.png" alt="clock"></td>
 	 <td><p>Мы решаем проблемы своих клиентов и делаем это быстро. Пожалуй, поэтому клиенты компании «М-Мастер» сохраняют наши визитки и рекомендуют своим друзьям.</p></td>
 	</tr>
 	<tr>
 	  <td><img src="<?php bloginfo("template_directory");?>/optimized/img-min/opit-icon.png" alt="skill"></td>
 	  <td><p>Мы решаем проблемы своих клиентов и делаем это быстро. Пожалуй, поэтому клиенты компании «М-Мастер» сохраняют наши визитки и рекомендуют своим друзьям.</p></td>
 	</tr>
 	 <tr>
 	  <td><img src="<?php bloginfo("template_directory");?>/optimized/img-min/viezd-icon.png" alt="tranport"></td>
 	  <td><p>Мы решаем проблемы своих клиентов и делаем это быстро. Пожалуй, поэтому клиенты компании «М-Мастер» сохраняют наши визитки и рекомендуют своим друзьям.</p></td>
 	</tr>
 	 <tr>
 	  <td><img src="<?php bloginfo("template_directory");?>/optimized/img-min/servis.png" alt="services"></td>
 	  <td><p>Мы решаем проблемы своих клиентов и делаем это быстро. Пожалуй, поэтому клиенты компании «М-Мастер» сохраняют наши визитки и рекомендуют своим друзьям.</p></td>
 	</tr>
 	 <tr>
 	  <td><img src="<?php bloginfo("template_directory");?>/optimized/img-min/garantija.png" alt="grant"></td>
 	  <td><p>Мы решаем проблемы своих клиентов и делаем это быстро. Пожалуй, поэтому клиенты компании «М-Мастер» сохраняют наши визитки и рекомендуют своим друзьям.</p></td>
 	</tr>
   </table>
  <div class="third-block__form third-block__form_resize">
  	<span>Стиральная машина вышла из строя?</span>
  	<p class="span-1">Наш мастер всё починит!</p>
    <form id="form_2" method="post">
  	<input type="text" name="name" placeholder="Имя" required>
    <input type="text" name="phone" placeholder="Номер" required>
    <input type="text" name="address"placeholder="Адресс">
    <textarea noresize name="task" placeholder="Описание проблемы"></textarea>
    <p class="span-2">Укажите удобное время для визита мастера</p>
    <div>
     <p>Число</p>
     <select name="day">
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="5">5</option>
      <option value="6">6</option>
      <option value="7">7</option>
      <option value="8">8</option>
      <option value="9">9</option>
      <option value="10">10</option>
      <option value="11">11</option>
      <option value="12">12</option>
      <option value="13">13</option>
      <option value="14">14</option>
      <option value="15">15</option>
      <option value="16">16</option>
      <option value="17">17</option>
      <option value="18">18</option>
      <option value="19">19</option>
      <option value="20">20</option>
      <option value="21">21</option>
      <option value="22">22</option>
      <option value="23">23</option>
      <option value="24">24</option>
      <option value="25">25</option>
      <option value="26">26</option>
      <option value="27">27</option>
      <option value="28">28</option>
      <option value="29">29</option>
      <option value="30">30</option>
      <option value="31">31</option>
     </select>
    </div>
    <div>
     <p>Месяц</p>
     <select name="month">
      <option value="Январь">Январь</option>
      <option value="Февраль">Февраль</option>
      <option value="Март">Март</option>
      <option value="Апрель">Апрель</option>
      <option value="Май">Май</option>
      <option value="Июнь">Июнь</option>
      <option value="Июль">Июль</option>
      <option value="Август">Август</option>
      <option value="Сентябрь">Сентябрь</option>
      <option value="Октябрь">Октябрь</option>
      <option value="Ноябрь">Ноябрь</option>
      <option value="Декабрь">Декабрь</option>
     </select>
    </div>
    <div>
     <p>Время</p>
     <select name="time">
      <option value="01:00">01:00</option>
      <option value="02:00">02:00</option>
      <option value="03:00">03:00</option>
      <option value="04:00">04:00</option>
      <option value="05:00">05:00</option>
      <option value="06:00">06:00</option>
      <option value="07:00">07:00</option>
      <option value="08:00">08:00</option>
      <option value="09:00">09:00</option>
      <option value="10:00">10:00</option>
      <option value="11:00">11:00</option>
      <option value="12:00">12:00</option>
      <option value="13:00">13:00</option>
      <option value="14:00">14:00</option>
      <option value="15:00">15:00</option>
      <option value="16:00">16:00</option>
      <option value="17:00">17:00</option>
      <option value="18:00">18:00</option>
      <option value="19:00">19:00</option>
      <option value="20:00">20:00</option>
      <option value="21:00">21:00</option>
      <option value="22:00">22:00</option>
      <option value="23:00">23:00</option>
      <option value="24:00">24:00</option>
     </select>   
    </div>
    <button>Вызвать мастера</button> 
  </div>
  </form>
  </div>
  </div>
 </div>
 <div class="fourth-block fourth-block_resize">
  <div class="h-orientation">
  <div class="fourth-block__content fourth-block__content_resize">
  	<span>C чем мы работаем?</span>
    <p>90% вызовов – типичные неисправности, одинаковые для большинства стиральных машин. Конечно, модели разных марок имеют существенные отличия, но все-таки призваны справляться с одной и той же задачей – стиркой. Однако «М-Мастер» успешно устраняет и «фирменные» неисправности, так что мы с радостью приведем в чувства ваши Siemens, Whirlpool, Samsung, Zanussi, Indesit, Bosch, LG, Electrolux, Ariston, Ardo, AEG и машины других брендов.<br>Куда сложнее приходится с поломками по вине невнимательных сборщиков. Находчивости от мастера по ремонту требуют и проблемы в виде заводских дефектов. Но лидером в ряду сложных неисправностей были и остаются «плавающие»: машинки с такими дефектами могут работать через раз. Но, поверьте, нашего опыта хватает, чтобы справиться и с ними. Ремонт стиральным машин с «М-Мастер» может осуществляться у вас на дому или в нашей мастерской – выбирайте оптимальный вариант!</p>
  </div>
  <div class="fourth-block__image fourth-block__image_resize"></div>
  </div>
 </div>
 <div class="fifth-block fifth-block_resize">
  <div class="h-orientation">
   <h3>Несколько советов перед ремонтом стиральной машины</h3>
   <menu class="fifth-block__selector fifth-block__selector_resize">
    <input id="vklad1" type="radio" name="lab-vklad" onChange="snipet('cont1')">
    <label for="vklad1" title="Вкладка 1">Машина не нагревает воду</label>

    <input id="vklad2" type="radio" name="lab-vklad" onChange="snipet('cont2')">
    <label for="vklad2" title="Вкладка 2">В машину не поступает вода</label>

    <input id="vklad3" type="radio" name="lab-vklad" onChange="snipet('cont3')">
    <label for="vklad3" title="Вкладка 3">Вода сразу сливается</label>

    <input id="vklad4" type="radio" name="lab-vklad" onChange="snipet('cont4')">
    <label for="vklad4" title="Вкладка 4">Машина пропускает воду</label>

    <input id="vklad5" type="radio" name="lab-vklad" onChange="snipet('cont5')" checked>
    <label for="vklad5" title="Вкладка 5">Машина не сливает воду</label>

    <input id="vklad6" type="radio" name="lab-vklad" onChange="snipet('cont6')">
    <label for="vklad6" title="Вкладка 6">Машина не включается</label>

    <input id="vklad7" type="radio" name="lab-vklad" onChange="snipet('cont7')">
    <label for="vklad7" title="Вкладка 7">Стук в процессе стирки</label>

   </menu>
   <div id="trigger" class="fifth-block__content fifth-block__content_resize">
     <div>
     <section id="cont1">
      <h4>1 позиция</h4>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse</p>
     </section>
     <section id="cont2">
      <h4>2 позиция</h4>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse</p>
     </section>
     <section id="cont3">
      <h4>3 позиция</h4>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse</p>
     </section>
     <section id="cont4">
      <h4>4 позиция</h4>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse</p>
     </section>
     <section id="cont5">
      <h4>Машина не сливает воду</h4>
      <p>Тут снова стоит вернуться к фильтру, проблема может быть в нем, а может – и в сливном насосе. Ирония в том, что причиной выхода из строя последнего мог стать именно забившийся фильтр. Постоянно следите за фильтром, тогда проблем со сливом не будет. Не знаете как? Попросите мастера показать.</p>
     </section>
     <section id="cont6">
      <h4>6 позиция</h4>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse</p>
     </section>
     <section id="cont7">
      <h4>7 позиция</h4>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse</p>
     </section>
   </div>
   </div>
  </div>
 </div>
  <script>
  function snipet(content){
   var finder;
   finder=document.getElementsByTagName('section');
   for (var i = 0; i < finder.length; i++){
     finder[i].style.display='none';
   }
   document.getElementById(content).style.display='block';
   switch(content){
     case 'cont1': document.getElementsByClassName('fifth-block__content')[0].style.backgroundImage="url('<?php bloginfo("template_directory");?>/optimized/img-min/ne-nagrevaet-vodu.jpg')";break;
     case 'cont2': document.getElementsByClassName('fifth-block__content')[0].style.backgroundImage="url('<?php bloginfo("template_directory");?>/optimized/img-min/ne-postupaet-voda.jpg')";break;
     case 'cont3': document.getElementsByClassName('fifth-block__content')[0].style.backgroundImage="url('<?php bloginfo("template_directory");?>/optimized/img-min/srazu-slivaetsa.jpg')";break;
     case 'cont4': document.getElementsByClassName('fifth-block__content')[0].style.backgroundImage="url('<?php bloginfo("template_directory");?>/optimized/img-min/propuskaet-vodu.jpg')";break;
     case 'cont5': document.getElementsByClassName('fifth-block__content')[0].style.backgroundImage="url('<?php bloginfo("template_directory");?>/optimized/img-min/ne-slivaet-vodu.jpg')";break;
     case 'cont6': document.getElementsByClassName('fifth-block__content')[0].style.backgroundImage="url('<?php bloginfo("template_directory");?>/optimized/img-min/ne-vkluchaetsa.jpg')";break;
     case 'cont7': document.getElementsByClassName('fifth-block__content')[0].style.backgroundImage="url('<?php bloginfo("template_directory");?>/optimized/img-min/stuchit.jpg')";break;
   }
  }
 </script>
 <div class="six-block six-block_resize">
   <h3>Не нашли свою неисправность в этом списке?</h3>
   <p>Получите бесплатную консультацию у наших специалистов!</p>
   <div><a href="#win1">Заказать консультацию</a></div>
 </div>
 <div class="seven-block seven-block_resize">
  <div class="h-orientation">
    <h3>Мы предлагаем ремонт по доступным ценам!</h3>
    <?php
     if ( have_posts() ) : query_posts('cat=6?orderby=date&order=ASC');   
     while (have_posts()) : the_post();?>
      <div class="seven-block__service seven-block__service_resize">
       <?php echo get_the_post_thumbnail() ?>
       <div class="under-text">
        <?php the_content() ?>
        <a href="#win1">Вызвать мастера</a>
       </div>
      </div>
    <?php  
     endwhile;
     endif;
     wp_reset_query();                
    ?>
    </div>
  </div>
 </div>
 <div class="eight-block">
  <div class="h-orientation">
   <h3>Почему стоит обратиться именно к нам?</h3>
    <div class="eight-block__whyer eight-block__whyer_resize">
     <img src="<?php bloginfo("template_directory");?>/optimized/img-min/master.png" alt="master">
     <p>Наш квалифицированный мастер с многолетним опытом работы в данной сфере выполнит ремонт любой сложности.</p>
    </div>
    <div class="eight-block__whyer eight-block__whyer_resize">
     <img src="<?php bloginfo("template_directory");?>/optimized/img-min/sroki.png" alt="sroki">
     <p>Мы осуществляем ремонт в максимально удобные и быстрые сроки и по доступным ценам.</p>
    </div>
    <div class="eight-block__whyer eight-block__whyer_resize">
     <img src="<?php bloginfo("template_directory");?>/optimized/img-min/garantija-2.png" alt="garantija-2">
     <p>Мы даем гарантию до 12 месяцев на все детали и качество произведенного ремонта в целом.</p>
    </div>
  </div>
 </div>
 <div class="nineth-block nineth-block_resize">
  <div class="h-orientation">
   <h3>Остались вопросы?</h3>
   <p>Наш менеджер перезвонит Вам и с удовольствием на них ответит!</p>
   <form id="form_3">
    <input name="name" placeholder="Имя" required>
    <input name="phone" placeholder="Номер" required>
    <button>Заказать звонок</button>
   </form>
  </div>
 </div>
 <div class="ten-block ten-block_resize">
  <div class="h-orientation">
   <h3>Отзывы</h3>
   <?php echo do_shortcode("[metaslider id=7]"); ?>
   <div style="clear:both"></div>
   <h3>Мы работаем со всеми марками стиральных машин!</h3>
   <div style="float:left;width:95%"><?php echo do_shortcode( '[logo-showcase id="39" title=""]' ); ?></div>
  </div>
 </div>
 <?php else: ?>
  <?php if (get_the_ID()=='88'): ?>
   <div class="guarantee guarantee_resize">
    <div class="h-orientation">
     <div class="guarantee__content guarantee__content_resize">
      <span>Гарантия на ремонт<br>стиральных машин</span>
      <p>Отдавая немалые деньги за стиральную машину, мы хотим быть уверены, что она будет честно справляться с возложенными на неё задачами. Позже, отправляя машину в сервисную мастерскую для устранения поломки, мы также хотим быть уверены, что эти меры были предприняты не зря. Так что вопрос о том, какой может быть гарантия, как она должна предоставляться, на каких условиях действовать и какие преимущества давать клиенту, – имеет смысл описать чётко и ясно.</p>
     </div>
     <div class="guarantee__image guarantee__image_resize"></div>
     <div class="guarantee__page guarantee__page_resize">
      <?php if (have_posts()) : while (have_posts()) : the_post();?>
       <?php the_content(); ?>
      <?php endwhile; endif; ?>
     </div>
    </div>
   </div>
   <?php else: ?>
    <?php if (get_the_ID()=='92'): ?>
     <div class="discounts discounts_resize">
      <div class="h-orientation">
       <div class="discounts__content discounts__content_resize">
        <span>Скидки на ремонт сиральных машин</span>
        <p>Мы любим нашмх клиентов и стараемся сделать наши услуги максимально доступными для всех. Именно поэтому мы предлагаем скидку от 10% до 30% на ремонт стиральных машин для:<br>-многодетных семей;<br>-семей, воспитывающих детей-инвалидов;<br>-инвалидам первой и второй группы.</p>
       </div>
       <div class="discounts__image discounts__image_resize"></div>
        <div class="discounts__page discounts__page_resize">
         <?php if (have_posts()) : while (have_posts()) : the_post();?>
          <?php the_content(); ?>
         <?php endwhile; endif; ?>
        </div>
      </div>
     </div>
     <?php else: ?>
      <?php if (get_the_ID()=='94'): ?>
       <div class="contacts contacts_resize">
        <div class="h-orientation">
         <div class="contacts__content contacts__content_resize">
          <?php if (have_posts()) : while (have_posts()) : the_post();?>
           <?php the_content(); ?>
          <?php endwhile; endif; ?>
         </div>
         <div class="contacts__image contacts__image_resize"><?php echo do_shortcode('[huge_it_maps id="2"]');?></div>
        </div>
       </div>
       <?php else: ?>
        <?php if (get_the_ID()=='90'): ?>
         <div class="article article_resize">
          <div class="h-orientation">
           <div class="article__content article__content_resize">
            <span>Статьи</span>
            <p>В данном разделе Вы можете ознакомиться с некоторой полезной информацией, которая поможет Вам сделать правильный выбор при покупке стиральной машины, самостоятельно ее подключить и правильно за ней ухаживать, чтобы максимально продлить срок ее эксплуатации.</p><p>Также Вы найдете здесь ответы на многие распространенные вопросы.</p>
           </div>
           <div class="article__image article__image_resize"></div>
           <div class="article__page article__page_resize">
            <h3><?php echo get_cat_name(8)?></h3>
            <menu class="article__selector article__selector_resize">
            <?php $error_counter= 0;
             if ( have_posts() ) : query_posts('cat=8?orderby=date&order=ASC');   
              while (have_posts()) : the_post();?>
               <input id="code-<?php echo $error_counter;?>" type="radio" name="code-error">
               <label for="code-<?php echo $error_counter;?>"><?php the_title() ?></label>
               <section><?php the_content() ?></section>
            <?php  
              $error_counter++;
              endwhile;
             endif;
            wp_reset_query();                
             ?>
            </menu>
            <h3><?php echo get_cat_name(9)?></h3>
            <menu class="article__selector article__selector_resize">
            <?php $error_counter= 0;
             if ( have_posts() ) : query_posts('cat=9?orderby=date&order=ASC');   
              while (have_posts()) : the_post();?>
               <input id="quest-<?php echo $error_counter;?>" type="radio" name="questions">
               <label for="quest-<?php echo $error_counter;?>"><?php the_title() ?></label>
               <section><?php the_content() ?></section>
            <?php  
              $error_counter++;
              endwhile;
             endif;
            wp_reset_query();                
             ?>
            </menu>
            <h3><?php echo get_cat_name(10)?></h3>
            <?php echo category_description(10)?>
            <menu class="article__selector article__selector_resize">
            <?php $error_counter= 0;
             if ( have_posts() ) : query_posts('cat=10?orderby=date&order=ASC');   
              while (have_posts()) : the_post();?>
               <input id="install-<?php echo $error_counter;?>" type="radio" name="install">
               <label for="install-<?php echo $error_counter;?>"><?php the_title() ?></label>
               <section><?php the_content() ?></section>
            <?php  
              $error_counter++;
              endwhile;
             endif;
            wp_reset_query();                
             ?>
            </menu>
            <?php if (have_posts()) : while (have_posts()) : the_post();?>
             <?php the_content(); ?>
            <?php endwhile; endif; ?>
           </div>
          </div>
         </div>
        <?php endif?>
      <?php endif?>
    <?php endif?>
  <?php endif?>
 <?php endif?>
<?php get_footer();