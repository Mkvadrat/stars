$(window).load(function() { 
    $('*[type="submit"]').attr('disabled','disabled'); // disable button after clicking on button
});

function clearFields(){
    $('.reset').val('');
    $('*[type="submit"]').attr('disabled', 'disabled');
}

var top_show = 150; // В каком положении полосы прокрутки начинать показ кнопки "Наверх"
var delay = 1000; // Задержка прокрутки
    
$(document).ready(function () {
    $('.callback *[type="checkbox"]')
    .on('change', function () {
        if ($(this).is(':checked')) {
            $('*[type="submit"]').attr('disabled', 'disabled');
        } else {
            $('*[type="submit"]').removeAttr('disabled');
        }
    });
    
    $('.lightform *[type="checkbox"]')
    .on('change', function () {
        if ($(this).is(':checked')) {
            $('*[type="submit"]').attr('disabled', 'disabled');
        } else {
            $('*[type="submit"]').removeAttr('disabled');
        }
    });
    
    $(window).scroll(function () { // При прокрутке попадаем в эту функцию
        /* В зависимости от положения полосы прокрукти и значения top_show, скрываем или открываем кнопку "Наверх" */
        if ($(this).scrollTop() > top_show) $('#top').fadeIn();
        else $('#top').fadeOut();
    });
    
    $('#top').click(function () { // При клике по кнопке "Наверх" попадаем в эту функцию
        /* Плавная прокрутка наверх */
        $('body, html').animate({
            scrollTop: 0
        }, delay);
    });
    
    $('.owl-carousel-half').owlCarousel({
        items : 1,
        loop : true,
        touchDrag : true,
        nav : true,
        navText : "",
        dots : false
    });
    
    $(function() {
        $('nav#menu').mmenu({
            extensions	: [ 'fx-menu-slide', 'shadow-page', 'shadow-panels', 'listview-large', 'pagedim-black' ]
        });
    });
    
    $('.header-slider').owlCarousel({
        items : 1,
        loop : true,
        touchDrag : true,
        nav : true,
        navText : "",
        autoplay: true,
        autoplayTimeout: 5000,
        dots : true
    });
    
    $("a.gallery").fancybox();
    
    $(".fancybox").fancybox();
    
    $("a.ancLinks").click(function () { 
        var elementClick = $(this).attr("href");
        var destination = $(elementClick).offset().top;
        $('html,body').animate( { scrollTop: destination }, 1100 );
        return false;
    });
    
    $('.slimmenu').slimmenu({
        resizeWidth: '2000',
        collapserTitle: '',
        animSpeed:'medium',
        indentChildren: true,
        childrenIndenter: '&raquo;'
    });
});