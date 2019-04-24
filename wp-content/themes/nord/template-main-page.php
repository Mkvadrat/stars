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
                        <div>
                            <img src="<?php echo nextgen_esc_url($image->imageURL); ?>"
                                 alt="<?php echo esc_attr($image->alttext); ?>">
                            <p class="title-slider"><span><?php echo esc_attr($image->alttext); ?></span></p>
                        </div>
                        <?php
                    }
                }
                ?>
            </div>

            <!-- end top slider -->

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

                    <h2 class="h3-title-center">Номера пансионата</h2>

                    <p class="sub-title">К вашим услугам мы предлагаем уютные и светлые номера на любой вкус и для
                        любого бюджета.</p>
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
                <div class="sub-title">К вашим услугам мы предлагаем уютные и светлые номера на любой вкус и для любого
                    бюджета.
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
                <!--<script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A1ebe5bd35d8e6c7e7e3cdfa0c99df1a5b054b91c37b3e718a6812c32b58fb17a&amp;width=100%25&amp;height=600&amp;lang=ru_RU&amp;scroll=false"></script>-->
                <div class="map" id="maps" style="width:100%; height:600px"></div>
                <script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU&load=package.full"
                        type="text/javascript"></script>
                <script type="text/javascript">
                    var myMap;
                    ymaps.ready(init);

                    function init() {
                        ymaps.geocode('<?php echo get_post_meta(get_the_ID(), 'address_for_map_main_page', $single = true); ?>', {
                            results: 1
                        }).then
                        (
                            function (res) {
                                var firstGeoObject = res.geoObjects.get(0),
                                    myMap = new ymaps.Map
                                    ("maps",
                                        {
                                            center: firstGeoObject.geometry.getCoordinates(),
                                            zoom: 15,
                                            controls: ["zoomControl", "fullscreenControl"]
                                        }
                                    );
                                var myPlacemark = new ymaps.Placemark
                                (
                                    firstGeoObject.geometry.getCoordinates(),
                                    {
                                        iconContent: ''
                                    },
                                    {
                                        preset: 'twirl#blueStretchyIcon'
                                    }
                                );
                                myMap.geoObjects.add(myPlacemark);
                                myMap.controls.add('typeSelector');
                                myMap.behaviors.disable('scrollZoom');
                            },
                            function (err) {
                                alert(err.message);
                            }
                        );
                    }
                </script>
            </div>
            <?php echo get_post_meta(get_the_ID(), 'contacts_main_page', $single = true) ?>
        </div>

        <!-- end contacts block -->
    </main>

<?php get_footer(); ?>