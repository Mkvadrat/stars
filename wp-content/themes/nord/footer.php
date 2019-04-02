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

    <!-- start footer-form-block -->
   
    <div class="footer-form-block">
        <?php
            $callback_main_page = get_field('callback_main_page', 32);
           
            if($callback_main_page){
                echo do_shortcode('[contact-form-7 id=" ' . $callback_main_page . ' "]'); 
            }
        ?>
    </div>
				
    <!-- end footer-form-block -->

    <!-- start footer-block -->
    
    <footer class="footer-block">
    	<ul class="socials socials-mobile">
	        <li><a title="Карта" class="ancLinks" href="<?php echo getMeta('map_sl_main_page'); ?>"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/soc-1.png" alt=""></a></li>
	        <li><a title="Обратная связь" class="ancLinks" href="<?php echo getMeta('send_form_main_page'); ?>"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/soc-2.png" alt=""></a></li>
	        <li><a title="Facebook" href="<?php echo getMeta('fb_main_page'); ?>"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/soc-3.png" alt=""></a></li>
	        <li><a title="Вконтакте" href="<?php echo getMeta('vk_main_page'); ?>"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/soc-4.png" alt=""></a></li>
	        <li><a title="Одноклассники" href="<?php echo getMeta('ok_main_page'); ?>"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/soc-5.png" alt=""></a></li>
	        <li><a title="TripAdvisor" href="<?php echo getMeta('tripadvisor_main_page'); ?>"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/soc-7.png" alt=""></a></li>
	        <li><a title="Booking" href="<?php echo getMeta('booking_main_page'); ?>"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/soc-8.png" alt=""></a></li>
	        <li><a title="TopHotels" href="<?php echo getMeta('tophotels_main_page'); ?>"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/soc-9.png" alt=""></a></li>
	    </ul>

		<div class="contacts-block">
	    	<dl>
	    		<dt>E-mail:</dt>
	    		<dd><a href="mailto:reserv@hotelnord.ru">reserv@hotelnord.ru</a></dd>
	    		<dt>E-mail:</dt>
	    		<dd><a href="mailto:market@hotelnord.ru">market@hotelnord.ru</a></dd>
	    	</dl>
	    	<dl>
	    		<dt>Телефоны:</dt>
	    		<dd><a href="tel:+73656021455">+7 (36560) 214-55</a><a href="tel:+73656021462">+7 (36560) 214-62 (факс)</a><a href="tel:+79788052591">+7 (978) 805-25-91 (моб.)</a><a href="tel:+79788052591">+7 (978) 805 25 91 (Viber)</a></dd>
	    	</dl>
	    	<dl>
	    		<dt>Адрес:</dt>
	    		<dd><address>пгт. Партенит, г. Алушта, ул. Партенитская, 1-Б, Республика Крым, Россия, 298542</address></dd>
	    	</dl>
	    </div>

		<p class="map-cite"><a href="/karta-sayta/">Карта сайта</a></p>
        <p class="make-in"><a href="http://mkvadrat.com/">сайт разработан в <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/m2-logo.jpg" alt=""></a></p>
        <p class="tm">Отель "Норд" © 2018 все права защищены</p>
        <p class="tm-mobile"><span>Отель "Норд"</span>© 2018 все права защищены</p>
    </footer>
    
    <!-- end footer-block -->

<?php wp_footer(); ?>

</body>
</html>