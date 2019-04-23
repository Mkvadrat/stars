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
    
    <script src="http://code.jquery.com/jquery-latest.js"></script>

	
	<?php wp_head(); ?>
      <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/style.css">
</head>

  <body <?php body_class(); ?>>
	<div id="page">
        <nav id="menu">
			<?php
				if (has_nav_menu('mobile_menu')){
					wp_nav_menu( array(
						'theme_location'  => 'mobile_menu',
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
						'items_wrap'      => '<ul>%3$s</ul>',
						'depth'           => 2,
						'walker'          => new primary_menu(),
					) );
				}
			?>
        </nav>

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