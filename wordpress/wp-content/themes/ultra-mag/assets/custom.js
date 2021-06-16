/** 
 * Ultra Mag Custon Scripts
 */

(function($) {
    'use strict';
    var win = $(window);

    //Sticky Header
    if (ultra_params.sticky_menu == 'show') {
        win.scroll(function() {
            var sticky = $('.ultra-custom-header'),
                scroll = win.scrollTop();

            if (scroll >= 100) {
                sticky.addClass('fixed');
            } else {
                sticky.removeClass('fixed');
            }
        });
    }

    //Dark mode switcher
    if($('.ultra-mode-switcher').length){
        $('.ultra-mode-switcher input').on('change keypress',function(){
            
            if (event.which === 13) {
                $(this).prop('checked', !$(this).prop('checked'));
            }

            if($(this).is(':checked')){
                $('body').addClass('ultra-dark-mode');
                $.cookie(
                    'ultra-dark-mode',
                    '1',
                    {
                        expires: 1,
                        path: '/'
                    }
                );
            }else{
                $('body').removeClass('ultra-dark-mode');
                $.cookie(
                    'ultra-dark-mode',
                    '0',
                    {
                        expires: 1,
                        path: '/'
                    }
                );
            }
        });
    }
	

})(jQuery);    