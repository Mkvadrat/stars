<?php
/*
Template name: Main page
Theme Name: Stars
Theme URI: http://mkvadrat.com/
Author: M2
Author URI: http://mkvadrat.com/
Description: Тема для сайта Stars
Version: 1.0
*/

get_header();
?>

    <main class="main-index">

        <div class="block-header-slider">
            <div class="owl-carousel owl-theme header-slider">
                <?php
                global $nggdb;
                $slider_id = getNextGallery(get_the_ID(), 'slider_main_page');
                $slider_image = $nggdb->get_gallery($slider_id[0]["ngg_id"], 'sortorder', 'ASC', false, 0, 0);
                if ($slider_image) {
                    foreach ($slider_image as $image) {
                        ?>
                        <div style="background-image: url('<?php echo nextgen_esc_url($image->imageURL); ?>');">
                            <?php echo html_entity_decode($image->description); ?>
                        </div>
                        <?php
                    }
                }
                ?>
            </div>

            <!-- end top slider -->
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
            <!-- start offers -->

            <div class="offers">
                <?php echo get_post_meta(get_the_ID(), 'link_slider_main_page', $single = true) ?>

                <!--<div class="owl-carousel owl-theme owl-carousel-half offers-slider">
                    <?php echo get_post_meta(get_the_ID(), 'link_slider_mobile_main_page', $single = true) ?>
                </div>-->
            </div>
        </div>

        <!-- end offers -->

        <!-- start order-line -->

        <?php echo get_post_meta(get_the_ID(), 'code_block_main_page', $single = true); ?>

        <!-- end order-line -->

        <!-- start our-rooms -->

        <?php
        $args = array(
            'numberposts' => -1,
            'post_type' => 'rooms',
            'orderby' => 'date',
            'order' => 'ASC',
        );

        $rooms_list = get_posts($args);

        if ($rooms_list) {
            ?>
            <div class="our-rooms">
                <div class="max__wrap">

                    <h2 class="h3-title-center">Пансионат “Звездный” в Судаке: Номера</h2>

                    <p class="sub-title">Хотите в 2020 году отдохнуть в Крыму недорого? Выбирайте и бронируйте номера в пансионате прямо сейчас, цены на проживание и питание вас приятно порадуют!</p>
                    <ul>
                        <?php
                        foreach ($rooms_list as $list) {
                            $image_url = wp_get_attachment_image_src(get_post_thumbnail_id($list->ID), 'full');
                            $qnt_rooms = get_post_meta($list->ID, 'quantity_single_page_rooms', $single = true);
                            ?>
                            <li>

                                <?php if (!empty($image_url)) { ?>

                                    <a href="<?php echo get_permalink($list->ID) ?>"
                                       style="background: url('<?php echo $image_url[0]; ?>')">
                                        <figcaption>
                                            <p><strong><?php echo $list->post_title; ?></strong>
                                                <?php if ($qnt_rooms == '1'){ ?>
                                                <b><?php echo $qnt_rooms; ?>-о местный</b></p>
                                            <?php } else { ?>
                                                <b><?php echo $qnt_rooms; ?>-х местный</b></p>
                                            <?php } ?>
                                        </figcaption>
                                    </a>

                                <?php } else { ?>

                                    <a href="<?php echo get_permalink($list->ID) ?>"
                                       style="background: url('<?php echo esc_url(get_template_directory_uri()); ?>/images/room-3.png')">
                                        <figcaption>
                                            <p><strong><?php echo $list->post_title; ?></strong>
                                                <?php if ($qnt_rooms == '1'){ ?>
                                                <b><?php echo $qnt_rooms; ?>-но местный</b></p>
                                            <?php } else { ?>
                                                <b><?php echo $qnt_rooms; ?>-х местный</b></p>
                                            <?php } ?>
                                        </figcaption>
                                    </a>

                                <?php } ?>
                            </li>
                        <?php } ?>
                    </ul>

                    <!--<h2 class="h4-title h4-title-mobile">
                        Номера пансионата
                    </h2>
                    <a class="get-more" href="<?php echo get_tag_link(5); ?>">Подробнее</a>-->
                </div>
                <!-- end our-rooms -->
            </div>
        <?php } ?>


        <div class="seo__home">
            <div class="max__wrap">
                <h1 class="h1-title-center"><?php echo get_post_meta(get_the_ID(), 'title_main_page', $single = true); ?></h1>
                <div class="sub-title">Отдых в Судаке - это лучший ответ на вопрос: “Где отдохнуть недорого в Крыму?”. Наш пансионат подарит вам настоящий семейный отпуск 2020. Огромная территория, вкусное и полезное питание, медицинские услуги, отличная инфраструктура  нашего комплекса, удивительная анимация для детей  - все это гарантия лучшего  отдыха и прекрасных впечатлений.
                <p><strong>&nbsp;</strong></p>

    <p style="text-align:left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Не смотря ни на что, я искренне надеюсь и верю, в то, что мы обязательно вернемся в Звездный. К сожалению, этот год ударил по всем нам. И путевка, заказанная на июнь пролетает мимо, НО, все читающие должны знать, что Звездный - это один из немногих крымских пансионатов советских времен постройки, который проводит колоссальную работу по усовершенствованию номерного фонда, организации питания и облагораживанию территории. Поверьте, я знаю, о чем говорю! Это далеко не первый мой крымский пансионат времен советов. Здесь я вижу, что владельцы искренне стараются сделать наш с Вами быт комфортным и дать нам почувствовать себя именно на отдыхе, настоящем, ни о чем не задумываясь, кроме чудесной, уникальной крымской природы и бескрайнего моря. <br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Я хочу поблагодарить Пансионат Звездный за то, что он открыл для меня Судак, как город с глубокой историей, как отправную точку во многие потрясающие и доступные исторические места, но при этом современный и интересный, в качестве именно курортного. И я хочу поблагодарить всех работников данного пансионата, пожелать им сил и терпения в этот не легкий год, сохраните для нас свой пансионат, я верю, что мы с вами еще встретимся и вы перенесете эту неприятность стойко. А я в свою очередь буду надеяться, что мне и моей семье удастся вас все же посетить в 2020 году, если нет, то хотя бы в 2021. Удачи Вам и непременно сил пережить, то, что сейчас происходит. Мы Вас любим!</p>
                                    <p style="text-align:right"><strong>Ольга Проскурнина</strong></p>

                </div>
            </div>
            <?php echo get_post_meta(get_the_ID(), 'text_main_page', $single = true); ?>
        </div>
        <!-- start half-blocks -->

        <div class="block-for-half">
            <div class="left-side">
                <div class="owl-carousel owl-theme owl-carousel-half">
                    <?php
                    global $nggdb;
                    $wellness_center_id = getNextGallery(get_the_ID(), 'gallery_wellness_center_main_page');
                    $wellness_center_image = $nggdb->get_gallery($wellness_center_id[0]["ngg_id"], 'sortorder', 'ASC', false, 0, 0);
                    if ($wellness_center_image) {
                        foreach ($wellness_center_image as $image) {
                            ?>
                            <div><img src="<?php echo $image->imageURL; ?>" alt="<?php echo $image->alttext; ?>"></div>
                            <?php
                        }
                    }
                    ?>
                </div>
            </div>
            <div class="right-side side-description">
                <div class="description-half">
                    <?php echo get_post_meta(get_the_ID(), 'wellness_center_main_page', $single = true); ?>
                </div>
            </div>
        </div>

        <div class="block-for-half">
            <div class="left-side side-description">
                <div class="description-half">
                    <?php echo get_post_meta(get_the_ID(), 'cafe_main_page', $single = true); ?>
                </div>
            </div>
            <div class="right-side">
                <div class="owl-carousel owl-theme owl-carousel-half">
                    <?php
                    global $nggdb;
                    $cafe_id = getNextGallery(get_the_ID(), 'gallery_cafe_main_page');
                    $cafe_image = $nggdb->get_gallery($cafe_id[0]["ngg_id"], 'sortorder', 'ASC', false, 0, 0);
                    if ($cafe_image) {
                        foreach ($cafe_image as $image) {
                            ?>
                            <div><img src="<?php echo $image->imageURL; ?>" alt="<?php echo $image->alttext; ?>"></div>
                            <?php
                        }
                    }
                    ?>
                </div>
            </div>
        </div>

        <div class="block-for-half">
            <div class="left-side">
                <div class="owl-carousel owl-theme owl-carousel-half">
                    <?php
                    global $nggdb;
                    $cafe_id = getNextGallery(get_the_ID(), 'gallery_about_us_main_page');
                    $cafe_image = $nggdb->get_gallery($cafe_id[0]["ngg_id"], 'sortorder', 'ASC', false, 0, 0);
                    if ($cafe_image) {
                        foreach ($cafe_image as $image) {
                            ?>
                            <div><img src="<?php echo $image->imageURL; ?>" alt="<?php echo $image->alttext; ?>"></div>
                            <?php
                        }
                    }
                    ?>
                </div>
            </div>
            <div class="right-side side-description">
                <div class="description-half">
                    <?php echo get_post_meta(get_the_ID(), 'about_us_main_page', $single = true); ?>
                </div>
            </div>
        </div>
        
        <div class="block-for-half">
            <div class="left-side side-description">
                <div class="description-half">
                    <?php echo get_post_meta(get_the_ID(), 'medical_center_main_page', $single = true); ?>
                </div>
            </div>
            <div class="right-side">
                <div class="owl-carousel owl-theme owl-carousel-half">
                    <?php
                    global $nggdb;
                    $cafe_id = getNextGallery(get_the_ID(), 'gallery_medical_center_main_page');
                    $cafe_image = $nggdb->get_gallery($cafe_id[0]["ngg_id"], 'sortorder', 'ASC', false, 0, 0);
                    if ($cafe_image) {
                        foreach ($cafe_image as $image) {
                            ?>
                            <div><img src="<?php echo $image->imageURL; ?>" alt="<?php echo $image->alttext; ?>"></div>
                            <?php
                        }
                    }
                    ?>
                </div>
            </div>
        </div>

        <!-- end half-blocks -->

        <div class="home__galery-ch">
            <!-- start galery-title -->
            <p class="h3-title-center">Последние фотографии из галереи</p>
            <div class="sub-title">У нас есть на что посмотреть</div>
            <!-- end galery-title -->
            <!-- start galery -->
            <?php echo do_shortcode(get_post_meta(get_the_ID(), 'last_images_main_page', $single = true)); ?>
            <!-- end galery -->
            <!-- start see-all-photos-block -->
            <div class="see-all-photos-block">
                <a class="get-more ancLinks" href="<?php echo get_page_link(142); ?>">Смотреть все фотографии</a>
            </div>
            <!-- end see-all-photos-block -->
        </div>

        <!-- start reviews-block -->

        <div class="reviews-block">

            <p class="white-title">Отзывы наших гостей</p>

            <ul class="reviews-list">
                <?php
                $args = array(
                    'status' => 'approve',
                    'number' => '4',
                    'post_id' => 363,
                );

                $comments = get_comments($args);

                if (!empty($comments)) {
                    foreach ($comments as $comment) {
                        ?>
                        <li>
                            <p class="white-paragraph"><strong><?php echo $comment->comment_author; ?></strong>
                                <?php echo mb_substr(strip_tags($comment->comment_content), 0, 152); ?>
                                <strong><?php comment_date('d.m.y', $comment->comment_ID); ?></strong></p>
                        </li>
                    <?php } ?>
                <?php } ?>
            </ul>

            <!--<div class="owl-carousel owl-theme owl-carousel-half reviews-slider">
                <?php
            if (!empty($comments)) {
                foreach ($comments as $comment) {
                    ?>
                        <div>
                            <p class="white-paragraph">
                                <strong><?php echo $comment->comment_author; ?></strong><?php echo mb_substr(strip_tags($comment->comment_content), 0, 152); ?></strong>
                            </p>
                        </div>
                    <?php } ?>
                <?php } ?>
            </div>-->

            <p><a class="get-more ancLinks" href="<?php echo get_permalink(363); ?>">Читать все отзывы</a></p>
        </div>

        <!-- end reviews-block -->

        <!-- start contacts block -->

        <div class="block-for-half contacts-block">
            <div class="left-side">
                <div class="map" id="sevastopol" style="width:100%; height:100%"></div>
                
                <script type="text/javascript">
                    var sevastopolMap, sevastopolPlacemark, sevastopolcoords;
                
                    ymaps.ready(init);
                
                    function init() {
                
                        sevastopolMap = new ymaps.Map('sevastopol', {
                
                            center: [<?php echo get_post_meta(get_the_ID(), 'address_for_map_main_page', $single = true); ?>],
                
                            zoom: 17
                
                        });
                
                        var SearchControl = new ymaps.control.SearchControl({noPlacemark: true});
                
                        sevastopolMap.controls
                
                        //.add('zoomControl')
                
                            .add('typeSelector')
                
                        sevastopolcoords = [<?php echo get_post_meta(get_the_ID(), 'address_for_map_main_page', $single = true); ?>];
                
                        sevastopolPlacemark = new ymaps.Placemark([<?php echo get_post_meta(get_the_ID(), 'address_for_map_main_page', $single = true); ?>], {}, {
                            preset: "twirl#redIcon",
                            draggable: true
                        });
                
                        sevastopolMap.geoObjects.add(sevastopolPlacemark);
                        sevastopolMap.behaviors.disable('scrollZoom');
                    }
                </script>
            </div>
            <?php echo get_post_meta(get_the_ID(), 'contacts_main_page', $single = true) ?>
        </div>

        <!-- end contacts block -->
    </main>

<?php get_footer(); ?>