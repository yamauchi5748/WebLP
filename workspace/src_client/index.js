require("./jquery");
require("./slick.min");
import io from 'socket.io-client';

const socket = io();
console.log(socket);

$(document).ready(function () {
    /* MVスライダー*/
    $('.js-slider.l-header__mv__list').slick({
        infinite: true, //スライドをループさせるか
        prevArrow: '<button type="button" class="l-header__mv__arrow -prev c-arrow"></button>', //前後ボタンの表示
        nextArrow: '<button type="button" class="l-header__mv__arrow -next c-arrow"></button>', //前後ボタンの表示
        slidesToShow: 1, //表示する要素の数
        autoplay: true, //自動切り替え
        autoplaySpeed: 5000, //自動切り替えにかかる時間
    });

    /* newsスライダー*/
    $('.js-slider.p-news__list').slick({
        infinite: true, //スライドをループさせるか
        prevArrow: '<button type="button" class="p-news__arrow -prev c-arrow"></button>', //前後ボタンの表示
        nextArrow: '<button type="button" class="p-news__arrow -next c-arrow"></button>', //前後ボタンの表示
        slidesToShow: 1, //表示する要素の数
        autoplay: true, //自動切り替え
        autoplaySpeed: 5000, //自動切り替えにかかる時間
    });
});