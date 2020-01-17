require("./jquery");
require("./slick.min");

$(document).ready(function () {
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
});