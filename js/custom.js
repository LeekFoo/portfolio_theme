$(function() {
    // initialize
    AOS.init({
        offset: 300,
        duration: 1000,
        once: true,
    });

    $('.sidenav').sidenav();
    $('.collapsible').collapsible();
    $('.modal').modal({
        // endingTop: '5%'
    });

    // ページトップへ戻るボタン
    const pagetop = $('.scroll_button');
    pagetop.hide();
    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
            pagetop.fadeIn();
        } else {
            pagetop.fadeOut();
        }
    });
    pagetop.click(function () {
        $('body,html').animate({
            scrollTop: 0
        }, 500);
        return false;
    });

    // スクロールアニメーション
    $('a[href^="#"]').click(function() {
        const speed = 600;
        const href= $(this).attr("href");
        const target = $(href == "#" || href == "" ? 'html' : href);
        const offset = href == "#" ? 0 : $("nav").height();
        const position = target.offset().top - offset;
        $('body,html').animate({scrollTop:position}, speed, 'easeInCubic');
    });


    // 制作物モーダル
    $('.modal-trigger').click(function() {
        const targetName = '#' + $(this).attr('data-target');
        $(targetName + ' .modal_images').slick({
            dots:true,
            // asNavFor: targetName + ' .modal_thumbs',
            customPaging: function(slick,index) {
                var targetImage = slick.$slides.eq(index).find('img').attr('src');
                return '<img src=" ' + targetImage + ' "/>';
            }
        });
    });

    // ファーストビュー　ロゴ
    anime.timeline({
        easing: 'easeInOutSine',
    })
    .add({
        targets: '.line_draw .lines path',
        strokeDashoffset: [anime.setDashoffset, 0],
        // easing: 'easeInOutSine',
        duration: 1000,
        delay: function(el, i) { return i * 500 },
        direction: 'alternate',
        loop: false,
    })
    .add({
        targets: '.line_draw .lines path',
        duration: 500,
        fill: '#fff',
        begin: function() {
            $(".line_draw .lines path").css('stroke', 'transparent');
        }
    })
    .add({
        targets: '#top_title h5',
        duration: 500,
        opacity: 500,
        begin: function() {
            $("#top_title h5").css('visibility', 'visible');
        }
    });
});