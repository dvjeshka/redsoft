
var func = {
    'jsHeaderScroll':function () {
        $(window).on('scroll', function(){
            var scroll_top = $(window).scrollTop();
            if(scroll_top >= 100){
                $('header').addClass('active')
            }else{ $('header').removeClass('active');}
        })
    },
    'jsTwentytwenty': function () {
        if ($().twentytwenty) {
            $('.js-twentytwenty').twentytwenty({
                default_offset_pct: 0.5,
                before_label: 'January 2017', // Set a custom before label
                after_label: 'March 2017',
                no_overlay: true,
                //move_slider_on_hover: true,
                //move_with_handle_only: false,
                click_to_move: true
            });


            $('.js-twentytwenty').on('mousemove click',function(e){
                var right = $(this).width() / 100 * 75;
                var pl = $('.twentytwenty-handle').position().left;
                var val = pl *100 / $(this).width();
                $(this).parent().attr("data-status","center");
                if( val >= 75) {$(this).parent().attr("data-status","right");}

                if(val <= 25) {$(this).parent().attr("data-status","left")}

            })

        }
    },
    'jsFullPage':function () {
        $('.fullpage-wrap').fullpage({
            menu: '.fp-menu__list',
            onLeave: function(index, nextIndex, direction){
                var leavingSection = $(this);

                if(direction == 'down') {
                    $('html').addClass('is-header-hide')
                }
                else { $('html').removeClass('is-header-hide')}


            },
            afterRender: function(){
                func.jsTwentytwenty();
            }
            }
        );
    },
    'jsPopup': function(){
        if($().colorbox) {
            $('[data-colorbox]').each(function () {
                var s = {
                    previous: '<i class="trans"><svg xmlns="http://www.w3.org/2000/svg" width="19" height="18.031" viewBox="0 0 19 18.031"><path d="M152 480h17a1 1 0 0 1 0 2h-17a1 1 0 0 1 0-2zm7.269 9.716l-7.952-7.953a1.022 1.022 0 1 1 1.446-1.446l7.952 7.953a1.022 1.022 0 1 1-1.446 1.446zm0-17.431l-7.952 7.953a1.022 1.022 0 0 0 1.446 1.446l7.952-7.953a1.022 1.022 0 0 0-1.446-1.446z" transform="translate(-151 -472)"/></svg></i>',
                    next: '<i class="trans"><svg xmlns="http://www.w3.org/2000/svg" width="19" height="18.031" viewBox="0 0 19 18.031"><path d="M1751 478h17a1 1 0 0 1 0 2h-17a1 1 0 0 1 0-2zm9.73-7.717l7.95 7.953a1.02 1.02 0 0 1-1.44 1.445l-7.96-7.952a1.04 1.04 0 0 1 0-1.446 1.026 1.026 0 0 1 1.45 0zm0 17.43l7.95-7.952a1.02 1.02 0 0 0-1.44-1.446l-7.96 7.952a1.04 1.04 0 0 0 0 1.446 1.026 1.026 0 0 0 1.45 0z" transform="translate(-1750 -470)"/></svg></i>',
                    close: '&times;',
                    maxWidth: '100%',
                    maxHeight:'100%',
                    current:"{current} из {total}",
                    opacity: .6
                }, o = {}, s = $.extend(s, o);
                $.each($(this).data(), function (k, v) {
                    o[k] = v
                });
                s = $.extend(s, o);
                $(this).colorbox(s);
            });
        }
    },
    'jsPopupMessage': function(html){
        $.colorbox({
            opacity: .6,
            close: '&times;',
            maxWidth: '100%',
            html: '<div class="popup-message-wrap">'+html+'</div>',
            scrolling: false
        });
    },
    'jsSlider': function(){
        if($().slick){
            $('[data-slick]').slick({
                speed: 500,
                touchMove: false,
                touchThreshold: 100,
                prevArrow: '<i class="slick-arrow slick-prev trans"><svg xmlns="http://www.w3.org/2000/svg" width="19" height="18.031" viewBox="0 0 19 18.031"><path d="M152 480h17a1 1 0 0 1 0 2h-17a1 1 0 0 1 0-2zm7.269 9.716l-7.952-7.953a1.022 1.022 0 1 1 1.446-1.446l7.952 7.953a1.022 1.022 0 1 1-1.446 1.446zm0-17.431l-7.952 7.953a1.022 1.022 0 0 0 1.446 1.446l7.952-7.953a1.022 1.022 0 0 0-1.446-1.446z" transform="translate(-151 -472)"/></svg></i>',
                nextArrow: '<i class="slick-arrow slick-next trans"><svg xmlns="http://www.w3.org/2000/svg" width="19" height="18.031" viewBox="0 0 19 18.031"><path d="M1751 478h17a1 1 0 0 1 0 2h-17a1 1 0 0 1 0-2zm9.73-7.717l7.95 7.953a1.02 1.02 0 0 1-1.44 1.445l-7.96-7.952a1.04 1.04 0 0 1 0-1.446 1.026 1.026 0 0 1 1.45 0zm0 17.43l7.95-7.952a1.02 1.02 0 0 0-1.44-1.446l-7.96 7.952a1.04 1.04 0 0 0 0 1.446 1.026 1.026 0 0 0 1.45 0z" transform="translate(-1750 -470)"/></svg></i>'
            });
        }

    },
    'jsUI': function(){
           if($().scrollbar) {
            $('[data-scrollbar]').scrollbar();
        }
        if($().selectBox){
            $('select[data-select]').selectBox({
                mobile: true,
                menuSpeed: 'fast',
                menuTransition:'slide'
            });
        }
    },
    'jsCommon':function () {
        
        function sectionReviews() {
           var parent =  $('.js-section-reviews');
           parent.find('.icon-play').on('click',function () {
               parent.find('.section-reviews__iframe').attr('src',$(this).data('src'));
               parent.find('.section-reviews__video').addClass('section-reviews__video_active')
           });
            parent.find('.reviews-list__item').on('click',function () {
                parent.find('.section-reviews__video').removeClass('section-reviews__video_active');
                parent.find('.section-reviews__iframe').attr('src','');
                $(this).siblings().removeClass('reviews-list__item_active');
                $(this).addClass('reviews-list__item_active');

                parent.find('.section-reviews__video-name').text( $(this).find('.reviews-list__name').text());

                var data = $(this).data('youtube');

                parent.find('.icon-play').attr('data-src',data.src);
                parent.find('.section-reviews__image').css('background-image', 'url("' + $(this).find('.reviews-list__img-hide').attr('src') + '")');
            });
            parent.find('.reviews-list__item').eq(0).click();
        }
        sectionReviews();


    }

};

var app = {
    'init': function(){
        func.jsHeaderScroll();
        func.jsFullPage();
        func.jsPopup();
        func.jsUI();
        func.jsSlider();
        func.jsCommon();
    },
    'load': function(){
        $('.is-play-section-main').removeClass('is-play-section-main');
    },
    'resize': function(){

    }
};

$(function(){
    app.init();
    $(window).on('load',function(){app.load();});
    $(window).on('resize',function(){app.resize();});

});
