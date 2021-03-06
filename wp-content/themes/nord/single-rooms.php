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
	<main class="main-price-in">
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
		
		<!-- start offers -->
		<?php
			$term = get_the_terms($post->ID, 'rooms-list');
			$cat_id = $term[0]->term_id;
			$cat_code = get_term_meta($cat_id, 'code_block_category_rooms');
			echo $cat_code[0];
		?>
        <!-- end offers -->
				
		<?php echo get_post_meta( get_the_ID(), 'first_text_block_single_page_rooms', $single = true ) ?>
		<hr>
		<div class="gallery-room">
            <div class="text-block">
                <div class="block-galery">
                    <p class="h3-title">Фотографии номера</p>
                    <p class="sub-text">Каждый номер с удобствами и балконом.</p>
                    <ul class="galery-2">
						<?php
							global $nggdb;
							$gallery_id = getNextGallery(get_the_ID(), 'gallery_single_page_rooms');
							$gallery_image = $nggdb->get_gallery($gallery_id[0]["ngg_id"], 'sortorder', 'ASC', false, 0, 0);
							if($gallery_image){
								foreach($gallery_image as $image) {
							?>
								<li><a class="gallery" rel="group" href="<?php echo nextgen_esc_url($image->imageURL); ?>"><img src="<?php echo nextgen_esc_url($image->thumbnailURL); ?>" alt="<?php echo esc_attr($image->alttext); ?>" <?php echo $image->size; ?>></a></li>
							<?php
								}
							}
						?>
                    </ul>
                </div>
            </div>
        </div>
			<hr>
		<?php echo get_post_meta( get_the_ID(), 'second_text_block_single_page_rooms', $single = true ) ?>
	
	</main>
	
<?php get_footer(); ?>
