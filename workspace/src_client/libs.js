require("./jquery");
require("./slick.min");

$(function () {

    /* MVスライダー*/
    $('.js-slider.l-header__mv__list').slick({
        infinite: true, //スライドをループさせるか
        autoplay: true, //自動切り替え
        autoplaySpeed: 3000, //自動切り替えにかかる時間
        speed: 750, //アニメーション時間
        arrows: false,  //矢印非表示
        dots: true, //ドットボタン表示
        slidesToShow: 1, //表示する要素の数
        fade: true, //フェードアニメーション 
    });

    /* ハンバーガーボタンクリック時 */
    $('.l-header__humburger').click(function () {
        if ($(this).hasClass('-open')) {
            $(this).removeClass('-open');
            $('.l-header__container').removeClass('-open');
            $('.l-overlay').css('display', 'none');
        }
        else {
            $(this).addClass('-open');
            $('.l-header__container').addClass('-open');
            $('.l-overlay').css('display', 'block');
        }
    });

    /* 背景カバークリック時 */
    $('.l-overlay').click(function () {
        $('.l-header__humburger').removeClass('-open');
        $('.l-header__container').removeClass('-open');
        $(this).css('display', 'none');
    });

    /* メニューリンククリック時 */
    $('.js-header__container__link').click(function () {
        $('.l-header__humburger').removeClass('-open');
        $('.l-header__container').removeClass('-open');
        $('.l-overlay').css('display', 'none');
    });


    // function setClassWithScroll(attr_name) {
    //     $(window).scroll(function () {
    //         $(attr_name).each(function () {
    //             var target = $(this).offset().top;
    //             var scroll = $(window).scrollTop();
    //             var windowHeight = $(window).height();
    //             if (scroll > target - windowHeight + windowHeight / 5) {
    //                 $(this).addClass("-move");
    //             }
    //         });
    //     });
    // }

    /* アンカー
    ------------------------------*/

    // ページ内スクロールリンク
    $('a[href*=\\#]').click(function () {
        if ($(this.hash).length > 0) {
            $(this.hash).each(function () {
                var top = $(this).offset().top - 70;
                $('html, body').animate({ scrollTop: top }, 750);
            });
        }
    });

    // 別ページからの遷移スクロールリンク
    if (location.hash) {
        var anchor = $(location.hash).offset().top;
        $('html, body').scrollTop(0).animate({ scrollTop: anchor }, 500);
    }

    /* Functionの実行
    ------------------------------*/
    responsive();
    imageWidth();
    linkTel();
});

/* リサイズ
------------------------------*/
var timer = false;
$(window).resize(function () {
    if (timer !== false) { clearTimeout(timer); }
    timer = setTimeout(function () {
        responsive();
        imageWidth();
        linkTel();
    }, 10);
});

/* Function
------------------------------*/
// ブレイクポイント
var modeSmartphone = false;
function responsive() {
    var widthCurrent = window.innerWidth ? window.innerWidth : $(window).width();
    var widthSmartphone = 768;

    if (widthCurrent < widthSmartphone) {
        modeSmartphone = true;
    } else {
        modeSmartphone = false;
    }
}

// PC・SP：画像幅切り替え
function imageWidth() {
    $('[data-width]').each(function () {
        var dataWidth = $(this).data('width');

        if (modeSmartphone) {
            $(this).css('max-width', dataWidth + 'px');
        } else {
            $(this).removeAttr('style');
        }
    });
}

// SP：電話番号にリンク付与
function linkTel() {
    $('[data-tel]').each(function () {
        var dataTel = $(this).data('tel');

        if (modeSmartphone) {
            $(this).attr('href', 'tel:' + dataTel);
        } else {
            $(this).removeAttr('href');
        }
    });
}
