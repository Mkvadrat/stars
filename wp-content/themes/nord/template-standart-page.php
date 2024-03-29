<?php
/*
Template name: Standart page
Theme Name: Stars
Theme URI: http://mkvadrat.com/
Author: M2
Author URI: http://mkvadrat.com/
Description: Тема для сайта Stars
Version: 1.0
*/

get_header(); 
?>
	
	<main class="service-in">

        <!-- start top slider -->

		<div class="owl-carousel owl-theme header-slider narrow-header-slider">
			<?php
				global $nggdb;
				$slider_id = getNextGallery('32', 'slider_for_all_pages');
				$slider_image = $nggdb->get_gallery($slider_id[0]["ngg_id"], 'sortorder', 'ASC', false, 0, 0);
				if($slider_image){
					foreach($slider_image as $image) {
				?>
					<div style="background-image: url('<?php echo nextgen_esc_url($image->imageURL); ?>')">
					</div>
				<?php
					}
				}
			?>
		</div>
        <?php
        $page_main_search = parse_url($_SERVER['REQUEST_URI']);
        if (strpos($page_main_search['path'],"/booking") === false) : ?>
        <!-- start TL Search form script -->
        <div id="block-search">
            <div id="tl-search-form" class="tl-container"><noindex><a href="http://www.travelline.ru/products/tl-hotel/" rel="nofollow">система онлайн-бронирования</a></noindex></div>
        </div>
        <script>
            document.addEventListener('DOMContentLoaded', function(){
                var idInter = setInterval(function() {
                    if (document.getElementById("mm-0")!= null) {
                        clearInterval(idInter);
                        (function(w){
                            var q=[
                                ['setContext', 'TL-INT-star-crimea', 'ru'],
                                ['embed', 'search-form', {container: 'tl-search-form'}]
                            ];
                            var t=w.travelline=(w.travelline||{}),ti=t.integration=(t.integration||{});ti.__cq=ti.__cq?ti.__cq.concat(q):q;
                            if (!ti.__loader){ti.__loader=true;var d=w.document,p=d.location.protocol,s=d.createElement('script');s.type='text/javascript';s.async=true;s.src=(p=='https:'?p:'http:')+'//ibe.tlintegration.com/integration/loader.js';(d.getElementsByTagName('head')[0]||d.getElementsByTagName('body')[0]).appendChild(s);}
                        })(window);
                    }
                }, 1000);
            });
        </script>
        <!-- end TL Search form script -->
        <?php endif; ?>
        <!-- end top slider -->
        <div class="text-block title-page">
            <h1 class="h1-title-center"><?php the_title(); ?></h1>
        </div>
        <hr>
        <!-- start offers -->
        <?php echo get_post_meta( get_the_ID(), 'code_block_standart_page', $single = true ); ?>
        <!-- end offers -->

		<hr>

        <div class="text-block open-text-block">
            <?php echo get_post_meta( get_the_ID(), 'text_standart_page', $single = true ); ?>
		</div>
    </main>
	
<?php get_footer(); ?>