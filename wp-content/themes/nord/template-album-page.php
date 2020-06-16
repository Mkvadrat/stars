<?php
/*
Template name: Album page
Theme Name: Stars
Theme URI: http://mkvadrat.com/
Author: M2
Author URI: http://mkvadrat.com/
Description: Тема для сайта Stars
Version: 1.0
*/

get_header(); 
?>
    <main class="main-photo">
		<?php echo get_post_meta( get_the_ID(), 'code_block_album_page', $single = true ); ?>

		<?php echo do_shortcode(get_post_meta( get_the_ID(), 'text_album_page', $single = true )); ?>
    </main>
	
	
<?php get_footer(); ?>