<?php
/*
Template name: Gallery page
Theme Name: Stars
Theme URI: http://mkvadrat.com/
Author: M2
Author URI: http://mkvadrat.com/
Description: Тема для сайта Stars
Version: 1.0
*/

get_header(); 
?>
	
	<main class="main-photo-in">

		<div class="owl-carousel owl-theme header-slider narrow-header-slider">
			<?php
				global $nggdb;
				$slider_id = getNextGallery('32', 'slider_for_all_pages');
				$slider_image = $nggdb->get_gallery($slider_id[0]["ngg_id"], 'sortorder', 'ASC', false, 0, 0);
				if($slider_image){
					foreach($slider_image as $image) {
				?>
					<div style="background-image: url('<?php echo nextgen_esc_url($image->imageURL); ?>');">
					</div>
				<?php
					}
				}
			?>
		</div>
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
		<?php echo get_post_meta( get_the_ID(), 'code_block_gallery_page', $single = true ); ?>
            
		<div class="text-block">
			
			<div class="text-block title-page">
				<h1 class="h1-title-center"><?php the_title(); ?></h1>
			</div>

			<?php echo get_post_meta( get_the_ID(), 'text_gallery_page', $single = true ); ?>
			
			<div class="block-galery">
	
					<ul class="galery-2">
						<?php
							global $nggdb;
							$gallery_id = getNextGallery(get_the_ID(), 'photo_gallery_page');
							$gallery_image = $nggdb->get_gallery($gallery_id[0]["ngg_id"], 'sortorder', 'ASC', false, 0, 0);
							if($gallery_image){
								foreach($gallery_image as $image) {
									if(!$image->exclude == 1){
							?>
								<li><a class="gallery" rel="group" href="<?php echo nextgen_esc_url($image->imageURL); ?>"><img src="<?php echo nextgen_esc_url($image->thumbnailURL); ?>" alt="<?php echo esc_attr($image->alttext); ?>" <?php echo $image->size; ?>></a></li>
							
							<?php
									}
								}
							}
						?>
					</ul>
	
					<p><a class="get-more back" href="javascript:void(0)">Назад</a></p>
			</div>
		</div>
		
    </main>

<script type="text/javascript">
jQuery(document).ready(function(){
	jQuery('.back').click(function(){
		parent.history.back();
		return false;
	});
});
</script>
	
<?php get_footer(); ?>