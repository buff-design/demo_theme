$(function() {

  // FAQのアコーディオン
  $('.c-accordion__faq-list-item').click(function() {
    var $answer = $(this).find('.c-accordion__answer');
    if($answer.hasClass('open')) {
      $answer.removeClass('open');
      // slideUpメソッドを用いて、$answerを隠してください
      $answer.slideUp();
      
      // 子要素のspanタグの中身をtextメソッドを用いて書き換えてください
      $(this).find('span').text('+');
      
    } else {
      $answer.addClass('open'); 
      // slideDownメソッドを用いて、$answerを表示してください
      $answer.slideDown();
      
      // 子要素のspanタグの中身をtextメソッドを用いて書き換えてください
      $(this).find('span').text('-');
    }
  });

  // Q&Aのアコーディオン
  $('.jc-accTrigger').on('click', function () {
    $(this).toggleClass('js-active').next('.jc-accContent').slideToggle(400);
    $(this).next('.jc-accContent').toggleClass('js-active');
    $(this).children('.jc-accTrigger_icon').toggleClass('js-active');
  });
	
});
  