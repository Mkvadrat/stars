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
<footer>
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
    
    <div class="footer-block">
        <div class="max__wrap">

            <div class="contacts-block">
                <div class="contact-block-1-1">
                    <p>298000, Россия, Республика Крым, г. Судак, ул. Ленина, 81</p>
                    <p>Тел/факс: +7 (978) 082-60-18 (Viber, WhatsApp), Почта: <a href="mailto:star-sudak@yandex.ru">star-sudak@yandex.ru</a></p>
                </div>
                <div class="contact-block-1-2">
                    <p><a href="/private-policy">Политика конфиденциальности</a></p>
                    <p><a href="/karta-sayta/">Карта сайта</a></p>
                </div>
            </div>
            <div class="contacts-block-2">
                <p>Реквизиты:<br>ОГРН 1149102184142<br>ИНН/КПП 9108118205/910801001</p>
                <p><?php echo date("Y"); ?> © Пансионат "Звездный" (Крым, г. Судак)</p>
                <p class="make-in"><a href="http://mkvadrat.com/">Сайт разработан в <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/m2-logo.jpg" alt=""></a></p>
        </div>
    </div>
    
    <!-- end footer-block -->
</footer>
<?php wp_footer(); ?>

</body>
</html>