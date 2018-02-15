var w = window,
        d = document,
        e = d.documentElement,
        g = d.getElementsByTagName('body')[0],
        widthviewport = w.innerWidth || e.clientWidth || g.clientWidth,
        heightviewport = w.innerHeight || e.clientHeight || g.clientHeight;
        
$(document).ready(function(){

    // slider #section4
    $('#section3 .slide-bg').slick({
        asNavFor: '#section3 .slide-caption',
        autoplay: true,
        infinite: true,
        autoplaySpeed: 4000,
        arrows: false,
        fade: true,
        swipe: false,
        speed:1600    
    });
    $('#section3 .slide-caption').slick({
        arrows: false,
        swipe: false,
        speed:1600
    });

    // set .read-more__link
    var currentlink = $('#section3 .slide-bg .slick-current').attr('data-link');
    $('.read-more__link').attr('href', currentlink);

    $('#section3 .slide-bg').on('beforeChange', function(){
        $('.slide__nav li').removeClass('slick-current');
    });
    $('#section3 .slide-bg').on('afterChange', function(){
        var currentSlide = $('#section3 .slide-bg .slick-current').attr('data-slide');
        var currentlink = $('#section3 .slide-bg .slick-current').attr('data-link');
        // console.log(currentSlide);            
        $('.slide__nav a[data-slide='+currentSlide+']').parent().addClass('slick-current');
        $('.read-more__link').attr('href', currentlink);
        if( $('.slide__nav ul').hasClass('disabled') ){
            $('.slide__nav ul').removeClass('disabled');
        }
    });        
    $('.slide__nav a').click(function(e){
        e.preventDefault();
        $('.slide__nav ul').addClass('disabled');
        var dataSlide = $(this).attr('data-slide');
        $('#section3 .slide-bg, #section3 .slide-caption').slick('slickGoTo', dataSlide);        
    });

    if (widthviewport > 1024){
        $('.cd-section').each(function(){
            var heightSection = $(this).height();
            var gethSC = $('.section-cover', this).height();
            var gethS = $('.section', this).height();
            var setmidS = (gethSC - gethS)/2;

            // console.log(gethSC+' - '+gethS);
            if( heightSection > heightviewport){
                $(this).css('height', 'auto');            
            }else{
                $(this).css('height', heightviewport);
                $('.section', this).css("cssText","margin-top:"+setmidS+"px;");
            }
        });
    }


    if (widthviewport <= 1024){
        var scrollingElement = document.scrollingElement || document.documentElement;
        scrollingElement.scrollTop = 0;  
        $('.header').addClass('white');
        $('.header .logo img').attr('src', 'wp-content/themes/ccw2017/dist/images/logo-ccw.png');
        $(window).scroll(function(event) {
            console.log($(this).scrollTop() > ($('#section1').innerHeight()-50));
            if( $(this).scrollTop() > ($('#section1').innerHeight()-50) ){
                $('.header').removeClass('white');
                $('.header .logo img').attr('src', 'wp-content/themes/ccw2017/dist/images/logo-ccw-black.png');
            }else{
                $('.header').addClass('white');
                $('.header .logo img').attr('src', 'wp-content/themes/ccw2017/dist/images/logo-ccw.png');
            }
        });
    }

});


var a=0;
var b=0;
$(window).bind('mousewheel', function(event) {
    var pageNumber = (document.querySelector('.cd-section.visible').id).substr(-1);
        pageNumber = parseInt(pageNumber);
    if (event.originalEvent.wheelDelta >= 0) {
        a=a+1;
        console.log('Scroll up: '+a);
        console.log('Section: '+pageNumber);
        if( a >= 2 ){
            a = 0;
            pageNumber = pageNumber - 1;
            if( pageNumber == 2 ){
                $('#section2 .thumb').addClass('animate');                
            }
            else if( pageNumber == 4 ){
                $('#section4 .section-cover').addClass('animate');
            }
            else if( pageNumber == 5 ){
                $('#section5 .section-cover').addClass('animate');
            }
        }
    }
    else {
        b=b+1;
        console.log('Scroll down: '+b);
        console.log('Section: '+pageNumber);
        if( b >= 2 ){
            b = 0;
            pageNumber = pageNumber + 1;
            if( pageNumber == 2 ){
                $('#section2 .thumb').addClass('animate');                                
            }
            else if( pageNumber == 4 ){
                $('#section4 .section-cover').addClass('animate');
            }
            else if( pageNumber == 5 ){
                $('#section5 .section-cover').addClass('animate');
            }
        }
    }
});

$(document).on('keydown', function(event){
    var pageNumber = (document.querySelector('.cd-section.visible').id).substr(-1);
        pageNumber = parseInt(pageNumber);
    pageNumber = pageNumber + 1;
    if( pageNumber == 2 ){
        $('#section2 .thumb').addClass('animate');
    }
    else if( pageNumber == 4 ){
        $('#section4 .section-cover').addClass('animate');
    }
    else if( pageNumber == 5 ){
        $('#section5 .section-cover').addClass('animate');
    }
});