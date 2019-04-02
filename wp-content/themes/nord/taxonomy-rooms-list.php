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
	<main class="main-price">
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
		
		<!-- start offers -->

		<?php				   
			$term = get_queried_object();
			$cat_id = $term->term_id;
			$cat_code = get_option('rooms-list_'.$cat_id.'_code_block_category_rooms');
			echo $cat_code;
		?>

        <!-- end offers -->
			
		<?php				   
			$term = get_queried_object();
			$cat_id = $term->term_id;
			$cat_description = get_option('rooms-list_'.$cat_id.'_text_mobile_category_rooms');
			echo $cat_description;
		?>
		
		<?php				   
			$term = get_queried_object();
			$cat_id = $term->term_id;
			$cat_description = get_option('rooms-list_'.$cat_id.'_text_category_rooms');
			echo $cat_description;
		?>
		
		<?php				   
			$term = get_queried_object();
			$cat_id = $term->term_id;
			$cat_description = get_option('rooms-list_'.$cat_id.'_text_general_category_rooms');
			echo $cat_description;
		?>
	</main>
	
<?php get_footer(); ?>
