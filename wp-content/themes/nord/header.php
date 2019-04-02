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

    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/reset.css">
    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/fonts.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/main.css?v=3">
    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/media.css">

    <!-- sweetalert -->
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/sweetalert.min.js"></script>
    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/sweetalert.css">

	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jquery-1.9.1.min.js"></script>
	
	<!-- JQUERY UI -->
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jquery-ui-1.12.1/jquery-ui.min.js"></script>
	<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jquery-ui-1.12.1/jquery-ui.min.css">

	<!-- Include all compiled plugins (below), or include individual files as needed -->
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- OWL-CAROUSEL -->
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/owl.theme.default.css">

	<!--SWEETALERT-->
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/sweetalert.min.js"></script>
	<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/sweetalert.css">
	
	<!-- REVIEWS -->
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/reviews.js"></script>
	
	<!-- MASK -->
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/mask.js"></script>

    <!-- FANCYBOX -->
    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/source/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />
    <script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/source/jquery.fancybox.pack.js?v=2.1.5"></script>
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jquery.mousewheel-3.0.6.pack.js"></script>

    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/source/helpers/jquery.fancybox-buttons.css?v=1.0.5" type="text/css" media="screen" />
    <script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>
    <script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/source/helpers/jquery.fancybox-media.js?v=1.0.6"></script>

    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/source/helpers/jquery.fancybox-thumbs.css?v=1.0.7" type="text/css" media="screen" />
    <script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>

    <!-- HTML5 for IE -->
    <!--[if IE]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- MMENU -->
    <!-- <link type="text/css" rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/demo.css" /> -->
    <link type="text/css" rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/jquery.mmenu.all.css" />
    <script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jquery.mmenu.all.js"></script>
	
	<!-- TRAVELLINE -->
    <script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/travelline.js"></script>
	
	<script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/custom.js"></script>
	
	<!-- MOBILE MENU -->
	<script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jquery.slimmenu.min.js"></script>
	<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/slimmenu.min.css">
	
	<!-- FAVICONS -->
	<link rel="apple-touch-icon" sizes="57x57" href="<?php echo esc_url( get_template_directory_uri() ); ?>/favicons/apple-touch-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="<?php echo esc_url( get_template_directory_uri() ); ?>/favicons/apple-touch-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="<?php echo esc_url( get_template_directory_uri() ); ?>/favicons/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="<?php echo esc_url( get_template_directory_uri() ); ?>/favicons/apple-touch-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="<?php echo esc_url( get_template_directory_uri() ); ?>/favicons/apple-touch-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="<?php echo esc_url( get_template_directory_uri() ); ?>/favicons/apple-touch-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="<?php echo esc_url( get_template_directory_uri() ); ?>/favicons/apple-touch-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="<?php echo esc_url( get_template_directory_uri() ); ?>/favicons/apple-touch-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="<?php echo esc_url( get_template_directory_uri() ); ?>/favicons/apple-touch-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="32x32" href="<?php echo esc_url( get_template_directory_uri() ); ?>/favicons/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="192x192" href="<?php echo esc_url( get_template_directory_uri() ); ?>/favicons/android-chrome-192x192.png">
	<link rel="icon" type="image/png" sizes="16x16" href="<?php echo esc_url( get_template_directory_uri() ); ?>/favicons/favicon-16x16.png">
	<link rel="manifest" href="<?php echo esc_url( get_template_directory_uri() ); ?>/favicons/manifest.json">
	<link rel="mask-icon" href="<?php echo esc_url( get_template_directory_uri() ); ?>/favicons/safari-pinned-tab.svg" color="#5bbad5">
	<meta name="msapplication-TileColor" content="#ffc40d">
	<meta name="msapplication-TileImage" content="<?php echo esc_url( get_template_directory_uri() ); ?>/favicons/mstile-144x144.png">
	<meta name="theme-color" content="#ffffff">
	
	<?php wp_head(); ?>
</head>
<body>
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

    <ul class="socials">
        <li><a title="Карта" rel="nofollow" target="_blank" class="ancLinks" href="<?php echo getMeta('map_sl_main_page'); ?>"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/soc-1.png" alt=""></a></li>
        <li><a title="Обратная связь" rel="nofollow" target="_blank" class="ancLinks" href="<?php echo getMeta('send_form_main_page'); ?>"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/soc-2.png" alt=""></a></li>
        <li><a rel="nofollow" target="_blank" href="<?php echo getMeta('fb_main_page'); ?>"  title="Facebook"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/soc-3.png" alt=""></a></li>
        <li><a title="Вконтакте" target="_blank" rel="nofollow" href="<?php echo getMeta('vk_main_page'); ?>"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/soc-4.png" alt=""></a></li>
        <li><a title="Одноклассники" target="_blank" rel="nofollow" href="<?php echo getMeta('ok_main_page'); ?>"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/soc-5.png" alt=""></a></li>
        <li><a title="TripAdvisor" target="_blank" rel="nofollow" href="<?php echo getMeta('tripadvisor_main_page'); ?>"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/soc-7.png" alt=""></a></li>
        <li><a title="Booking" target="_blank" rel="nofollow" href="<?php echo getMeta('booking_main_page'); ?>"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/soc-8.png" alt=""></a></li>
        <li><a title="TopHotels" target="_blank" rel="nofollow" href="<?php echo getMeta('tophotels_main_page'); ?>"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/soc-9.png" alt=""></a></li>
    </ul>

    <div id="top"></div>

    <header class="header">
    	<a class="mmenu" href="#menu"><i class="fa fa-bars" aria-hidden="true"></i></a>
    	<a href="#recall" class="call-back-mobile fancybox"><img src="/wp-content/themes/nord/images/icon-phone-mobile.png" alt="">Заказать обратный звонок</a>
        <div class="logo">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
				<img
				  src="<?php header_image(); ?>"
				  height="<?php echo get_custom_header()->height; ?>"
				  width="<?php echo get_custom_header()->width; ?>"
				  alt="logotype"
				/>
			</a>
        </div>

        <div class="mobile-phone-block">
        	<?php echo getMeta('phone_main_page'); ?>
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
							'items_wrap'      => '<ul class="first-menu">%3$s<li>' . getMeta('phone_main_page') . '</li></ul>',
							'depth'           => 2,
							'walker'          => new primary_menu(),
						) );
					}
				?>
            </div>
        </div>
    </header>
	
    <!-- end header -->