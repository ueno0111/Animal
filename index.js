//ナビゲーション
$(function(){
$('.hamburger').click(function() {
    $(this).toggleClass('active');
    if ($(this).hasClass('active')) {
        $('.globalMenuSp').addClass('active');
    } else {
        $('.globalMenuSp').removeClass('active');
    }
});

//リンクへ飛ぶ
$('nav a').click(function(){
    var id = $(this).attr('href');
    var position = $(id).offset().top;
    $('html, body').animate({
        'scrollTop': position 
    }, 500);
});
});

//フェードイン
$(function(){
    $(window).on('load scroll', function() {
    var winScroll = $(window).scrollTop();
    var winHeight = $(window).height();
    var scrollPos = winScroll + (winHeight * 0.8);

    $(".show").each(function() {
        if($(this).offset().top < scrollPos) {
    $(this).css({opacity: 1, transform: 'translate(0, 0)'});
    }
    });
});
});

//地図
var MyLatLng = new google.maps.LatLng(35.6811673, 139.7670516);
var Options = {
    zoom: 15,      //地図の縮尺値
    center: MyLatLng,    //地図の中心座標
    mapTypeId: 'roadmap'   //地図の種類
};
var map = new google.maps.Map(document.getElementById('map'), Options);

$(window).on('scroll', function() {
h = $('header').outerHeight();
$('header nav').toggleClass('fixed', $(this).scrollTop() > h)
});


// // 無効なフィールドがある場合にフォーム送信を無効にするスターターJavaScriptの例
// (function() {
// 'use strict';

// window.addEventListener('load', function() {
//     // Bootstrapカスタム検証スタイルを適用してすべてのフォームを取得
//     var forms = document.getElementsByClassName('needs-validation');

//     // ループして帰順を防ぐ
//     var validation = Array.prototype.filter.call(forms, function(form) {
//     form.addEventListener('submit', function(event) {
//         if (form.checkValidity() === false) {
//         event.preventDefault();
//         event.stopPropagation();
//         }
//         form.classList.add('was-validated');
//     }, false);
//     });
// }, false);
// })();

/*reservation.js*/
/*カレンダーの日にちを選択したら黄色に変える*/
function click_date(select_date){
    // 背景を透明にする
    $('[id^="date_"]').css("background-color", "");
    // 選択のセルだけ赤色に染める
    $("#date_" + select_date).css("background-color", "yellow");
}