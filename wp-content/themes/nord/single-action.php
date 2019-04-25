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
	
	<main class="action-in">

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
			$get_cat_inf = get_the_terms( get_the_ID(), 'action-list' );
			$cat_id = $get_cat_inf[0]->term_id;
			$cat_code = get_option('action-list_'.$cat_id.'_code_block_category_action');
			echo $cat_code;
		?>
        <!-- end offers -->

		<div class="text-block title-page">
            <h1 class="h1-title-center"><?php the_title(); ?></h1>
		</div>

        <div class="sub-text-block">
            <?php echo get_post_meta( get_the_ID(), 'text_action_page', $single = true ); ?>
		</div>
    </main>
	
<?php get_footer(); ?>
