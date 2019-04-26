<?php
/*
Template name: Booking page
Theme Name: Stars
Theme URI: http://mkvadrat.com/
Author: M2
Author URI: http://mkvadrat.com/
Description: Тема для сайта Stars
Version: 1.0
*/

get_header();
?>

    <main class="main-booking">

        <div class="owl-carousel owl-theme header-slider narrow-header-slider">
            <?php
            global $nggdb;
            $slider_id = getNextGallery('32', 'slider_for_all_pages');
            $slider_image = $nggdb->get_gallery($slider_id[0]["ngg_id"], 'sortorder', 'ASC', false, 0, 0);
            if ($slider_image) {
                foreach ($slider_image as $image) {
                    ?>
                    <div style="background-image: url('<?php echo nextgen_esc_url($image->imageURL); ?>')">
                    </div>
                    <?php
                }
            }
            ?>
        </div>

        <?php echo get_post_meta(get_the_ID(), 'code_block_booking_page', $single = true); ?>

        <?php echo get_post_meta(get_the_ID(), 'variable_booking_booking_page', $single = true); ?>

        <div class="text-block">
            <?php echo get_post_meta(get_the_ID(), 'title_form_booking_page', $single = true); ?>
        </div>
        <div class="paragraph-button"><a href="#booking-form-online" class="get-more ancLinks">ОНЛАЙН БРОНИРОВАНИЕ</a>
            <a href="#easy-reservation" class="get-more fancybox">ЛЕГКОЕ БРОНИРОВАНИЕ</a></div>
        <hr>
        <div class="text-block">
            <div id="booking-form-online">
                <p id="tl-anchor"><strong>Вы наш постоянный гость?<br>Мы очень рады видеть наших друзей и специально для
                        вас мы создали: Легкое бронирование!</strong></p>
                <p>Как всегда – при бронировании через наш сайт – вы получаете самые выгодные цены!</p>
                <p class="last-child">С помощью приведенной ниже формы вы можете забронировать наши номера в режиме
                    онлайн и получить гарантированную бронь. Для оплаты вы можете использовать кредитную карту,
                    электронные деньги, безналичный расчет либо ОПЛАТИТЬ ЗАКАЗ НА МЕСТЕ.</p>
                <!-- start booking form 2.0 -->
                <div id="tl-booking-form"></div>
            </div>

            <?php echo get_post_meta(get_the_ID(), 'additional_text_booking_page', $single = true); ?>
        </div>

    </main>

    <div class="hidden">
        <div class="easy-reservation" id="easy-reservation">
            <div class="modal-form lightform">
                <?php
                $light_booking_form_booking_page = get_field('light_booking_form_booking_page', 373);

                if ($light_booking_form_booking_page) {
                    echo do_shortcode('[contact-form-7 id=" ' . $light_booking_form_booking_page . ' "]');
                }
                ?>
            </div>
        </div>
    </div>

<?php get_footer(); ?>