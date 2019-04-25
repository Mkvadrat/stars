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
					<div style="background-image: url('<?php echo nextgen_esc_url($image->imageURL); ?>')">
					</div>
				<?php
					}
				}
			?>
		</div>

        <!-- end top slider -->

        <!-- start offers -->

		<?php				   
			$term = get_queried_object();
			$cat_id = $term->term_id;
			$cat_code = get_term_meta($cat_id, 'code_block_category_action');
			echo $cat_code[0];
		?>

        <!-- end offers -->

        <div class="text-block title-page">
            <h1 class="h1-title-center">
				<?php				   
					$cat_title_id = $term->term_id;
					$cat_title = get_term_meta($cat_title_id, 'title_category_action');
					echo $cat_title[0];
				?>
			</h1>
        </div>

			<div class="text-block akcii-text">
        <!-- start akcii-list -->

		<?php
			$current_page = (get_query_var('paged')) ? get_query_var('paged') : 1;
			$args = array(
				'category' 	     => 'action-list',
				'post_type'      => 'action',
				'posts_per_page' => $GLOBALS['wp_query']->query_vars['posts_per_page'],
				'paged'          => $current_page
			);

			$action_list = get_posts( $args );
		?>

        <ul class="akcii-list">
			<?php if($action_list){ ?>
				<?php foreach($action_list as $action){ ?>
				<?php
				$image_url = wp_get_attachment_image_src( get_post_thumbnail_id($action->ID), 'full');
				$descr = wp_trim_words( get_post_meta( $action->ID, 'text_action_page', $single = true ), 15, '...' );
				$link = get_permalink($action->ID);
			?>
            <li>
                <div class="left-side">
				<?php if(!empty($image_url)){ ?>
					<img src="<?php echo $image_url[0]; ?>" alt="<?php echo get_post_meta( get_post_thumbnail_id($action->ID), '_wp_attachment_image_alt', true ); ?>">
				<?php }else{ ?>
					<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/akcii.jpg">
				<?php } ?>
                </div>
                <div class="right-side">
                    <div class="description">
                        <p class="h3-title">
                            <?php echo $action->post_title; ?>
                        </p>

                        <p><?php echo $descr; ?></p>
						
                        <a class="get-more" href="<?php echo get_permalink($action->ID) ?>">Подробнее</a>
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
