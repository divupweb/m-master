<!doctype html>
 <html <?php language_attributes(); ?>>
  <head>
   <meta charset="<?php bloginfo( 'charset' ); ?>">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="format-detection" content="telephone=no"/>
   <?php wp_head(); ?>
   <style>
    @font-face {
    	font-family: 'HelveticaNeueCyr-Light';
    	src: url('<?php bloginfo("template_directory");?>/fonts/HelveticaNeueCyr-Light.eot');
    	src: url('<?php bloginfo("template_directory");?>/fonts/HelveticaNeueCyr-Light.eot?#iefix') format('embedded-opentype'),
    		 url('<?php bloginfo("template_directory");?>/fonts/HelveticaNeueCyr-Light.woff') format('woff'),
    		 url('<?php bloginfo("template_directory");?>/fonts/HelveticaNeueCyr-Light.ttf') format('truetype'),
    		 url('<?php bloginfo("template_directory");?>/fonts/HelveticaNeueCyr-Light.svg#FontName') format('svg');
    	font-style: normal;
    	font-weight: normal;
    }
    @font-face {
      font-family: 'HelveticaNeueCyr-Roman';
      src: url('<?php bloginfo("template_directory");?>/fonts/HelveticaNeueCyr-Roman.eot');
      src: url('<?php bloginfo("template_directory");?>/fonts/HelveticaNeueCyr-Roman.eot?#iefix') format('embedded-opentype'),
         url('<?php bloginfo("template_directory");?>/fonts/HelveticaNeueCyr-Roman.woff') format('woff'),
         url('<?php bloginfo("template_directory");?>/fonts/HelveticaNeueCyr-Roman.ttf') format('truetype'),
         url('<?php bloginfo("template_directory");?>/fonts/HelveticaNeueCyr-Roman.svg#FontName') format('svg');
      font-style: normal;
      font-weight: normal;
    }
    @font-face {
      font-family: 'HelveticaNeueCyr-Italic';
      src: url('<?php bloginfo("template_directory");?>/fonts/HelveticaNeueCyr-Italic.eot');
      src: url('<?php bloginfo("template_directory");?>/fonts/HelveticaNeueCyr-Italic.eot?#iefix') format('embedded-opentype'),
         url('<?php bloginfo("template_directory");?>/fonts/HelveticaNeueCyr-Italic.woff') format('woff'),
         url('<?php bloginfo("template_directory");?>/fonts/HelveticaNeueCyr-Italic.ttf') format('truetype'),
         url('<?php bloginfo("template_directory");?>/fonts/HelveticaNeueCyr-Italic.svg#FontName') format('svg');
      font-style: normal;
      font-weight: normal;
    }
    @font-face {
      font-family: 'Lloyd';
      src: url("<?php bloginfo("template_directory");?>/fonts/Lloyd.eot");
      src: url("<?php bloginfo("template_directory");?>/fonts/Lloyd.eot?#iefix")format("embedded-opentype"),
           url("<?php bloginfo("template_directory");?>/fonts/Lloyd.woff") format("woff"),
           url("<?php bloginfo("template_directory");?>/fonts/Lloyd.ttf") format("truetype");
      font-style: normal;
      font-weight: normal;
    }
   </style>
   <script src="<?php bloginfo("template_directory");?>/optimized/js-min/jquery.min.js"></script>
  </head>
  <body>
   <div class="page-container"> 
    <div class="page-align">
     <header class="header header_resize">
      <span class="shower-menu">≡</span>
      <div class="header__logotype"><img src="<?php bloginfo("template_directory");?>/optimized/img-min/logotype.png" alt="logotype"></div>
      <?php wp_nav_menu(array('theme_location'=>'primary', 'menu_class'=>'header__menu header__menu_hover header__menu_resize', ));?>
      <div class="header__contacts header__contacts_resize">
       <a href="#win1"></a>
       <?php echo category_description(5)?>
      </div>
     </header>
     <div class="dm-overlay" id="win1" onclick="location.href='#close'">
       <div class="dm-table">
        <div class="dm-cell">
         <div class="dm-modal" onclick="event.stopPropagation()">
          <h3>Оставьте свои данные и мы перезвоним Вам</h3>
          <hr size="2" color="black">
          <form id="form_1" method="post">
           <input type="text" name="name" placeholder="Имя" pattern="\D{3,}" required><br>
           <input type="text" name="phone" placeholder="Номер" minlength="5" maxlength="25" required><br> 
           <button>Заказать звонок</button><br>
          </form>
         </div>
        </div>
       </div>
      </div>
     <div class="dm-overlay" id="win2" onclick="location.href='#close'">
      <div class="dm-table">
       <div class="dm-cell">
        <div class="dm-modal" onclick="event.stopPropagation()">
          <h3>Спасибо за заявку! В ближайшее время мы с вами свяжемся.</h3>
        </div>
       </div>
      </div>
     </div>