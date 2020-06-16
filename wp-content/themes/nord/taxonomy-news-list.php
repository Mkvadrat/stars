<?php
/*
Theme Name: Stars
Theme URI: http://mkvadrat.com/
Author: M2
Author URI: http://mkvadrat.com/
Description: Тема для сайта Stars
Version: 1.0
*/

get_header();
?>
	
	    <main class="main-akcii">

        <!-- start top slider -->

		<div class="owl-carousel owl-theme header-slider narrow-header-slider">
			<?php
				global $nggdb;
				$slider_id = getNextGallery('32', 'slider_for_all_pages');
				$slider_image = $nggdb->get_gallery($slider_id[0]["ngg_id"], 'sortorder', 'ASC', false, 0, 0);
				if($slider_image){
					foreach($slider_image as $image) {
				?>
					<div>
						<img src="<?php echo nextgen_esc_url($image->imageURL); ?>" alt="<?php echo esc_attr($image->alttext); ?>">
					</div>
				<?php
					}
				}
			?>
		</div>

        <!-- end top slider -->
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
        <!-- start offers -->
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
		<?php				   
			$term = get_queried_object();
			$cat_id = $term->term_id;
			$cat_code = get_term_meta($cat_id, 'code_block_category_news');
			echo $cat_code[0];
		?>

        <!-- end offers -->

<div class="text-block title-page">
<h1 class="h1-title-center">
<?php				   
					$cat_title_id = $term->term_id;
					$cat_title = get_term_meta($cat_title_id, 'title_category_news');
					echo $cat_title[0];
				?>
</h1>
</div>

			
			<div class="text-block">
				<?php				   
					$cat_descr_id = $term->term_id;
					$cat_descr= get_term_meta($cat_descr_id, 'text_category_news');
					echo $cat_descr[0];
				?>
			</div>
        <!-- start akcii-list -->
<div class="text-block">
		<?php
			$current_page = (get_query_var('paged')) ? get_query_var('paged') : 1;
			$args = array(
				'category' 	     => 'news-list',
				'post_type'      => 'news',
				'posts_per_page' => $GLOBALS['wp_query']->query_vars['posts_per_page'],
				'paged'          => $current_page
			);

			$news_list = get_posts( $args );
		?>

        <ul class="akcii-list">
			<?php if($news_list){ ?>
				<?php foreach($news_list as $news){ ?>
				<?php
				$image_url = wp_get_attachment_image_src( get_post_thumbnail_id($news->ID), 'full');
				$descr = wp_trim_words( get_post_meta( $news->ID, 'text_news_page', $single = true ), 15, '...' );
				$link = get_permalink($news->ID);
			?>
            <li>
                <div class="left-side">
				<?php if(!empty($image_url)){ ?>
					<img src="<?php echo $image_url[0]; ?>" alt="<?php echo get_post_meta( get_post_thumbnail_id($news->ID), '_wp_attachment_image_alt', true ); ?>">
				<?php }else{ ?>
					<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/akcii.jpg">
				<?php } ?>
                </div>
                <div class="right-side">
                    <div class="description">
                        <p class="h3-title">
                            <?php echo $news->post_title; ?>
                        </p>

                        <p><?php echo $descr; ?></p>
						
                        <a class="get-more" href="<?php echo get_permalink($news->ID) ?>">Подробнее</a>
                    </div>
                </div>
            </li>
			<?php } ?>
			<?php wp_reset_postdata(); ?>
			<?php } ?>
        </ul>
		
		<?php
			$defaults = array(
				'type' => 'array',
				'prev_next'    => True,
				'prev_text'    => __('Назад'),
				'next_text'    => __('Далее'),
			);

			$pagination = paginate_links($defaults);
			
		if($pagination){
		?>

		<ul class="list-pages">
			<?php foreach ($pagination as $pag){ ?>
				<li><?php echo $pag; ?></li>
			<?php } ?>
		</ul>
		<?php } ?>

        <!-- end akcii-list -->

        </div>
    </main>
			
<?php get_footer(); ?>
