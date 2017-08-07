<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package m-master
 */

get_header(); ?>
     <div class="not-found not-found_resize">
      <div class="h-orientation">
       <div class="not-found__content not-found__content_resize">
        <span>Произошла ошибка 404</span>
        <p>
         Вы попали на страницу ошибки 404, возможной причиной данной ошибки может быть следующее:<br>
         Страница которую вы пытаетесь найти несуществует;<br>
         Страница которую вы пытаетесь найти была перенесена навсегда, а возможно временно;<br>
         Возможно адресс в браузерной строке который вы задали был введен некорректно,проверьте его правильность;<br>
         Некоторые браузеры чувствительны к вводимому регистру символов в браузерной строке, проверьте правильность регистров;<br>
         Попробуйте перейти по заданой адресной строке позднее.<br>
         Если данная проблема для вас является актуальной и постоянной, просьба связаться с нашим оператором для устранения её последующего возникновения, заранее благодарим Вас.<br>
         С уважением служба поддержки интернет-ресурса!</p>
       </div>
       <div class="not-found__image not-found__image_resize"></div>
        <div class="not-found__page not-found__page_resize">
         <?php if (have_posts()) : while (have_posts()) : the_post();?>
          <?php the_content(); ?>
         <?php endwhile; endif; ?>
        </div>
      </div>
     </div>
  

<?php
get_footer();
