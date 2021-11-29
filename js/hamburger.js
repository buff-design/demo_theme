$(function() {

  /**
  * ハンバーガーメニュー
  **/
  $('.btn-gNav').on("click", function(){
    $(this).toggleClass('open');
    $('#gNav').toggleClass('open');
  });

  // メニューをクリックされたら、非表示にする
  $('.gNav-menu li a').on("click", function(){
    //情報を取得
    var naviChecker = $('#gNav').hasClass('open');
    //切替
    if (naviChecker) {
      $('.btn-gNav').removeClass('open');
      $('#gNav').removeClass('open');
    }
  });
	
});