var w = window,
        d = document,
        e = d.documentElement,
        g = d.getElementsByTagName('body')[0],
        widthviewport = w.innerWidth || e.clientWidth || g.clientWidth,
        heightviewport = w.innerHeight || e.clientHeight || g.clientHeight;
        
$(document).ready(function(){

    $('.menu-link').on('click',function(e){        
        if($(this).parent('li').hasClass('has-submenu')){
            e.preventDefault();
            if($(this).parent('li').find('.submenu').hasClass('active')){
                $(this).parent('li').find('.menu-link').removeClass('active');
                $(this).parent('li').find('.submenu').removeClass('active');
            }else{
                $(this).parent('li').find('.menu-link').addClass('active');
                $(this).parent('li').find('.submenu').addClass('active');
            }            
        }else{}
    });

    $('.tab-link li a').on('click',function(e){
        e.preventDefault();
        var idtab = $(this).attr('href');
        $('.tab-link li').removeClass('active');
        $(this).parent('li').addClass('active');
        $('.tab-content').hide();
        $(idtab).show();
    });
});

