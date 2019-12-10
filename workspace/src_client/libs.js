$(function () {
    /* アンカー
    ------------------------------*/
    // ロールオーバー
    $('.imgover').not('[src*="' + '_ov' + '."]').hover(function () {
        $(this).stop().attr('src', $(this).attr('src').replace(/\.(gif|jpe?g|png)$/, '_ov.$1'));
    }, function () {
        $(this).stop().attr('src', $(this).attr('src').replace(/_ov\.(gif|jpe?g|png)$/, '.$1'));
    });

    // ナビゲーションのカレント表示
    if ($('#pageID').length == 1) {
        var ides = $('#pageID').val().split(',');
        for (var idx = 0; idx < ides.length; idx++) {
            var id = '#' + ides[idx];
            if ($(id).length == 1) {
                $(id).removeClass('imgover').attr('src', $(id).attr('src').replace(/\.(gif|jpe?g|png)$/, '_ov.$1'));
            }
        }
    }

    // ページ内スクロールリンク
    $('a[href*=\\#]').click(function () {
        if ($(this.hash).length > 0) {
            $(this.hash).each(function () {
                $('html, body').animate({ scrollTop: $(this).offset().top }, 500);
            });
        }
    });

    // 別ページからの遷移スクロールリンク
    if (location.hash) {
        var anchor = $(location.hash).offset().top;
        $('html, body').scrollTop(0).animate({ scrollTop: anchor }, 500);
    }

    /* bxSlider
    ------------------------------*/
    /*
        // 同一ページに単一設置
        var slider = $('#slider').bxSlider({
            auto: true,
            onSlideAfter: function() {
                slider.startAuto();
            }
        });
    
        // 同一ページに複数設置
        var slider = $('.slider');
        var sliders = [];
        slider.each(function(i) {
            sliders.push($(this).bxSlider({
                auto: true,
                onSlideAfter: function() {
                    sliders[i].startAuto();
                }
            }));
        });
    */

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