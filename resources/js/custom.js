// FORM HEIGHT FIX
let formTitle = $('.form-field .title-field')
let formContent = $('.form-field .form-content')

function formHeightFix() {
    if (window.innerWidth > 1440) {
        formContent.addClass('scrollbar')
        let remainHeight = window.innerHeight - formTitle.innerHeight()
        formContent.css({
            'max-height': remainHeight
        })
        $(window).resize(function () {
            let remainHeight = window.innerHeight - formTitle.innerHeight()
            formContent.css({
                'max-height': remainHeight
            })
        });
    } else {
        formContent.removeClass('scrollbar')

    }
}
formHeightFix()

$(window).resize(function () {
    formHeightFix()
});

// HOMEPAGE - CUSTOM TABLE BOX
// HEP KAPALI - TIKLAMA İLE AÇILMA
if ($('.custom-table.click-open').length) {
    let item = $('.custom-table.click-open .item')
    let innerHeight
    item.click(function () {
        if ($(this).hasClass('active')) {
            item.removeClass('active')
        } else {
            item.removeClass('active')
            $(this).addClass('active')
            innerHeight = $(this).find('.inner-content .info-box').innerHeight()
            $(this).find('.inner-content').height(innerHeight)
        }
    })
}

// FANCYBOX CLOSE
$('.phone-fixed-btn').click(function () {
    $(this).addClass('active')
});
$('.phone-fixed-close').click(function () {
    $('.phone-fixed-btn').removeClass('active')
});
