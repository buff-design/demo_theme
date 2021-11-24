$(function() {

  /**
  * タブ切り替え
  **/
   $('.jc-tab a').on('click', function () {
    $(this).parent().addClass('js-active').siblings('.js-active').removeClass('js-active');
    var jc_tabContent = $(this).attr('href');
    $(jc_tabContent).addClass('js-show').siblings('.js-show').removeClass('js-show');
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
	
});
  