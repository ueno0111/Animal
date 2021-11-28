/*スマホメニュー*/
$(function(){  // ハンバーガーメニューのクリックイベント
  $('.toggle_btn').on('click', function() {/*メニューをクリックすると*/ 
    if (!$('#header').hasClass('open')) {/*#headerクラスを検索 idが見つからない場合 */
      $('#header').addClass('open');/* #headerにopenを付与*/
    } else {
      $('#header').removeClass('open');/*上以外なら#headerのopenを削除する*/
    }
  });

  // #maskのエリアをクリックした時にメニューを閉じる
  $('#mask').on('click', function() {
    $('#header').removeClass('open');
  });

  // リンクをクリックした時にメニューを閉じる
  $('#navi a').on('click', function() {
    $('#header').removeClass('open');
  });
}