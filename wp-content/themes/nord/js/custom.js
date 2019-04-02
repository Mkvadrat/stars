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

//fix
var matched, browser;

jQuery.uaMatch = function( ua ) {
    ua = ua.toLowerCase();

    var match = /(chrome)[ \/]([\w.]+)/.exec( ua ) ||
        /(webkit)[ \/]([\w.]+)/.exec( ua ) ||
        /(opera)(?:.*version|)[ \/]([\w.]+)/.exec( ua ) ||
        /(msie) ([\w.]+)/.exec( ua ) ||
        ua.indexOf("compatible") < 0 && /(mozilla)(?:.*? rv:([\w.]+)|)/.exec( ua ) ||
        [];

    return {
        browser: match[ 1 ] || "",
        version: match[ 2 ] || "0"
    };
};

matched = jQuery.uaMatch( navigator.userAgent );
browser = {};

if ( matched.browser ) {
    browser[ matched.browser ] = true;
    browser.version = matched.version;
}

// Chrome is Webkit, but Webkit is also Safari.
if ( browser.chrome ) {
    browser.webkit = true;
} else if ( browser.webkit ) {
    browser.safari = true;
}

jQuery.browser = browser;