<?php
/*
Theme Name: Stars
Theme URI: http://mkvadrat.com/
Author: M2
Author URI: http://mkvadrat.com/
Description: Тема для сайта Stars
Version: 1.0
*/
?>

<!DOCTYPE html>

<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php echo sr_wp_title('','', true, 'right'); ?></title>
    <meta name="keywords" CONTENT="краткое описание страницы">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

	<!-- Include all compiled plugins (below), or include individual files as needed -->
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- HTML5 for IE -->
    <!--[if IE]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    
    <script src="https://code.jquery.com/jquery-latest.js"></script>

    <link rel="apple-touch-icon" sizes="57x57" href="<?php echo esc_url( get_template_directory_uri() ); ?>/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="<?php echo esc_url( get_template_directory_uri() ); ?>/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo esc_url( get_template_directory_uri() ); ?>/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo esc_url( get_template_directory_uri() ); ?>/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo esc_url( get_template_directory_uri() ); ?>/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="<?php echo esc_url( get_template_directory_uri() ); ?>/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="<?php echo esc_url( get_template_directory_uri() ); ?>/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="<?php echo esc_url( get_template_directory_uri() ); ?>/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo esc_url( get_template_directory_uri() ); ?>/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="<?php echo esc_url( get_template_directory_uri() ); ?>/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo esc_url( get_template_directory_uri() ); ?>/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="<?php echo esc_url( get_template_directory_uri() ); ?>/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo esc_url( get_template_directory_uri() ); ?>/favicon-16x16.png">
    <link rel="manifest" href="<?php echo esc_url( get_template_directory_uri() ); ?>/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="<?php echo esc_url( get_template_directory_uri() ); ?>/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    
    <?php wp_head(); ?>
    
    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/style.css">
    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/travelline-styles.css">
      <!-- start TL head script -->
      <script type="text/javascript">
          (function(w){
              var q=[
                  ['setContext', 'TL-INT-star-crimea', 'ru']
              ];
              var t=w.travelline=(w.travelline||{}),ti=t.integration=(t.integration||{});ti.__cq=ti.__cq?ti.__cq.concat(q):q;
              if (!ti.__loader){ti.__loader=true;var d=w.document,p=d.location.protocol,s=d.createElement('script');s.type='text/javascript';s.async=true;s.src=(p=='https:'?p:'http:')+'//ibe.tlintegration.com/integration/loader.js';(d.getElementsByTagName('head')[0]||d.getElementsByTagName('body')[0]).appendChild(s);}
          })(window);
      </script>
      <!-- end TL head script -->
  </head>

  <body <?php body_class(); ?>>
  
  <!-- HelloPreload https://hello-site.ru/preloader/ -->
  <!--<style type="text/css">#hellopreloader>p{display:none;}#hellopreloader_preload{display: block;position: fixed;z-index: 99999;top: 0;left: 0;width: 100%;height: 100%;min-width: 1000px;background: #8B2938 url(/wp-content/themes/nord/images/oval.svg) center center no-repeat;background-size:41px;}</style>
  <div id="hellopreloader"><div id="hellopreloader_preload"></div><p></p></div>
  <script type="text/javascript">var hellopreloader = document.getElementById("hellopreloader_preload");function fadeOutnojquery(el){el.style.opacity = 1;var interhellopreloader = setInterval(function(){el.style.opacity = el.style.opacity - 0.05;if (el.style.opacity <=0.05){ clearInterval(interhellopreloader);hellopreloader.style.display = "none";}},16);}window.onload = function(){setTimeout(function(){fadeOutnojquery(hellopreloader);},1000);};</script>-->
  <!-- HelloPreload https://hello-site.ru/preloader/ -->
  
	<div id="page">
    <!-- start header -->
    <div id="top"></div>

    <header class="header">
        <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar("Top address")) : ?><?php endif; ?>
    	<a class="mmenu" href="#menu"><i class="fa fa-bars" aria-hidden="true"></i></a>
    	<a href="#recall" class="call-back-mobile fancybox"><img src="/wp-content/themes/nord/images/icon-phone-mobile.png" alt="">Заказать обратный звонок</a>
        <div class="logo">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>">ПАНСИОНАТ<br>ЗВЁЗДНЫЙ</a>
        </div>

        <div class="mobile-phone-block">
        	<div><?php echo getMeta('phone_main_page'); ?></div>
        </div>

        <div class="menu">
            
            <div class="left-side">
				<?php
					if (has_nav_menu('primary_menu')){
						wp_nav_menu( array(
							'theme_location'  => 'primary_menu',
							'menu'            => '',
							'container'       => false,
							'container_class' => '',
							'container_id'    => '',
							'menu_class'      => '',
							'menu_id'         => '',
							'echo'            => true,
							'fallback_cb'     => 'wp_page_menu',
							'before'          => '',
							'after'           => '',
							'link_before'     => '',
							'link_after'      => '',
							'items_wrap'      => '<ul class="first-menu">%3$s</ul>',
							'depth'           => 2,
							'walker'          => new primary_menu(),
						) );
					}
				?>
            </div>
            <div class="right-side">
				<?php
					if (has_nav_menu('second_menu')){
						wp_nav_menu( array(
							'theme_location'  => 'second_menu',
							'menu'            => '',
							'container'       => false,
							'container_class' => '',
							'container_id'    => '',
							'menu_class'      => '',
							'menu_id'         => '',
							'echo'            => true,
							'fallback_cb'     => 'wp_page_menu',
							'before'          => '',
							'after'           => '',
							'link_before'     => '',
							'link_after'      => '',
							'items_wrap'      => '<ul class="first-menu">%3$s<li class="phon"><div>' . getMeta('phone_main_page') . '</div></li></ul>',
							'depth'           => 2,
							'walker'          => new primary_menu(),
						) );
					}
				?>
            </div>
        </div>
    </header>
	
    <!-- end header -->