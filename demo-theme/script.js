$(document).ready(function(){
            $('.toggle').click(function(e){
                e.preventDefault;
                $('.mob-nav').stop().slideToggle();
            });

            $('.desk-nav a').click(function(){
                $(this).next('span').toggleClass('triangle-up').toggleClass('down-arrow').next('ul').stop().slideToggle();
            });
            
            $('.triangle-up').click(function(){
                $(this).toggleClass('.triangle-up').addClass('.down-arrow');
            });
            
            $('.current-menu-item').addClass('relative').append('<span class="triangle-here"></span>');
            
            /*
             $(window).scroll(function(){
                    $('.img-banner').each(function(i){
                       var bottom_of_object = $(this).offset().top + $(this).outerHeight();
                        var bottom_of_window = $(window).scrollTop() + $(window).height();
                        
                        var top_of_object = $(this).offset().bottom + $(this).outerHeight();
                        var top_of_window = $(window).scrollTop() + $(window).height();
                        
                        if (bottom_of_window > bottom_of_object) {
                            $(this).animate({'opacity':'0'}, 500);
                        } else if (top_of_window < top_of_object) {
                            $(this).animate({'opacity':'1'}, 500);
                        }
                    });
                }); 
            // windows scroll II
            $(window).scroll(function(){
                if($(window).scrollTop()<339){
                    $('.img-banner').stop().fadeIn('slow');
                } else {
                    $('.img-banner').fadeOut('slow');
                }
                }
            ); */
            /*
            var item = $(this).hasClass('current-menu-item');
            
            $('.menu-item-has-children.current-menu-item').addClass('relative').append('<span class="triangle-here-skills"></span>'); 
            */
            
            /*
        Wordpress allows for conditionals to find out which page you're on:
        is_page()
        is_page('About') will return true if the Page has a post_title of About
        */

        });