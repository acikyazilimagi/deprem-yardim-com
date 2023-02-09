// jQuery -----------------------------------------------------------
import jQuery from 'jquery'
window.jQuery = jQuery
window.$ = jQuery

// FANCYBOX
import { Fancybox } from "@fancyapps/ui";
window.Fancybox = Fancybox

Fancybox.defaults.dragToClose = 0;
/* Fancybox.defaults.click  = 'next'; */

Fancybox.bind("[data-fancybox='#popup-help-number']", {
    infinite: false,
    click: 'next',
    closeButton: 'inside',
    on: {
        shouldClose: function (fancybox, event) {
            $('.phone-fixed-btn').removeClass('active')
            $('.phone-field').addClass('loading')
        },
        init: function (fancybox, event) {
            setTimeout(() => {
                $('.phone-field').removeClass('loading')
            }, 450);
            let phoneField = $('.phone-field')
            let topField
            setTimeout(() => {
                topField = $('#popup-help-number .top-field').height()
            }, 150);
            setTimeout(() => {
                if (window.innerWidth > 1023) {
                    phoneField.height(window.innerHeight - 400)
                } else {
                    phoneField.height(window.innerHeight - topField - 80 - 100)
                }

                $(window).resize(function () {
                    let resizeWidth = window.innerWidth
                    let resizeHeight = window.innerHeight
                    setTimeout(() => {
                        topField = $('#popup-help-number .top-field').height()
                    }, 150);
                    if (window.innerWidth > 1023) {
                        phoneField.height(resizeHeight - 400)
                    } else {
                        phoneField.height(resizeHeight - topField - 80 - 100)
                    }
                });
            }, 200);
        }
    },
})


// Dynamic Height Change For Class --------------------------------------
if ($('.height-dynamic-viewport').length) $('.height-dynamic-viewport').innerHeight($(window).height());
$(window).resize(function () { if ($('.height-dynamic-viewport').length) $('.height-dynamic-viewport').innerHeight($(window).height()); });

if ($('.height-dynamic-viewport-offset-header').length) $('.height-dynamic-viewport-offset-header').height($(window).height() - $('header').height());
$(window).resize(function () { if ($('.height-dynamic-viewport-offset-header').length) $('.height-dynamic-viewport-offset-header').height($(window).height() - $('header').height()); });
