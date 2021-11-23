$(function() {
	
  // 「#ji-loginShow」要素に対するclickイベント
  $('#ji-loginShow').on('click', function () {
	  $('#ji-loginModal').fadeIn();
    $('.c-modal__inner-login-box').fadeIn();
  });

  // 「#ji-signUpShow」要素に対するclickイベント
  $('#ji-signUpShow').on('click', function () {
	  $('#ji-signupModal').fadeIn();
    $('.c-modal__inner-signup-box').fadeIn();
  });

  // 「.close-modal」要素にclickイベント
  $('.close-modal').on('click', function () {
	  $('#ji-loginModal').fadeOut();
    $('#ji-signupModal').fadeOut();
    $('.c-modal__inner-login-box').fadeOut();
    $('.c-modal__inner-signup-box').fadeOut();
  });

  // モーダルウィンドウ要素にclickイベント
  $('.c-modal__login-modal-wrapper').on('click', function () {
	  $('#ji-loginModal').fadeOut();
    $('#ji-signupModal').fadeOut();
    $('.c-modal__inner-login-box').fadeOut();
    $('.c-modal__inner-signup-box').fadeOut();
  });

  $('.c-modal__signup-modal-wrapper').on('click', function () {
	  $('#ji-loginModal').fadeOut();
    $('#ji-signupModal').fadeOut();
    $('.c-modal__inner-login-box').fadeOut();
    $('.c-modal__inner-signup-box').fadeOut();
  });

  // window要素にスクロールイベント
  $(window).on('scroll', function () {
    $('#ji-loginModal').fadeOut();
    $('#ji-signupModal').fadeOut();
  });
	
});
  