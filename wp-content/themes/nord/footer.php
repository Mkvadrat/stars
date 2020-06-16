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

    <nav id="menu">
        <?php
            if (has_nav_menu('mobile_menu')){
                wp_nav_menu( array(
                    'theme_location'  => 'mobile_menu',
                    'menu'            => '',
                    'container'       => false,
                    'container_class' => '',
                    'container_id'    => '',
                    'menu_class'      => '',
                    'menu_id'         => '',
                    'echo'            => true,
                    'fallback_cb'     => 'wp_page_menu',
                    'before'          => '',
                    'after'           => '',
                    'link_before'     => '',
                    'link_after'      => '',
                    'items_wrap'      => '<ul>%3$s</ul>',
                    'depth'           => 2,
                    'walker'          => new primary_menu(),
                ) );
            }
        ?>
    </nav>
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
                        <p>Тел/факс: +7 (978) 082-60-18 (Viber, WhatsApp), <br>
                            Почта: <a href="mailto:star-sudak@yandex.ru">star-sudak@yandex.ru</a></p>
                    </div>
                    <div class="contact-block-1-2">
                        <p><a href="/about-us/sertifikaty/">Документы</a></p>
                    </div>
                </div>
                <div class="contacts-block-2">
                    <p>Реквизиты:<br>ОГРН: 1149102184142<br>ИНН/КПП: 9108118205/910801001<br>
                    <a href="/about-us/sertifikaty/">Арендатор</a><br>ОГРН: 314910234300903<br>ИНН/КПП: 910800125200/910801001</p>
                    <p><?php echo date("Y"); ?> © Пансионат "Звездный" (Крым, г. Судак)</p>
                    <p class="make-in"><a href="http://mkvadrat.com/">Сайт разработан в <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/m2-logo.jpg" alt=""></a></p>
                </div>
            </div>
        </div>
        <!-- end footer-block -->
    </footer>
    <?php wp_footer(); ?>
</div>
</body>
</html>