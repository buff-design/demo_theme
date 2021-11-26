$(function() {

  /**
  * タブ切り替え
  **/
  $('.jc-tab a').on('click', function () {
    $(this).parent().addClass('js-active').siblings('.js-active').removeClass('js-active');
    // var jc_tabContent = $(this).attr('href');
    // $(jc_tabContent).addClass('js-show').siblings('.js-show').removeClass('js-show');
    var jc_tabContent02 = $(this).attr('href');
    $(jc_tabContent02).addClass('js-show').siblings('.js-show').removeClass('js-show');
    //追従タブの情報を取得
    var tabNaviCheckerDetail = $('#tabNaviDetail').hasClass('js-active');
    var tabNaviCheckerTable = $('#tabNaviTable').hasClass('js-active');
    //追従タブを切替
    if (tabNaviCheckerDetail) {
      $('#tabNaviDetail').removeClass('js-active');
      $('#tabNaviTable').addClass('js-active');
    } else if (tabNaviCheckerTable) {
      $('#tabNaviDetail').addClass('js-active');
      $('#tabNaviTable').removeClass('js-active');
    }
    return false;
  });

  /**
  * タブ切り替(タブ切替追従ボタン用)
  **/
  $('.jc-tab02 a').on('click', function () {
    $(this).parent().addClass('js-active').siblings('.js-active').removeClass('js-active');
    var jc_tabContent02 = $(this).attr('href');
    $(jc_tabContent02).addClass('js-show').siblings('.js-show').removeClass('js-show');
    //既存のタブの情報を取得
    var tabcheckerDetail = $('#tabDetail').hasClass('js-active');
    var tabcheckerTable = $('#tabTable').hasClass('js-active');
    //既存タブを切替
    if (tabcheckerDetail) {
      $('#tabDetail').removeClass('js-active');
      $('#tabTable').addClass('js-active');
    } else if (tabcheckerTable) {
      $('#tabDetail').addClass('js-active');
      $('#tabTable').removeClass('js-active');
    }
    return false;
  });

  /**
  * タブ切替追従ボタンの表示処理（ヘッダー固定）
  **/
  //追従ボタンが存在する場合
  if ($('#ji-tabNavi').length) {
    $(window).on('scroll', function () {
      //スクロール位置取得
      const scrollTop = $(window).scrollTop();
      //追従範囲のtop位置取得
      const containerTop = $('#ji-tabContainer').offset().top;
      //追従範囲のbottom位置取得
      const containerBottom = $('#ji-tabContainer').height() + $('#ji-tabContainer').offset().top;
      //追従範囲内で表示
      if (scrollTop > containerTop && scrollTop < containerBottom) {
        $('#ji-tabNavi').show();
      } else {
        $('#ji-tabNavi').hide();
      }

    });
  }

  //スクロール処理
  $('a[href^="#"]').click(function () {
    var speed = 400; // ミリ秒
    var href = $(this).attr("href");
    var target = $(href == "#" || href == "" ? "html" : href);
    var position = target.offset().top;
    $("body,html").animate({ scrollTop: position }, speed, "swing");
    return false;
  });
	
});
  